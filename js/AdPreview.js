/// <reference path="jquery-1.5.1.js" />
/// <reference path="jquery.hoverIntent.min.js"/>
/// <reference path="jquery.qtip-1.0.0-rc3-dm-min.js" />
;$(document).ready(function () {
    if ($('input:hidden[id*=hdnIsAdvertisementPreviewEnabled]').val() === 'True') {
        var previewTargets = $('.positionNameTd'),
            adIdHiddenField = $('input:hidden[id*=hdnPreviewedAdID]');
        previewTargets.hoverIntent({
            over: function () {
                $(this).trigger('show-qtip');
            },
            timeout: 100,
            out: function () { },
            interval: 500
        });

        previewTargets.each(function () {
            $(this).qtip({
                content: {
                    text: $('#adPreviewLoading'),
                    url: '/IsIlanlari/IlanOnizleme.aspx?AdID=' + $(this).parent().attr('data-ad-id'),
                    title: {
                        text: $(this).children().first().html(),
                        button: ''
                    }
                },
                style: {
                    name: 'light',
                    tip: 'leftBottom',
                    width: 400
                },
                position: {
                    corner: {
                        target: 'rightCenter'
                    },
                    adjust: {
                        screen: true,
                        x: -30,
                        y: 18
                    }
                },
                show: {
                    when: 'show-qtip',
                    solo: true
                },
                hide: {
                    fixed: true,
                    delay: 400
                },
                api: {
                    onContentUpdate: function () {
                        var target = $(this.elements.target),
                            quickApply = target.siblings().filter('.listViewImgIndex').find('input').filter(':enabled'),
                            titleButton = $(this.elements.button),
                            tooltip = $(this.elements.contentWrapper),
                            adUrl = $('a', target).attr('href'),
                            twitterShare = $('.twitter-share-button', tooltip);

                        $('.popupContinue > a', tooltip).attr('href', adUrl);
                        twitterShare.attr('href', 'http://twitter.com/share?url=' + adUrl);
                        window.previewedAdUrl = adUrl; // to be read for facebook share

                        if (quickApply.length) {
                            titleButton.html('<img src="/Assets/Images/i_quickapply_white.png" />');
                            titleButton.click(function () {
                                quickApply.trigger('click');
                            });
                        }

                        adIdHiddenField.val(target.parent().attr('data-ad-id'));
                    },
                    onShow: function () {
                        previewTargets.removeClass('adPreviewSelected');
                        $(this.elements.target).addClass('adPreviewSelected');
                    },
                    onHide: function () {
                        previewTargets.removeClass('adPreviewSelected');
                    }
                }
            });
        });
    }
});
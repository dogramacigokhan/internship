(function ($) {
    $.fn.extend({
        ybrPinnable: function (options) {
            var defaults = {
                isSupported: $.browser.msie && parseInt($.browser.version, 10) > 8
            };
            options = $.extend(defaults, options);
            initPinnable(options);

            return this;
        }
    });

    function initPinnable(options) {
        if (options.isSupported) {
            $.getScript('/Assets/Script/yepnope.js', function () {
                /*alert("yepnope loaded");*/
                if (typeof window['yepnope'] !== 'undefined') {
                    /*alert("yepnope exists");*/
                    yepnope.injectCss("/Assets/Css/jquery.pinify.css", function () {
                        /*alert("css injected");*/
                        $.getScript("/Assets/Script/jquery.pinify.js", function () {

                            $('.pinify-topHat-closePin').click(function () {
                                $('.pinify-topHat-container').slideUp('slow');
                                $(this).slideUp('slow');
                            });

                            $('head').pinify({
                                navColor: 'Blue',
                                tasks: [
                                    {
                                        'name': 'Benim Sayfam',
                                        'action': '/BasvuruAraclari/Default.aspx',
                                        'target': 'self'
                                    },
                                    {
                                        'name': 'Özgeçmişlerim',
                                        'action': '/BasvuruAraclari/Ozgecmis/OzgecmisListesi.aspx',
                                        'target': 'self'
                                    },
                                    {
                                        'name': 'Başvurularım',
                                        'action': '/BasvuruAraclari/Basvurularim/Basvurularim.aspx',
                                        'target': 'self'
                                    },
                                    {
                                        'name': 'İş Arama',
                                        'action': '/IsIlanlari/Ilanlar.aspx?pm=DetayliAra',
                                        'target': 'self'
                                    },
                                    {
                                        'name': 'Tüm İş İlanları',
                                        'action': '/IsIlanlari/Ilanlar.aspx',
                                        'target': 'self'
                                    },
                                    {
                                        'name': 'Mesajlarım',
                                        'action': '/BasvuruAraclari/Mesajlarim/GelenMesajlar.aspx',
                                        'target': 'self'
                                    }
                                ]
                            });

                            if (!$.pinify.isPinned()) {

                                $('#site-logo').pinify('enablePinning');

                                $('#headPinned').pinify('pinTeaser', {
                                    type: 'brandedTopHat',
                                    pinText: 'Siteyi daha verimli kullanmak için tıkla ve sürükle',
                                    secondaryText: 'İkonu görev çubuğuna sürükle',
                                    style: {
                                        backgroundImage: 'Images/branding_bar_custom_bg.png',
                                        closeButtonImage: 'Images/toolbar-bg.png'
                                    }
                                });
                            }

                            if ($.pinify.isPinned()) {

                                $.pinify.createThumbbarButtons(
                                    {
                                        buttons: []
                                    });

                                setInterval(function () {
                                    $.ajax({
                                        type: 'POST',
                                        url: '/Services/Wm.aspx/GetUnreadNotificationCount',
                                        contentType: 'application/json; charset=utf-8',
                                        dataType: 'json',
                                        success: function (result) {
                                            //alert("test msg");
                                            $.pinify.clearOverlay();
                                            var obj = $.parseJSON(result.d);
                                            if (obj.count > 0) {
                                                $.pinify.flashTaskbar();
                                                $.pinify.addOverlay({
                                                    title: 'Okunmamış ' + result.d.count + ' adet uyarınız/mesajınız var',
                                                    icon: obj.type == 'N' ? 'Assets/Images/notification.ico' : 'Assets/Images/new-message.ico'
                                                });
                                            }
                                        },
                                        error: function () {
                                            /*alert('Talep esnasında sorun oluştu. Yeniden deneyin');*/
                                        }
                                    });
                                }, 30000);
                            }
                        });
                    });
                }
            });
        }
    };

})(jQuery);
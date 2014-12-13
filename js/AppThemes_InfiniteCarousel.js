$.fn.infiniteCarousel = function (autoNumbers) {
    function repeat(str, num) {
        return new Array(num + 1).join(str);
    }
    return this.each(function() {
        var $wrapper = $('> div', this).css('overflow', 'hidden'),
                    $slider = $wrapper.find('> ul'),
                    $items = $slider.find('> li'),
                    $single = $items.filter(':first'),
                    singleWidth = $single.outerWidth(),
                    visible = Math.ceil($wrapper.innerWidth() / singleWidth), // note: doesn't include padding or border
                    currentPage = 1,
                    pages = Math.ceil($items.length / visible),
                    pause = false,
                    timeOut = parseInt($(this).attr('timeOut')),
                    auto = $(this).attr('auto') == 'true',
                    $ie6 = ($.browser.msie && $.browser.version == 6);

        // 1. Pad so that 'visible' number will always be seen, otherwise create empty items
        if (($items.length % visible) != 0) {
            $slider.append(repeat('<li class="empty" />', visible - ($items.length % visible)));
            $items = $slider.find('> li');
        }

        // 2. Top and tail the list with 'visible' number of items, top has the last section, and tail has the first
        $items.filter(':first').before($items.slice(-visible).clone().addClass('cloned'));
        $items.filter(':last').after($items.slice(0, visible).clone().addClass('cloned'));
        $items = $slider.find('> li'); // reselect

        // 3. Set the left position to the first 'real' item
        $wrapper.scrollLeft(singleWidth * visible);

        // 4. paging function
        function gotoPage(page) {
            toggle($gotoButtons.eq(pages - currentPage));

            var dir = page < currentPage ? -1 : 1,
                        n = Math.abs(currentPage - page),
                        left = singleWidth * dir * visible * n;

            $wrapper.filter(':not(:animated)').animate({
                scrollLeft: '+=' + left
            },
                    500, function() {
                        if (page == 0) {
                            $wrapper.scrollLeft(singleWidth * visible * pages);
                            page = pages;
                        } else if (page > pages) {
                            $wrapper.scrollLeft(singleWidth * visible);
                            // reset back to start position
                            page = 1;
                        }

                        currentPage = page;
                        toggle($gotoButtons.eq(pages - currentPage));
                    });

            return false;
        }

        function toggle($link) {
            var oldClass = $link.attr('class');
            var newClass = oldClass.indexOf('Active') > 0 ? oldClass.replace('Active', '') : oldClass + 'Active';
            $link.removeClass(oldClass);
            $link.addClass(newClass);
        }

        // 5. Timer
        var timer = null;
        function setTimer() {
            if (auto && (timeOut > 0)) {
                killTimer();
                timer = setInterval(timerTick, timeOut);
            }
        }
        function killTimer() {
            if (timer != null) {
                clearInterval(timer);
            }
        }
        function timerTick() {
            gotoPage(currentPage + 1);
        }
        $(this).bind('mouseenter', function() {
            killTimer();
        });

        $(this).bind('mouseleave', function() {
            setTimer();
        });
        setTimer();

        // 5. Controls/Events : Bind to the forward and back buttons
        $wrapper.after('<a class="arrow back">&lt;</a><a class="arrow forward">&gt;</a>');
        $wrapper.after('<div class="controller"></div>');

        for (i = pages; i > 0; i--) {
            var gotoText = $ie6 || autoNumbers ? i : '&nbsp;';
            $wrapper.next().append('<a href="#" class="goto' + i + '" page="' + i.toString() + '"></a>');
        }

        var $gotoButtons = $wrapper.next().find('> a');
        toggle($gotoButtons.eq(pages - currentPage));

        $('a.back', this).click(function() {
            return gotoPage(currentPage - 1);
        });

        $('a.forward', this).click(function() {
            return gotoPage(currentPage + 1);
        });

        $gotoButtons.click(function() {
            var pageNumber = parseInt(jQuery(this).attr('page'));
            return gotoPage(pageNumber);
        });
    });
};

function InfiniteCarouselLoader($carousel, url, date) {
    function load() {
        $.ajax({
            url: url + '?_=' + Math.random(),
            dataType: 'json',
            async: false,
            success: loadItemList
        });
    }

    function loadItemList(data) {
        var itemListHTML = '<ul>';
        for (var i = 0; i < data.length; i++) {
            var currentItem = data[i];
            if (date > eval(currentItem.startDate) && eval(currentItem.endDate) > date) {
                itemListHTML += '<li>' + getItemHTML(currentItem) + '</li>';
            }
        }
        itemListHTML += '</ul>';
        $carousel.children('div.wrapper').append(itemListHTML);
    }

    function getItemHTML(item) {
        var sceneHTML = new Array();
        sceneHTML.push('<div class="imageContainer">');
        if (item.imageLink.length > 0) {
            sceneHTML.push('<a href="' + getUrl(item.imageLink) + '" target="' + item.imageLinkTarget + '" title="' + item.imageAlt + '">');
            sceneHTML.push(getImageHTML(item.imageUrl, item.imageAlt));
            sceneHTML.push('</a>');
        }
        else {
            sceneHTML.push(getImageHTML(item.imageUrl, item.imageAlt));
        }
        sceneHTML.push('</div>');
        if (item.title.length > 0) {
            sceneHTML.push('<div class="title">' + item.title + '</div>');
        }
        if (item.description.length > 0) {
            sceneHTML.push('<div class="description">' + item.description + '</div>');
        }
        return sceneHTML.join('');
    }

    function getImageHTML(imageUrl, imageAlt) {
        return '<img src="' + getUrl(imageUrl) + '" alt="' + imageAlt + '" border="0"/>';
    }

    function getUrl(url) {
        var result;
        //full path
        if (url.indexOf('http://') == 0) {
            result = url;
        }
        //root
        else if (url.indexOf('/') == 0) {
            result = 'http://' + document.domain + url;
        }
        //virtual
        else if (url.indexOf('.') == 0) {
            result = url;
        }
        else {
            result = document.location.href.substr(0, document.location.href.lastIndexOf('/')) + '/' + url;
        }
        return result;
    }

    this.Load = load;
    return this;
} 
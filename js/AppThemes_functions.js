function getRootCaller(caller) {
    return (typeof (caller.caller) === 'function') ? getRootCaller(caller.caller) : caller;
}

function getEventTarget() {
    var evt = window.event || getRootCaller(arguments.callee).arguments[0];
    return evt.target || evt.srcElement;
}

jQuery.fn.toggleFixed = function () {
    if (jQuery.browser.msie) {
        this.toggle();
    }
    else {
        this.slideToggle('slow');
    }
}

jQuery.fn.corner = function (options) {
    var settings = {
        tl: { radius: 10 },
        tr: { radius: 10 },
        bl: { radius: 10 },
        br: { radius: 10 },
        antiAlias: true,
        autoPad: true,
        validTags: ["div"]
    };
    if (options && typeof (options) != 'string')
        jQuery.extend(settings, options);

    return this.each(function () {
        new curvyObject(settings, this).applyCorners();
        //new curvyCorners(settings, this ).applyCornersToAll(); 
    });
};

//prevent conflicts by wrapping plugin
(function ($) {
    //private function (by scope)
    function QueryStringParser() {
        this.Values = new Object();
        this.load();
    }

    //add methods to the QueryStringParser class
    $.extend(QueryStringParser.prototype, {
        load: function () {
            //no query string...no problem
            if (window.location.search.length <= 1) {
                return;
            }

            //get the raw query string without the ?
            var queryString = window.location.search.substring(1);
            //split into pairs
            var pairs = queryString.split('&');
            //foreach pair
            for (var i = 0; i < pairs.length; i++) {
                //set the value (decode string just in case)
                this.Values[pairs[i].split('=')[0].toLowerCase()] = decodeURIComponent(pairs[i].split('=')[1]);
            }
        },
        get: function (key) {
            return (this.Values[key.toLowerCase()]) ? this.Values[key.toLowerCase()] : '';
        },
        set: function (key, value) {
            this.Values[key.toLowerCase()] = value;
            //chain...in true jQuery fashion
            return this;
        }
    });

    //the $.extend method doesn't appear to allow overriding toString on prototypes
    QueryStringParser.prototype.toString = function () {
        var params = [];

        for (var prop in this.Values) {
            //add the encoded value
            //CUSTOMIZED: Will not add empty values
            if (this.Values[prop] !== '') {
                params.push(prop + "=" + encodeURIComponent(this.Values[prop]));
            }
        }

        //return a complete query string
        return '?' + params.join('&');
    };

    //set the global property
    $.Params = new QueryStringParser();
})(jQuery);


function TextboxWithDisplayText(inputSelector, displayText) {
    function _blur(event) {
        var $this = $(this);
        if ($this.val() == '') {
            $this.val(displayText);
        }
    }
    function _focus(event) {
        var $this = $(this);
        if ($this.val() == displayText) {
            $this.val('');
        }
    }
    var $inputList = jQuery(inputSelector);
    if ($inputList.length > 0) {
        for (var i = 0; i < $inputList.length; i++) {
            var $input = $($inputList[i]);
            if ($input.val() !== '')
                $input.val($input.val()).bind('blur', _blur).bind('focus', _focus);
            else {
                $input.val(displayText).bind('blur', _blur).bind('focus', _focus);
            }
        }
    }
};

function SmartPasswordBox(passwordSelector, displayText) {
    function hidePasswordText(event) {
        $(this).hide().next().show().focus();
    }
    function hidePassword(event) {
        var $this = $(this);
        if ($this.val() == '') {
            $this.hide().prev().show();
        }
    }

    var $passwordList = $(passwordSelector);
    if ($passwordList.length > 0) {
        for (var i = 0; i < $passwordList.length; i++) {
            var $password = $($passwordList[i]);
            var $passwordText = $('<input type="text"/>')
                .attr('size', $password.attr('size'))
                .attr('tabindex', $password.attr('tabindex'))
                .attr('class', $password.attr('class'))
                .val(displayText);

            $passwordText.bind('click', hidePasswordText);
            $passwordText.bind('focus', hidePasswordText);
            $password.bind('blur', hidePassword);

            $password.hide();
            $password.before($passwordText);
        }
    }
}

function TraceManager(enabled) {
    if (enabled) {
        $(document).ready(function () {
            $("body").prepend('<div id="traceContainer" style="z-index:10000;position:absolute;background-color:white;font-family:Lucida Console;font-size:10px;"><div id="trace" style="margin:10px;"></div></div>');
        });
    }
    function log(text) {
        if (enabled) {
            $('#trace').prepend(text + '<br>');
        }
    }
    this.log = log;
    return this;
}

inceHeader = function () {
    jQuery('#hmain-top').css('height', '90px');
}
kalinHeader = function () {
    jQuery('#hmain-top').css('height', '118px');
}
noHeader = function () {
    jQuery('#hmain-top').css('height', '5px');
}
bannerToggle = function () {
    jQuery('#hmain-tl, #hmain-tr, #hmain-tc').toggle();
}
toInceHeader = function () {
    jQuery('#hmain-top').animate({ height: '118px' }, { queue: false, duration: 500 });
}
toKalinHeader = function () {
    jQuery('#hmain-top').animate({ height: '118px' }, { queue: false, duration: 500 });
}
toNoHeader = function () {
    jQuery('#hmain-top').animate({ height: '5px' }, { queue: false, duration: 500 });
}
minBanner = function () {
    jQuery('#hmain-tc').animate({ height: '0px' }, { queue: false, duration: 500 });
    jQuery('#hmain-tr').animate({ height: '0px' }, { queue: false, duration: 500 });
    jQuery('#hmain-tl').animate({ height: '16px' }, { queue: false, duration: 500 });
}
maxBanner = function () {
    jQuery('#hmain-tc').animate({ height: '90px' }, { queue: false, duration: 500 });
    jQuery('#hmain-tr').animate({ height: '90px' }, { queue: false, duration: 500 });
    jQuery('#hmain-tl').animate({ height: '125px' }, { queue: false, duration: 500 });
}
minHC = function () {
    jQuery('#block_hiddencontent').animate({ height: '140px' }, 500, displayContent);
}
maxHC = function () {
    jQuery('#block_hiddencontent').animate({ height: '1px' }, 500, hideContent);
}

displayContent = function () {
    jQuery(".package_block").show();
}

hideContent = function () {
    jQuery(".package_block").hide();
}

$.fn.hideOption = function () {
    this.each(function () {
        if ($(this).is('option') && (!$(this).parent().is('span'))) {
            $(this).wrap('<span>').hide();
        }
    });
};

$.fn.showOption = function () {
    this.each(function () {
        if (this.nodeName.toLowerCase() === 'option') {
            var p = $(this).parent(),
                    o = this;
            $(o).show();
            $(p).replaceWith(o);
        } else {
            var opt = $('option', $(this));
            $(this).replaceWith(opt);
            opt.show();
        }
    });
};

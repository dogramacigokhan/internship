YBAutoComplete =
{
    blnInit: false,
    displayControl: "",
    minChars: 3,
    maxChars: 35,
    url: "",
    resultset: null,
    searchType: "",
    searchValue: "",
    currentKeyword: "",
    currentCity: -1,
    cityCombo: null,
    selectedItemIndex: -1,
    containerDiv: null,
    innerDiv: null,
    displayTimeout: 400,
    displayTimer: null,
    input: "",
    defaultKeyword: "",
    inputHasFocus: false,
    REPLACECHARS: [["Ð", "ð"], ["Ý", "i"], ["Þ", "þ"], ["I", "ý"], ["-", " "]],
    KEY: {
        LEFT: 37,
        UP: 38,
        RIGHT: 39,
        DOWN: 40,
        TAB: 9,
        RETURN: 13,
        ESC: 27,
        COMMA: 188,
        PAGEUP: 33,
        PAGEDOWN: 34,
        BACKSPACE: 8,
        SHIFT: 16
    },

    enabled: true,

    enable: function () {
        YBAutoComplete.enabled = true;
        YBAutoComplete.performSearch();
    },

    disable: function () {
        YBAutoComplete.hideAll();
        YBAutoComplete.enabled = false;
    },

    init: function () {
        if (!this.blnInit) {
            var $input = $(YBAutoComplete.input);
            var $city = $(YBAutoComplete.cityCombo);

            $input.attr("autocomplete", "off");

            this.selectedItemIndex = -1;
            this.containerDiv = jQuery("<div id='YBAutoCompleteDiv' class='YBAutoCompleteOuterDiv'><div id='YBAutoCompleteInnerDiv' class='YBAutoCompleteInnerDiv' /><iframe style=\"position: absolute; display: block; z-index: -1; width: 100%; height: 100%; _width: 500px; _height: 500px; top: 0; left: 0; filter: mask(); background-color: #ffffff; \"></iframe></div>").appendTo(document.body);
            this.innerDiv = jQuery("#YBAutoCompleteInnerDiv");
            this.containerDiv.css("display", "none");

            var leftMargin = parseInt($input.css('margin-left'));

            if (leftMargin - 5 > 0) {
                this.containerDiv.css("left", $input.offset().left - (leftMargin ));
            }
            else {
                this.containerDiv.css("left", $input.offset().left - (leftMargin+ 4));
            }

            this.containerDiv.css("top", $input.offset().top + $input.height() + 3);

            var liElements = "#YBAutoCompleteDiv > div > ul > li";

            $input.bind("focus", function (event) {
                YBAutoComplete.inputHasFocus = true;
                if (!YBAutoComplete.innerDiv.is(':empty')) {
                    YBAutoComplete.show();
                }
            });

            $input.bind("blur", function (event) {
                YBAutoComplete.inputHasFocus = false;
                setTimeout(YBAutoComplete.hide, 250);
            });

            $input.bind("keypress", function (e) {
                if (YBAutoComplete.KEY.RETURN == e.keyCode) {
                    e.preventDefault();
                }
                else if (YBAutoComplete.KEY.TAB == e.keyCode) {
                    e.preventDefault();
                }
            });

            $input.bind("keydown", function (event) {
                event.cancelBubble = true;
                switch (event.keyCode) {
                    case YBAutoComplete.KEY.RETURN:
                        if (YBAutoComplete.selectedItemIndex >= 0) {
                            event.preventDefault();
                            jQuery(liElements + ":eq(" + YBAutoComplete.selectedItemIndex + ") > a").trigger('click');
                        }
                        break;
                    case YBAutoComplete.KEY.TAB:
                        var $cityCombo = $(YBAutoComplete.cityCombo);
                        if (!$cityCombo.is(":visible")) {
                            event.preventDefault();
                            YBAutoComplete.inputHasFocus = false;
                            setTimeout(YBAutoComplete.hide, 250);
                            $(YBAutoComplete.cityCombo).next().focus();
                        }
                        break;
                    default:
                        YBAutoComplete.clearSearchParameters();
                        break;
                }
            });

            $input.bind("keyup", function (event) {
                event.cancelBubble = true;

                switch (event.keyCode) {
                    case YBAutoComplete.KEY.LEFT:
                        event.preventDefault();
                        event.cancelBubble = true;
                        break;
                    case YBAutoComplete.KEY.RIGHT:
                        event.preventDefault();
                        event.cancelBubble = true;
                        break;
                    case YBAutoComplete.KEY.DOWN:
                        event.preventDefault();
                        event.cancelBubble = true;
                        var itemCount = jQuery(liElements).length;
                        if (YBAutoComplete.selectedItemIndex == itemCount - 1) {
                            YBAutoComplete.selectedItemIndex = -1;
                        }
                        YBAutoComplete.selectedItemIndex += 1;
                        YBAutoComplete.paintSelected(liElements, YBAutoComplete.selectedItemIndex);
                        break;
                    case YBAutoComplete.KEY.UP:
                        event.preventDefault();
                        var itemCount = jQuery(liElements).length;
                        if (YBAutoComplete.selectedItemIndex <= 0) {
                            YBAutoComplete.selectedItemIndex = itemCount;
                        }
                        YBAutoComplete.selectedItemIndex -= 1;
                        YBAutoComplete.paintSelected(liElements, YBAutoComplete.selectedItemIndex);
                        break;
                    case YBAutoComplete.KEY.SHIFT:
                    case YBAutoComplete.KEY.TAB:
                        break;

                    case YBAutoComplete.KEY.RETURN:
                        if (YBAutoComplete.selectedItemIndex >= 0) {
                            event.preventDefault();
                            jQuery(liElements + ":eq(" + YBAutoComplete.selectedItemIndex + ") > a").trigger('click');
                        }
                        break;
                    default:
                        if (YBAutoComplete.enabled) {
                            YBAutoComplete.performSearch();
                        }
                        else {
                            YBAutoComplete.hideAll();
                        }
                        break;
                }

            });

            $city.bind("change", YBAutoComplete.cityChanged);

            $city.bind("keypress", function (e) {
                if (YBAutoComplete.KEY.RETURN == e.keyCode) {
                    e.preventDefault();
                }
            });

            this.blnInit = true;
        }
    },

    cityChanged: function () {
        var city = $(YBAutoComplete.cityCombo).val();
        if (city != YBAutoComplete.currentCity) {
            YBAutoComplete.performSearch();
        }
    },

    performSearch: function () {
        if (YBAutoComplete.inputHasFocus) {
            YBAutoComplete.selectedItemIndex = -1;

            var keyword = $(YBAutoComplete.input)[0].value;
            var city = $(YBAutoComplete.cityCombo).val();

            //keyword = YBAutoComplete.replaceTurkishChars(keyword);

            if (keyword != undefined &&
            ((keyword != YBAutoComplete.currentKeyword && keyword != YBAutoComplete.defaultKeyword) || city != YBAutoComplete.currentCity) &&
            keyword.length >= YBAutoComplete.minChars &&
            keyword.length <= YBAutoComplete.maxChars) {
                clearTimeout(YBAutoComplete.displayTimer);
                YBAutoComplete.autoComplete(keyword, city);
                YBAutoComplete.currentKeyword = keyword;
                YBAutoComplete.currentCity = city;
            }
            else {
                if (keyword.length < YBAutoComplete.minChars) {
                    YBAutoComplete.currentKeyword = "";
                }
                YBAutoComplete.hideAll();
            }
        }
    },

    replaceTurkishChars: function (keyword) {
        for (var i = 0; i < YBAutoComplete.REPLACECHARS.length; ++i) {
            keyword = keyword.replace(YBAutoComplete.REPLACECHARS[i][0], YBAutoComplete.REPLACECHARS[i][1]);
        }

        return keyword;
    },

    paintSelected: function (liElements, index) {
        jQuery(liElements + " > a").css("background-color", "white");
        var currentItem = jQuery(liElements + ":eq(" + index + ") > a");
        if (currentItem.id == "srchPopupAllAdsLink") {
            currentItem.css("background-color", "red");
        }
        else {
            currentItem.css("background-color", "#f1f6f0");
        }
    },

    select: function (type, value, text) {
        YBAutoComplete.searchType = type;
        YBAutoComplete.searchValue = value;
        $(YBAutoComplete.input).val(text);
        $(YBAutoComplete.displayControl).css('display', 'block');
        if (type == 'Keyword') {
            $(YBAutoComplete.displayControl).hide();
        }
        else {
            $(YBAutoComplete.displayControl).text(YBAutoComplete.getType(type));
        }
        setTimeout(YBAutoComplete.hide, 50);
    },

    getType: function (type) {
        var result = '';
        if (type == 'PositionTitle') {
            result = 'Pozisyon Adý:';
        }
        else if (type == 'Sector') {
            result = "Sektör:";
        }
        else if (type == 'JobCategory') {
            result = 'Ýþ Alaný:';
        }
        else if (type == 'AdTitle') {
            result = 'Pozisyon Adýnda:';
        }
        return result;
    },

    hideAll: function () {
        if (YBAutoComplete.containerDiv != undefined && YBAutoComplete.innerDiv != undefined && YBAutoComplete.containerDiv.css('display') != "none") {
            YBAutoComplete.innerDiv.html("");
            YBAutoComplete.containerDiv.css("display", "none");
        }
    },

    hide: function () {
        YBAutoComplete.containerDiv.hide();
    },

    showAll: function (result) {
        if (YBAutoComplete.inputHasFocus) {
            this.innerDiv.html("<a class='popup_close' href='javascript:void(0);' onclick='YBAutoComplete.hide();'>&nbsp;</a>" + result);
            this.containerDiv.css("display", "");
        }
    },

    show: function () {
        YBAutoComplete.selectedItemIndex = -1;
        YBAutoComplete.containerDiv.show();
        $(YBAutoComplete.displayControl).hide();
    },

    clearSearchParameters: function () {
        YBAutoComplete.searchType = "";
        YBAutoComplete.searchValue = "";
    },

    generatePopupHTML: function (jsonData) {
        var result = "<ul>";
        for (var i = 0; i < jsonData.length; ++i) {
            if (jsonData[i] != undefined && jsonData[i] != null) {
                switch (jsonData[i].type) {
                    case "HTML":
                        result += jsonData[i].text;
                        break;
                    default:
                        result += "<li><a href=\"javascript:void(0);\" onclick=\"YBAutoComplete.select('" + jsonData[i].type + "','" + jsonData[i].value + "','" + jsonData[i].text + "')\">" + YBAutoComplete.highlight(jsonData[i].text, YBAutoComplete.currentKeyword) + "</a></li>";
                        break;
                }
            }
        }
        result += "</ul>";
        this.showAll(result);
    },

    highlight: function (value, term) {
        return value.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + term.replace(/([\^\$\(\)\[\]\{\}\*\.\+\?\|\\])/gi, "\\$1") + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong>$1</strong>");
    },

    autoComplete: function (keyword, city) {
        YBAutoComplete.displayTimer = setTimeout("YBAutoComplete.getJSON('" + keyword + "'," + city + ")", YBAutoComplete.displayTimeout);
    },

    getJSON: function (keyword, city) {
        var qs = "?q=" + encodeURIComponent(keyword);
        if (city >= 0) {
            qs += "&c=" + city;
        }

        $.ajax({
            type: "GET",
            contentType: "application/json; charset=utf-8",
            url: this.url + qs,
            dataType: "json",
            success: function (data, textStatus) {
                YBAutoComplete.resultset = data;
                if (YBAutoComplete.resultset == null || YBAutoComplete.resultset.length == 0) {
                    YBAutoComplete.currentKeyword = "";
                    YBAutoComplete.hideAll();
                }
                else {
                    if (YBAutoComplete.currentKeyword.indexOf(keyword) >= 0) {
                        YBAutoComplete.generatePopupHTML(data);
                    }
                }
            }
        });
    }
};

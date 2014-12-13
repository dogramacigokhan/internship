SmartListBox = function (inputID, oUrl, listType, listBoxID, autoClearSelected) {
    function getOptions(keyword) {
        Keyword = keyword;
        if (DoRequestTimer != null) {
            clearTimeout(DoRequestTimer);
        }
        if (keyword.length >= minChar) {
            DoRequestTimer = setTimeout(doRequest, delay);
        }
    };

    function doRequest() {
        function requestSuccess(data) {
            Options = data;
            BindOptions();
            triggerOnSearchCompleted();
        }
        if (GetOptionsRequest != null && GetOptionsRequest.readyState != 4) {
            GetOptionsRequest.abort();
        }
        this.GetOptionsRequest = jQuery.ajax({
            type: "POST",
            contentType: "application/x-www-form-urlencoded;charset=utf-8",
            url: oUrl,
            data: "type=" + 1 + "&keyword=" + Keyword,
            dataType: "json",
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            },
            cache: false,
            success: requestSuccess
        });
    };

    function findOptionPositionByText(text) {
        var result = -1;
        for (var i = 0; i < Options.length; ++i) {
            if (Options[i].textField.buyukHarf() == text.buyukHarf()) {
                result = i;
                break;
            }
        }
        return result;
    };

    function getBindableOptions() {
        var result;
        if (autoClearSelected) {
            result = Options;
        }
        else {
            var selectedValues = jQuery('#' + listBoxID).val();
            if (selectedValues != null) {
                result = $.grep(Options, function (option, index) {
                    return $.inArray(option.valueField.toString(), selectedValues) == -1;
                });
            }
            else {
                result = Options;
            }
        }
        return result;
    };

    function BindOptions() {
        var bindableOptions = getBindableOptions();
        var optionsHTML = '';
        for (var i = 0; i < bindableOptions.length; ++i) {
            option = bindableOptions[i];
            optionsHTML += '<option value="' + option.valueField + '">' + option.textField + '</option>';
        }
        if (autoClearSelected) {
            jQuery('#' + listBoxID).empty();
        }
        else {
            jQuery('#' + listBoxID + ' option:not(:selected)').remove();
        }
        jQuery('#' + listBoxID).append(optionsHTML);
    };

    function keyUp(event) {
        getOptions(this.value);
    };

    function triggerOnSearchCompleted() {
        if (OnSearchCompleted != null) {
            for (var i = 0; i < OnSearchCompleted.length; i++) {
                OnSearchCompleted[i]();
            }
        }
    };

    function bindOnSearchCompleted(fn) {
        if (OnSearchCompleted == null) {
            OnSearchCompleted = new Array();
        }
        OnSearchCompleted.push(fn);
    };

    this.BindOnSearchCompleted = bindOnSearchCompleted;
    var DoRequestTimer = null;
    var GetOptionsRequest = null;
    var Options = null;
    var Keyword = null;
    var Url = oUrl;
    var HideOptionsTimer = null;
    var OnSearchCompleted = null;
    var delay = 300;
    var minChar = 3;
    var KEY = {
        BACKSPACE: 8,
        TAB: 9,
        RETURN: 13,
        SHIFT: 16,
        CTRL: 17,
        ALT: 18,
        PAUSEBREAK: 19,
        CAPSLOCK: 20,
        ESC: 27,
        PAGEUP: 33,
        PAGEDOWN: 34,
        END: 35,
        HOME: 36,
        LEFT: 37,
        UP: 38,
        RIGHT: 39,
        DOWN: 40,
        PRINTSCRN: 44,
        INSERT: 45
    };
    jQuery("#" + inputID).attr("autocomplete", "off");
    jQuery("#" + inputID).keyup(keyUp);
};

String.prototype.buyukHarf = function () {
    var str = [];
    for (var i = 0; i < this.length; i++) {
        var ch = this.charCodeAt(i);
        var c = this.charAt(i);
        if (ch == 105) str.push('Ý');
        else if (ch == 305) str.push('I');
        else if (ch == 287) str.push('Ð');
        else if (ch == 252) str.push('Ü');
        else if (ch == 351) str.push('Þ');
        else if (ch == 246) str.push('Ö');
        else if (ch == 231) str.push('Ç');
        else if (ch >= 97 && ch <= 122) str.push(c.toUpperCase());
        else str.push(c);
    }
    return str.join('');
};
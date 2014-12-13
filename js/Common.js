;
function RedirectToUrl(VirtualPath, Url, params) {
    var redirectUrl = VirtualPath + "/CmaLogin.aspx?Url=" + Url + params;
    window.open(redirectUrl);
};

KEY = {
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

function runFunction(funcName) {
    if (eval("typeof " + funcName + " == 'function'")) {
        eval(funcName + '()');
    }
};

function evalLinkButton($linkButton) {
    eval($linkButton.attr('href').replace('javascript:', ''));
};

function getRootCaller(caller) {
    return (typeof (caller.caller) === 'function') ? getRootCaller(caller.caller) : caller;
};

function getEventTarget() {
    var evt = window.event || getRootCaller(arguments.callee).arguments[0];
    return evt.target || evt.srcElement;
};

function Sorter(sortBy) {
    function sortByFunction(a, b) {
        return a[sortBy].localeCompare(b[sortBy]);
    }
    this.SortByFunction = sortByFunction;
    return this;
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

String.prototype.turkishToUpper = function () {
    var string = this;
    var letters = { "i": "Ý", "þ": "Þ", "ð": "Ð", "ü": "Ü", "ö": "Ö", "ç": "Ç", "ý": "I" };
    string = string.replace(/(([iýþðüçö]))+/g, function (letter) { return letters[letter]; })
    return string.toUpperCase();
};

String.prototype.turkishToLower = function () {
    var string = this;
    var letters = { "Ý": "i", "I": "ý", "Þ": "þ", "Ð": "ð", "Ü": "ü", "Ö": "ö", "Ç": "ç" };
    string = string.replace(/(([ÝIÞÐÜÇÖ]))+/g, function (letter) { return letters[letter]; })
    return string.toLowerCase();
};

function SmartRequestManager() {
    function pageLoading(sender, args) {
        triggerPanels(args.get_panelsUpdating(), 'Updating', sender, args);
        triggerPanels(args.get_panelsDeleting(), 'Deleting', sender, args);
    }
    function pageLoaded(sender, args) {
        triggerPanels(args.get_panelsUpdated(), 'Updated', sender, args);
    }
    function bindHandler(panelID, on, handler) {
        var index = getIndexOfHandler(panelID, on, handler);
        if (index == -1) {
            addHandler(panelID, on, handler);
        }
    }
    function unBindHandler(panelID, on, handler) {
        var index = getIndexOfHandler(panelID, on, handler);
        if (index > -1) {
            handlerList.splice(index, 1);
        }
    }
    function triggerPanels(panels, on, sender, args) {
        for (var i = 0; i < panels.length; i++) {
            var handlers = getHandlerList(panels[i], on);
            for (var j = 0; j < handlers.length; j++) {
                handlers[j](sender, args);
            }
        }
    }
    function getHandlerList(panel, on) {
        var result = new Array();
        for (var i = 0; i < handlerList.length; i++) {
            if (handlerList[i].ID == panel.id && handlerList[i].On == on) {
                result.push(handlerList[i].Handler);
            }
        }
        return result;
    }
    function getIndexOfHandler(panelID, on, handler) {
        var result = -1;
        for (var i = 0; i < handlerList.length; i++) {
            if (handlerList[i].ID == panelID && handlerList[i].On == on && handlerList[i].Handler == handler) {
                result = i;
                break;
            }
        }
        return result;
    }
    function addHandler(panelID, on, handler) {
        handlerList.push({ "ID": panelID, "On": on, "Handler": handler });
    }
    function init() {
        prm = Sys.WebForms.PageRequestManager.getInstance();
        prm.add_pageLoading(pageLoading);
        prm.add_pageLoaded(pageLoaded);
    }
    var prm;
    var handlerList = new Array();
    init();
    this.BindHandler = bindHandler;
    this.UnBindHandler = unBindHandler;
    return this;
};

function bindPageRequestManager() {
    var prm = Sys.WebForms.PageRequestManager.getInstance();
    prm.add_pageLoading(pageLoading);
    prm.add_pageLoaded(pageLoaded);
};

function pageLoading(sender, args) {
    var updatingPanels = args.get_panelsUpdating();
    for (var i = 0; i < updatingPanels.length; i++) {
        runFunction(updatingPanels[i].id + '_Updating');
    }

    var deletingPanels = args.get_panelsDeleting();
    for (var i = 0; i < deletingPanels.length; i++) {
        runFunction(deletingPanels[i].id + '_Deleting()');
    }
};

function pageLoaded(sender, args) {
    var updatedPanels = args.get_panelsUpdated();
    for (var i = 0; i < updatedPanels.length; i++) {
        runFunction(updatedPanels[i].id + '_Loaded');
    }
};

function ConfirmationPanel(panelID, $actionButton) {
    function show() {
        $('#' + panelID).jqm({ overlay: 50, modal: true, trigger: false });
        //$('#confirmNote').html(confirmMessage);
        $('#' + panelID + ' input.bttnPro03').bind('click', ok);
        $('#' + panelID).jqmShow();
        $('#' + panelID + ' .confirmMessage').html(this.ConfirmMessage);
    }
    function ok() {
        evalLinkButton($actionButton);
    }
    this.ConfirmMessage;
    this.Show = show;
    return this;
};

function TraceManager(enabled) {
    if (enabled) {
        $(document).ready(function () {
            $("body").prepend('<div id="traceContainer" style="z-index:10000;position:absolute;font-family:Lucida Console;font-size:10px;"><div id="trace" style="margin:10px;"></div></div>');
        });
    }
    function log(text) {
        if (enabled) {
            $('#trace').prepend(text + '<br>');
        }
    }
    this.log = log;
    return this;
};

function writeFlash(id, w, h, v) {
    var str = "<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0' width='" + w + "' height='" + h + "' id='myflash'>";
    str += "<param name='menu' value='false' />";
    str += "<param name='allowScriptAccess' value='always' />";
    str += "<param name='movie' value='" + v + "' />";
    str += "<param name='quality' value='high' />";
    str += " <param name='wmode' value='transparent' />";
    str += "<embed menu='false' wmode='transparent' src='" + v + "' quality='high'  width='" + w + "' height='" + h + "' name='mymovie' align='middle' allowScriptAccess='sameDomain' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />";
    str += "</object>";
    document.getElementById(id).innerHTML = str;
};

RepeatingOperation = function (op, yieldEveryIteration) {
    var count = 0;
    var instance = this;
    this.step = function (args) {
        if (++count >= yieldEveryIteration) {
            count = 0;
            setTimeout(function () { op(args); }, 1, [])
            return;
        }
        op(args);
    };
};

function enableValidator(validator, isEnabled) {
    ValidatorEnable($(validator)[0], isEnabled);
};

function arrangeDisabilities(cssClass, isEnabled) {
    $(cssClass + ' span').each(function () {
        enableValidator($(this), isEnabled);
        $(this).remove();
    });
};

function calcualteTextAreaRemainedLength(spanIDForRemained, maxLength, textArea) {
    $('#' + spanIDForRemained).html(maxLength - textArea.val().length);
};

function bindTextAreaRemained(textAreaID, spanIDForRemained, maxLength) {
    var textArea = $('#' + textAreaID);

    calcualteTextAreaRemainedLength(spanIDForRemained, maxLength, textArea);

    $(textArea).bind('keyup change blur input paste', function () {
        calcualteTextAreaRemainedLength(spanIDForRemained, maxLength, $(this));
    });

};

function bindDisableSumbit(elementID) {
    var button = $(elementID);
    if ($(button).length > 0) {
        $(button).one("click", function () {
            if (Page_ClientValidate()) {
                $(button).click(function () { return false; });
            }
        });
    }
};

var yb = yb || {};

yb.checkDropDown = function (source, args) {

    var element1 = $('#' + $(source).attr('controltovalidate'));
    var element2 = $('#' + $(source).attr('customcontroltovalidate'));

    if (element1.is(':visible')) {
        args.IsValid = element1.val() !== '-1';
    }
    else if (element2.is(':visible')) {
        args.IsValid = element2.val() !== '-1';
    }
    else {
        args.IsValid = true;
    }

};

yb.checkTextBox = function (source, args) {
    var element1 = $('#' + $(source).attr('controltovalidate'));
    var element2 = $('#' + $(source).attr('customcontroltovalidate'));

    if (element1.is(':visible')) {
        args.IsValid = element1.val() !== '';
    } else if (element2.is(':visible')) {
        args.IsValid = element2.val() !== '';
    } else {
        args.IsValid = true;
    }
};

function getSocialAuthUrlFor(socialPlatform) {

    var returnUrl = GetUrlParameters()["ReturnUrl"];

    if (typeof returnUrl === 'undefined') {
        returnUrl = '';
    }
    $.ajax({
        type: 'POST',
        url: '/Services/Wm.aspx/GetSocialAuthUrlParametersFor',
        data: '{ "platform":"' + socialPlatform + '","returnUrl":"' + returnUrl + '"}',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (result) {
            document.location = result.d;
        },
        error: function () {
            /*alert('Talep esnasýnda sorun oluþtu. Yeniden deneyin');*/
        }
    });
}


function GetUrlParameters() {
    var vars = {};

    window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
        vars[key] = value;
    });

    return vars;
}
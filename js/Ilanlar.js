ToggleHelper = function () {
    this.Toggle = function (target) {
        var $target = $(target);
        var $targetPanel = $target.parent().next().children();
        var isVisible = $targetPanel.is(':visible');

        $('.filterList').hide();
        $('.moreFilterLink').text('Tümü');

        if (isVisible) {
            $targetPanel.hide();
            $target.text('Tümü');
        }
        else {
            $targetPanel.show();
            $target.text('Kapat');
        }
    };
    this.Hide = function (target) {
        $(target).parents('.filterList').hide().parent().prev().children('a.moreFilterLink').text('Tümü');
    };
};

function ToggleFilterTitle(id) {
    jQuery('#tt_' + id).slideToggle("fast");
};

function buildQueryString(qs, params) {
    if (params.length > 0 && params.length % 2 == 0) {
        var pairs;
        if (qs) {
            pairs = qs.substring(1).split('&');
        }
        else {
            pairs = new Array();
        }
        for (var i = 0; i < params.length; i += 2) {
            var itemToAdd = params[i];
            var valueToAdd = params[i + 1];
            for (var j = 0; j < pairs.length; j++) {
                var pos = pairs[j].indexOf('=');
                if (pos == -1) continue;
                var argname = pairs[j].substring(0, pos);
                var value = pairs[j].substring(pos + 1);
                var blnExists = false;
                if (argname.toLowerCase() == itemToAdd.toLowerCase()) {
                    pairs[j] = itemToAdd + '=' + valueToAdd;
                    blnExists = true;
                    break;
                }
            }

            if (!blnExists) {
                pairs[pairs.length] = itemToAdd + '=' + valueToAdd;
            }
        }
        return pairs.join('&');
    }
};
var DEFAULTKEYWORDSTRING = 'Anahtar kelime';

/*
jQuery(document).ready(function () {
    YBAutoComplete.url = YBAUTOCOMPLETE_SERVICE_URL;
    YBAutoComplete.input = "#txtSearchKeyword";
    YBAutoComplete.cityCombo = "#searchBar select[id*=ddlCity]";
    YBAutoComplete.defaultKeyword = DEFAULTKEYWORDSTRING;
    YBAutoComplete.displayControl = "#SelectedSearchTypeWithAutoComplete";
    YBAutoComplete.init();
    $(YBAutoComplete.input).keydown(function (event) {
        event.cancelBubble = true;
        if (event.keyCode == 13) {
            if (YBAutoComplete.selectedItemIndex < 0 || !YBAutoComplete.containerDiv.is(':visible')) {
                event.preventDefault();
                fnSearch();
            }
        }
    });
    $(YBAutoComplete.cityCombo).keydown(function (event) {
        event.cancelBubble = true;
        if (event.keyCode == 13) {
            fnSearch();
        }
    });
});
*/
function performSearch(params) {
    var loc = SEARCH_LOCATION_URL;
    if(params && params.length > 0)
    {
        loc += '?' + buildQueryString('',params);
    }
    document.location = loc;
}

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
}

function fnKeywordsCheck(oControl) {
    if (oControl.value == DEFAULTKEYWORDSTRING)
        oControl.value = '';
}
function fnKeywordsReplace(oControl) {
    if (oControl.value == '')
        oControl.value = DEFAULTKEYWORDSTRING;
}

function fnValidate() {
    var objKeyword = document.getElementById('txtSearchKeyword');
    var keyword = fnRemoveForbiddenChars(objKeyword.value);
    if (keyword == DEFAULTKEYWORDSTRING) {
        keyword = "";
    }
    objKeyword.value = keyword;
    if (keyword.length == 1) {
        showKeywordLengthError();
        setTimeout(hideKeywordLengthError,1000);
        fnKeywordsReplace(objKeyword);
        return false;
    }
    else {
        return true;
    }
}

function showKeywordLengthError()
{
    jQuery('#txtSearchKeyword').val('En az 2 karakter giriniz');    
    jQuery('#txtSearchKeyword').css('background-color','pink');                
    jQuery('#txtSearchKeyword').css('color','black');
}

function hideKeywordLengthError(){
    jQuery('#txtSearchKeyword').css('background-color','white');
    jQuery('#txtSearchKeyword').css('color','black');
    jQuery('#txtSearchKeyword').val('');
}

function fnRemoveForbiddenChars(baseString) {
    var charsToRemove = new Array('<', '>', ';', '&', '\'', '"', ':');
    var i;

    for (i = 0; i < charsToRemove.length; ++i) {
        var rx = new RegExp(charsToRemove[i], "gi");
        baseString = baseString.replace(rx, "");
    }
    return baseString;
}

function fnSearch() {
    //if (!fnValidate()){
    //    return false;
    //} 
    var params = new Array();
    var ddlCity = $('#searchBar select[id=SearchCityList]');
    var txtKeyword = document.getElementById('txtSearchKeyword');
    fnKeywordsCheck(txtKeyword);
    var isDetailSearchPanel2 = jQuery('#DetailSearchPanel2').is(":visible");
    var isDetailedSearch = jQuery('#DetailSearchPanel').is(":visible") | isDetailSearchPanel2;
    var isAdTitleSelected = jQuery('#chkSearchInAdTitle').is(":checked");

    if (ddlCity) {
        var cityID = ddlCity.val();
        if (cityID == ABROADVALUE)
        {
            params[params.length] = 'Abroad';
            params[params.length] = '1';
        }
        else
        {
            if (cityID != "-1") {
                cityStr = GetCityWithRelation(cityID);
                params[params.length] = 'City';
                params[params.length] = cityStr;
            }
        }
    }
   
    if (YBAutoComplete.searchType != "") {
        params[params.length] = YBAutoComplete.searchType;
        params[params.length] = YBAutoComplete.searchValue;            
    }
    else if (!isAdTitleSelected && txtKeyword && txtKeyword.value != "") {
        params[params.length] = 'Keyword';
        params[params.length] = encodeURIComponent(txtKeyword.value);
    }

    if (isDetailedSearch) {
        if (isAdTitleSelected) {
            params[params.length] = 'AdTitle';
            params[params.length] = encodeURIComponent(txtKeyword.value);
        }

        var checkedJobCategories = isDetailSearchPanel2 ? adtJobCategory2.GetCheckedValues() : adtJobCategory.GetCheckedValues();
        if (checkedJobCategories != '') {
            params[params.length] = 'JobCategory';
            params[params.length] = checkedJobCategories;
        }

        var checkedSectors = isDetailSearchPanel2 ? adtSector2.GetCheckedValues() : adtSector.GetCheckedValues();
        if (checkedSectors != '') {
            params[params.length] = 'Sector';
            params[params.length] = checkedSectors;
        }

        var company = new Array();
        if (jQuery('#chkFilterHiddenCompany').is(":checked")) {
            company[company.length] = '2';
        }
        if (jQuery('#chkFilterHRCompany').is(":checked")) {
            company[company.length] = '4';
        }
        if (company.length > 0) {
            params[params.length] = 'Company';
            params[params.length] = company.join(',');
        }

        if (jQuery('#chkFilterApplied').is(":checked")) {
            params[params.length] = 'Applied';
            params[params.length] = '0';

        }
        if (jQuery('#chkFilterViewed').is(":checked")) {
            params[params.length] = 'Displayed';
            params[params.length] = '0';
        }

        var publishDate = isDetailSearchPanel2 ? jQuery('#DetailedSearchPublishDates2')[0].value : jQuery('#DetailedSearchPublishDates')[0].value;
        if (publishDate != "" && parseInt(publishDate) > 0) {
            var qsParam;
            var qsVal;
            
            switch (parseInt(publishDate))
            {
                case 1:
                    qsParam = 'recency';
                    qsVal = '2';
                break;
                
                case 2:
                    qsParam = 'recency';
                    qsVal = '3';
                break;
                
                case 3:
                    qsParam = 'recency';
                    qsVal = '6';
                break;
                
                case 4:
                    qsParam = 'remainingdays';
                    qsVal = '1';
                break;
                
                case 5:
                    qsParam = 'remainingdays';
                    qsVal = '3';
                break;
                
                case 6:
                    qsParam = 'remainingdays';
                    qsVal = '7';
                break;
               
            }
            params[params.length] = qsParam;
            params[params.length] = qsVal;
        }
    }
    performSearch(params);
}

function GetCityWithRelation(cityID) {
    var relationList = new Array();
    if (cityID != 41) {
        relationList.push(cityID);
    }
    for (var i = 0; i < AD_CITY_RELATION.length; i++) {
        if (AD_CITY_RELATION[i].key == cityID) {
            relationList.push(AD_CITY_RELATION[i].value);
        }
    }
    return relationList.join(',');
}

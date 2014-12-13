jQuery(document).ready(function() {
    new TextboxWithDisplayText('input[id*=txtUsername].applyDisplayText', 'Kullanıcı Adı/E-posta');
    new SmartPasswordBox('input[id*=txtPassword].applyDisplayText', 'Şifre');

    jQuery('#yenibiris_altsayfalar_728x90_anasayfa').slideDown('slow');
    jQuery('#yenibiris_altsayfalar_728x90_altsayfalar').slideDown('slow');

    jQuery('#yenibiris_altsayfalar_120x120_anasayfa1 div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x120_anasayfa1 div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x120_isara div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x120_isara div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x120_login2 div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x120_login2 div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_728x90 div').removeAttr('style');
    jQuery('#yenibiris_altsayfalar_728x90 div object').removeAttr('style');
    jQuery('#yenibiris_altsayfalar_728x90 div object embed').removeAttr('style');
    
    jQuery('#yenibiris_altsayfalar_120x120_anasayfa div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x120_anasayfa div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x120_anasayfa2 div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x120_anasayfa2 div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x120_anasayfa3 div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x120_anasayfa3 div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x120_anasayfa4 div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x120_anasayfa4 div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x600_anasayfa div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x600_anasayfa div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x240_anasayfaSol div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x240_anasayfaSol div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x600_isara div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x600_isara div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x600_bolge div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x600_bolge div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x120_login1 div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x120_login1 div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x120_login2 div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x120_login2 div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x600 div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x600 div object').css('z-index', '1');

    jQuery('#yenibiris_altsayfalar_120x600_ik div').css('z-index', '1');
    jQuery('#yenibiris_altsayfalar_120x600_ik div object').css('z-index', '1');
    
    jQuery('.bolge_pulldown').css('z-index', '9999');

    jQuery("input.squarebutton_blue:visible").wrap("<div class='squarebutton_blue'></div>");
    jQuery("input.squarebutton_gray").wrap("<div class='squarebutton_gray'></div>");
    jQuery("button.squarebutton_blue").wrap("<div class='squarebutton_blue'></div>");
    jQuery("button.squarebutton_gray").wrap("<div class='squarebutton_gray'></div>");
    jQuery("a.bluedisabled").removeAttr('href').removeAttr('onclick').css('color', '#ccc');

    jQuery(".map_ankara").hover(function() { jQuery(".map_ankara_div").show(); }, function() { jQuery(".map_ankara_div").hide(); });
    jQuery(".disabledPage").css("display", "none");
    jQuery(".bolge_pulldown").hover(
        function() { jQuery(".bolge_pulldown").css('display', 'block'); jQuery("#Bolgeler a").addClass('kal'); },
        function() { jQuery(".bolge_pulldown").css('display', 'none'); jQuery("#Bolgeler a").removeClass('kal'); }
    );
    jQuery("#Bolgeler").hover(
        function() { jQuery(".bolge_pulldown").css('display', 'block'); },
        function() { jQuery(".bolge_pulldown").css('display', 'none'); }
    );
    duyurular();
    filterHeaderCollapse();

    jQuery(".ilksatir").hover(
			function() {
			    jQuery(this).addClass('ilksatir_hover');
			},
			function() {
			    jQuery(this).removeClass('ilksatir_hover');
			}
		)
});

function selectComboCity() {
    jQuery('a.ad_position_name').bind('click', function() { jQuery('.adsSelect').hide() });
}

function changeClass(obj) {
    jQuery('#currentItem').removeAttr('class').removeAttr('id');
    jQuery(obj).addClass('currentItem').attr('id', 'currentItem');
}

function getScrollHeight() {
    var h = window.pageYOffset ||
           document.body.scrollTop ||
           document.documentElement.scrollTop;
    return h ? h : 0;
}

function duyurular()
{
    if(document.getElementById('ilanlar'))
    {
	    jQuery('#hmain-ba').addClass('helpBg').html('');
	   
    }
}

function showHideDiv(link) {
    var obj = jQuery(link);
    var pos = obj.position();
    jQuery("#dvLastViewed").css('top', pos.top + 15 + 'px').css('left', pos.left + 'px');
    jQuery(".dvLastViewed_iframe").css('top', pos.top + 15 + 'px').css('left', pos.left + 'px');
    jQuery("#dvLastViewed").toggle();
    jQuery(".dvLastViewed_iframe").toggle();
}

function filterHeaderCollapse() {
    jQuery('.filterHeader').toggle(
        function() {jQuery(this).removeClass("filterHeader").addClass("filterHeader_closed")},
        function() {jQuery(this).removeClass("filterHeader_closed").addClass("filterHeader") }
    );
}
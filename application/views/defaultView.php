<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

header('Content-type: text/html; charset=utf-8');

?>
    
    <script type="text/javascript">
        $(window).ybrPinnable();
    </script>
    
    
    <script type="text/javascript" src="js/AppThemes_InfiniteCarousel.js?v=20120904"></script>
    <script type="text/javascript" src="js/jqueryBannerCarousel.js"></script>



    <script type="text/javascript">
        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter14651149 = new Ya.Metrika({ id: 14651149, enableAll: true, webvisor: true });
                } catch (e) { }
            });

            var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks"); 
    </script>
    <!-- /Yandex.Metrika counter -->
    </head>
<body>
    <!-- Yandex.Metrika counter No script-->
    <noscript>
        <div>
            <img src="//mc.yandex.ru/watch/14651149" style="position: absolute; left: -9999px;"
                alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter No Script -->
    <div id="headPinned">
    </div>
    
    
    <script type="text/javascript">
        MNetReq("yenibiris_altsayfalar");
    </script>
    
    <form method="post" action="" id="aspnetForm">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATEFIELDCOUNT" id="__VIEWSTATEFIELDCOUNT" value="3" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="cVVJYtWW37uWyULs6EfC4ZbwgqJETXhOwYr8nSULZhAG7MA683gRJGgkgGl+XRJOowcp4R3ELn1BndHWWC63gnlczB4f5b8jUthv" />
<input type="hidden" name="__VIEWSTATE1" id="__VIEWSTATE1" value="zUW4rb+g4dnlGQ3yw3QP63HVxCSprbKHvD+uCEn+hSzUR5DK8VysI/m/r6gMZvmuVEjZ+XlT0VSg2ORQR1PfPooBJBIC1mw43cNa" />
<input type="hidden" name="__VIEWSTATE2" id="__VIEWSTATE2" value="SfyNpKHM5kv4FdS7Zks=" />
</div>

<script>
// Find object position
function getRealPos(ele, dir)
{
	(dir=="x") ? pos = ele.offsetLeft : pos = ele.offsetTop;
	tempEle = ele.offsetParent;
	while (tempEle != null)
	{
		pos += (dir=="x") ? tempEle.offsetLeft : tempEle.offsetTop;
		tempEle = tempEle.offsetParent;
	}
	return pos;
}


</script>
    
    
    <div class="home_wrapper">
        <div class="disabledPage">
            <div style="width: 100%; height: 50px; background-color: Blue; color: #fff; font: bold 15px Tahoma;
                text-align: center; border: 2px solid #fff;">
                Lütfen bekleyiniz...</div>
        </div>
        <div id="page">
            
                


            
    

<link href="css/YBAutoSuggest.css?v=0409121729" rel="stylesheet" type="text/css" />
<link href="css/sexy-combo.css?v=0409121729" rel="stylesheet" type="text/css" />
<link href="css/sexy.css?v=0409121729" rel="stylesheet" type="text/css" />

<script src="js/jquery.sexy-combo.min.js?v=20120904" type="text/javascript"></script>
<script src="js/YBAutoComplete.js?v=20120905" type="text/javascript"></script>
<script src="js/SearchBar.js?v=20121022" type="text/javascript"></script>
<script src="js/responsiveslides.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var YBAUTOCOMPLETE_SERVICE_URL = "/Services/s.aspx";
    var SEARCH_LOCATION_URL = "/IsIlanlari/Ilanlar.aspx";
    var DEFAULTKEYWORDSTRING = "Anahtar kelime";
    var ABROADVALUE = 9999;
    var AD_CITY_RELATION = [{"key":8,"value":801},{"key":11,"value":111},{"key":21,"value":211},{"key":21,"value":212},{"key":41,"value":411},{"key":41,"value":412},{"key":41,"value":413},{"key":54,"value":541},{"key":54,"value":413},{"key":60,"value":601},{"key":74,"value":741},{"key":74,"value":742}];

    $(document).ready(function() {
        var $sexyCombo = $("select[id*=ddlSearchCityList]");
        $sexyCombo.sexyCombo({ emptyText: "Şehir", initialHiddenValue: "-1" });
        $sexyCombo.next().keydown(function(event) {
            event.cancelBubble = true;
            if (event.keyCode == 13) {
                if (!$(this).parent().children(".list-wrapper").is(":visible")) {
                    fnSearch();
                }
            }
        });

        if ($('.suggestedAcs > .wrapper > ul > li').length > 0) {
            $('.suggestedAcs').infiniteCarousel();
        }
        $(".rslides").responsiveSlides({
            auto: true,
            speed: 2000,
            timeout: 4000,
            pager: false,
            nav: false,
            random: false,
            pause: false,
            pauseControls: false,
            prevText: "Previous",
            nextText: "Next",
            maxwidth: "",
            controls: "",
            namespace: "rslides",
            before: function () { },
            after: function () { }
        });
    });            
</script>

<div class="searchArea clearfix">
    <div class="fl searchArea_leftCont">
        <div class="searchArea_left">
        <div class="sloganTxt">
            <span>
                38.896</span> iş ilanıyla <span>
                    82.258</span> kişi aranıyor!<br />
        </div>
        <div class="clearfix bgHomeSearchBar" id="searchBar">
            <div class="cont_txtBox_search fl clearfix">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <div style="width: 9px"></div>
                        </td>
                        <td>
                            <div id="SelectedSearchTypeWithAutoComplete" style="display: none;"></div>
                        </td>
                        <td style="width: 100%; text-align: left">
                            <input id="txtSearchKeyword" type="text" value="Anahtar kelime" autocomplete="off" onclick="javascript:void(0);"
                                onfocus="fnKeywordsCheck(this);" onblur="fnKeywordsReplace(this)" maxlength="50"
                                title="Aramak istediğin anahtar kelimenin ilk 3 harfini yaz; pozisyon adı, sektör ve iş alanı önerilerine ulaş." /></td>
                    </tr>
                </table>
            </div>
            <div class="cont_combobox_search fl">
                <select size="1" name="ctl00$ctl00$body$body$SearchBar2$ddlSearchCityList" id="ctl00_ctl00_body_body_SearchBar2_ddlSearchCityList" class="dsplNone">
	<option value="-1">Şehir</option>
	<option value="41">İstanbul</option>
	<option value="7">Ankara</option>
	<option value="43">İzmir</option>
	<option value="1">Adana</option>
	<option value="2">Adıyaman</option>
	<option value="3">Afyon</option>
	<option value="4">Ağrı</option>
	<option value="5">Aksaray</option>
	<option value="6">Amasya</option>
	<option value="8">Antalya</option>
	<option value="9">Ardahan</option>
	<option value="10">Artvin</option>
	<option value="11">Aydın</option>
	<option value="12">Balıkesir</option>
	<option value="13">Bartın</option>
	<option value="14">Batman</option>
	<option value="15">Bayburt</option>
	<option value="16">Bilecik</option>
	<option value="17">Bing&#246;l</option>
	<option value="18">Bitlis</option>
	<option value="19">Bolu</option>
	<option value="20">Burdur</option>
	<option value="21">Bursa</option>
	<option value="22">&#199;anakkale</option>
	<option value="23">&#199;ankırı</option>
	<option value="24">&#199;orum</option>
	<option value="25">Denizli</option>
	<option value="26">Diyarbakır</option>
	<option value="27">D&#252;zce</option>
	<option value="28">Edirne</option>
	<option value="29">Elazığ</option>
	<option value="30">Erzincan</option>
	<option value="31">Erzurum</option>
	<option value="32">Eskişehir</option>
	<option value="33">Gaziantep</option>
	<option value="34">Giresun</option>
	<option value="35">G&#252;m&#252;şhane</option>
	<option value="36">Hakkari</option>
	<option value="37">Hatay</option>
	<option value="38">Iğdır</option>
	<option value="39">Isparta</option>
	<option value="44">K.Maraş</option>
	<option value="45">Karab&#252;k</option>
	<option value="46">Karaman</option>
	<option value="47">Kars</option>
	<option value="48">Kastamonu</option>
	<option value="49">Kayseri</option>
	<option value="50">Kırıkkale</option>
	<option value="51">Kırklareli</option>
	<option value="52">Kırşehir</option>
	<option value="53">Kilis</option>
	<option value="54">Kocaeli</option>
	<option value="55">Konya</option>
	<option value="56">K&#252;tahya</option>
	<option value="57">Malatya</option>
	<option value="58">Manisa</option>
	<option value="59">Mardin</option>
	<option value="40">Mersin(İ&#231;el)</option>
	<option value="60">Muğla</option>
	<option value="61">Muş</option>
	<option value="62">Nevşehir</option>
	<option value="63">Niğde</option>
	<option value="64">Ordu</option>
	<option value="65">Osmaniye</option>
	<option value="66">Rize</option>
	<option value="67">Sakarya</option>
	<option value="68">Samsun</option>
	<option value="70">Siirt</option>
	<option value="71">Sinop</option>
	<option value="72">Sivas</option>
	<option value="69">Şanlıurfa</option>
	<option value="73">Şırnak</option>
	<option value="74">Tekirdağ</option>
	<option value="75">Tokat</option>
	<option value="76">Trabzon</option>
	<option value="77">Tunceli</option>
	<option value="78">Uşak</option>
	<option value="79">Van</option>
	<option value="80">Yalova</option>
	<option value="81">Yozgat</option>
	<option value="82">Zonguldak</option>
	<option value="0">Belirtilmemiş</option>
	<option value="9999">Yurtdışı</option>

</select>
            </div>
            <a class="submit_search fl" href="#" onclick="fnSearch();return false;"></a>
        </div>
        <div class="cont_lnk_joblist clearfix pstnRltv">
        </div>
    </div>
    </div>
    <div class="fr">
        <iframe width="302" height="250" src="https://www.youtube.com/embed/lT50drXAjdo?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>


    <div id="wrapper cb">
        <div class="homePageWrapper">
            <div class="clearfix">
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td>

                            <div id="ilanlar_div" class="fl">
                                
<div auto="true" timeout="10000" class="logos" id="logos">
    <div class="wrapper">
        <ul class="wrapperUl clearfix">
            
                    <li class="wrapperli">
                        
                                <ul id="ilanlar" class="clearfix">
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=16397"
                                                    title="Garanti Bankası">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl01_imgLogo" src="/Araclar/GetLogo.aspx?logoId=23878" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=16397"
                                                        title="Garanti Bankası">
                                                        Garanti Bankası
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=16397"
                                                        title="Garanti Bankası">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=7227"
                                                    title="Finansbank">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl02_imgLogo" src="/Araclar/GetLogo.aspx?logoId=23833" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=7227"
                                                        title="Finansbank">
                                                        Finansbank
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=7227"
                                                        title="Finansbank">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=7775"
                                                    title="Akbank">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl03_imgLogo" src="/Araclar/GetLogo.aspx?logoId=25370" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=7775"
                                                        title="Akbank">
                                                        Akbank
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=7775"
                                                        title="Akbank">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=32793"
                                                    title="Mercedes-Benz Türk">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl04_imgLogo" src="/Araclar/GetLogo.aspx?logoId=23897" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=32793"
                                                        title="Mercedes-Benz Türk">
                                                        Mercedes-Benz Türk
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=32793"
                                                        title="Mercedes-Benz Türk">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=39288"
                                                    title="Kale Endüstri Holding">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl05_imgLogo" src="/Araclar/GetLogo.aspx?logoId=23916" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=39288"
                                                        title="Kale Endüstri Holding">
                                                        Kale Endüstri Holding
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=39288"
                                                        title="Kale Endüstri Holding">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=72873"
                                                    title="Doğuş Yayın Grubu">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl06_imgLogo" src="/Araclar/GetLogo.aspx?logoId=20227" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=72873"
                                                        title="Doğuş Yayın Grubu">
                                                        Doğuş Yayın Grubu
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=72873"
                                                        title="Doğuş Yayın Grubu">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=107651"
                                                    title="Sanovel İlaç">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl07_imgLogo" src="/Araclar/GetLogo.aspx?logoId=26334" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=107651"
                                                        title="Sanovel İlaç">
                                                        Sanovel İlaç
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=107651"
                                                        title="Sanovel İlaç">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=17513"
                                                    title="Burger King">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl08_imgLogo" src="/Araclar/GetLogo.aspx?logoId=2388" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=17513"
                                                        title="Burger King">
                                                        Burger King
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=17513"
                                                        title="Burger King">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                
                                    
                                    <li class="ilksatir">
                                        <div class="boxed clearfix">
                                            <div class="logolink fl">
                                                <a title="Happy Center" href="http://www.yenibiris.com/happycenter">
                                                    <img src="/Araclar/GetLogo.aspx?logoId=11233" id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl03_imgLogo">
                                                </a>
                                            </div>
                                            <div class="brand_details fl">
                                                <div class="compNameShort">
                                                    <a title="Happy Center" href="http://www.yenibiris.com/happycenter">Happy Center </a>
                                                </div>
                                                <div class="posShort">
                                                    <a title="Happy Center" href="http://www.yenibiris.com/happycenter">Çalışma Arkadaşları </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=114641"
                                                    title="Saat & Saat">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl10_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27427" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=114641"
                                                        title="Saat & Saat">
                                                        Saat & Saat
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=114641"
                                                        title="Saat & Saat">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=59236"
                                                    title="Point Hotel ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl11_imgLogo" src="/Araclar/GetLogo.aspx?logoId=15440" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=59236"
                                                        title="Point Hotel ">
                                                        Point Hotel 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=59236"
                                                        title="Point Hotel ">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=75002"
                                                    title="Adecco Türkiye">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl12_imgLogo" src="/Araclar/GetLogo.aspx?logoId=19673" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=75002"
                                                        title="Adecco Türkiye">
                                                        Adecco Türkiye
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=75002"
                                                        title="Adecco Türkiye">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=95648"
                                                    title="Akfa Holding">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl13_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27097" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=95648"
                                                        title="Akfa Holding">
                                                        Akfa Holding
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=95648"
                                                        title="Akfa Holding">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=97669"
                                                    title="Taha Group">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl14_imgLogo" src="/Araclar/GetLogo.aspx?logoId=24507" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=97669"
                                                        title="Taha Group">
                                                        Taha Group
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=97669"
                                                        title="Taha Group">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=370567"
                                                    title="Kilim Mobilya">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl15_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27677" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370567"
                                                        title="Kilim Mobilya">
                                                        Kilim Mobilya
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370567"
                                                        title="Kilim Mobilya">
                                                        İhracat Müşteri Temsilcisi
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=368335"
                                                    title="Ramada İstanbul Taksim">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl16_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27233" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=368335"
                                                        title="Ramada İstanbul Taksim">
                                                        Ramada İstanbul Taksim
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=368335"
                                                        title="Ramada İstanbul Taksim">
                                                        Satış Pazarlama Elemanı
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=370236"
                                                    title="Arow Mağazacılık">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl17_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27659" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370236"
                                                        title="Arow Mağazacılık">
                                                        Arow Mağazacılık
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370236"
                                                        title="Arow Mağazacılık">
                                                        Satış Danışmanı
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=370394"
                                                    title="Medyasoft Bilgi Sistemleri">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl18_imgLogo" src="/Araclar/GetLogo.aspx?logoId=14145" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370394"
                                                        title="Medyasoft Bilgi Sistemleri">
                                                        Medyasoft Bilgi Sistemleri
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370394"
                                                        title="Medyasoft Bilgi Sistemleri">
                                                        SAP Eğitim Projesi
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=107031"
                                                    title="Teleperformance ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl19_imgLogo" src="/Araclar/GetLogo.aspx?logoId=26234" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=107031"
                                                        title="Teleperformance ">
                                                        Teleperformance 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=107031"
                                                        title="Teleperformance ">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=334062"
                                                    title="Telesinerji">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl20_imgLogo" src="/Araclar/GetLogo.aspx?logoId=25562" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=334062"
                                                        title="Telesinerji">
                                                        Telesinerji
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=334062"
                                                        title="Telesinerji">
                                                        Çağrı Merkezi Danışmanı
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=32403"
                                                    title="HS Group">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl21_imgLogo" src="/Araclar/GetLogo.aspx?logoId=6052" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=32403"
                                                        title="HS Group">
                                                        HS Group
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=32403"
                                                        title="HS Group">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=370602"
                                                    title="Kobi Türkiye">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl22_imgLogo" src="/Araclar/GetLogo.aspx?logoId=15843" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370602"
                                                        title="Kobi Türkiye">
                                                        Kobi Türkiye
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370602"
                                                        title="Kobi Türkiye">
                                                        Çağrı Merkezi Satış Temsilcisi
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=370671"
                                                    title="Unite Bilgi Teknolojileri">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl23_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27686" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370671"
                                                        title="Unite Bilgi Teknolojileri">
                                                        Unite Bilgi Teknolojileri
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370671"
                                                        title="Unite Bilgi Teknolojileri">
                                                        Bilgi İşlem Teknisyeni
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=370675"
                                                    title="İbar Elektrik">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl00_rptLogos_ctl24_imgLogo" src="/Araclar/GetLogo.aspx?logoId=26191" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370675"
                                                        title="İbar Elektrik">
                                                        İbar Elektrik
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=370675"
                                                        title="İbar Elektrik">
                                                        Teklif Ve Proje Mühendisi
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                </ul>
                            
                    </li>
                
                    <li class="wrapperli">
                        
                                <ul id="ilanlar" class="clearfix">
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=24152"
                                                    title="Ford Otosan">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl01_imgLogo" src="/Araclar/GetLogo.aspx?logoId=3985" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=24152"
                                                        title="Ford Otosan">
                                                        Ford Otosan
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=24152"
                                                        title="Ford Otosan">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=18421"
                                                    title="DenizBank">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl02_imgLogo" src="/Araclar/GetLogo.aspx?logoId=13337" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=18421"
                                                        title="DenizBank">
                                                        DenizBank
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=18421"
                                                        title="DenizBank">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=80850"
                                                    title="Aras">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl03_imgLogo" src="/Araclar/GetLogo.aspx?logoId=20968" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=80850"
                                                        title="Aras">
                                                        Aras
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=80850"
                                                        title="Aras">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=12880"
                                                    title="Baymak ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl04_imgLogo" src="/Araclar/GetLogo.aspx?logoId=21357" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=12880"
                                                        title="Baymak ">
                                                        Baymak 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=12880"
                                                        title="Baymak ">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=594"
                                                    title="Soyak">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl05_imgLogo" src="/Araclar/GetLogo.aspx?logoId=23872" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=594"
                                                        title="Soyak">
                                                        Soyak
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=594"
                                                        title="Soyak">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=70362"
                                                    title="Amerikan Hastanesi ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl06_imgLogo" src="/Araclar/GetLogo.aspx?logoId=18621" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=70362"
                                                        title="Amerikan Hastanesi ">
                                                        Amerikan Hastanesi 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=70362"
                                                        title="Amerikan Hastanesi ">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=6208"
                                                    title="CarrefourSA">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl07_imgLogo" src="/Araclar/GetLogo.aspx?logoId=7079" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=6208"
                                                        title="CarrefourSA">
                                                        CarrefourSA
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=6208"
                                                        title="CarrefourSA">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=8658"
                                                    title="Adidas">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl08_imgLogo" src="/Araclar/GetLogo.aspx?logoId=11665" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=8658"
                                                        title="Adidas">
                                                        Adidas
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=8658"
                                                        title="Adidas">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=113165"
                                                    title="Muratbey Gıda">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl09_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27211" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=113165"
                                                        title="Muratbey Gıda">
                                                        Muratbey Gıda
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=113165"
                                                        title="Muratbey Gıda">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=51584"
                                                    title="Sabiha Gökçen Havalimanı">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl10_imgLogo" src="/Araclar/GetLogo.aspx?logoId=22766" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=51584"
                                                        title="Sabiha Gökçen Havalimanı">
                                                        Sabiha Gökçen Havalimanı
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=51584"
                                                        title="Sabiha Gökçen Havalimanı">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=37225"
                                                    title="G4S Güvenlik Hizmetleri ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl11_imgLogo" src="/Araclar/GetLogo.aspx?logoId=14963" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=37225"
                                                        title="G4S Güvenlik Hizmetleri ">
                                                        G4S Güvenlik Hizmetleri 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=37225"
                                                        title="G4S Güvenlik Hizmetleri ">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=334916"
                                                    title="Dido Konfeksiyon ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl12_imgLogo" src="/Araclar/GetLogo.aspx?logoId=24005" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=334916"
                                                        title="Dido Konfeksiyon ">
                                                        Dido Konfeksiyon 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=334916"
                                                        title="Dido Konfeksiyon ">
                                                        Satış Danışmanı
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=329197"
                                                    title="Vodatech Bilişim ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl13_imgLogo" src="/Araclar/GetLogo.aspx?logoId=3806" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=329197"
                                                        title="Vodatech Bilişim ">
                                                        Vodatech Bilişim 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=329197"
                                                        title="Vodatech Bilişim ">
                                                        Çağrı Merkezi Takım Lideri
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=65908"
                                                    title="Hyundai Glovis ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl14_imgLogo" src="/Araclar/GetLogo.aspx?logoId=26313" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=65908"
                                                        title="Hyundai Glovis ">
                                                        Hyundai Glovis 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=65908"
                                                        title="Hyundai Glovis ">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=73462"
                                                    title="Vip Dükkan">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl15_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27638" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=73462"
                                                        title="Vip Dükkan">
                                                        Vip Dükkan
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=73462"
                                                        title="Vip Dükkan">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=369669"
                                                    title="Cızbız Köfte">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl16_imgLogo" src="/Araclar/GetLogo.aspx?logoId=21042" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=369669"
                                                        title="Cızbız Köfte">
                                                        Cızbız Köfte
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=369669"
                                                        title="Cızbız Köfte">
                                                        Satış Temsilcisi
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=368611"
                                                    title="Daıkın">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl17_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27560" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=368611"
                                                        title="Daıkın">
                                                        Daıkın
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=368611"
                                                        title="Daıkın">
                                                        Müşteri Hizmetleri Temsilcisi
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=114452"
                                                    title="Berko İlaç ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl18_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27386" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=114452"
                                                        title="Berko İlaç ">
                                                        Berko İlaç 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=114452"
                                                        title="Berko İlaç ">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=45957"
                                                    title="Kaban Makina">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl19_imgLogo" src="/Araclar/GetLogo.aspx?logoId=10532" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=45957"
                                                        title="Kaban Makina">
                                                        Kaban Makina
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=45957"
                                                        title="Kaban Makina">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=65974"
                                                    title="Kutman Şarapları">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl20_imgLogo" src="/Araclar/GetLogo.aspx?logoId=17609" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=65974"
                                                        title="Kutman Şarapları">
                                                        Kutman Şarapları
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=65974"
                                                        title="Kutman Şarapları">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=29287"
                                                    title="Megatek Elektronik">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl21_imgLogo" src="/Araclar/GetLogo.aspx?logoId=6451" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=29287"
                                                        title="Megatek Elektronik">
                                                        Megatek Elektronik
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=29287"
                                                        title="Megatek Elektronik">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/Ilanlar.aspx?CustomerID=41810"
                                                    title="Çağla Mühendislik ">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl22_imgLogo" src="/Araclar/GetLogo.aspx?logoId=10263" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=41810"
                                                        title="Çağla Mühendislik ">
                                                        Çağla Mühendislik 
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/Ilanlar.aspx?CustomerID=41810"
                                                        title="Çağla Mühendislik ">
                                                        Çalışma Arkadaşları
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=369020"
                                                    title="Estep Bilişim">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl23_imgLogo" src="/Araclar/GetLogo.aspx?logoId=22654" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=369020"
                                                        title="Estep Bilişim">
                                                        Estep Bilişim
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=369020"
                                                        title="Estep Bilişim">
                                                        Yazılım Uzmanı
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                
                                    <li class="ilksatir">
                                        <div class="boxed">
                                            <div class="logolink">
                                                <a href="/IsIlanlari/ilan.aspx?adID=367916"
                                                    title="Ladonna Güzellik Merkezi">
                                                    <img id="ctl00_ctl00_body_body_ucLogoAds_rptLogoAd_ctl01_rptLogos_ctl24_imgLogo" src="/Araclar/GetLogo.aspx?logoId=27511" />
                                                </a>
                                            </div>
                                            <div class="brand_details">
                                                <div class="compNameShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=367916"
                                                        title="Ladonna Güzellik Merkezi">
                                                        Ladonna Güzellik Merkezi
                                                    </a>
                                                </div>
                                                <div class="posShort">
                                                    <a class="truncate" href="/IsIlanlari/ilan.aspx?adID=367916"
                                                        title="Ladonna Güzellik Merkezi">
                                                        Estetisyen
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                
                                
                            
                                </ul>
                            
                    </li>
                
        </ul>
    </div>
</div>

                            </div>
                        </td>
                        <td>
                            <div id="seo_links" class="seoLinksCont fl">
                                


    <div>
        <span>Özel İlanlar</span>
    </div>
    <ul class="clearfix">
        
                <li>
                    <a class="truncate" href="http://www.yenibiris.com/Bolgeler.aspx">Bölge Sayfaları</a>
                </li>
            
                <li>
                    <a class="truncate" href="http://www.yenibiris.com/Ek_Kazanc_Firsatlari/">Ek Kazanç Fırsatları</a>
                </li>
            
                <li>
                    <a class="truncate" href="http://www.yenibiris.com/eleman">Seri İlanlar</a>
                </li>
            
                <li>
                    <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?workingtype=5">Staj İlanları</a>
                </li>
            
                <li>
                    <a class="truncate" href="https://www.yenibiris.com/Uyelik/UyeGirisi.aspx?ReturnUrl=%2fIsIlanlari%2fIlanlar.aspx%3fmatching%3d1">Size Uygun İlanlar</a>
                </li>
            
                <li>
                    <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?specialcase=1">Engelli</a>
                </li>
            
                <li>
                    <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?abroad=1">Yurtdışı</a>
                </li>
            
                <li>
                    <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?position=1%2C2">Yönetici</a>
                </li>
            
                <li>
                    <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?workingtype=1%2C3">Parttime</a>
                </li>
            
                <li>
                    <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?applied=0">Başvurmadığım İlanlar</a>
                </li>
            
    </ul>
<a class="fr seoLinksNext" style="background:none" href="#">&nbsp;</a>
<p class="clear" style="height:1px"></p>
    <div>
        <span>Sektöre Göre İlanlar</span>
    </div>
        <ul class="clearfix">
            
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/EGITIM">Eğitim</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/YAPI-INSAAT">Yapı-İnşaat</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/PERAKENDECILIK-TOPTANCILIK">Perakendecilik-Toptancılık</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/BILISIM">Bilişim</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/SAGLIK-TIP">Sağlık-Tıp</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/URETIM-IMALAT">Üretim-İmalat</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/TURIZM-OTELCILIK">Turizm-Otelcilik</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/HIZMET">Hizmet</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/GIDA">Gıda</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/BANKA-FINANS">Banka-Finans</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/TEKSTIL">Tekstil</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/LOJISTIK-TASIMACILIK">Lojistik-Taşımacılık</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/MEDYA">Medya</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/ELEKTRIK-ELEKTRONIK">Elektrik-Elektronik</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/OTOMOTIV">Otomotiv</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/CAGRI_MERKEZI">Çağrı Merkezi</a>
                    </li>
                
        </ul>
       
            <a class="fr seoLinksNext" href="http://www.yenibiris.com/Kriterler.aspx">Devamı</a>
        <p class="clear" style="height:1px"></p>
    
    <div>
        <span>Şehir İlanları</span>
    </div>
        <ul class="clearfix">
            
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Istanbul_-_Avrupa">İstanbul-Avrupa</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Istanbul_-_Asya">İstanbul-Asya</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Ankara">Ankara</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?city=8%2C801">Antalya</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Izmir">İzmir</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?city=21%2C212%2C211">Bursa</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?city=413%2C54%2C541">Kocaeli</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/IsIlanlari/Ilanlar.aspx?city=74,742,741">Tekirdağ</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Adana">Adana</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Konya">Konya</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Denizli">Denizli</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Aydin">Aydın</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Eskisehir">Eskişehir</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Manisa">Manisa</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Afyon">Afyon</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://www.yenibiris.com/Is_Ilanlari/Kayseri">Kayseri</a>
                    </li>
                
        </ul>
       
         <a class="fr seoLinksNext" href="http://www.yenibiris.com/Kriterler.aspx?g=1">Devamı</a>
         <p class="clear" style="height:1px"></p>
    
    <div>
        <span>İş Yaşamı</span>
    </div>
        <ul class="clearfix">
            
                    <li>
                        <a class="truncate" href="http://isyasami.yenibiris.com/tum-haberler.aspx?pageID=509">Haberler</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://isyasami.yenibiris.com/roportajlar.aspx?pageID=452">Röportajlar</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://isyasami.yenibiris.com/fotogaleriler.aspx?pageID=476">Foto Galeri</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://isyasami.yenibiris.com/kariyer-rehberi.aspx?pageID=448">Kariyer Rehberi</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://isyasami.yenibiris.com/hurriyet-ik.aspx?pageID=491">Hurriyet İk</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://isyasami.yenibiris.com/uzmana-sor.aspx?pageID=481">Uzmana Sor</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://isyasami.yenibiris.com/sirketlerden.aspx?pageID=514">Şirketlerden</a>
                    </li>
                
                    <li>
                        <a class="truncate" href="http://isyasami.yenibiris.com/is-ve-kariyer-yonetimi.aspx?pageID=487">Kariyer Yönetimi</a>
                    </li>
                
        </ul>
    <a class="fr seoLinksNext" href="http://isyasami.yenibiris.com">İş Yaşamı</a>


                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="homeMiddleBanners clearfix">
                
                <div id='carousel_container' class="adsWithLogoHomeWrapper clearfix pstnRltv">
                    <div id='left_scroll' class="fl backAdsWithLogos"><a href='javascript:slide("left");'></a></div>
                    <div id='carousel_inner' class="fl adsWithLogoWrapper">
                        <div class="adsWithLogoCont">
                        <ul id='carousel_ul' class="clearfix carouselList">
                            <li>
                                <div id="yenibiris_altsayfalar_180x150_anasayfa1" class="fl">
                                    <script type="text/javascript">MNetBanner("yenibiris_altsayfalar_180x150_anasayfa1");</script>
                                </div>
                            </li>
                            <li>
                                <div id="yenibiris_altsayfalar_180x150_anasayfa2" class="fl">
                                    <script type="text/javascript">MNetBanner("yenibiris_altsayfalar_180x150_anasayfa2");</script>
                                </div>
                            </li>
                            <li>
                                <div id="yenibiris_altsayfalar_180x150_anasayfa3" class="fl">
                                    <script type="text/javascript">MNetBanner("yenibiris_altsayfalar_180x150_anasayfa3");</script>
                                </div>
                            </li>
                            <li>
                                <div id="yenibiris_altsayfalar_180x150_anasayfa4" class="fl">
                                    <script type="text/javascript">MNetBanner("yenibiris_altsayfalar_180x150_anasayfa4");</script>
                                </div>
                            </li>
                            <li>
                                <div id="yenibiris_altsayfalar_180x150_anasayfa5" class="fl">
                                    <script type="text/javascript">MNetBanner("yenibiris_altsayfalar_180x150_anasayfa5");</script>
                                </div>
                            </li>
                             <li style="#display:none">
                                <div id="yenibiris_altsayfalar_180x150_anasayfa6" class="fl">
                                    <script type="text/javascript">MNetBanner("yenibiris_altsayfalar_180x150_anasayfa6");</script>
                                </div>
                            </li>

                        </ul>
                            </div>
                    </div>
                    <div id='right_scroll' class="fr forwardAdsWithLogos"><a href='javascript:slide("right");'></a></div>
                    <input type='hidden' id='hidden_auto_slide_seconds' value="0" />
                </div>

            </div>
            <div class="clearfix">
                <div class="fl homePageLeftColumn">

                    <div id="ctl00_ctl00_body_body_UserQuestionaire1_pnlQuestionaire">
	


    <div class="cont_home_left">
        <div class="homeLeftHeadQuestionaire"></div>
        <div class="home_left_content">
            <div class="poll_question">
                Yeni yılda iş yerinizde kimin değişmesini (ayrılmasını) isterdiniz?
            </div>
            <div class="hr_dotted">
                <hr />
            </div>
            
                    <ul class="poll_list">
                
                    <li>
                        <input type="radio" name="choice" value='1'>
                        <label class="choice_text">
                            Bağlı bulunduğum yöneticimin</label>
                        <br class="cb" />
                    </li>
                
                    <li>
                        <input type="radio" name="choice" value='2'>
                        <label class="choice_text">
                            Genel müdürümün </label>
                        <br class="cb" />
                    </li>
                
                    <li>
                        <input type="radio" name="choice" value='3'>
                        <label class="choice_text">
                            Şirket sahibinin </label>
                        <br class="cb" />
                    </li>
                
                    <li>
                        <input type="radio" name="choice" value='4'>
                        <label class="choice_text">
                            Ekip arkadaşlarımın </label>
                        <br class="cb" />
                    </li>
                
                    </ul>
                
            <div class="promo_btn">
                <a class="bttnVote mrg0" href="javascript:void(0);" onclick="return QuestionaireValidate(true)">
                    <span>Oy Ver</span> </a>
            </div>
            <div class="hr_dotted">
                <hr />
            </div>
            <p class="promo_lnk_cont">
                Sonuçlar için <a href="javascript:void(0);" onclick="javascript:SonucGoster();" class="promo_lnk">
                    tıklayınız</a>
            </p>
        </div>
    </div>

    <script language="javascript" type="text/javascript">
        function QuestionaireValidate() {
            var s = GetWindowString(true);
            var anketwin;
            if (s == false)
                return false;
            else
                anketwin = window.open(s, "anket", "left=0,top=0,toolbar=no,location=no,menubar=no,status=no,directories=no,width=600,height=450,scrollbars=yes");
            if (!anketwin) alert("Lütfen Popup Blocker'ınızı Yenibiriş için kapatınız!");
        }

        function GetWindowString(bVoted) {
            if (bVoted) {
                var secilisecenek = -1;
                var arrChoices = document.getElementsByName("choice");
                for (i = 0; i < arrChoices.length; i++) {
                    if (arrChoices[i].checked) {
                        secilisecenek = i;
                        break;
                    }
                }
                if (secilisecenek == -1) {
                    alert('Lütfen bir seçenek işaretleyiniz.\n\n(Anket sonuçlarını görmek için\n"Anket Sonuçları"na tıklayınız.)');
                    return false;
                }
                else
                    return window.$YBVP + '/AnketSonucu.aspx?QID=1347&CID=' + arrChoices[secilisecenek].value;
            }
            else
                return window.$YBVP + '/AnketSonucu.aspx?QID=1347';
        }

        function SonucGoster() {
            var anketwin = window.open(GetWindowString(false), "anket", "left=0,top=0,toolbar=no,location=no,menubar=no,status=no,directories=no,width=600,height=450,scrollbars=yes");
            if (!anketwin) alert("Lütfen Popup Blocker'ınızı Yenibiriş için kapatınız!");
        }
    </script>


</div>

                    
  
<style type="text/css">
    /* Scroller Box */
    #scroller_container
    {
        width: 211px;
        height: 199px;
        overflow: hidden;
    }
    /* Scroller Box *//* CSS Hack Safari */#dummy
    { ;#}
    #scroller_container
    {
        overflow: hidden;
    }
    .bg_egtFirsat
    {
        background: url('/Assets/images/Header/bg_egtFirsat.jpg') repeat-y !important;
        margin:7px 0;
    }
    ul.promo_list1 li
    {
        padding: 3px 10px 3px 10px;
        background: none;
        color: #3b3b3b !important;
        font-size:11px;
    }
    ul.promo_list1 li a
    {
        color: #3b3b3b !important;
        font-weight: bold;
        font-size:11px;
        text-decoration:none
    }
    ul.promo_list1 li a:hover
    {
        color: #e67c00 !important;
        font-weight: bold;
    }
</style>

<div class="cont_home_left">
    <div class="homeLeftHeadEducationAnnouncement"></div>
    <div class="home_left_content clearfix">
        <div id="scroller_container">
        <div class="jscroller2_up jscroller2_mousemove jscroller2_speed-40 jscroller2_delay-2"
            style="overflow: hidden">
            
                    <ul class="promo_list1" style="overflow: hidden">
                
                    <li><a href="http://humanitiesuniversity.org/">
                        Humanities University
                    </a>
                        <br />
                        Master of Arts in Humanities
                    </li>
                    <li><div class="hr_dottedforEducation">
                <hr>
            </div></li>
                
                    <li><a href="http://www.ahder.org/">
                        AHDER
                    </a>
                        <br />
                        Afete Hazırlık ve Deprem Eğitimi
                    </li>
                    <li><div class="hr_dottedforEducation">
                <hr>
            </div></li>
                
                    <li><a href="http://egitim.yenibiris.com/announcement.aspx?k=2614">
                        Galatasaray Üniversitesi
                    </a>
                        <br />
                        Dijital Medya Yönetimi Sertifika Programı
                    </li>
                    <li><div class="hr_dottedforEducation">
                <hr>
            </div></li>
                
                    <li><a href="http://egitim.yenibiris.com/announcement.aspx?k=2604">
                        Yıldız Teknik Üniversitesi 
                    </a>
                        <br />
                        İnsan Kaynakları Yönetimi Uzmanlığı Sertifika Programı(Uygulamalı Eğitim)
                    </li>
                    <li><div class="hr_dottedforEducation">
                <hr>
            </div></li>
                
                    <li><a href="http://egitim.yenibiris.com/announcement.aspx?k=2621">
                        Wilbert Akademi
                    </a>
                        <br />
                        "İş Garantili" Makine Operatörlüğü Sertifika Programı
                    </li>
                    <li><div class="hr_dottedforEducation">
                <hr>
            </div></li>
                
                    <li><a href="http://egitim.yenibiris.com/announcement.aspx?k=2689">
                        George's Academy OF Thoughts
                    </a>
                        <br />
                        TOEFL Sınavına Hazırlık Eğitimi
                    </li>
                    <li><div class="hr_dottedforEducation">
                <hr>
            </div></li>
                
                    <li><a href="http://egitim.yenibiris.com/announcement.aspx?k=2685">
                        George's Academy OF Thoughts
                    </a>
                        <br />
                        Kurumlara Özel İnsan Kaynakları Eğitimi
                    </li>
                    <li><div class="hr_dottedforEducation">
                <hr>
            </div></li>
                
                    <li><a href="http://egitim.yenibiris.com/announcement.aspx?k=2691">
                        George's Academy OF Thoughts
                    </a>
                        <br />
                        TOEIC Sınavına Hazırlık Eğitimi
                    </li>
                    <li><div class="hr_dottedforEducation">
                <hr>
            </div></li>
                
                    </ul>
                
        </div>
    </div>
    </div>

</div>


                    <div class="cont_home_left">
                        <div class="homeLeftHeadFacebookPages"></div>
                        <div class="home_left_content">
                            <ul class="left_content_list">
                                <li><a class="fbpages" href="http://www.facebook.com/yenibiriscom">Yenibiriş</a></li>
                                <li><a class="fbpages" href="http://www.facebook.com/yenibirismolasi" title="Yenibiriş Molası Facebook" target="_blank">Yenibiriş Molası</a></li>
                                <li><a class="fbpages" href="http://www.facebook.com/KacanIsBuyukOlur" title="Kaçan İş Büyük Olur Facebook" target="_blank">Kaçan İş Büyük Olur</a></li>
                                <li class="no_li_bg"><a class="fbpages" href="http://www.facebook.com/isteis" title="İşteiş Mezun Rehberi Facebook" target="_blank">İşteiş Mezun Rehberi</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="fl homePageRightColumn">
                    <div class="homePageRopBannerPlace">
                        <div id="yenibiris_altsayfalar_764x151_orta" style="background-color: transparent;">
                            <script type="text/javascript">MNetBanner("yenibiris_altsayfalar_764x151_orta");</script>
                        </div>
                    </div>
                    <div class="homrPageEditorContent">
                        
<div id="editorial">
    <div class="headBarEditorial"></div>
    <div class="editorialBrdr clearfix">

        <div class="clearfix homeArticleCont">
            <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td>
            <div class="fl homeArticleImg">
                <img id="ctl00_ctl00_body_body_EditorunSecimi1_imgAuthor9" src="http://www.yenibiris.com/staticfiles/Yenibiris2012/cma/image/2012/Aralik/Usas_orhaner10095.jpg" />
                
            </div>
                            </td>
                        <td>
            <div class="fl homeArticleTxtCont homeArticleSpotTxtCont">
                <div class="homeArticleTxtHeadline"><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkBaslik9" href="http://isyasami.yenibiris.com/orhan-er-ile-5n-ik.aspx?pageID=500&amp;nID=70224&amp;NewsCatID=328&amp;AuthorID=21" target="_parent">Orhan Er ile 5N İK</a></div>
                <div></div>
                <div class="homeArticleTxtWriter">Yenibiris.com - Nur GÜN</div>
                <div class="homeArticleTxtSpot"><p><strong>Usaş Şirketler Grubu İnsan Kaynakları ve İdari İşler M&uuml;d&uuml;r&uuml; Orhan Er: </strong>&quot;M&uuml;lakatlarda adayların işten beklentilerini tek kelime ile anlatmasını isterim. Kariyer hedeflerini ve işin hangi şartlarda onları mutlu edeceğini sorarım. Adayların tutkulu ve &ouml;zg&uuml;venli olmasına dikkat ederim.&quot;</p></div>
                <div><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkDevami9" class="article_lnk fr dsplNone" href="http://isyasami.yenibiris.com/orhan-er-ile-5n-ik.aspx?pageID=500&amp;nID=70224&amp;NewsCatID=328&amp;AuthorID=21" target="_parent">Devamı</a></div>
            </div></td></tr></table>
        </div>

        <div class="hr_dottedforEditorial"><hr></div>

        <div class="clearfix">
            <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td>
            <div id="ctl00_ctl00_body_body_EditorunSecimi1_pnlNoLink1" class="clearfix homeArticleCont fl noRightPadding">
	
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td>
                <div class="fl homeArticleImg">
                    <img id="ctl00_ctl00_body_body_EditorunSecimi1_imgAuthor1" src="http://www.yenibiris.com/staticfiles/Yenibiris2012/cma/image/2012/Aralik/bulut10095.jpg" />
                    
                </div></td><td>
                <div class="fl homeArticleTxtCont">
                    <div class="homeArticleTxtHeadline"><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkBaslik1" href="http://isyasami.yenibiris.com/b.aspx?pageID=238&amp;nID=70225&amp;NewsCatID=326&amp;AuthorID=148" target="_parent">Bulut bilişim sektörü değiştiriyor: 4250 kişi istihdam edilecek </a></div>
                    <div class="homeArticleTxtWriter">Yenibiris.com - Nur GÜN</div>
                    <div class="homeArticleTxtSpot"><p>İnternet, multimedya,yazılım, donanım, ağ... Bilişim, alt alanlarıyla birlikte bir&ccedil;ok sekt&ouml;r&uuml; de&nbsp; geliştirerek b&uuml;y&uuml;meye&nbsp; devam ediyor.</p></div>
                    <div><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkDevami1" class="article_lnk dsplNone" href="http://isyasami.yenibiris.com/b.aspx?pageID=238&amp;nID=70225&amp;NewsCatID=326&amp;AuthorID=148" target="_parent">Devamı</a></div>
                    
                </div></td></tr></table>
            
</div>
                            </td><td>
            <div id="ctl00_ctl00_body_body_EditorunSecimi1_pnlNoLink2" class="clearfix homeArticleCont fl">
	
               <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td> <div class="fl homeArticleImg">
                    <img id="ctl00_ctl00_body_body_EditorunSecimi1_imgAuthor2" src="http://www.yenibiris.com/staticfiles/Yenibiris2012/cma/image/YazarlarYeni/iremonal10095.jpg" />
                    
                </div></td><td>
                <div class="fl homeArticleTxtCont">
                    <div class="homeArticleTxtHeadline"><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkBaslik2" href="http://isyasami.yenibiris.com/Default.aspx?pageID=498&amp;nID=70226&amp;NewsCatID=338&amp;AuthorID=159" target="_parent">İK pazarlanabilir bir üründür</a></div>
                    <div class="homeArticleTxtWriter">İrem ÖNAL</div>
                    <div class="homeArticleTxtSpot"><p>Evet yanlış duymadınız, bir bordro yeniliğini bile markalaştırarak i&ccedil; m&uuml;şterilerinize duyurabilirsiniz. Yeter ki bunun i&ccedil;in zaman ve kaynak ayırın.</p></div>
                    <div><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkDevami2" class="article_lnk dsplNone" href="http://isyasami.yenibiris.com/Default.aspx?pageID=498&amp;nID=70226&amp;NewsCatID=338&amp;AuthorID=159" target="_parent">Devamı</a></div>
                    
                </div></td></tr></table>
            
</div></td></tr></table>
        </div>

        <div class="hr_dottedforEditorial"><hr></div>
        
        <div class="clearfix">
            <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td>
            <div id="ctl00_ctl00_body_body_EditorunSecimi1_pnlNoLink3" class="clearfix homeArticleCont fl noRightPadding">
	
               <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td> <div class="fl homeArticleImg">
                    <img id="ctl00_ctl00_body_body_EditorunSecimi1_imgAuthor3" src="http://www.yenibiris.com/staticfiles/Yenibiris2012/cma/image/2012/Aralik/dijitalpazarlama10095.jpg" />
                    
                </div></td><td>
                <div class="fl homeArticleTxtCont">
                    <div class="homeArticleTxtHeadline"><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkBaslik3" href="http://isyasami.yenibiris.com/dr.aspx?pageID=238&amp;nID=70227&amp;NewsCatID=326&amp;AuthorID=148" target="_parent">Dijital pazarlamada iş fırsatları artıyor</a></div>
                    <div class="homeArticleTxtWriter">Yenibiris.com - Nur GÜN</div>
                    <div class="homeArticleTxtSpot"><p>İnternetin hızlı yaygınlaşması pazarlama anlayışını da değiştiriyor. Artık firmalar m&uuml;şteri ve iş ortaklarına interaktif platformları kullanarak ulaşmaya &ccedil;alışıyor.</p></div>
                    <div><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkDevami3" class="article_lnk dsplNone" href="http://isyasami.yenibiris.com/dr.aspx?pageID=238&amp;nID=70227&amp;NewsCatID=326&amp;AuthorID=148" target="_parent">Devamı</a></div>
                    
                </div></td></tr></table>
            
</div></td><td>

            <div id="ctl00_ctl00_body_body_EditorunSecimi1_pnlNoLink4" class="clearfix homeArticleCont fl">
	
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td>
                <div class="fl homeArticleImg">
                    <img id="ctl00_ctl00_body_body_EditorunSecimi1_imgAuthor4" src="http://www.yenibiris.com/staticfiles/Yenibiris2012/cma/image/YazarlarYeni/gayetumer10095.jpg" />
                    
                </div></td><td>
                <div class="fl homeArticleTxtCont">
                    <div class="homeArticleTxtHeadline"><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkBaslik4" href="http://isyasami.yenibiris.com/Default.aspx?pageID=498&amp;nID=70230&amp;NewsCatID=327&amp;AuthorID=142" target="_parent">Ayna ayna söyle bana...</a></div>
                    <div class="homeArticleTxtWriter">Gaye TÜMER ÖNSEL</div>
                    <div class="homeArticleTxtSpot"><p>Nerede duruyorum? Nasıl algılanıyorum? Dışarıdan bakıldığında fark yaratan biri miyim? Benimle ilgili nasıl planlar yapılıyor acaba?</p></div>
                    <div><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkDevami4" class="article_lnk dsplNone" href="http://isyasami.yenibiris.com/Default.aspx?pageID=498&amp;nID=70230&amp;NewsCatID=327&amp;AuthorID=142" target="_parent">Devamı</a></div>
                    
                </div></td></tr></table>
            
</div></td></tr></table>
        </div>

        <div class="hr_dottedforEditorial"><hr></div>

        <div class="clearfix"><table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td>
            <div id="ctl00_ctl00_body_body_EditorunSecimi1_pnlNoLink5" class="clearfix homeArticleCont fl noRightPadding">
	
               <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td> <div class="fl homeArticleImg">
                    <img id="ctl00_ctl00_body_body_EditorunSecimi1_imgAuthor5" src="http://www.yenibiris.com/staticfiles/Yenibiris2012/cma/image/2012/Aralik/NihanErkanBenli10095.jpg" />
                    
                </div></td><td>
                <div class="fl homeArticleTxtCont">
                    <div class="homeArticleTxtHeadline"><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkBaslik5" href="http://isyasami.yenibiris.com/atama.aspx?pageID=455" target="_parent">Atama</a></div>
                    <div class="homeArticleTxtWriter">Yenibiris.com</div>
                    <div class="homeArticleTxtSpot">Nihal Erkan&nbsp;Benli Doğuş İnşaat&nbsp;İnsan Kaynakları ve İdari İşler&nbsp;Koordinat&ouml;r&uuml; oldu. İşte haftanın diğer atama ve transferleri...</div>
                    <div><a id="ctl00_ctl00_body_body_EditorunSecimi1_linkDevami5" class="article_lnk dsplNone" href="http://isyasami.yenibiris.com/atama.aspx?pageID=455" target="_parent">Devamı</a></div>
                    
                </div></td></tr></table>
            
</div></td><td>

            
            
            <div id="ctl00_ctl00_body_body_EditorunSecimi1_pnlLinkList6" class="clearfix homeArticleCont fl homeArticleListCont">
	
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td><div class="lnkli">
                    <ul><li><a href='http://isyasami.yenibiris.com/i.aspx?pageID=238&nID=70047&NewsCatID=326&AuthorID=21'>Yenibiris.com III. Çeyrek İstihdam Raporu</a></li><li><a href='http://isyasami.yenibiris.com/m.aspx?pageID=238&nID=70152&NewsCatID=335&AuthorID=0'>Millward Brown'a Çalışanla Bağ Kurma ödülü</a></li><li><a href='http://isyasami.yenibiris.com/i.aspx?pageID=502&nID=70153&NewsCatID=340&AuthorID=0'>İşte buluşma noktası: Kayif 2012</a></li><li><a href='http://isyasami.yenibiris.com/sr.aspx?pageID=502&nID=70213&NewsCatID=340&AuthorID=0'>Shaman TEGV için dans ediyor</a></li><li><a href='http://isyasami.yenibiris.com/p.aspx?pageID=502&nID=70154&NewsCatID=340&AuthorID=0'>Personel yönetiminde tüm yasal süreçler bu zirvede</a></li><li><a href='http://isyasami.yenibiris.com/Default.aspx?pageID=498&nID=70115&NewsCatID=%20326'>Pinterest’i kullanmanın 5 yolu</a></li></ul>
               </td></tr></table> </div>
            
</div></td></tr></table>
    
        </div>

    </div>

    

</div>


                    </div>
                </div>
            </div>
        </div>
    </div>


            <br class="cb" />
            
<div class="bottomBannerWrapper">
    <div id="yenibiris_altsayfalar_728x90">
    </div>
    <script type="text/javascript">        MNetBanner("yenibiris_altsayfalar_728x90");</script>
</div>

<div id="footerContainer">
    <div class="FooterUstTd" align="center">
        <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
                    <a href="http://www.yenibiris.com/HurriyetIK/HurriyetIKHaberler.aspx" target="_blank" title="HürriyetİK">
                        <img src="/Assets/Images/Header/topmenu_hurik.gif"
                            alt="HürriyetİK" /></a>
                </td>
                <td width="17">
                    &nbsp;
                </td>
                <td>
                    <a href="http://www.hurriyet.com.tr" target="_blank" title="Hürriyet">
                        <img src="/Assets/Images/General/Footer/hurriyet.gif"
                            width="67" height="18" alt="Hürriyet" /></a>
                </td>
                <td width="18">
                    &nbsp;
                </td>
                <td>
                    <a href="http://www.hurriyetinternetgrubu.com" target="_blank" title="Hürriyet İnternet Grubu">
                        <img src="/Assets/Images/General/Footer/hurriyet_ig.jpg"
                            alt="Hürriyet İnternet Grubu" /></a>
                </td>
                <td width="16">
                    &nbsp;
                </td>
                <td>
                    <a href="http://www.hurriyetemlak.com" target="_blank" title="Hürriyet Emlak">
                        <img src="/Assets/Images/General/Footer/hurriyetEmlak.gif"
                            width="75" height="20" alt="Hürriyet Emlak" /></a>
                </td>
                <td width="15">
                    &nbsp;
                </td>
                <td>
                    <a href="http://www.hurriyetoto.com/" target="_blank" title="Hürriyet Oto">
                        <img src="/Assets/Images/General/Footer/hurriyetoto.gif"
                            alt="Hürriyet Oto" /></a>
                </td>
                <td width="15">
                    &nbsp;
                </td>
                <td>
                    <a href="http://piyasanet.hurriyet.com.tr/?utm_source=yenibiris&utm_medium=footer&utm_campaign=logo"
                        target="_blank" title="Piyasanet">
                        <img src="/Assets/Images/General/Footer/hurriyetKiyasla.jpg"
                            width="65" height="16" alt="Piyasanet" /></a>
                </td>
                <td width="16">
                    &nbsp;
                </td>
                <td>
                    <a href="http://egitim.yenibiris.com" target="_blank" title="Yenibirİş Eğitim">
                        <img src="/Assets/Images/General/Footer/egitim.gif"
                            width="62" height="21" alt="Yenibirİş Eğitim" /></a>
                </td>
                <td width="17">
                    &nbsp;
                </td>
                <td>
                    <a href="http://www.yenibirisdunyasi.com" target="_blank" title="Yenibirİş Dünyası">
                        <img src="/Assets/Images/General/Footer/yenibirisdunyasi.gif"
                            width="60" height="20" alt="Yenibirİş Dünyası" /></a>
                </td>
                <td width="17">
                    &nbsp;
                </td>
                <td>
                    <a href="http://www.hepsiburada.com" target="_blank" title="Hepsiburada">
                        <img src="/Assets/Images/General/Footer/hb.gif"
                            alt="Hepsiburada" width="112" height="20" /></a>
                </td>
                <td width="17">
                    &nbsp;
                </td>
                <td>
                    <a href="http://www.yenicarsim.com/?utm_source=hig&utm_medium=yenibiris&utm_campaign=anasayfa&utm_content=eM&utm_term=footer"
                        target="_blank" title="Yeniçarşım">
                        <img src="/Assets/Images/General/Footer/yenicarsim.gif"
                            alt="Yeniçarşım" /></a>
                </td>
                <td width="16">
                    &nbsp;
                </td>
                <td>
                    <a href="http://www.yakala.co" target="_blank" title="Yakala.co">
                        <img src="/Assets/Images/General/Footer/yakala_co.gif"
                            alt="Yakala.co" /></a>
                </td>
            </tr>
        </table>
    </div>
    <div class="indentmenuters">
        <div id="footerlinks">
            <ul>
                <li><a href="http://www.yenibiris.com/YenibirisHakkinda/Hakkimizda.aspx">
                    Hakkımızda</a></li>
                <li>|</li>
                <li><a href="http://www.yenibiris.com/YenibirisHakkinda/Gizlilik.aspx">
                    Gizlilik Prensipleri</a></li>
                <li>|</li>
                <li><a href="http://www.yenibiris.com/YenibirisHakkinda/KullanimSartlari.aspx">
                    Kullanım Şartları</a></li>
                <li>|</li>
                <li><a href="http://www.yenibiris.com/YenibirisHakkinda/Iletisim.aspx">
                    İletişim</a></li>
                <li>|</li>
                <li><a href="http://www.yenibiris.com/YenibirisHakkinda/Kunye.aspx">
                    Künye</a></li>
                <li>|</li>
                <li><a href="http://www.yenibiris.com/StaticFiles/Yenibiris2012/projeler/BasindaYenibiris.aspx">
                    Basında Yenibiris.com</a></li>
                <li>|</li>
                <li style="position: relative"><a href="http://www.yenibiris.com/YenibirisHakkinda/Reklam.aspx">
                    Reklam</a> </li>
                <li>|</li>
                <li><a href="http://www.yenibiris.com/YenibirisHakkinda/SiteMap.aspx">
                    Site Haritası</a></li>
            </ul>
        </div>
    </div>
    <div id="footer">
        <table style="width: 950px" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td style="height: 25px; font-size: 10px !important; text-align: center">
                    Copyright © 2000 -
                    2012
                    Yenibiris.com
                </td>
                <td rowspan="3" valign="middle">
                    <img src="/Assets/Images/iskur_logo.png" />
                </td>
            </tr>
            <tr>
                <td style="text-align: left !important; font-size: 10px !important; padding-bottom: 10px">
                    İş arayanlar bölümümüzü en iyi şekilde görüntüleyebilmek için; Internet Explorer
                    7.0 ve üzeri, Firefox 4.0 ve üzeri tarayıcılar kullanmanızı öneririz. Yenibiris.com,
                    Yenibiriş İnsan Kaynakları Hizmetleri Danışmanlık ve Yayıncılık A.Ş.'ne ait bir
                    sitedir. Yenibiriş İnsan Kaynakları Hizmetleri Danışmanlık ve Yayıncılık A.Ş., 4904
                    sayılı Türkiye İş Kurumu Kanununun 19. maddesi gereği, işarayanlardan hiçbir ücret
                    ve menfaat talep etmeyen bir kurum olup, Türkiye İş Kurumu İstanbul İl Müdürlüğü'ne
                    bağlı olarak 15.01.2008 tarihli, 164 numaralı izin belgesi ile faaliyet göstermektedir.
                </td>
            </tr>
        </table>
    </div>
</div>

            <div id="mediaInspector">
            </div>
        </div>
    </div>

    </form>
    <!-- Begin comScore Tag -->
    <script type="text/javascript">
        document.write(unescape("%3Cscript src='" + (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js' %3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        COMSCORE.beacon({
            c1: 2,
            c2: 7290377,
            c3: "",
            c4: "",
            c5: "",
            c6: "",
            c15: ""
        });
    </script>
    <noscript>
        <img src="http://b.scorecardresearch.com/p?c1=2&c2=7290377&c3=&c4=&c5=&c6=&c15=&cj=1" />
    </noscript>
    <!-- End comScore Tag -->
</body>
</html>


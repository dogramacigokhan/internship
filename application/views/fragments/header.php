<?php

/*
 * Default header.php file which contents meta tags, css files, javascript files,
 * user login form and top menu.
 * 
 * Takes X arguments:
 * 
 * @typeof String
 * $title = Title of the page
 * 
 * @typeof array
 * $menuItems = Array of the menu items in type of LinkObject
 * 
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Content-type: text/html; charset=utf-8');

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
    <link rel="shortcut icon" href="/Assets/Images/favicon.ico" /><!-- SEO Control Generated Tags -->
    <meta name="keywords" content="staj ilanları,insan kaynakları,staj eleman arayanlar,eleman arayan,eleman alımı,eleman ilanları,güvenlik staj ilanları,yeni staj ilanları,eleman arıyorum,eleman ilanı,staj ilani,staj arama,kariyer,resume,staj başvurusu,staj fırsatları,human resources,staj bul,jobs,eleman,personel,cv,hr,human resources,işe yerleştirme,staj eleman" />
    <meta name="description" content="StajBul, en iyi eleman, kariyer, staj arama ve bulma portalı. Tüm staj ilan ve ilanları arama, uzmanlık eğitimleri, güncel İK içeriği, özgeçmiş yazma teknikleri. staj arıyorum diyenlerin yeni staj sitesi." />
<!-- Facebook Tags -->
	<meta property="og:title" content="StajBul.com | staj ilanları ve eleman ilanları sitesi" />
	<meta property="og:keywords" content="staj ilanları,insan kaynakları,staj eleman arayanlar,eleman arayan,eleman alımı,eleman ilanları,güvenlik staj ilanları,yeni staj ilanları,eleman arıyorum,eleman ilanı,staj ilani,staj arama,kariyer,resume,staj başvurusu,staj fırsatları,human resources,staj bul,jobs,eleman,personel,cv,hr,human resources,işe yerleştirme,staj eleman" />
	<meta property="og:description" content="StajBul, en iyi eleman, kariyer, staj arama ve bulma portalı. Tüm staj ilan ve ilanları arama, uzmanlık eğitimleri, güncel İK içeriği, özgeçmiş yazma teknikleri. staj arıyorum diyenlerin yeni staj sitesi." />
	<meta property="og:image" content="http://www.StajBul.com/Assets/Images/logo_yb.gif" />
<!-- End Of Facebook Tags -->
<!-- End Of SEO Control Generated Tags -->
<title>
	<?php if (isset($title)) echo $title; else echo 'Stajyer Bul'; ?>
</title>
    
    <base target="_parent" />
    <link rel="stylesheet" type="text/css" href="<?php if (isset ($cssPath)) echo $cssPath; else echo 'css/'; ?>General.css?v=001312121054" />
    <link rel="stylesheet" type="text/css" href="<?php if (isset ($cssPath)) echo $cssPath; else echo 'css/'; ?>Header.css?v=001312121054" />
    <link rel="stylesheet" type="text/css" href="<?php if (isset ($cssPath)) echo $cssPath; else echo 'css/'; ?>JobList.css?v=001312121054" />
    <link rel="stylesheet" type="text/css" href="<?php if (isset ($cssPath)) echo $cssPath; else echo 'css/'; ?>NewGeneral.css?v=001312121054" />
    <link rel="stylesheet" type="text/css" href="<?php if (isset ($cssPath)) echo $cssPath; else echo 'css/'; ?>General1.css?v=001312121054" />
    <link href="<?php if (isset ($cssPath)) echo $cssPath; else echo 'css/'; ?>YBAutoSuggest.css?v=0409121729" rel="stylesheet" type="text/css" />
    <link href="<?php if (isset ($cssPath)) echo $cssPath; else echo 'css/'; ?>sexy-combo.css?v=0409121729" rel="stylesheet" type="text/css" />
    <link href="<?php if (isset ($cssPath)) echo $cssPath; else echo 'css/'; ?>sexy.css?v=0409121729" rel="stylesheet" type="text/css" />
    <style type="text/css">.bottomBannerWrapper{display: none;}</style>


    
    <script type="text/javascript" src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>jquery-ui.js"></script>
    <script type="text/javascript" src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>jquery.bgiframe.min.js"></script>
    <script type="text/javascript" src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>AppThemes_functions.js"></script>
    <script type="text/javascript" src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>AppThemes_mainpage.js"></script>
    <script type="text/javascript" src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>jscroller2-1.5.js"></script>
    <script type="text/javascript">var $YBVP = "http://www.StajBul.com";</script>
    <script type="text/javascript" src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>UtilityV2.js"></script>
    <script type="text/javascript" src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>StajBul.PinnMe.js"></script>
    <script type="text/javascript" src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>Common.js"></script>
    <script src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>jquery.sexy-combo.min.js" type="text/javascript"></script>
    <script src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>YBAutoComplete.js" type="text/javascript"></script>
    <script src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>SearchBar.js" type="text/javascript"></script>
    <script src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>AppThemes_InfiniteCarousel.js" type="text/javascript"></script>
    <script src="<?php if (isset ($jsPath)) echo $jsPath; else echo 'js/'; ?>responsiveslides.min.js" type="text/javascript"></script>
    
    <?php
        if (isset($jsFiles))
        {
            // Add additional js files
            foreach ($jsFiles as $jsFile) {
                echo '<script type="text/javascript"';
                if (isset ($jsPath)) 
                {
                    echo ' src="'.$jsPath.$jsFile.'"';
                }
                else 
                {
                    echo ' src="'.'js/'.$jsFile.'"'; 
                }
                echo '></script>
    ';
            }
        }
    ?>
    
    <script type="text/javascript">
    $(document).ready(function() {
       
        var $sexyCombo = $("#SearchCityList");
        $sexyCombo.sexyCombo({ emptyText: "Tüm Şehirler" });
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
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/tr_TR/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="home_wrapper">
        
        <div id="page" class="containProb">
            
            <div class="clearfix"> 
                    <div class="head_wrapper_left fl"> 
                        <div class="invertedtabsline"> 
                            <h1 id="ctl00_ctl00_body_header1_IAH1" class="fl txtLft truncate">staj ilanları ve eleman ilanları sitesi</h1> 
                            <h2 id="ctl00_ctl00_body_header1_IAH2" class="fl txtLft truncate">staj ara eleman bul</h2> 
                            <h3 id="ctl00_ctl00_body_header1_IAH3" class="fr txtRght">staj, kariyer ve eğitimin rehber sitesi</h3> 
                        
                        </div> 
                        <div class="logo_container fl"> 
                            <a title="Anasayfa" href="http://localhost/Internship/"> 
                                <div> 
                                    <span>StajBul</span> 
                                </div> 
                            </a> 
                        </div> 
                        <?php
                        if(isset($loggedIn) && !$loggedIn){
                            ?>
                            <div class="clearfix" style="padding:0 7px 0 0;"> 
                                <form method="post" action="http://localhost/Internship/index.php/loginController/login"> 
                                <div id="Login" class="cont_signin_tools fr"> 
                                            
                                    <div class="loginInputCont fr"> 
                                        <div class="clearfix"> 
                                            <input type="submit" name="login" value="" id="loginID" tabindex="4" class="submit_signin fr" /> 
                                            <div class="cont_txtBox_userpass fr"> 
                                                <input name="password" type="password" maxlength="32" size="12" id="passwordID" tabindex="2" class="applyDisplayText" /> 
                                            </div> 
                                            <div class="cont_txtBox_usermail fr"> 
                                                <input name="username" type="text" maxlength="64" size="12" id="usernameID" tabindex="1" class="applyDisplayText" /> 
                                            </div> 
                                        </div> 
                                        <div class="cont_lnk_signup_ia clearfix"> 
                                            <div class="fl clearfix forget"> 
                                                <div class="fl">  
                                                    <input id="rememberMe" type="checkbox" name="rememberMe" /> 
                                                </div> 
                                                <div class="fl forgetTxt"> 
                                                    <label>
                                                        Beni Hatırla</label> 
                                                </div> 

                                            </div>  
                                            <div class="fl cont_lnk_signupTools">
                                                <a href="" class="forgotPassLink"></a><a href="http://localhost/Internship/index.php/registerController/addUser">Yeni Üye Ol</a> 
                                            </div> 
                                        </div> 
                                    </div> 

                                </div> 
                                
                                </form> 
                            </div>
                                
                            <?php if (isset($loginError)): ?>
                        <div class="error"><?php echo $loginError; ?></div>
                            <?php endif; ?>
                        <?php } ?>
                        </div> 
                <?php
                    if(isset($loggedIn) && $loggedIn){
                        ?>
                        <div style="padding:0 7px 0 0;"> 
                            <div style="width: 300px; height: 70px; position: relative; bottom: 70px; left: 270px;">
                                <?php echo 'Hoşgeldiniz Sayın, '.$userName.'<br/>'; ?>
                                <?php echo '<a href="http://localhost/Internship/index.php/user/userInfo?id='.$userID.'" style="text-decoration: none; font-size: 11pt; line-height:25px;">Üye bilgilerim</a>'; ?>
                                <?php echo '<a style="text-decoration: none; font-size: 11pt; line-height:25px; margin-left: 30px;" href="http://localhost/Internship/index.php/loginController/logout"> Çıkış yap </a>'; ?>
                            </div>
                        </div>
                
                        <?php
                        //echo '<div style="width: 300px; height:70px;">';
                        //echo 'Hoşgeldiniz Sayın, '.$userName;
                        //echo '<a style="float:right; margin-right: 25px;" href="http://localhost/Internship/index.php/loginController/logout"> Çıkış yap </a>';
                        //echo '</div>';
                    }
                ?>
                </div>
            
                <div class="cont_topmenu">
                    <ul class="clearfix">
                        
                        <?php
                            
                        if (isset($topMenuItems))
                        {
                            $i = 0;
                            // Fill the menu items
                            foreach ($topMenuItems as $item) 
                            {
                                
                                if ($i == 0)
                                {
                                    echo '<li style="margin-left: 25px">';
                                }
                                else
                                {
                                    echo '<li>';
                                }
                                echo '<a href="'.$item->href.'" title="'.$item->title.'">'.$item->content.'</a>';
                                echo '</li>';
                                
                                if ($i < count($topMenuItems) - 1)
                                {
                                    echo '<li class="arrw_topmenu"></li>';
                                }
                                $i++;
                            }
                        }
                       else
                        {
                            // Menu items are not specified, show the default menu
                        ?>
                        <li style="margin-left: 25px"><a href="">Ana Sayfa</a></li>
                        <li class="arrw_topmenu"></li>
                        <li><a href="http://www.StajBul.com/IsIlanlari/Ilanlar.aspx">staj İlanları</a></li>
                        <li class="arrw_topmenu"></li>
                        <li class="pstnRltv"><a href="http://www.StajBul.com/BasvuruAraclari/Default.aspx">Benim Sayfam</a>

                        </li>
                        <li class="arrw_topmenu"></li>
                        <li><a href="http://www.StajBul.com/BasvuruAraclari/Ozgecmis/OzgecmisListesi.aspx?mode=1">Özgeçmiş Oluştur</a></li>
                        <li style="float: right !important; margin-right: 25px"><a href="http://www.StajBul.com/KariyerKilavuzu/">staj Yaşamı</a></li>
                        <li style="float: right !important; margin-right: 25px" class="arrw_topmenu fr"></li>
                     
                        <?php } ?>
                    </ul>
                </div>

<div class="hmain-bottom">
    <div class="clearfix userWallWrapper">
        <div class="fl userWallLeftColumn">
            <div class="clearfix userPicWrapper pstnRltv">
                <img src="<?php if(isset($imgPath)) echo $imgPath;?>defaultPhoto.jpg" alt="" />
                <a href="/Araclar/FotoEkle.aspx" title="Fotoğrafı güncellemek için tıklayınız" class="userPicEditBttn"></a>
                <div>
                    <span><?php if (isset ($username)) echo $username; ?></span>
                    <br />
                    <a href="../fileUploadController/imageUpload">Fotoğraf Güncelle</a>
                </div>
            </div>
           

            <div id="Div1">
                <?php
                
                if (isset($userID, $currentUserID))
                {
                    
                    if ($userID == $currentUserID):
                        ?>
                        <ul class="menuList_04">
                            <li><a href="/BasvuruAraclari/Mesajlarim/GelenMesajlar.aspx" class="">
                                Mesajlarım</a></li>
                        </ul>
                        <?php
                    endif;
                        
                }
                ?>
            </div>
        </div>
         <div class="fl userSignupCenterColumn">
            <div class="clearfix blueHeaderCont">
                <div>
                <div class="clearfix blueHeaderCont">
                    <div class="fl blueHeaderLeft">
                        Kullanıcı Bilgileri
                    </div>
                    <div class="fr blueHeaderRight">
                    </div>
                </div>
                <div class="dataContBlueBorder">
                    <div class="userSignupWrapper">
                    
                    <div class="numberFormWrapper clearfix webent_numberFormWrapper">    
                        <div class="formHeadTxt bgStep01">
                            <h4> Kişisel Bilgiler</h4>
                            
                        </div>
                        <div>
                            <table class="cvPRo_FormTbl" id="kullaniciTbl" width="650" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                <tr>
                                <td width="130">
                                <label> Kullanıcı Adı / E-posta</label>
                                </td>
                                <td style="padding-right: 0 !important">
                                <div id="ctl00_ctl00_ctl00_body_body_CenterColumn_txtUserName" class="txt05 txtBld fl color02" style="margin-top:0px"><?php if(isset($email)) echo $email;?></div>
                                </td>
                                </tr>
                                
                                <tr>
                                <td width="130">
                                <label> Ad   :</label>
                                </td>
                                <td style="padding-right: 0 !important">
                                <div id="ctl00_ctl00_ctl00_body_body_CenterColumn_txtUserName" class="txt05 txtBld fl color02" style="margin-top:0px"><?php if(isset($name)) echo $name;?></div>
                                </td>
                                </tr>
                                
                                <tr>
                                <td width="130">
                                <label> Soyad   :</label>
                                </td>
                                <td style="padding-right: 0 !important">
                                <div id="ctl00_ctl00_ctl00_body_body_CenterColumn_txtUserName" class="txt05 txtBld fl color02" style="margin-top:0px"><?php if(isset($surname)) echo $surname;?></div>
                                </td>
                                </tr>
                                
                                <tr>
                                <td width="130">
                                <label> Doğum Tarihi   :</label>
                                </td>
                                <td style="padding-right: 0 !important">
                                <div id="ctl00_ctl00_ctl00_body_body_CenterColumn_txtUserName" class="txt05 txtBld fl color02" style="margin-top:0px"><?php if(isset($birthday)) echo $birthday;?></div>
                                </td>
                                </tr>
                                
                                <tr>
                                <td width="130">
                                <label> Telefon No   :</label>
                                </td>
                                <td style="padding-right: 0 !important">
                                <div id="ctl00_ctl00_ctl00_body_body_CenterColumn_txtUserName" class="txt05 txtBld fl color02" style="margin-top:0px"><?php if(isset($phone)) echo $phone;?></div>
                                </td>
                                </tr>
                                
                                <tr>
                                <td width="130">
                                <label> Kayıt Tarihi   :</label>
                                </td>
                                <td style="padding-right: 0 !important">
                                <div id="ctl00_ctl00_ctl00_body_body_CenterColumn_txtUserName" class="txt05 txtBld fl color02" style="margin-top:0px"><?php if(isset($regDate)) echo $regDate;?></div>
                                </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="userForm_Hr_GrayLine">
                            <hr />
                        </div>
                        <div class="formHeadTxt bgStep01">
                            <h4> Adres Bilgileri</h4>
                            
                        </div>
                        <div class="userForm_Hr_GrayLine">
                            <hr />
                        </div>
                        <div style="margin-left:35px;">
                        Adres: <?php if(isset($addressName)&&isset($cityName)&&isset($stateName))
                            {
                                echo $addressName." ".$stateName." ".$cityName." Türkiye";
                            }
                            else
                            {
                                echo ' Kullanıcıya ait adres bilgisi bulunamadı.';
                            }
                            ?><br/>
                        </div>
                        <div class="formHeadTxt bgStep01"><h4>Şirketler</h4></div>
                        
                            <?php
                            if (count($companies) > 0)
                            {
                                ?>
                                <table cellpadding="0" cellspacing="0" class="companyListTbl">
                                <tr>
                                        <th class="column00 pdgnZero">
                                                &nbsp;
                                        </th>
                                        <th class="column01">
                                                <a id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl00_lnkSortByPosition" class="lnkBg_02_z_a" onclick="reSearch([&#39;Sort&#39;,&#39;4&#39;]);" href="javascript:void(0);">Şirket adı</a>
                                        </th>
                                </tr>
                                <?php
                                foreach($companies as $company)
				{    
                                    ?>
                                    <tr data-ad-id='372060' >
                                    <td class="brdBttm01 pdgnZero">&nbsp;</td>
                                    <td class="positionNameTd">
                                    <?php
                                    echo '<a href="../companyController/showCompany?companyID='.$company->CompanyID.'">';                     
                                    echo $company->CompanyName;
                                    echo '</a></td>';
				}
                                echo '</table>';
                            }
                            else
                            {
                                echo '<div style="margin-left: 35px">Kullanıcıya kayıtlı şirket bulunamadı.</div>';
                            }
                            ?>
                                        <div class="userForm_Hr_GrayLine">
                        <hr />
                    </div>
                                        <div style="padding-bottom: 100px"></div>
                    
            
            </div>

                    </div>
                </div>
                <div class="clearfix LightBlueBottomCont">
                    <div class="fl LightBlueBottomLeft">
                        &nbsp;
                    </div>
                    <div class="fr LightBlueBottomRight">
                    </div>
                </div>
            </div>
            </div>
             
         </div>

    </div>
</div>

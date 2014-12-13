
<div class="hmain-bottom">
    <div class="clearfix userWallWrapper">
        <div class="fl userWallLeftColumn">
            <div class="clearfix userPicWrapper pstnRltv">
                <img src="<?php if(isset($imgPath)) echo $imgPath;?>defaultPhoto.jpg" alt="" />
                <a href="/Araclar/FotoEkle.aspx" title="Fotoğrafı güncellemek için tıklayınız" class="userPicEditBttn"></a>
                <div>
                    <span>Şirketin Adı</span>
                    <br />
                    <a href="../fileUploadController/imageUpload">Fotoğraf Güncelle</a>
                </div>
            </div>
           

            <div id="Div1">
                <ul class="menuList_04">
                    <li><a href="/BasvuruAraclari/Mesajlarim/GelenMesajlar.aspx" class="">
                        Mesajlarım</a></li>
                </ul>
            </div>
        </div>
         <div class="fl userSignupCenterColumn">
            <div class="clearfix blueHeaderCont">
                <div class="fl blueHeaderLeft">Bilgiler</div>
                <div>
                <div class="clearfix blueHeaderCont">

                    <div class="fr blueHeaderRight">
                    </div>
                </div>
                <div class="dataContBlueBorder">
                    <div class="userSignupWrapper">
                    
                    <div class="numberFormWrapper clearfix webent_numberFormWrapper">    
                        <div class="formHeadTxt bgStep01">
                            <h4> Şirket Bilgileri</h4>
                            
                        </div>
                        <div style="margin-left:35px;">
                            Şirketin Adı: <?php echo $companyName;?><br/>
                            Şirketin Patronu: <?php echo $bossName." ".$bossSurname;?> <br/>
                        </div>
                        <div class="userForm_Hr_GrayLine">
                            <hr />
                        </div>
                        <div class="formHeadTxt bgStep01">
                            <h4> Adres Bilgileri</h4> </div>
                        <?php
                            
                        if (isset($addressInfo) && count($addressInfo) > 0)
                        {
                            foreach ($addressInfo as $address) {
                                
                                echo '<div style="margin-left:35px;">';
                                ?>
                                Adres:<?php echo $address->Address;?><br/>
                                Semt:<?php echo $address->StateName;?><br/>
                                Şehir:<?php echo $address->CityName;?><br/>
                                Ülke: Türkiye
                                <?php
                                echo '</div>';
                                echo '<div class="userForm_Hr_GrayLine">
                                        <hr />
                                      </div>';
                            }
                        }
                        else
                        {
                            echo '<div style="margin-left:35px;">Şirkete kayıtlı adres bulunamadı.</div>';
                        }
                        ?>
                            
                                
                            
                       
                        <div class="userForm_Hr_GrayLine">
                            <hr />
                        </div>
                        <div class="formHeadTxt bgStep01"><h4>Şirketteki İşler</h4></div>
                        <div>
                            
                            <?php
                                if(isset($jobs) && count($jobs) > 0){
                                    ?>
                                    <table cellpadding="0" cellspacing="0" class="companyListTbl">
                                    <tr>
                                            <th class="column00 pdgnZero">
                                                    &nbsp;
                                            </th>
                                            <th class="column01">
                                                    <a href="#">Staj İlanı</a>
                                            </th>
                                    </tr>
                                    
                                    <?php
                                    
                                    if(isset($jobs)){
                                        foreach($jobs as $job)
                                        {    
                                            ?>
                                            <tr data-ad-id='372060' >
                                            <td class="brdBttm01 pdgnZero">&nbsp;</td>
                                            <td class="positionNameTd">
                                            <?php
                                            echo '<a href="../InternshipJob/job?id='.$job->InternshipJobID.'">';                     
                                            echo $job->JobTitle;
                                            if(isset($userType) && $userType == 'Boss'){
                                                echo '<div style="float:right;">
                                                     <a href="http://localhost/Internship/index.php/companyController/deleteJob/?jobID='.$job->InternshipJobID.'&companyID='.$companyID.'">işi sil</a>
                                                     </div>';
                                                }
                                            echo '</a></td>';
                                            
                                        }
                                        echo '</table>';
                                        }
                                        else
                                        {
                                            echo '<div style="margin-left:35px;">Şirkete kayıtlı iş bulunamadı.</div>';
                                        }
                                    }
                                    ?>
                                  
                        </div>
                  
                        <div class="userForm_Hr_GrayLine">
                        <hr />
                        </div>
                   
                    <div class="formHeadTxt bgStep01">
                        Şirkete Yapılan Yorumlar
                    </div>  
                    <div style="margin-left: 35px;">
                        <?php
                        if (isset($commentInfo) && !empty($commentInfo))
                        {
                            foreach ($commentInfo as $info){
                                echo $info->Username."<BR>";
                                echo $info->CommentTitle."<BR>";
                                echo $info->CommentText."<BR>"; 
                                echo $info->CommentDate."<BR>";
                                echo '<div class="userForm_Hr_GrayLine"><hr /></div>';
                            }
                        }
                        else echo '<div>Şirkete kayıtlı yorum bulunamadı.</div><div class="userForm_Hr_GrayLine"><hr /></div>';
                        ?>
                    </div><br/>
                    <form method="post" action="http://localhost/Internship/index.php/companyController/AddCompanyComment?companyID=<?php echo $companyID;?>">
                        <div class="formHeadTxt bgStep01">
                        Yorum Yap
                        </div>
                        
                        <table cellpadding="0" cellspacing="0" border="0" class="cvPRo_FormTbl">                      
                            <tr>
                            <td width="130" valign="top">
                                <label>Yorum Başlığı</label>
                            </td>

                            <td>
                                <input name="commentTitle" type="text" maxlength="250" id="companyNameID" style="width:400px;" />
                            </td>                                                     
                            </tr>
                        </table>

                        <table cellpadding="0" cellspacing="0" border="0" class="cvPRo_FormTbl">
                            <tr>
                                <td width="130" valign="top">
                                    <label>Yorum İçeriği</label>
                                </td>
                                <td>
                                    <textarea name="commentText" rows="10" cols="70"></textarea>
                                </td>                                                                   
                            </tr>
                        </table>
                        <div class="clmnWdth clearfix">
                            <div class="fl clmnSide">
                                &nbsp;
                            </div>
                            <input type="submit" value="Gönder" />

                                <div class="fl clmnSide txtRght">
                                    &nbsp;
                                </div>
                        </div>

                    </form>
                        <div class="formHeadTxt bgStep01">
                        Facebook İle Yorum Yap
                        </div>
                    <div class="fb-comments" data-href="<?php echo $_SERVER['PATH_INFO']; ?>" data-width="700" data-num-posts="5"></div>
                    
                    <div class="userForm_Hr_GrayLine"><hr /></div>                    
                    <?php 
                        if (isset($errorState, $message))
                        {
                            echo '<div class="';
                            echo ($errorState == 1) ? 'error' : 'notifySuccess';
                            echo '">'.$message.'</div>';
                        }
                    ?>
                  <?php if(isset($userType) && $userType=='Boss') {?>
                    <div class="formHeadTxt bgStep01">
                        Yeni İş Kaydı
                    </div>
                        <form action="../companyController/addInternshipJob?companyID=<?php echo $companyID;?>" method="post">
                    <table cellpadding="0" cellspacing="0" border="0" class="cvPRo_FormTbl">
                        
                        <tr>
                        <td width="130" valign="top">
                            <label>İşin Adı</label>
                        </td>
                        
                        <td>
                            <input name="jobName" type="text" maxlength="250" id="companyNameID" style="width:400px;" />
                        </td>                                                     
                        </tr>
                    </table>
                                             
                    <table cellpadding="0" cellspacing="0" border="0" class="cvPRo_FormTbl">
                    <tr>
                        <td width="130" valign="top">
                            <label>İşin İçeriği</label>
                        </td>
                        <td>
                            <textarea name="jobContent" rows="10" cols="70"></textarea>
                        </td>                                                                   
                    </tr>
                    </table>
            
            <div class="recaptchaWrapper">
                <div id="divRecaptchaErrorBorder" class="">

                    <div class="txtCntr" style="width: 376px">
                        <span id="scvCaptcha" class="ybError" customcontroltovalidate="rcpRecaptcha" style="visibility:hidden;">Onay kodu hatalı</span>
                    </div>
                </div>
            </div>
            <div class="clmnWdth clearfix">
                <div class="fl clmnSide">
                    &nbsp;
                </div>
                <input type="submit" value="Kaydet" />
								
                    <div class="fl clmnSide txtRght">
                        &nbsp;
                    </div>
            </div>
            <?php } ?>
            </form>

            
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

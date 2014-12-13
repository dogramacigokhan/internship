<?php 
if (isset($deletedUserID))
{
    echo '<script type="text/javascript">alert("'.$deletedUserID.' id\'li kullanıcı silindi.")</script>';
}
?>
<div class="hmain-bottom">
    <div class="clearfix userWallWrapper">
        <div class="fl userWallLeftColumn">
           
            <div style="font-size: 12pt;">
                        Yönetici Paneli
                        </div><br/>
            <div id="Div1">
                <ul class="menuList_04">
                    <li><a href="http://localhost/Internship/index.php/admin/index?m=1" class="">
                        Üye Listesi</a></li>
                    <li><a href="http://localhost/Internship/index.php/admin/index?m=2" class="">
                        En çok yorumlanan şirketler</a></li>
                    <li><a href="http://localhost/Internship/index.php/admin/index?m=3" class="">
                        En çok yorumlanan ilanlar</a></li>
                    <li><a href="http://localhost/Internship/index.php/admin/index?m=4" class="">
                        Üye Listesi Raporu oluştur</a></li>
                    <li><a href="http://localhost/Internship/index.php/admin/index?m=5" class="">
                        Yorumu çok olan ilanları raporla</a></li>
                    <li><a href="http://localhost/Internship/index.php/admin/index?m=6" class="">
                        Yorumu çok olan şirketleri raporla</a></li>
                    <li><a href="http://localhost/Internship/index.php/admin/index?m=7" class="">
                        İstatistikler</a></li>
                </ul>
            </div>
        </div>
         <div class="fl userSignupCenterColumn">
            <div class="clearfix blueHeaderCont">
                <div>
                <div class="clearfix blueHeaderCont">
                    <div class="fl blueHeaderLeft">
                        Yönetici Paneli
                    </div>
                    <div class="fr blueHeaderRight">
                    </div>
                </div>
                <div class="dataContBlueBorder">
                    <div class="userSignupWrapper">
                    
                    <div class="numberFormWrapper clearfix webent_numberFormWrapper"> 
                        
                       <?php
                
if ($m == 1 && count($users) > 0)
{
    // Users
                                ?>
                                <table cellpadding="0" cellspacing="0" class="userTbl">
                                <tr>
                                        <th class="column00 pdgnZero">
                                                &nbsp;
                                        </th>
                                        <th class="column01">
                                                <a>Kullanıcı Adı</a>
                                        </th>
                                        <th class="column02">
                                                
                                                <a>Ad</a></th>
                                        <th class="column03">
                                                &nbsp;
                                        </th>
                                        <th class="column04">
                                              
                                                <a>Soyad</a></th>
                                        <th class="column05">
                                              
                                                <a>Email</a></th>
                                        <th class="column05">
                                              
                                                <a>Cinsiyet</a></th>
                                        <th class="column05"><a>Sil</a></th>
                                        <th class="column06">
                                                &nbsp;
                                        </th>
                                        <th class="column00 pdgnZero">
                                                &nbsp;
                                        </th>
                                </tr>
                                <?php
                                foreach ($users as $user):
    ?>
<tr data-ad-id='372060' >
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
    <td class="positionNameTd">
        <a href="<?php echo 'http://localhost/Internship/index.php/user/userInfo?id='.$user->UserID; ?>"
            class="positionName" >
            <?php echo $user->Username; ?></a>
    </td>
    <td class="column02">
        <?php echo $user->Name; ?>
    </td>
    <td class="txt00"><span class="blank">&nbsp;</span></td>
    <td class="column04">
        <?php echo $user->Surname; ?>
    </td>
    <td>
        <?php echo $user->Email; ?>
    </td>
    
    <td>
        <?php echo ($user->SexID == 1) ? 'Erkek' : 'Kadın'; ?>
    </td>
    <td><a href="http://localhost/Internship/index.php/admin/index?m=1&du=<?php echo $user->UserID; ?>"><img src="http://localhost/Internship/Images/cop.png" /></a></td>
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
</tr>
		
<?php 
    endforeach;
                                ?>
                                </table>
                                <?php
                            }
if ($m == 2 && count($mostCommentedCompanies) > 0)
{
    // Users
                                ?>
                                <table cellpadding="0" cellspacing="0" class="userTbl">
                                <tr>
                                        <th class="column00 pdgnZero">
                                                &nbsp;
                                        </th>
                                        <th class="column01">
                                                <a>Şirket ID</a>
                                        </th>
                                        <th class="column02">
                                                
                                                <a>Şirket Adı</a></th>
                                        <th class="column03">
                                                &nbsp;
                                        </th>
                                        <th class="column04">
                                              
                                                <a>Şirket Patronu</a></th>
                                        <th class="column05">
                                              
                                                <a>Toplam Yorum</a></th>
                                        <th class="column06">
                                                &nbsp;
                                        </th>
                                        <th class="column00 pdgnZero">
                                                &nbsp;
                                        </th>
                                </tr>
                                <?php
                                foreach ($mostCommentedCompanies as $company):
    ?>
<tr data-ad-id='372060' >
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
    <td class="positionNameTd">
        <a href="<?php echo 'http://localhost/Internship/index.php/companyController/showCompany?id='.$company->CompanyID; ?>"
            class="positionName" >
            <?php echo $company->CompanyID; ?></a>
    </td>
    <td class="column02">
        <a href="<?php echo 'http://localhost/Internship/index.php/companyController/showCompany?companyID='.$company->CompanyID; ?>"
            class="positionName" >
            <?php echo $company->CompanyName; ?></a>
    </td>
    <td class="txt00"><span class="blank">&nbsp;</span></td>
    <td class="column04">
        <a href="<?php echo 'http://localhost/Internship/index.php/user/userInfo?id='.$company->UserID; ?>"
            class="positionName" >
            <?php echo $company->UserName; ?></a>
    </td>
    <td>
        <?php echo $company->Count; ?>
    </td>
    
   
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
</tr>
		
<?php 
    endforeach;
                                ?>
                                </table>
                                <?php
                            }
if ($m == 3 && count($mostCommentedJobs) > 0)
{
    // Users
                                ?>
                                <table cellpadding="0" cellspacing="0" class="userTbl">
                                <tr>
                                        <th class="column00 pdgnZero">
                                                &nbsp;
                                        </th>
                                        <th class="column01">
                                                <a>İlan ID</a>
                                        </th>
                                        <th class="column02">
                                                
                                                <a>İlan Adı</a></th>
                                        <th class="column03">
                                                &nbsp;
                                        </th>
                                        <th class="column04">
                                              
                                                <a>Şirket</a></th>
                                        <th class="column05">
                                              
                                                <a>Toplam Yorum</a></th>
                                        <th class="column06">
                                                &nbsp;
                                        </th>
                                        <th class="column00 pdgnZero">
                                                &nbsp;
                                        </th>
                                </tr>
                                <?php
                                foreach ($mostCommentedJobs as $job):
    ?>
<tr data-ad-id='372060' >
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
    <td class="positionNameTd">
        <a href="<?php echo 'http://localhost/Internship/index.php/InternshipJob/job?id='.$job->InternshipJobID; ?>"
            class="positionName" >
            <?php echo $job->InternshipJobID; ?></a>
    </td>
    <td class="column02">
        <a href="<?php echo 'http://localhost/Internship/index.php/InternshipJob/job?id='.$job->InternshipJobID; ?>"
            class="positionName" >
            <?php echo $job->JobTitle; ?></a>
    </td>
    <td class="txt00"><span class="blank">&nbsp;</span></td>
    <td class="column04">
        <a href="<?php echo 'http://localhost/Internship/index.php/companyController/showCompany?companyID='.$job->CompanyID; ?>"
            class="positionName" >
            <?php echo $job->CompanyName; ?></a>
    </td>
    <td>
        <?php echo $job->Count; ?>
    </td>
    
   
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
</tr>
		
<?php 
    endforeach;
                                ?>
                                </table>
                                <?php
                            }    
if ($m == 4)
{
    ?>
        <form action="http://localhost/Internship/index.php/admin/index" method="post">
            
            <input type="hidden" name="create_users_pdf" value="1"/>
            <p>Kullanıcı listesi raporu oluştur. <input type="submit" value="Oluştur" /></p>
        </form>

    <?php
}
if ($m == 5)
{
    ?>
        <form action="http://localhost/Internship/index.php/admin/index" method="post">
            
            <input type="hidden" name="create_most_job_pdf" value="1"/>
            <p>Yorumu çok olan ilanları raporla. <input type="submit" value="Oluştur" /></p>
        </form>

    <?php
}
if ($m == 6)
{
    ?>
        <form action="http://localhost/Internship/index.php/admin/index" method="post">
            
            <input type="hidden" name="create_most_company_pdf" value="1"/>
            <p>Yorumu çok olan şirketleri raporla. <input type="submit" value="Oluştur" /></p>
        </form>

    <?php
}
if ($m == 7)
{
    ?>
        <form action="../../index.php/Istatistik/index" id="istatistikForm">
            <select id="secenekler">
                
                <option value="-1">Lütfen bir istatistik seçin</option>
                <option value="1">Şirketlere en çok yorum yapan kullanıcı</option>
                <option value="2">İşlere en çok yorum yapan kullanıcı</option>
                <option value="3">Toplam kullanıcı sayısı</option>
                <option value="4">Toplam şirket sayısı</option>
                <option value="5">Toplam şirket sahibi sayısı</option>
                <option value="6">Kullanıcıların şirket sahibi olma yüzdesi</option>
                <option value="7">Şirket sahiplerinin ortalama şirket sayısı</option>
                <option value="8">Toplam staj başvurusu</option>
                <option value="9">Kaydolan kullanıcıların başvuru oranı</option>
                <option value="10">En çok başvurusu olan üye</option>
            </select>
            <input type="submit" value="Sorgula" />
        </form>
        <div id="istatistikSonuc" style="margin-top: 10px; font-size: 12pt; font-family: 'Segoe UI'; color: #666666; font-weight: bold;"></div>


    <?php
}                            
?>
                        
                        
                          <div class="userForm_Hr_GrayLine">
                        <hr />
                    </div>
                        <div style="padding-bottom: 100px;"></div>
            
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
</div>
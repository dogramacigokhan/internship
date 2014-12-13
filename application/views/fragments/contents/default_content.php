<?php



?>

<div class="searchArea clearfix">
    <div class="fl searchArea_leftCont">
        <div class="searchArea_left">
        <div class="sloganTxt">
            <span>
                <?php if (isset($jobCount)) echo $jobCount; else echo 'Binlerce';   ?></span> staj ilanı arasında arama yap! <br />
        </div>
        <div class="clearfix bgHomeSearchBar" id="searchBar">
            <form method="get" action="http://localhost/Internship/index.php/search/searchInternship">
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
                                <input name="keyword" id="txtSearchKeyword" type="text" value="Anahtar kelime" autocomplete="off" onclick="javascript:void(0);"
                                    onfocus="fnKeywordsCheck(this);" onblur="fnKeywordsReplace(this)" maxlength="50"
                                    title="Aramak istediğin anahtar kelimenin ilk 3 harfini yaz; pozisyon adı, sektör ve staj alanı önerilerine ulaş." /></td>
                        </tr>
                    </table>
                </div>
                <?php
                foreach ($cities as $city)
                {
                    //echo $city->CityID. ' ';
                }
                ?>
                <div class="cont_combobox_search fl">
                    <select id="SearchCityList" name="city" size="1">
                        <option value="-1">Tüm Şehirler</option>
                        <option value="1">Adana</option>
                        <?php 
                            if (isset($cities))
                            {
                                for ($i = 1; $i < count($cities); $i++)
                                {
                                    echo '<option value="' . $cities[$i]->CityID . '">' . $cities[$i]->CityName . '</option>';
                                }
                            }
                        ?>	
                    </select>
                </div>
                <input type="submit" class="submit_search fl" value="" />
                <!--<a class="submit_search fl" href="#" onclick="fnSearch();return false;"></a>-->
            </form>
        </div>
        <div class="cont_lnk_joblist clearfix pstnRltv">
        </div>
    </div>
    </div>
    <div class="fr">
        <iframe width="302" height="250" src="https://www.youtube.com/embed/lT50drXAjdo?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    
</div>
<div id="SonEklenen">
                        </div>
<table cellpadding="0" cellspacing="0" class="jobListTbl" id="HomeJobsTbl">
			<tr>
				<th class="column00 pdgnZero">
					&nbsp;
				</th>
				<th class="column01">
					<a id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl00_lnkSortByPosition" class="lnkBg_02_z_a" onclick="reSearch([&#39;Sort&#39;,&#39;4&#39;]);" href="javascript:void(0);">Staj Tanımı</a>
				</th>
				<th class="column02">
					<a id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl00_lnkSortByLocation" class="lnkBg_02_z_a" onclick="reSearch([&#39;Sort&#39;,&#39;8&#39;]);" href="javascript:void(0);">Şehir</a>
				</th>
				<th class="column03">
					&nbsp;
				</th>
				<th class="column04">
					<a id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl00_lnkSortByCompanyName" class="lnkBg_02_z_a" onclick="reSearch([&#39;Sort&#39;,&#39;6&#39;]);" href="javascript:void(0);">Şirket Adı</a>
				</th>
				<th class="column05">
					<a id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl00_lnkSortByOrderDate" class="lnkBg_02_z_a" onclick="reSearch([&#39;Sort&#39;,&#39;1&#39;]);" href="javascript:void(0);">Yayın Tarihi</a>
				</th>
				<th class="column06">
					&nbsp;
				</th>
				<th class="column00 pdgnZero">
					&nbsp;
				</th>
			</tr>
    <?php 
if (isset($jobs)):
        
     foreach ($jobs as $job):
    ?>
<tr data-ad-id='372060' >
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
    <td class="positionNameTd">
        <a href="<?php echo 'http://localhost/Internship/index.php/InternshipJob/job?id='.$job->InternshipJobID; ?>"
            class="positionName" >
            <?php echo $job->JobTitle; ?></a>
    </td>
    <td class="column02">
        <?php echo $job->CityName; ?>
    </td>
    <td class="txt00"><span class="blank">&nbsp;</span></td>
    <td class="column04">
        <!--
        <a href="/Is_Ilanlari/ozentek_group_sihhi_ve_isi_tesisat_sistemleri_ithalat_ihracat_sanayi_ticaret_limited_sirketi/Customer/116129" class="companyName" title="ÖZENTEK GROUP SIHHİ VE ISI TESİSAT SİSTEMLERİ İTHALAT İHRACAT SANAYİ TİCARET LİMİTED ŞİRKETİ">ÖZENTEK GROUP SIHHİ VE ISI T...</a>
        -->
        <!-- url rewrite hack -->
        <a href="http://localhost/Internship/index.php/companyController/showCompany?companyID=<?php echo $job->CompanyID; ?>" class="companyName" title="<?php echo $job->CompanyName; ?>"><?php echo $job->CompanyName; ?></a>
        
    </td>
    <td style="text-align: center;">
        Yeni
    </td>
    <td class="listViewImgIndex">
	<span id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl01_ResultTypeStandart_pnlQuickApply">
	
        </span>
    </td>
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
</tr>
		
<?php 
    endforeach;
endif;
    ?>
</table>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>


        <div class="jobListHomeCont clearfix">
            <div id="displayContent">
                
                <div class="clearfix jobListTblToolsCont">
                    <div class="fl jobListInfoTxt">
                        <span class="txtBld">
                           <?php if (isset($pageCount)) echo $pageCount; ?>
                        </span> sayfada toplam <span class="txtBld"> <?php if (isset($jobCount)) echo $jobCount; ?> ilan</span> listelendi.
                    </div>
                    <div class="fl jobListStyleChoice">
                        
                    </div>
                    <div class="fr clearfix jobListPagingCont">
                        <!-- sayfalama -->
                            
<!-- paging -->
<div class="pagerDiv">
    <!--<a href="javascript:void(0);" id="ctl00_ctl00_body_body_AdListPaging2_btnPreviousPage" class="bluedisabled" title="Önceki Sayfa">&nbsp;</a> -->
    
    <?php 
        // Pagination
        $displayCount = 5;
        $extraArgs = 'keyword='.$keyword.'&city='.$cityID;
        $pagesToShow = array();
        
        if ($currentPage <= $pageCount && $currentPage > 0)
        {
            for ($i = $currentPage - 2; $i < $currentPage; $i++)
            {
                if ($i > 0) $pagesToShow[] = $i;
            }
            $firstItems = count($pagesToShow);
            for ($i = 0, $j = $currentPage; $i < $displayCount - $firstItems; $i++, $j++)
            {
                //echo ' -j '.$j.' PageCount '.$pageCount.' Count '.count($pagesToShow);
                if ($j < $pageCount + 1) $pagesToShow[] = $j;
            }
            
            foreach ($pagesToShow as $pageNum) {
                echo '<a href="'.$baseUrl.'?p='.$pageNum.'&'.$extraArgs.'" id="ctl00_ctl00_body_body_AdListPaging2_rptPaging_ctl00_pageItem" ';
                
                if ($pageNum == $currentPage)
                    echo 'class="pager_selected">';
                else
                    echo 'class="pager">';
                
                echo $pageNum;
                echo '</a>';
            }
        }
        
    ?>
   
</div>
<!-- end paging -->

                            <div class="fr">
                                <span id="ctl00_ctl00_body_body_upUpperPagingControls">

                                    </span>
                            </div>
                        </div>
                    </div>
                
                <!-- Sol taraf menu basliyor -->
                <div class="fl jobListLeftCont">
                    
                            <div class="menuList_01">
                                <div class="listHeadBar">
                                    <h2>
                                        Seçtiğim Kriterler</h2>
                                </div>
                                <div class="listContent">
                                    <ul>
                        
                            <li class='clearfix home_catg'>
                                <div class="fl truncate">
                                    Şehir</div>
                            </li>
                        
                            <li class='clearfix sub_catg'>
                                <div class="fl truncate">
                                    <?php 
                                    if (isset($cityID, $city))
                                    {
                                        if ($cityID == -1) echo 'Tüm Şehirler';
                                        else echo $city[0]->CityName;
                                    }
                                    ?></div>
                            </li>
                        
                            <li class='clearfix home_catg'>
                                <div class="fl truncate">
                                    Arama Terimi: 
                            <?php if (isset($keyword)) { 
                                    if ($keyword == '%')
                                        echo 'Herşey';
                                    else
                                        echo $keyword;
                                    }?></div>
                            </li>
                        
                            </ul> </div>
                            <div class="listBottomBar">
                            </div>
                            </div>
                        
                    </div>
                <!-- Sol taraf menu bitti -->
                <!-- orta kısım ilan listeleme basliyor -->
                <div class="fl jobListRightCont">
                    
		<div class="jobListTopBar">
		</div>
		<table cellpadding="0" cellspacing="0" class="jobListTbl">
			<tr>
				<th class="column00 pdgnZero">
					&nbsp;
				</th>
				<th class="column01">
					<a id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl00_lnkSortByPosition" class="lnkBg_02_z_a" onclick="reSearch([&#39;Sort&#39;,&#39;4&#39;]);" href="javascript:void(0);">İş Tanımı</a>
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
        <a href="<?php echo '../internshipJob/job?id='.$job->InternshipJobID; ?>"
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
        
		
	
<!--		
<tr data-ad-id='172706' >
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
    <td class="positionNameTd">
        <a href="http://www.yenibiris.com/teleservice_international_telefon_onarim_ve_tic_ltd_sti/onarim_teknisyeni/172706.ilan?Keyword=bilgisayar&AdLocID=829679"
            class="positionName" >
            Onarım Teknisyeni</a>
    </td>
    <td class="column02">
        Ankara
    </td>
    <td class="txt00"><span class="blank">&nbsp;</span></td>
    <td class="column04">
        <a href="/Is_Ilanlari/teleservice_international_telefon_onarim_ve_tic_ltd_sti/Customer/10391" class="companyName" title="TELESERVICE INTERNATIONAL TELEFON ONARIM ve TİC. LTD. Şti">TELESERVICE INTERNATIONAL TE...</a>
        

    </td>
    <td>
        24.12.2012
    </td>
    <td class="listViewImgIndex">
	<span id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl50_ResultTypeStandart_pnlQuickApply">
			<img id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl50_ResultTypeStandart_imgViewApply" src="../Images/i_view_off.png" />&nbsp;
			<img id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl50_ResultTypeStandart_imgSave" title="Saklı İlanım" src="../Images/i_save_off.png" alt="Saklı İlanım" />&nbsp;
		
			<input type="image" name="ctl00$ctl00$body$body$UCSearchResult$rptAds$ctl50$ResultTypeStandart$btnQuickApply" id="ctl00_ctl00_body_body_UCSearchResult_rptAds_ctl50_ResultTypeStandart_btnQuickApply" src="../Images/i_quickapply_on.png" style="border-width:0px;height:20px;width:21px;" />
		</span>
    </td>
    <td class="brdBttm01 pdgnZero">&nbsp;</td>
</tr>
-->		
		
        
		
	
		</table>
		<div class="pstnRltv">
			<div class="jobListBottomBar">
			</div>
		</div>
	
                    <!-- Firma Bilgileri-->
                    
                    <!-- /Firma Bilgileri-->
                    <br clear="all" />
                    
                </div>
                <!-- orta kısım ilan listeleme bitti -->
            </div>
        </div>
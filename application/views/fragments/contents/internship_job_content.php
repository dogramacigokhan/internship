<?php


?>

<div class="fl generalLeftColumn forOtherTemplate">
            <div class="clearfix jobDetailTopTools" id="ctl00_ctl00_ctl00_body_body_CenterColumn_jobDetailTopTools">
                <div class="fl">
                    <?php if($loggedIn){
                               if (isset($appliedBefore) && !$appliedBefore){ ?>
                                <form method="get" action="http://localhost/Internship/index.php/InternshipJob/apply">
                                    <input type="hidden" name="id" value="<?php echo $jobID; ?>" />
                                    <input type="submit" class="bttnJobApply" value="" style="border: none; cursor: pointer;" />
                                </form>
                                <?php }
                                else{ echo 'Bu ilana başvurdunuz.'; }} ?>
                </div>
                

            </div>
            
            <style>
      .adViewXslContent {  font:normal 12px Arial; color:#3b3b3b; padding-right:3px; padding-top:7px}
      .adViewXslContent .adViewXslHead { font:normal 13px/28px Arial; color:#5187a3; background-color:#E7F0F9; padding-left:10px }
      .adViewXslMrgnBttm { margin-top:11px; padding-left:10px}
      .adViewXslHandiCapped { float:right; margin:11px 7px 0 0; width:22px; height:20px; background:url("http://www.yenibiris.com/Assets/Images/Ilanlar/search_engelli_ilan_on.gif") no-repeat scroll 0 0;}
      .adViewXslContent ul { list-style:none; }
      .adViewXslPddng {padding:12px 10px}
      .jobDetailsWrapper { padding:11px 4px 11px 6px}
      .jobDetailsCompanyName {color:#5c8700; font:bold 17px/15px Arial; margin-top:6px}
    </style>
<div>
  <div class="clearfix blueHeaderCont">
      <div class="fl blueHeaderLeft"><?php if (isset($job)) echo $job->JobTitle; ?></div>
  </div>
  <div class="dataContBlueBorder">
    <div class="jobDetailsWrapper">
      <div class="clearfix">
        <div class="fl jobDetailsCompanyName"><?php if (isset($job)) echo $job->CompanyName; ?></div>
      </div>
      <div class="adViewXslContent">
      <div class="adViewXslHead">İş Tanımı</div>
        <div class="adViewXslPddng"><?php if (isset($job)) echo $job->JobContent; ?></div>
      </div>
        <div class="userForm_Hr_GrayLine">
            <hr />
        </div>
        <div class="formHeadTxt bgStep01">
            İşe Yapılan Yorumlar
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
            }else echo '<div class="userForm_Hr_GrayLine"><hr /></div>';
            ?>
        </div>
        <form method="post" action="http://localhost/Internship/index.php/InternshipJob/addJobComment?id=<?php echo $jobID?>">
             <div>
                       
                 <div class="formHeadTxt bgStep01">
                        Yorum Yap
                        </div>
                    <div style="margin-left: 35px">
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
                            <input type="submit" style="margin-left:280px;"value="Gönder" />

                                <div class="fl clmnSide txtRght">
                                    &nbsp;
                                </div>
                        </div>
                    </div>
                 
                 <div class="formHeadTxt bgStep01">
                        Facebook İle Yorum Yap
                        </div>
                    <div class="fb-comments" data-href="<?php echo $_SERVER['PATH_INFO']; ?>" data-width="700" data-num-posts="5"></div>
                     
             </div>
                    </form>
                </div>
              </div>
              <div class="clearfix LightBlueBottomCont">
                <div class="fl LightBlueBottomLeft"></div>
                <div class="fr LightBlueBottomRight"></div>
              </div>
            </div>

            
            <div class="clearfix jobDetailBottomTools" id="ctl00_ctl00_ctl00_body_body_CenterColumn_jobDetailBottomTools">
                <div class="fl">
                    
                </div>
                
                <div style="width:610px;" class="fr jobDetailLnkTools">
                    <div class="clearfix">
                        
                        
                        <div class="fr bg_jobDetailToolsRight">
                        </div>
                        <div class="fr clearfix bg_jobDetailToolsCenter">
                            
                        </div>
                        <div class="fr bg_jobDetailToolsLeft">
                            
                        </div>
                        <div class="fr clearfix likeFollowCont">
                                <div style="margin-left:2px" class="fr twttrFollow">
                                    <iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/follow_button.1355514129.html#_=1356445928821&amp;id=twitter-widget-0&amp;lang=tr&amp;screen_name=yenibiris&amp;show_count=false&amp;show_screen_name=false&amp;size=m" class="twitter-follow-button" style="width: 67px; height: 20px;" title="Twitter Follow Button" data-twttr-rendered="true"></iframe>
                                    <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
                                </div>
                                <div class="fr fb_like">
                                    <iframe scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:58px; height:21px;" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FKacanIsBuyukOlur&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=tahoma&amp;height=21&amp;appId=136253826463189&amp;locale=tr_TR"></iframe>
                                </div>
                            </div>
                    </div>
                    
                </div>
                
                </div>
        </div>
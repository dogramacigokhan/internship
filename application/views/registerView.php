<div class="clearfix">
    <div class="fl userSignupCenterColumn">
        <div>
            <form action="registerUser" method="post"> 
            <div class="clearfix blueHeaderCont">
                <div class="fl blueHeaderLeft">
                    Üyelik Bilgileri
                </div>
                <div class="fr blueHeaderRight">
                </div>
            </div>
            <div class="dataContBlueBorder">
                <div class="userSignupWrapper">
                        

                <div class="userSignupTopInfo">
                    <h4>
                    <div class="txtPddng02">
                        Tek adımda üyelik bilgilerini tamamla!
                    </div>
                </div>
                <div class="notifyError notifyMrgn" style="display:none;"><span>0 alan eksik veya yanlış</span></div><div id="SmartSummary" class="notifyError notifyMrgn" style="display:none;"></div>
                <div class="numberFormWrapper clearfix webent_numberFormWrapper">
                    <div class="formHeadTxt bgStep01">
                        Kişisel Bilgiler
                    </div>
                    <table cellpadding="0" cellspacing="0" border="0" class="cvPRo_FormTbl">
                        <tr>
                            <td width="130">
                                <label>
                                    Ad</label>
                            </td>
                            <td>
                                            
                            <div style="display:inline;">
                                <input name="firstName" type="text" maxlength="32" id="firstNameID" style="width:410px;" />
                                    <span id="firstNameCenterColumnRequired" class="ybError" style="display:none;"></span>
                                    <span id="firstNameCenterColumnRev" class="ybError" style="display:none;"></span>
                            </div>
                            </td>
                       </tr>
                        <tr>
                            <td>
                                <label>
                                    Soyad</label>
                            </td>
                            <td>

                            <div style="display:inline;">
                                <input name="lastName" type="text" maxlength="32" id="lastNameID" style="width:410px;" />
                                    <span id="lastNameCenterColumnRequired" class="ybError" style="display:none;"></span>
                                    <span id="lastNameCenterColumnRev" class="ybError" style="display:none;"></span>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <label>
                                    Kullanıcı Adı</label>
                            </td>
                            <td>
                                <input name="userName" type="text" maxlength="64" id="userName" style="width:230px;" />&nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <label>
                                    E-posta</label>
                            </td>
                            <td>
                                <input name="email" type="text" maxlength="64" id="emailID" style="width:230px;" />&nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Şifre</label>
                            </td>
                            <td class="clearfix">
                                <input name="passwordForRegister" type="password" maxlength="32" id="passwordForRegisterID" class="fl" autocomplete="off" style="width:230px;" />
                                <div class="password-score fl" />
                                <span id="passwordCenterColumnRequired" class="ybError" style="display:none;"></span>&nbsp;
                                <span id="passwordCenterColumnRev" class="ybError" style="display:none;">En az 6 karakter giriniz!</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Şifre Tekrar</label>
                            </td>
                            <td>
                                <input name="rePassword" type="password" maxlength="32" id="rePasswordID" autocomplete="off" style="width:230px;" />&nbsp;<span id="rePasswordCenterColumnRequired" class="ybError" style="display:none;"></span>&nbsp;<span id="rePasswordCenterColumnRev" class="ybError" style="display:none;">Şifreler eşleşmiyor!</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>
                                    Doğum Tarihi</label>
                            </td>
                            <td>
                                <input name="birthday" type="text" maxlength="32" id="birthdayID" style="width:230px;" />&nbsp;<span id="birthdayCenterColumnRequired" class="ybError" style="display:none;"></span>&nbsp;<span id="birthdayCenterColumnRev" style="display:none;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <label>
                                    Cinsiyet</label>
                            </td>
                            <td>
                                <span id="gender">
                                <input id="1" type="radio" name="sex" value="Male" />Erkek
                                <input id="2" type="radio" name="sex" value="Female" />Kadın
                                </span>

                            </td>
                        </tr>
                    </table>
                    <div class="userForm_Hr_GrayLine">
                        <hr />
                    </div>
                    <div class="formHeadTxt bgStep02">
                        İletişim Bilgileri
                    </div>
                    <table cellpadding="0" cellspacing="0" border="0" class="cvPRo_FormTbl">
                        <tr>
                            <td width="130" valign="top">
                                <label>
                                    Telefon</label>
                            </td>
                            <td>
                                <input name="phone" type="text" maxlength="50" id="phone_txtMobilePhone" style="width:200px;" />
                            </td>                                                                   
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Adres</label>
                            </td>
                            <td>
                                <input name="txtAddress" type="text" maxlength="150" id="txtAddress" class="webent_input90" style="width:420px;" />&nbsp;
                                <span id="rfvAddress" class="ybError" style="display:none;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Gizli Soru</label>
                            </td>
                            <td>
                                <input name="secretQuestion" type="text" maxlength="150" id="secretQuestionID" class="webent_input90" style="width:420px;" />&nbsp;
                                <span id="rfvAddress" class="ybError" style="display:none;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Gizli Cevap</label>
                            </td>
                            <td>
                                <input name="secretAnswer" type="text" maxlength="150" id="secretAnswerID" class="webent_input90" style="width:420px;" />&nbsp;
                                <span id="rfvAddress" class="ybError" style="display:none;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;
                            </td>
                            <td>
                                            
                        <div class="clearfix CountryCityDistrict">
                            <div class="fl">
                                <select name="countryCityDistrict_ddlCountry" id="countryCityDistrict_ddlCountry" style="width:130px;">
                                <option selected="selected" value="1">T&#252;rkiye</option>

                                </select>
                                <span id="countryCityDistrict_rfvCountry" class="ybError" style="visibility:hidden;"></span>
                        </div>
	
                        <div class="fl ddlCity"><select name="cities" id="citiesID" style="width:100px;">
                                <option selected="selected" value="0">Şehir</option>
                                <?php
                                    foreach($cities as $city)
                                    {
                                ?>	
                                    <option value="<?php echo $city->CityID; ?>"><?php echo $city->CityName;?></option>
                                <?php
                                    }
                                ?>
                        </select>
                        </div>

                        <div class="fl upDistrict">
                            <div id="countryCityDistrict_upDistrict">
                                    <select name="states" id="statesID" class="ddlDistrictMrgn" onchange="countryCityDistrict.DistrictChanged();" style="width:100px;">
                                        <option selected="selected" value="-1">Semt</option>
                                        <?php
                                            foreach($states as $state)
                                            {
                                        ?>	
                                            <option id="<?php echo $state->StateID; ?>"><?php echo $state->StateName;?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                               </div>
                        </div>
                        </div>


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
            </form>
            </div>
        </div>
        
    </div>
    <br />
    <span class="link" style="display: none"></span>

            <br class="cb" />
                
</body>
</html>

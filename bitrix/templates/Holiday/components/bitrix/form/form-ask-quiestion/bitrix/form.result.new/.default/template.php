<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$cur_page = $APPLICATION->GetCurPage(); 
$FORM_ID = $arParams["WEB_FORM_ID"];
$rsForm = CForm::GetByID($FORM_ID);
$arForm = $rsForm->Fetch();?>
<div class="ask-form-wrapper">
    <form novalidate name="<?=$arForm["SID"]?>" action="<?=$cur_page?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="WEB_FORM_ID" value="<?=$arParams["WEB_FORM_ID"]?>"/>
    
    <?=bitrix_sessid_post()?>
    
    <?  if ($arResult["isFormErrors"] == "Y"){
        echo $arResult["FORM_ERRORS_TEXT"];} ?>
    
    
    <?=$arResult["FORM_NOTE"]?>
    
    <?if ($arResult["isFormNote"] != "Y")
    {
    ?>
    
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <?$APPLICATION->ShowViewContent('left');?>
        </div>
        <div class="col-xs-12 col-sm-6">
            <?$APPLICATION->ShowViewContent('right');?>
        </div>
        <svg class="positioned hidden-xs hidden-sm" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 151.6 153" style="enable-background:new 0 0 151.6 153;" xml:space="preserve" width="152" height="153">
						<style type="text/css">
							.st0{fill:#FFFFFF;}
							.st1{fill:#68170F;}
						</style>
						<g>
							<path class="st0" d="M150.9,76.5c0,41.9-33.9,75.8-75.8,75.8c-36.8,0-67.5-26.2-74.4-61c-0.9-4.8-0.6-27.9,1-34.1
								C10.3,24.7,39.9,0.7,75.1,0.7C117,0.7,150.9,34.6,150.9,76.5z"/>
							<g>
								<path class="st1" d="M75,153c-18.7,0-36.5-6.7-50.6-19.2c-12.6-11.1-21-25.7-24.3-42.2c-0.5-2.3,1-4.4,3.3-4.9
									c2.3-0.5,4.4,1,4.9,3.3c2.9,14.7,10.4,27.7,21.7,37.6c13.6,12.1,31.2,18.1,49.3,17c18.2-1.1,34.8-9.2,46.9-22.9
									c24.9-28.2,22.3-71.3-5.9-96.3C92.1,0.5,48.9,3.1,24,31.3c-1.5,1.7-4.2,1.9-5.9,0.4c-1.7-1.5-1.9-4.2-0.4-5.9
									c28-31.6,76.4-34.6,108-6.6c15.3,13.5,24.4,32.2,25.7,52.6c1.2,20.4-5.5,40.1-19.1,55.4s-32.2,24.4-52.6,25.7
									C78.2,153,76.6,153,75,153z"/>
								<g>
									<path class="st1" d="M56.9,58.3c0,1.3-0.4,2.3-1.3,3.2c-0.9,0.9-2,1.3-3.2,1.3c-1.3,0-2.3-0.4-3.2-1.3c-0.9-0.9-1.3-2-1.3-3.2
										c0-7.6,2.7-14,8-19.3c5.3-5.3,11.8-8,19.3-8c7.6,0,14,2.7,19.3,8c5.3,5.3,8,11.8,8,19.3c0,7.6-2.7,14-8,19.4L85,86.3
										c-3.6,3.6-5.4,7.9-5.4,12.9c0,1.3-0.4,2.3-1.3,3.2c-0.9,0.9-2,1.3-3.2,1.3c-1.3,0-2.3-0.4-3.2-1.3c-0.9-0.9-1.3-2-1.3-3.2
										c0-7.6,2.7-14,8-19.4l9.4-8.7c3.6-3.6,5.4-7.9,5.4-12.9c0-5-1.8-9.3-5.3-12.9c-3.5-3.5-7.8-5.3-12.9-5.3c-5,0-9.3,1.8-12.9,5.3
										C58.6,48.9,56.9,53.2,56.9,58.3z M81.9,115.2c0,1.9-0.7,3.5-2,4.8c-1.3,1.3-2.9,2-4.8,2c-1.9,0-3.5-0.7-4.8-2
										c-1.3-1.3-2-2.9-2-4.8c0-1.9,0.7-3.5,2-4.8c1.3-1.3,2.9-2,4.8-2c1.9,0,3.5,0.7,4.8,2C81.3,111.7,81.9,113.3,81.9,115.2z"/>
								</g>
							</g>
						</g>
						</svg>
    </div>
    
    <?
    ########## GET FORM DATA ##########
    ?>
    <?//print_r($arResult["QUESTIONS"])?>
    
    
    <?$this->SetViewTarget("left");?>
    
    <?foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion){
        
       if($arQuestion["STRUCTURE"][0]["FIELD_ID"]!=27){?>
                        <div class="field">
                            <?=$arQuestion["HTML_CODE"]?>
                            <?if ($arQuestion["REQUIRED"] == "Y"):?><span><?=$arResult["REQUIRED_SIGN"];?></span><?endif;?>
                        </div>
        <?}?>                
    <?}?>
    
                                
    <?$this->EndViewTarget();?>
       
    <?$this->SetViewTarget("right");?>
    <?foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion){
               
                if($arQuestion["STRUCTURE"][0]["FIELD_ID"]==27){?>
                    <div class="field">
                         <?=$arQuestion["HTML_CODE"]?>
                         <?if ($arQuestion["REQUIRED"] == "Y"):?><span><?=$arResult["REQUIRED_SIGN"];?></span><?endif;?>
                    </div>
                <?}?>
                
    <?}?>
        <input class="pull-left margin_top" name="web_form_submit" type="submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>">
        <input type="hidden" name="web_form_apply" value="Y" />
    
    <?$this->EndViewTarget();?>
    <?
    } //endif (isFormNote)
    ?>
    </form>
    
    <div class="popup_window" id="popup_feedback_sendOK" style="display: none;">
    			<div class="popup_container">
    				<div class="close">
    					<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 22 22" style="enable-background:new 0 0 22 22;" xml:space="preserve">
    					<style type="text/css">
    						.st0{fill:none;stroke:#000000;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    					</style>
    					<line id="XMLID_233_" class="st0" x1="20.5" y1="1.5" x2="1.5" y2="20.5"></line>
    					<line id="XMLID_313_" class="st0" x1="1.5" y1="1.5" x2="20.5" y2="20.5"></line>
    					</svg>
    				</div>
    				<div class="container-fluid">
    					Спасибо, Ваш вопрос отправлен!
    				</div>
    			</div>
    </div>
</div>
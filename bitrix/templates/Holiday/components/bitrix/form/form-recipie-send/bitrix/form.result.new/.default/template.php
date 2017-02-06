<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$cur_page = $APPLICATION->GetCurPage(); 
$FORM_ID = $arParams["WEB_FORM_ID"];
$rsForm = CForm::GetByID($FORM_ID);
$arForm = $rsForm->Fetch();?>
<div class="recipie-form-wrapper">
    <style>
    .field span.starrequired{
        position: absolute;
        top: 25px;
        right: -7px;
    }
    </style>
    <div class="container-fluid">
        <div class="title">
            <?=$arResult["FORM_TITLE"]?>
        </div>
        <form novalidate name="<?=$arForm["SID"]?>" action="<?=$cur_page?>" method="POST" enctype="text/plain">
        <input type="hidden" name="WEB_FORM_ID" value="<?=$arParams["WEB_FORM_ID"]?>"/>
        
        <?=bitrix_sessid_post()?>
        
        <?  if ($arResult["isFormErrors"] == "Y"){
            echo $arResult["FORM_ERRORS_TEXT"];} ?>
        <?//echo "<pre>";
    //    print_r($arResult);
    //    echo "</pre>";
        ?>
        
        <? /*endif;;*/?>
        
        <?if ($arResult["isFormNote"] != "Y")
        {
        ?>
        <?
        ########## GET FORM DATA ##########
        ?>
        <?//print_r($arResult["QUESTIONS"])?>
        
        
        <?foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion){
            
            if($arQuestion["STRUCTURE"][0]["FIELD_ID"]==34){?>
                <div class="hidden">
                    <?=$arQuestion["HTML_CODE"]?>
                
                </div>    
            <?}else{?>
                <div class="field">
                    <label>Email для отправки:</label>
                    <?=$arQuestion["HTML_CODE"]?>
                    <?if ($arQuestion["REQUIRED"] == "Y"):?><span><?=$arResult["REQUIRED_SIGN"];?></span><?endif;?>
                </div>
            <?}?>                
        <?}?>
        
            <input name="web_form_submit" type="submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>">
            <input type="hidden" name="web_form_apply" value="Y" />
        
        
        <?
        } //endif (isFormNote)
        ?>
        </form>
    </div>
    <!--<div class="popup_window" id="popup_feedback_sendOK" style="display: none;">
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
    					Спасибо, Ваше сообщение отправлено!
    				</div>
    			</div>
    </div> -->
</div>
<div class="recipie-form-sendok" style="display: none;">
   
    <div class="container-fluid">
        <div class="title">
            Ваш список отправлен!
        </div>
    </div>
</div>
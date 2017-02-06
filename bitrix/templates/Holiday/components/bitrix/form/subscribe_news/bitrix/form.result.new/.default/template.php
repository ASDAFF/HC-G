<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$cur_page = $APPLICATION->GetCurPage(); 
$FORM_ID = $arParams["WEB_FORM_ID"];
$rsForm = CForm::GetByID($FORM_ID);
$arForm = $rsForm->Fetch();?>

    
            <div class="conteiner-fluid">
                <?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
            
                <div class="title">
                    <?
                        if ($arResult["isFormDescription"] == "Y")
                        {
                            echo $arResult["FORM_DESCRIPTION"];
                        }
                    ?>
                </div>
                <form novalidate name="<?=$arForm["SID"]?>" action="<?=$cur_page?>" method="POST" enctype="multipart/form-data">
                <?=$arResult["FORM_HEADER"]?>
                       	<?
                    	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
                    	{
                    	?>
                   		<?=$arQuestion["HTML_CODE"]?>
              		
                    	<?
                    	} //endwhile
                        ?>
                    	<input class="margin_top" name="web_form_submit" type="submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>">
                        <input type="hidden" name="web_form_apply" value="Y" />
                </form>
            </div>
        
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
            					Спасибо за подписку на наши новости! 
            				</div>
            			</div>
            </div>
      
      
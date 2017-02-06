<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
require_once($_SERVER["DOCUMENT_ROOT"]."/reviews-employee/ajax.js"); 

?>
<?
$innerIndex = 0;
?>
<style>
.loading-gif{
    display: none;
}
.loading-gif img{
    width: 10%;
    position: fixed;
    margin-left: -5%;
    left: 50%;
    top: 50%;
    margin-top: -5%;
}
   
</style>
<style>
.vertical .item_image a{
    max-height: 217px;
    display: block;
}
.vertical .item_image a img{
    width: 100%;
}
</style>
    <section class="reviews_agenstva">
			<div class="container">
				<h2>Отзывы сотрудников</h2>
				<div class="reviews_list row">
                    <div class="js-pager-wrepper" style="display: none;">
                    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
                    	<?=$arResult["NAV_STRING"]?><br />
                    <?endif;?>
                    </div>
 <?foreach($arResult["ITEMS"] as $index=>$arItem):?>
	<?
    //print_r($arItem);
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>               
    
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="item_review">
							<a href="#" class="image"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>"></a>
							<div class="name"><?echo $arItem["NAME"]?></div>
							<div class="item_bar"> 
								<div class="rating rating_ratio_<?=$arItem['PROPERTIES']['ratio']['VALUE']?>"></div>
								<div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
							</div>
							<div class="desc">
								<?=$arItem["PREVIEW_TEXT"]?>
							</div>
							<a href="#" data-showpopup="#popup_review_<?=$arItem['ID']?>" class="more_link">Подробнее</a>
						</div>
					</div>
                    
                    <div class="popup_window" id="popup_review_<?=$arItem['ID']?>">
            			<div class="popup_container">
            				<div class="close">
            					<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            						 viewBox="0 0 22 22" style="enable-background:new 0 0 22 22;" xml:space="preserve">
            					<style type="text/css">
            						.st0{fill:none;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            					</style>
            					<line id="XMLID_233_" class="st0" x1="20.5" y1="1.5" x2="1.5" y2="20.5"/>
            					<line id="XMLID_313_" class="st0" x1="1.5" y1="1.5" x2="20.5" y2="20.5"/>
            					</svg>
            				</div>
            				<div class="item_review">
            					<a href="#" class="image"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"></a>
            					<div class="name"><?=$arItem["NAME"]?></div>
            					<div class="item_bar"> 
            						<div class="rating rating_ratio_<?=$arItem['PROPERTIES']['ratio']['VALUE']?>"></div>
            						<div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
            					</div>
            					<div class="desc">
                                    	<?=$arItem["DETAIL_TEXT"]?>
            					</div>
            				</div>
            			</div>
            			<div class="shadow_site"></div>
            		</div>
<?endforeach;?>					
					
				</div>
                <div class="loading-gif">
                    <img src="<?=$APPLICATION->GetTemplatePath("img")?>/loading.gif"/>
                </div>
				<div class="text-center">
					<a href="#" class="button js-reviews-more">Показать еще</a>
				</div>
			</div>
		</section>

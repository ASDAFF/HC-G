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
?>
<section class="slider" >
    <ul>
    <?///print_r($arResult["ITEMS"]);
        if(!CModule::IncludeModule("iblock"))
        return; 
    ?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    	<?
        
    	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    	
        $res = CIBlockElement::GetByID($arItem['DISPLAY_PROPERTIES']['link_to']['VALUE']);
        if($ar_res = $res->GetNext())
       // print_r($ar_res);
          $link =  $ar_res["DETAIL_PAGE_URL"];
        ?>
        <li>
            <div class="container" data-offset="2">
                <div class="row" >  
                    <a href="<?=$link?>">
    					<div data-offset="5" class="image layer-" style="background:url(<?=$arItem['DISPLAY_PROPERTIES']['bigImg']['FILE_VALUE']['SRC']?>) left center no-repeat; background-size:cover;"></div>
    					<div class="slide_content col-xs-12 col-sm-12 col-md-7 col-lg-6">
    							<div class="slider_elips" ></div>
    							<div class="slide_image layer-" data-offset="10"><img src="<?=$arItem['DISPLAY_PROPERTIES']['minImg']['FILE_VALUE']['SRC']?>" alt="<?$arItem['NAME']?>"></div>
    							<div class="slider_text layer-" data-offset="10"><?=$arItem['PREVIEW_TEXT']?></div>
                        </div>
                    </a>
                </div>        
            </div>                            
    	</li>
    <?endforeach;?>
    </ul>
</section>

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
//echo $templateFolder;
?>
<script src="<?$_SERVER["DOCUMENT_ROOT"]."/discount/ajax.js"?>"></script>

<?
//require_once($_SERVER["DOCUMENT_ROOT"]."/discount/ajax.js"); 
$this->setFrameMode(true);
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
<div class="js-pager-wrepper" style="display: none;">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
</div>
<section class="discounts">
			<div class="container">
				<h2><?$APPLICATION->ShowTitle()?></h2>
				<div class="discounts_list row">
                    <?foreach($arResult["ITEMS"] as $index=> $arItem):?>
    					   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    						<div class="item">
                                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="image"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["DETAIL_PAGE_URL"]?>"></a>
        					    <?endif;?>
    							<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                        			<div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div> 
                        		<?endif?>
                                <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                                    <div class="title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></div>
        				        <?endif;?>
    							
    							<div class="share_list">
    								<a href="#" class="vk">
    									<span class="icon"></span>
    									<span>47</span>
    								</a>
    								<a href="#" class="odnoklassniki">
    									<span class="icon"></span>
    									<span>27</span>
    								</a>
    								<a href="#" class="facebook">
    									<span class="icon"></span>
    									<span>54</span>
    								</a>
    								<a href="#" class="twitter">
    									<span class="icon"></span>
    									<span>50</span>
    								</a>
    								<a href="#" class="google">
    									<span class="icon"></span>
    									<span>58</span>
    								</a>
    							</div>
    						</div>
    					</div>
                    <?endforeach;?>
				</div>
                <div class="loading-gif">
                    <img src="<?=$APPLICATION->GetTemplatePath("img")?>/loading.gif"/>
                </div>
                <div class="text-center <?if($arResult['total_count']<$arParams["NEWS_COUNT"]):?>hidden<?endif?>">
                    <a href="#" data-counter="<?=$GLOBALS['pagesCount']?>" class="js-more-discounts button">Показать еще</a>
                    
                </div>
			</div>
		</section>
<!-- SUBSCRIBE -->

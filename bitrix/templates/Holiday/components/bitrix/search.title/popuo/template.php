<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/**
 @var array $arParams */
/**
 @var array $arResult */
/**
 @global CMain $APPLICATION */
/**
 @global CUser $USER */
/**
 @global CDatabase $DB */
/**
 @var CBitrixComponentTemplate $this */
/**
 @var string $templateName */
/**
 @var string $templateFile */
/**
 @var string $templateFolder */
/**
 @var string $componentPath */
/**
 @var CBitrixComponent $component */
$this->setFrameMode(true); ?>
<?
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if (strlen($INPUT_ID) <= 0)
    $INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if (strlen($CONTAINER_ID) <= 0)
    $CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

<<<<<<< HEAD
if ($arParams["SHOW_INPUT"] !== "N"): ?> 
<div class="popup_container popup_container_search"> 
=======
if ($arParams["SHOW_INPUT"] !== "N"): ?>
<div class="popup_container popup_container_search">
>>>>>>> a050030007bbce2a0ce4129c0ce1e68563f65de3
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
				<div class="container-fluid">
                    
    					<form id="<? echo $CONTAINER_ID ?>" action="<? echo $arResult["FORM_ACTION"] ?>">
    						<div class="search_field">
                                <input id="<? echo $INPUT_ID ?>" type="text" name="q" value="" size="40" maxlength="50" autocomplete="off" />&nbsp;
                                
    							
    							<svg class="hidden-xs" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    								 viewBox="0 0 27.7 25" xml:space="preserve">
    							<path class="st0" d="M15.4,19.1c-2.2,1.3-5,1.7-7.7,0.9c-5.3-1.5-8.4-7-6.9-12.3s7-8.4,12.3-6.9s8.4,7,6.9,12.3"/>
    							<path class="st0" d="M22.4,17.6l4.3,3.8c0.7,0.7,0.7,1.8,0,2.5l0,0c-0.7,0.7-1.9,0.7-2.6,0l-5.9-5.9c-0.4-0.4-0.9-0.4-1.3-0.1
    								c-1.7,1.5-4,2.4-6.5,2.4c-5.4,0-9.9-4.4-9.9-9.8C0.4,5,4.9,0.5,10.5,0.5c5.5,0,10,4.5,10,10"/>
    							<circle class="st0" cx="10.8" cy="10.5" r="6.7"/>
    							</svg>
    						</div>
                            <input name="s" type="submit" value="<?= GetMessage("CT_BST_SEARCH_BUTTON"); ?>" />
    					</form>
                    
				</div>
			</div>
<? endif ?>
<script>
	BX.ready(function(){
		new JCTitleSearch({
			'AJAX_PAGE' : '<? echo CUtil::JSEscape(POST_FORM_ACTION_URI) ?>',
			'CONTAINER_ID': '<? echo $CONTAINER_ID ?>',
			'INPUT_ID': '<? echo $INPUT_ID ?>',
			'MIN_QUERY_LEN': 2
		});
	});
</script>

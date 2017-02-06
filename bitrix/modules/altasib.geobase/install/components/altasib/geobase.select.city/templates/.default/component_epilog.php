<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(ADMIN_SECTION !== true)
{
	$jQEn = COption::GetOptionString("altasib.geobase", "enable_jquery", "ON");
	if($jQEn == "ON")
		CJSCore::Init(array('jquery'));
	elseif($jQEn == "2")
		CJSCore::Init(array('jquery2'));
}
?>
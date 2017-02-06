<?
$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res2 = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
$count = 0;
while( $ob= $res2->GetNextElement())
{
$count++;

}
$arResult['total_count'] = $count;
$arResult['filtered_count'] = count($arResult["ITEMS"]);
?>
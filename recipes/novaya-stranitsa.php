<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>

<?
if(!CModule::IncludeModule("iblock")){
    die("iblock if not defined");
}

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter9 = Array("IBLOCK_ID"=>IntVal(19), "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_TEST_VALUE"=>"4");
$res = CIBlockElement::GetList(Array(), $arFilter9, false, false, $arSelect);
while($ob = $res->GetNextElement()){ 
 $arFields = $ob->GetFields();  
print_r($arFields);
 $arProps = $ob->GetProperties();
 echo "<pre>";
print_r($arProps);
echo "</pre>";
}?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
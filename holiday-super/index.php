<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Холидей Супер главная");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная");



?> 


<!-- SLIDER -->
    <?

if (!CModule::IncludeModule('highloadblock')) {
    echo 'highloadblock module not found';
    die();
}
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

$hlArray = holiday::getHload('b_hlbd_citiesforactions');
$citiesforactions  = holiday::getAllData($hlArray);

$filter_cities = array("LOGIC" => "OR");
foreach($citiesforactions as $index=>$value){

       if($value['UF_NAME']==$_SESSION["ALTASIB_GEOBASE_CODE"]["CITY"]['NAME']){
            array_push ($filter_cities, array('PROPERTY_ACTIVE_CITY'=> $value['UF_XML_ID']));
       }
}
array_push ($filter_cities, array('PROPERTY_ACTIVE_CITY'=> "6XAr5Qbi")); 
GLOBAL $arrFilter;

$arrFilter = array('ACTIVE' => 'Y');
array_push ($arrFilter, $filter_cities);

        $APPLICATION->IncludeComponent("bitrix:news.list", "slider-main", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "CODE",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "arrFilter",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "27",	// Код информационного блока
		"IBLOCK_TYPE" => "discounts",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Баннеры",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "bigImg",
			1 => "minImg",
            2 => "link_to",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	),
	false
);
?>
		<!-- RECEPTS -->
        <?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/recipts.php"),
			Array(),
			Array("MODE"=>"php")
		);?>
		
		<!-- STATISTIC -->
         <?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/statistic-main.php"),
			Array(),
			Array("MODE"=>"php")
		);?>
		
		<!-- MAP --> 
		<?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/map.php"),
			Array(),
			Array("MODE"=>"html")
		);?>
        
        
        
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
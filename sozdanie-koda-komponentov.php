<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Создание кода компонентов ");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.title",
	"",
	Array(
		"CATEGORY_0" => array(),
		"CATEGORY_0_TITLE" => "",
		"CHECK_DATES" => "N",
		"CONTAINER_ID" => "title-search",
		"INPUT_ID" => "title-search-input",
		"NUM_CATEGORIES" => "1",
		"ORDER" => "date",
		"PAGE" => "#SITE_DIR#search/index.php",
		"SHOW_INPUT" => "Y",
		"SHOW_OTHERS" => "N",
		"TOP_COUNT" => "5",
		"USE_LANGUAGE_GUESS" => "Y"
	)
);?><?$APPLICATION->IncludeComponent("altasib:geobase.select.city", "custom2", Array(
	"LOADING_AJAX" => "N",	// Подгружать окно "Выбор города" со списком городов ajax-запросом
		"RIGHT_ENABLE" => "N",	// Выводить вместо правой надписи строки "Выберите город" город, определенный автоматически
		"SPAN_LEFT" => "Мой город:",	// Текстовое поле на левую надпись строки, клик по которой вызывает всплывающее окно
		"SPAN_RIGHT" => "Выберите город",	// Текстовое поле на правую надпись строки, если город не задан или не определен
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
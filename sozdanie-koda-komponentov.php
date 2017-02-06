<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Создание кода компонентов");
<<<<<<< HEAD
?><?$APPLICATION->IncludeComponent("bitrix:search.title", "popuo", Array(
	"CATEGORY_0" => "",	// Ограничение области поиска
		"CATEGORY_0_TITLE" => "",	// Название категории
		"CHECK_DATES" => "N",	// Искать только в активных по дате документах
		"CONTAINER_ID" => "title-search",	// ID контейнера, по ширине которого будут выводиться результаты
		"INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
		"NUM_CATEGORIES" => "1",	// Количество категорий поиска
		"ORDER" => "date",	// Сортировка результатов
		"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		"SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
		"SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
		"TOP_COUNT" => "5",	// Количество результатов в каждой категории
		"USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
=======
?><?$APPLICATION->IncludeComponent("altasib:geobase.select.city", "custom", Array(
	"LOADING_AJAX" => "N",	// Подгружать окно "Выбор города" со списком городов ajax-запросом
		"RIGHT_ENABLE" => "N",	// Выводить вместо правой надписи строки "Выберите город" город, определенный автоматически
		"SPAN_LEFT" => "Мой город:",	// Текстовое поле на левую надпись строки, клик по которой вызывает всплывающее окно
		"SPAN_RIGHT" => "Выберите город",	// Текстовое поле на правую надпись строки, если город не задан или не определен
>>>>>>> a050030007bbce2a0ce4129c0ce1e68563f65de3
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
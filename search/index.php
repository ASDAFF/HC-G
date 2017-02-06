<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");?>

<?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"search_page", 
	array(
		"RESTART" => "N",
		"CHECK_DATES" => "Y",
		"arrWHERE" => array(
			0 => "forum",
			1 => "iblock_news",
			2 => "iblock_articles",
			3 => "iblock_books",
			4 => "blog",
		),
		"arrFILTER" => array(
			0 => "main",
			1 => "iblock_news",
			2 => "iblock_gallery",
			3 => "iblock_stores",
			4 => "iblock_recipes",
			5 => "iblock_reviews",
			6 => "iblock_stories",
			7 => "iblock_discounts",
			8 => "iblock_vacancies",
			9 => "iblock_products_list",
		),
		"SHOW_WHERE" => "N",
		"PAGE_RESULT_COUNT" => "10",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"TAGS_SORT" => "NAME",
		"TAGS_PAGE_ELEMENTS" => "20",
		"TAGS_PERIOD" => "",
		"TAGS_URL_SEARCH" => "",
		"TAGS_INHERIT" => "Y",
		"SHOW_RATING" => "Y",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "0",
		"COLOR_OLD" => "C8C8C8",
		"PERIOD_NEW_TAGS" => "",
		"SHOW_CHAIN" => "Y",
		"COLOR_TYPE" => "Y",
		"WIDTH" => "100%",
		"PATH_TO_USER_PROFILE" => "#SITE_DIR#people/user/#USER_ID#/",
		"COMPONENT_TEMPLATE" => "search_page",
		"NO_WORD_LOGIC" => "N",
		"USE_TITLE_RANK" => "N",
		"DEFAULT_SORT" => "rank",
		"FILTER_NAME" => "",
		"arrFILTER_main" => array(
		),
		"arrFILTER_iblock_news" => array(
			0 => "all",
		),
		"arrFILTER_iblock_gallery" => array(
			0 => "all",
		),
		"arrFILTER_iblock_stores" => array(
			0 => "all",
		),
		"arrFILTER_iblock_recipes" => array(
			0 => "all",
		),
		"arrFILTER_iblock_reviews" => array(
			0 => "all",
		),
		"arrFILTER_iblock_stories" => array(
			0 => "all",
		),
		"arrFILTER_iblock_discounts" => array(
			0 => "all",
		),
		"arrFILTER_iblock_vacancies" => array(
			0 => "all",
		),
		"arrFILTER_iblock_products_list" => array(
			0 => "23",
		),
		"SHOW_WHEN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"RATING_TYPE" => "",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "Holiday Blackidea"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
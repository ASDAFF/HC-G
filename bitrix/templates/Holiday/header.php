<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="initial-scale=1">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?=$APPLICATION->GetTemplatePath("")?>css/app.min.css">
<link rel="stylesheet" type="text/css" href="<?=$APPLICATION->GetTemplatePath("")?>css/fonts.css">
<link rel="stylesheet" type="text/css" href="<?=$APPLICATION->GetTemplatePath("")?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?=$APPLICATION->GetTemplatePath("")?>css/bootstrap.css">
<link rel="stylesheet/less" type="text/css" href="<?=$APPLICATION->GetTemplatePath("")?>css/style.less">
<link rel="stylesheet/less" type="text/css" href="<?=$APPLICATION->GetTemplatePath("")?>css/responsive.less">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="<?=$APPLICATION->GetTemplatePath("js/less.js")?>"></script>
<?
$page = $APPLICATION->GetCurPage();
$page_a = explode("/",$page);
if($page_a[1]=="kora"){
    ?>
    <script>
			less.modifyVars({
				'@color_red': '#0f4b2b',
				'@color_red_light': '#d71718',
				'@color_orange': '#d71718',
				'@color_green': '#edb92c',
				'@color_pink' :'#fae9cc',
				'@color_gray': '#d0ccc5'
			});
			less.refreshStyles();
		</script>
    <?}
    elseif($page_a[1]=="planeta-holiday"){?>
    <script>
			less.modifyVars({
				'@color_red': '#5b3337',
				'@color_red_light': '#d71718',
				'@color_orange': '#e1000f',
				'@color_green': '#2f67da',
				'@color_pink' :'#f5dbe7',
				'@color_gray': '#d0ccc5'
			});
			less.refreshStyles();
		</script>

<?}
elseif($page_a[1]=="holiday-super"){?>
    <script>
			less.modifyVars({
				'@color_red': '#543067',
				'@color_red_light': '#7c5c9b',
				'@color_orange': '#7c5c9b',
				'@color_green': '#d1050c',
				'@color_pink' :'#e7deea',
				'@color_gray': '#d0ccc5'
			});
			less.refreshStyles();
		</script>


<?}
elseif($page_a[1]=="planeta-holiday"){?>
    <script>
			less.modifyVars({
				'@color_red': '#2d3d8e',
				'@color_red_light': '#d71718',
				'@color_orange': '#ffa200',
				'@color_green': '#5480e4',
				'@color_pink' :'#ffea99',
				'@color_gray': '#d0ccc5'
			});
			less.refreshStyles();
		</script>



<?}
elseif($page_a[1]=="sibiriada"){?>
    <script>
			less.modifyVars({
				'@color_red': '#2d3d8e',
				'@color_red_light': '#d71718',
				'@color_orange': '#ffa200',
				'@color_green': '#5480e4',
				'@color_pink' :'#ffea99',
				'@color_gray': '#d0ccc5'
			});
			less.refreshStyles();
		</script
<?}
else{
    
}
?>


<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<!-- HEADER -->
		<header>
			<div class="container-fluid">
				<div class="row user_menu">
					<div class="col-sm-7 col-md-7 col-lg-8 nopadding hidden-xs">
                        <ul class="stores">
    						<?$APPLICATION->IncludeFile(
                    			$APPLICATION->GetTemplatePath("include_areas/header_icons.php"),
                    			Array(),
                    			Array("MODE"=>"php")
                    		);?>
                        </ul>
					</div>
					<div class="col-sm-5 col-md-5 col-lg-4 user_block hidden-xs">
						<a href="#" class="city">
						
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="322.5 86 314.7 388.5" xml:space="preserve">
							<g>
								<path d="M598.8,298.5l2.3,1c0,0,0-0.1,0.1-0.2L598.8,298.5L598.8,298.5z"></path>
								<path d="M323.2,228c-1.4,15.2-0.7,30.3,2,44.9v0.2c0.1,0.6,0.4,2.4,1.1,5.1c2.5,10.9,6,21.3,10.5,31
									c16.2,38.1,51.3,96.6,127.3,159.6c4.5,3.7,9.9,5.7,15.7,5.7c5.8,0,11.2-2,15.7-5.7c76-63.1,111.2-121.6,127.3-159.5
									c4.6-10.1,8.2-20.5,10.5-31c0.7-2.8,1-4.6,1.1-5.1v-0.1c1.8-9.8,2.8-19.7,2.8-29.5c0-43-17.1-83.2-48-113.2l0,0
									C559.6,101.5,520.9,86,479.7,86c-1.8,0-3.6,0-5.4,0.1C395.7,88.8,330.8,149.8,323.2,228z M572.6,147.2
									c26.3,25.4,40.8,59.5,40.8,96.1c0,8.5-0.8,17-2.4,25.2c0,0.2,0,0.3-0.1,0.4v0.1l-0.1,0.2c-0.1,0.4-0.3,1.4-0.7,3.1v0.2l-0.1,0.3
									c-2,9.1-5,18-8.9,26.3l0,0l-0.2,0.5c-15,35.3-47.9,90-119.5,149.8l-1.6,1.3l-1.6-1.3C406.6,389.7,373.7,335,358.7,299.6
									c-0.1-0.2-0.2-0.4-0.3-0.6c-3.9-8.4-6.9-17.3-8.9-26.3l-0.1-0.4c-0.4-1.6-0.6-2.7-0.7-3.1l0.3-0.2c0-0.1,0-0.3-0.1-0.4
									c-2.6-12.5-3.2-25.4-2-38.3c6.4-66.4,61.5-118.1,128.2-120.4C511.7,108.5,546.3,121.8,572.6,147.2z"></path>
							</g>
							<path d="M525.9,299.9c2.4,2.1,5.5,3.1,8.7,2.8c3.2-0.3,6-1.7,8.1-4.2c12.8-14.9,19.8-33.9,19.8-53.7c0-45.6-37.1-82.6-82.6-82.6
								c-45.6,0-82.6,37.1-82.6,82.6c0,45.6,37.1,82.6,82.6,82.6c6.6,0,11.9-5.3,11.9-11.9s-5.3-11.9-11.9-11.9
								c-32.4,0-58.8-26.4-58.8-58.8s26.4-58.8,58.8-58.8s58.8,26.4,58.8,58.8c0,14-5,27.6-14.1,38.2c-2.1,2.4-3.1,5.5-2.8,8.7
								C522,294.9,523.5,297.8,525.9,299.9z"></path>
							</svg>
							 <?$APPLICATION->IncludeComponent("altasib:geobase.select.city", "custom", Array(
                            	"LOADING_AJAX" => "N",	// Подгружать окно "Выбор города" со списком городов ajax-запросом
                            		"RIGHT_ENABLE" => "N",	// Выводить вместо правой надписи строки "Выберите город" город, определенный автоматически
                            		"SPAN_LEFT" => "",	// Текстовое поле на левую надпись строки, клик по которой вызывает всплывающее окно
                            		"SPAN_RIGHT" => "Выберите город",	// Текстовое поле на правую надпись строки, если город не задан или не определен
                            	),
                            	false
                            );?> 
					
                        
					</a>
         <!--               
                            <?
                            $arDataC = CAltasibGeoBase::deCodeJSON($APPLICATION->get_cookie("ALTASIB_GEOBASE_CODE"));
                            
                            $cityLocation = $arDataC['CITY']['NAME'];
                            
                            if(CModule::IncludeModule("altasib.geobase")) {
                            	$arData = CAltasibGeoBase::GetAddres();
                            	$cityLocationAuto = $arData['CITY_NAME'];
                            }
                            ?>
                            <?/*$APPLICATION->IncludeComponent("altasib:geobase.select.city", "custom", Array(
                            	"LOADING_AJAX" => "N",	// Подгружать окно "Выбор города" со списком городов ajax-запросом
                            		"RIGHT_ENABLE" => "N",	// Выводить вместо правой надписи строки "Выберите город" город, определенный автоматически
                            		"SPAN_LEFT" => "Мой город:",	// Текстовое поле на левую надпись строки, клик по которой вызывает всплывающее окно
                            		"SPAN_RIGHT" => "Выберите город",	// Текстовое поле на правую надпись строки, если город не задан или не определен
                            	),
                            	false
                            );*/?>                            
                            
					<!--	</a> -->
						<div class="user_autorization">
                        <?if($USER->IsAuthorized()){?>
							<a href="#" class="user_profile" data-showpopup="#popup_login">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="347 85 265.9 365.3" xml:space="preserve">
								<g>
									<path d="M577.7,289.5c-5.4-5.8-14.5-6.2-20.3-0.9c-5.8,5.4-6.2,14.5-0.9,20.3c17.7,19.3,27.4,44.3,27.4,70.5v36.8
										c0,2.9-2.4,5.3-5.3,5.3H381c-2.9,0-5.3-2.4-5.3-5.3v-36.8c0-57.4,46.7-104.1,104.1-104.1c52.5,0,95.2-42.7,95.2-95.2
										S532.4,85,479.9,85s-95.2,42.7-95.2,95.2c0,15.7,3.9,31.3,11.3,45c3.8,7,12.5,9.6,19.5,5.8s9.6-12.5,5.8-19.5
										c-5.1-9.6-7.8-20.4-7.8-31.4c0-36.6,29.8-66.4,66.4-66.4s66.4,29.8,66.4,66.4s-29.8,66.4-66.4,66.4c-73.3,0-132.9,59.6-132.9,132.9
										v36.8c0,18.8,15.3,34.1,34.1,34.1h197.7c18.8,0,34.1-15.3,34.1-34.1v-36.8C612.8,346,600.4,314.1,577.7,289.5L577.7,289.5z"/>
								</g>
								<g>
									<path d="M479.8,113c36.9,0,66.9,30,66.9,66.9s-30,66.9-66.9,66.9s-66.9-30-66.9-66.9S442.9,113,479.8,113 M479.8,85
										c-52.4,0-94.9,42.5-94.9,94.9s42.5,94.9,94.9,94.9s94.9-42.5,94.9-94.9S532.2,85,479.8,85L479.8,85z"/>
								</g>
								</svg>
								<span>Личный кабинет</span>
							</a>
                        <?}
                        else{?>
                            <a data-showpopup="#popup_registration" href="#">Регистрация</a>
		                    <!--<a data-showpopup="#popup_registration_step" href="#">Регистрация 2</a>-->
                        <?}?>
                        <?
                        if (!$USER->IsAuthorized()){?>
                            <a data-showpopup="#popup_login" href="#">Войти</a>
                        <?}
                        else{?>
                            <a href="#">Выход</a>
                        <?}?>
							
						</div>
					</div>
					<!-- START MOBILE -->
					<div class="col-xs-2 visible-xs">
						<a href="#" class="mobile_button" data-dropdown="#drop_menu">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
                    <div class="col-xs-4 visible-xs">
                        <?$APPLICATION->IncludeFile(
   			              $APPLICATION->GetTemplatePath("include_areas/mobile-header-icons.php"),
   			              Array(),
                    	  Array("MODE"=>"php")
                        );?>
                    
                    </div>
					
					<div class="col-xs-6 visible-xs">
						<a href="#" class="user_profile" data-dropdown="#drop_login">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								viewBox="347 85 265.9 365.3" xml:space="preserve">
							<g>
								<path d="M577.7,289.5c-5.4-5.8-14.5-6.2-20.3-0.9c-5.8,5.4-6.2,14.5-0.9,20.3c17.7,19.3,27.4,44.3,27.4,70.5v36.8
									c0,2.9-2.4,5.3-5.3,5.3H381c-2.9,0-5.3-2.4-5.3-5.3v-36.8c0-57.4,46.7-104.1,104.1-104.1c52.5,0,95.2-42.7,95.2-95.2
									S532.4,85,479.9,85s-95.2,42.7-95.2,95.2c0,15.7,3.9,31.3,11.3,45c3.8,7,12.5,9.6,19.5,5.8s9.6-12.5,5.8-19.5
									c-5.1-9.6-7.8-20.4-7.8-31.4c0-36.6,29.8-66.4,66.4-66.4s66.4,29.8,66.4,66.4s-29.8,66.4-66.4,66.4c-73.3,0-132.9,59.6-132.9,132.9
									v36.8c0,18.8,15.3,34.1,34.1,34.1h197.7c18.8,0,34.1-15.3,34.1-34.1v-36.8C612.8,346,600.4,314.1,577.7,289.5L577.7,289.5z"/>
							</g>
							<g>
								<path d="M479.8,113c36.9,0,66.9,30,66.9,66.9s-30,66.9-66.9,66.9s-66.9-30-66.9-66.9S442.9,113,479.8,113 M479.8,85
									c-52.4,0-94.9,42.5-94.9,94.9s42.5,94.9,94.9,94.9s94.9-42.5,94.9-94.9S532.2,85,479.8,85L479.8,85z"/>
							</g>
							</svg>
						</a>
						<a href="#"  data-dropdown="#stores_list" class="change_store">Сменить магазин</a>
					</div>
				</div>
			</div>
			<!-- MENU -->
            <div class="container hidden-xs">
				<div class="row">
                    <?$APPLICATION->IncludeComponent(
                    	"bitrix:menu",
                    	"main_top",
                    	Array(
                    		"ROOT_MENU_TYPE" => "top", 
                    		"MAX_LEVEL" => "1", 
                    		"CHILD_MENU_TYPE" => "left", 
                    		"USE_EXT" => "Y", 
                    		"MENU_CACHE_TYPE" => "A",
                    		"MENU_CACHE_TIME" => "3600",
                    		"MENU_CACHE_USE_GROUPS" => "Y",
                    		"MENU_CACHE_GET_VARS" => Array()
                    	)
                    );?>
                    <div class="col-sm-1 col-md-1 col-xs-1 nopadding">
						<a class="search_button" data-showpopup="#popup_search" href="#">
							<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 27.7 25" xml:space="preserve">
							<path class="st0" d="M15.4,19.1c-2.2,1.3-5,1.7-7.7,0.9c-5.3-1.5-8.4-7-6.9-12.3s7-8.4,12.3-6.9s8.4,7,6.9,12.3"/>
							<path class="st0" d="M22.4,17.6l4.3,3.8c0.7,0.7,0.7,1.8,0,2.5l0,0c-0.7,0.7-1.9,0.7-2.6,0l-5.9-5.9c-0.4-0.4-0.9-0.4-1.3-0.1
								c-1.7,1.5-4,2.4-6.5,2.4c-5.4,0-9.9-4.4-9.9-9.8C0.4,5,4.9,0.5,10.5,0.5c5.5,0,10,4.5,10,10"/>
							<circle class="st0" cx="10.8" cy="10.5" r="6.7"/>
							</svg>
						</a>
					</div>
				</div>
			</div>	
		</header>
		<div class="dropdown_menu" id="drop_menu">
			<div class="container_shadow">
				<div class="container">
					<a href="#" data-showpopup="#popup_get_city" class="city">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="322.5 86 314.7 388.5" xml:space="preserve">
						<g >
							<path d="M598.8,298.5l2.3,1c0,0,0-0.1,0.1-0.2L598.8,298.5L598.8,298.5z"/>
							<path d="M323.2,228c-1.4,15.2-0.7,30.3,2,44.9v0.2c0.1,0.6,0.4,2.4,1.1,5.1c2.5,10.9,6,21.3,10.5,31
								c16.2,38.1,51.3,96.6,127.3,159.6c4.5,3.7,9.9,5.7,15.7,5.7c5.8,0,11.2-2,15.7-5.7c76-63.1,111.2-121.6,127.3-159.5
								c4.6-10.1,8.2-20.5,10.5-31c0.7-2.8,1-4.6,1.1-5.1v-0.1c1.8-9.8,2.8-19.7,2.8-29.5c0-43-17.1-83.2-48-113.2l0,0
								C559.6,101.5,520.9,86,479.7,86c-1.8,0-3.6,0-5.4,0.1C395.7,88.8,330.8,149.8,323.2,228z M572.6,147.2
								c26.3,25.4,40.8,59.5,40.8,96.1c0,8.5-0.8,17-2.4,25.2c0,0.2,0,0.3-0.1,0.4v0.1l-0.1,0.2c-0.1,0.4-0.3,1.4-0.7,3.1v0.2l-0.1,0.3
								c-2,9.1-5,18-8.9,26.3l0,0l-0.2,0.5c-15,35.3-47.9,90-119.5,149.8l-1.6,1.3l-1.6-1.3C406.6,389.7,373.7,335,358.7,299.6
								c-0.1-0.2-0.2-0.4-0.3-0.6c-3.9-8.4-6.9-17.3-8.9-26.3l-0.1-0.4c-0.4-1.6-0.6-2.7-0.7-3.1l0.3-0.2c0-0.1,0-0.3-0.1-0.4
								c-2.6-12.5-3.2-25.4-2-38.3c6.4-66.4,61.5-118.1,128.2-120.4C511.7,108.5,546.3,121.8,572.6,147.2z"/>
						</g>
						<path d="M525.9,299.9c2.4,2.1,5.5,3.1,8.7,2.8c3.2-0.3,6-1.7,8.1-4.2c12.8-14.9,19.8-33.9,19.8-53.7c0-45.6-37.1-82.6-82.6-82.6
							c-45.6,0-82.6,37.1-82.6,82.6c0,45.6,37.1,82.6,82.6,82.6c6.6,0,11.9-5.3,11.9-11.9s-5.3-11.9-11.9-11.9
							c-32.4,0-58.8-26.4-58.8-58.8s26.4-58.8,58.8-58.8s58.8,26.4,58.8,58.8c0,14-5,27.6-14.1,38.2c-2.1,2.4-3.1,5.5-2.8,8.7
							C522,294.9,523.5,297.8,525.9,299.9z"/>
						</svg>
                    
					<span>Новосибирск</span>
				</a>
                    <?$APPLICATION->IncludeComponent(
                    	"bitrix:menu",
                    	"main_top2",
                    	Array(
                    		"ROOT_MENU_TYPE" => "top", 
                    		"MAX_LEVEL" => "1", 
                    		"CHILD_MENU_TYPE" => "left", 
                    		"USE_EXT" => "Y", 
                    		"MENU_CACHE_TYPE" => "A",
                    		"MENU_CACHE_TIME" => "3600",
                    		"MENU_CACHE_USE_GROUPS" => "Y",
                    		"MENU_CACHE_GET_VARS" => Array()
                    	)
                    );?>
                </div>
			</div>
	        <div class="container">
                <?$APPLICATION->IncludeComponent(
                    	"bitrix:menu",
                    	"footer_soiskateli",
                    	Array(
                    		"ROOT_MENU_TYPE" => "footer-on-top", 
                    		"MAX_LEVEL" => "1", 
                    		"CHILD_MENU_TYPE" => "left", 
                    		"USE_EXT" => "Y", 
                    		"MENU_CACHE_TYPE" => "A",
                    		"MENU_CACHE_TIME" => "3600",
                    		"MENU_CACHE_USE_GROUPS" => "Y",
                    		"MENU_CACHE_GET_VARS" => Array()
                    	)
                );?>
			</div>
        </div>
		<div class="dropdown_menu" id="drop_login">
			<div class="container">
				<a href="#" class="button">Личный кабинет</a>
				<div class="clear"></div>
				<a href="#" class="link_border">Выход</a>
			</div>
		</div>
        <div class="dropdown_menu" id="stores_list">
        
            	<?$APPLICATION->IncludeFile(
                			$APPLICATION->GetTemplatePath("include_areas/change-shop-mobile.php"),
                			Array(),
                			Array("MODE"=>"php")
           		);?>
		</div>
        
        
<!--<div id="header_menu"> </div> -->



<?

if($page!="/"&&$page!="/kora/"&&$page!="/planeta-holiday/"&&$page!="/holiday-super/"&&$page!="/sibiriada/"):?>
    <div class="container"> 
<?endif;?>



<?/*$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	".default",
	Array(
		"REGISTER_URL" => "/auth/", 
		"PROFILE_URL" => "/personal/profile/" 
	)
);*/?>
      
		

      
      
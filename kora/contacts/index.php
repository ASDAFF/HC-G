<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты Кора");
?>
<script>
$(document).ready(function(){
    $('input[name="form_hidden_44"').val(document.title+" "+window.location.host);
    
})
</script>
<!-- CONTACT -->
		<section class="contacts">
			<div class="container-fluid">
				<h2><?echo $APPLICATION->GetTitle();?></h2>
				<div class="row">
					<div class="col-sx-12 col-sm-5 col-md-4 nopadding">
						<div class="contact_container">
							<div class="title">Центральный офис </div>
							<div class="items_set">
								<div class="item">
									<div class="icon">
										<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="322.5 86 314.7 388.5" style="enable-background:new 322.5 86 314.7 388.5;" xml:space="preserve" width="33" height="41">
											<g>
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
									</div>
									<div class="text">
                                        <?$APPLICATION->IncludeFile(
                                                $APPLICATION->GetTemplatePath("include_areas/main/adress1.htm"),
                                                Array(),
                                                Array("MODE"=>"html")
                                        );?>
                                    </div>
								</div>
								<div class="item">
									<div class="icon">
										<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 389.6 389.1" style="enable-background:new 0 0 389.6 389.1;" xml:space="preserve" width="34" height="34">
										<path d="M317.1,292.3c-4.4-4.7-9-9.2-13.4-13.5c-2.2-2.2-4.5-4.4-6.7-6.6l-19.5-19.5c-8.3-8.3-18.1-12.7-28.1-12.7
											c-10.1,0-19.8,4.4-28.1,12.7c-2,2-4.1,4-6.1,6c-4.6,4.6-9.4,9.3-14.1,14.2c-8.2-4-16.6-9.5-26.4-17.2
											c-12.7-10.4-23.6-20.8-33.3-31.8c-5.2-6-14.3-6.6-20.3-1.4c-6,5.2-6.6,14.3-1.4,20.3c10.7,12.3,22.8,23.9,36.9,35.4
											c0.1,0,0.1,0.1,0.2,0.1c14.2,11.2,26.1,18.6,38.8,23.8c0.3,0.2,0.6,0.2,1,0.3c3,1,12.2,4.1,21.1-4.8l0.6-0.6
											c5.4-6.2,11.2-11.8,17.3-17.8c2.1-2,4.2-4.1,6.2-6.2c1.9-1.9,4.9-4.3,7.8-4.3c2.9,0,5.8,2.3,7.8,4.3l19.5,19.5
											c2.3,2.3,4.7,4.6,7,6.9c4.5,4.3,8.6,8.5,12.6,12.7c0.1,0.2,0.2,0.2,0.3,0.3c3,3,6.3,7.8-0.2,14.7l-24.4,24.4
											c-5.2,5.2-11,7.9-18.2,8.6c-12.4,1-25.6-1.4-42.8-7.8c-28.6-10.6-55.4-26.6-84.2-50.6C92,272.5,64.5,237.5,45.2,197.6
											c-6.9-14.5-15-33.7-16.3-54.1c-0.7-11.4,2.3-19.5,9.7-26.4c5.4-4.5,10.1-9.4,14.6-14c2.9-3,5.6-5.8,8.5-8.5l0.1-0.1
											c5.7-5.4,10.4-5.5,15.7-0.2l39.4,39.4l0.2,0.2c1.7,1.6,3.7,4.1,3.8,6.8c0,2.9-2.2,5.7-3.9,7.5l-24.5,24.5c-5.6,5.6-5.6,14.7,0,20.4
											c5.6,5.6,14.7,5.6,20.4,0l24.5-24.5c8.2-8.2,12.5-17.9,12.4-28.2c-0.1-10-4.4-19.4-12.5-27.2L97.8,74c-16.5-16.5-38.9-16.6-55.9-0.2
											c-3.4,3.1-6.4,6.3-9.4,9.4c-4.2,4.4-8.2,8.6-12.6,12.2c-0.2,0.2-0.3,0.3-0.6,0.5c-14,12.7-20.4,29.4-19.2,49.5
											c1.7,25.3,11,47.8,19,64.6v0.1c21.2,43.7,51.1,81.9,89.1,113.8c31.4,26.1,60.9,43.8,92.6,55.5c11.7,4.3,28.7,9.8,47.6,9.8
											c2.5,0,5-0.1,7.6-0.3h0.1c14-1.2,26.2-6.9,36.2-16.9l24.5-24.5l0.2-0.2C332.9,330.8,332.8,308.2,317.1,292.3L317.1,292.3z
											 M317.1,292.3"/>
										<path d="M311.4,194.5c-5-29.1-18.7-55.7-39.8-76.8c-20.9-21-47.4-34.7-76.6-39.7c-7.8-1.4-15.3,3.9-16.6,11.8
											c-1.4,7.8,3.9,15.3,11.8,16.6c23.2,3.9,44.4,15,61.2,31.8c16.8,16.8,27.8,38,31.8,61.2c1.2,7,7.3,12,14.2,12c0.8,0,1.6-0.1,2.4-0.2
											C307.5,209.7,312.8,202.3,311.4,194.5L311.4,194.5z M311.4,194.5"/>
										<path d="M389.3,190.9c-8.1-47.7-30.6-91.1-65.1-125.6c-34.5-34.5-77.9-57-125.6-65.1C190.8-1.1,183.3,4.1,182,12
											c-1.4,7.8,3.9,15.3,11.8,16.6c41.8,7.1,79.8,26.8,110.1,57c30.2,30.2,50,68.3,57,110.1c1.2,7,7.3,12,14.2,12c0.8,0,1.6-0.1,2.4-0.2
											C385.4,206.2,390.7,198.8,389.3,190.9L389.3,190.9z M389.3,190.9"/>
										</svg>
									</div>
									<div class="text">
                                        <?$APPLICATION->IncludeFile(
                                                $APPLICATION->GetTemplatePath("include_areas/main/phones.htm"),
                                                Array(),
                                                Array("MODE"=>"html")
                                        );?>
                                    </div>
								</div>
								<div class="item">
									<div class="icon">
										<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 386.1 290" style="enable-background:new 0 0 386.1 290;" xml:space="preserve" width="34" height="26">
										<path d="M367.4,0H18.8C8.4,0,0,8.4,0,18.8v252.5C0,281.6,8.4,290,18.8,290h348.6c10.4,0,18.8-8.4,18.8-18.8V18.8
											c0-5-1.9-9.7-5.4-13.2C377.1,2,372.4,0,367.4,0z M362.3,263.7c0,1.4-1.1,2.5-2.5,2.5H26.3c-1.4,0-2.5-1.1-2.5-2.5V26.3
											c0-1.4,1.1-2.5,2.5-2.5H342c1,0,2,0.7,2.3,1.6s0.1,2.1-0.7,2.8L196.7,153.8c-0.9,0.8-2.3,0.8-3.2,0L86.7,62.4
											c-5-4.3-12.5-3.7-16.8,1.3c-2.1,2.4-3.1,5.5-2.8,8.7c0.2,3.2,1.7,6,4.2,8.1l116.2,99.4c0,0,0,0,0.1,0.1c0.2,0.1,0.3,0.2,0.4,0.3
											c0.1,0.1,0.2,0.2,0.3,0.3l0.1,0c0.1,0.1,0.3,0.2,0.4,0.3c0.2,0.1,0.3,0.2,0.5,0.3c0.1,0,0.1,0.1,0.1,0.1c0.3,0.2,0.5,0.3,0.7,0.3
											c0.1,0,0.2,0.1,0.4,0.2c0.1,0,0.2,0.1,0.4,0.2c0.1,0,0.1,0,0.2,0.1c0.2,0.1,0.4,0.1,0.5,0.2c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0.1
											l0.6,0.2c0.2,0,0.3,0.1,0.5,0.1c0,0,0.1,0,0.1,0c0.3,0.1,0.4,0.1,0.5,0.1c0.2,0,0.5,0,1,0.1c0.5,0,1.4,0.1,1.9,0c0,0,0.1,0,0.1,0
											c0,0,0.1,0,0.1,0c0.3-0.1,0.5-0.1,0.8-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3-0.1c0.1,0,0.1,0,0.2-0.1l0.7-0.2c0.1,0,0.1,0,0.1-0.1
											c0.1-0.1,0.3-0.1,0.5-0.2c0.1,0,0.2-0.1,0.4-0.1c0.2-0.1,0.3-0.2,0.4-0.2c0.1,0,0.1-0.1,0.2-0.1c0.2-0.1,0.5-0.2,0.8-0.4
											c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.3-0.2,0.5-0.3c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.2,0.6-0.4l0,0c0.1-0.1,0.3-0.2,0.4-0.3c0,0,0,0,0,0
											c0,0,0.1-0.1,0.1-0.1L358.2,47c0.7-0.6,1.8-0.8,2.7-0.4c0.9,0.4,1.5,1.3,1.5,2.3V263.7z"/>
										</svg>
									</div>
									<div class="text">
                                        <?$APPLICATION->IncludeFile(
                                                $APPLICATION->GetTemplatePath("include_areas/main/email.htm"),
                                                Array(),
                                                Array("MODE"=>"html")
                                        );?>
                                    </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sx-12 col-sm-7 col-md-8 nopadding">
						<div class="map" id="contact_map"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- FEEDBACK -->
        </div><!-- container -->
		<section class="feedback feedback_contact">
			<div class="feedback_container">
				<h2>Обратная связь</h2>
                <?
                require($_SERVER["DOCUMENT_ROOT"]."/ajax-forms/feedback-ajax.js");?>
                <div class="feedback-form-wrapper">
                    <? $APPLICATION->IncludeComponent("bitrix:form", "form-contacts-1", Array(
                	"AJAX_MODE" => "N",	// Включить режим AJAX
                		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
                		"CACHE_TYPE" => "N",	// Тип кеширования
                		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
                		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
                		"EDIT_ADDITIONAL" => "N",	// Выводить на редактирование дополнительные поля
                		"EDIT_STATUS" => "N",	// Выводить форму смены статуса
                		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
                		"NOT_SHOW_FILTER" => array(	// Коды полей, которые нельзя показывать в фильтре
                			0 => "",
                			1 => "",
                		),
                		"NOT_SHOW_TABLE" => array(	// Коды полей, которые нельзя показывать в таблице
                			0 => "",
                			1 => "",
                		),
                		"RESULT_ID" => $_REQUEST[RESULT_ID],	// ID результата
                		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
                		"SHOW_ADDITIONAL" => "N",	// Показать дополнительные поля веб-формы
                		"SHOW_ANSWER_VALUE" => "N",	// Показать значение параметра ANSWER_VALUE
                		"SHOW_EDIT_PAGE" => "N",	// Показывать страницу редактирования результата
                		"SHOW_LIST_PAGE" => "N",	// Показывать страницу со списком результатов
                		"SHOW_STATUS" => "N",	// Показать текущий статус результата
                		"SHOW_VIEW_PAGE" => "N",	// Показывать страницу просмотра результата
                		"START_PAGE" => "new",	// Начальная страница
                		"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
                		"SUCCESS_URL" => "/success.php",	// Страница с сообщением об успешной отправке
                		"WEB_FORM_ID" => "2",	// ID веб-формы
                		"COMPONENT_TEMPLATE" => "form-contacts",
                		"VARIABLE_ALIASES" => array(
                			"action" => "action",
                		)
                	),
                	false
                ); ?>
			</div>
			</div>
		</section>
        <div class="container">
		<!-- FOOTER -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
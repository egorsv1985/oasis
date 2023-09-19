<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Вакансии");
$APPLICATION->SetTitle("Вакансии"); ?>

<main class="pt-5">

	<section class="vacancies" id="vacancies">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-4">
					<div class="row">
						<div class="col-3">
							<? $APPLICATION->IncludeComponent(
								"bitrix:breadcrumb",
								".default",
								array(
									"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
									"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
									"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
								),
								false,
								array(
									'HIDE_ICONS' => 'Y'
								)
							); ?>
						</div>
						<div class="col-9">
							<?
							$APPLICATION->IncludeComponent(
								"bitrix:news",
								"vacancies",
								array(
									"ADD_ELEMENT_CHAIN" => "Y",
									"ADD_SECTIONS_CHAIN" => "Y",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"BROWSER_TITLE" => "-",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "7200",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
									"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
									"DETAIL_DISPLAY_TOP_PAGER" => "N",
									"DETAIL_FIELD_CODE" => array(
										0 => "NAME",
										1 => "DETAIL_TEXT",
										2 => "",
									),
									"DETAIL_PAGER_SHOW_ALL" => "Y",
									"DETAIL_PAGER_TEMPLATE" => "",
									"DETAIL_PAGER_TITLE" => "Страница",
									"DETAIL_PROPERTY_CODE" => array(
										0 => "",
										1 => "",
									),
									"DETAIL_SET_CANONICAL_URL" => "N",
									"DISPLAY_BOTTOM_PAGER" => "Y",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FILE_404" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "6",
									"IBLOCK_TYPE" => "CONTENT",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
									"LIST_FIELD_CODE" => array(
										0 => "NAME",
										1 => "DETAIL_TEXT",
										2 => "DETAIL_PICTURE",
										3 => "",
									),
									"LIST_PROPERTY_CODE" => array(
										0 => "",
										1 => "",
									),
									"MESSAGE_404" => "",
									"META_DESCRIPTION" => "-",
									"META_KEYWORDS" => "-",
									"NEWS_COUNT" => "200",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Новости",
									"PREVIEW_TRUNCATE_LEN" => "",
									"SEF_FOLDER" => "/vakansii/",
									"SEF_MODE" => "Y",
									"SET_LAST_MODIFIED" => "Y",
									"SET_STATUS_404" => "Y",
									"SET_TITLE" => "Y",
									"SHOW_404" => "Y",
									"SORT_BY1" => "SORT",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "ASC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N",
									"USE_CATEGORIES" => "N",
									"USE_FILTER" => "N",
									"USE_PERMISSIONS" => "N",
									"USE_RATING" => "N",
									"USE_RSS" => "N",
									"USE_SEARCH" => "N",
									"USE_SHARE" => "N",
									"COMPONENT_TEMPLATE" => "vacancies",
									"SEF_URL_TEMPLATES" => array(
										"news" => "",
										"section" => "",
										"detail" => "#ELEMENT_CODE#/",
									)
								),
								false
							); ?>
							<? $APPLICATION->IncludeComponent(
								"bitrix:iblock.element.add.form",
								"horizontal",
								array(
									"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",	// * дата начала *
									"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",	// * дата завершения *
									"CUSTOM_TITLE_DETAIL_PICTURE" => "",	// * подробная картинка *
									"CUSTOM_TITLE_DETAIL_TEXT" => "",	// * подробный текст *
									"CUSTOM_TITLE_IBLOCK_SECTION" => "",	// * раздел инфоблока *
									"CUSTOM_TITLE_NAME" => "Имя",	// * наименование *
									"CUSTOM_TITLE_PREVIEW_PICTURE" => "",	// * картинка анонса *
									"CUSTOM_TITLE_PREVIEW_TEXT" => "",	// * текст анонса *
									"CUSTOM_TITLE_TAGS" => "",	// * теги *
									"DEFAULT_INPUT_SIZE" => "30",	// Размер полей ввода
									"DETAIL_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования подробного текста
									"ELEMENT_ASSOC" => "CREATED_BY",	// Привязка к пользователю
									"GROUPS" => array(	// Группы пользователей, имеющие право на добавление/редактирование
										0 => "2",
									),
									"IBLOCK_ID" => "7",	// Инфоблок
									"IBLOCK_TYPE" => "FORMS",	// Тип инфоблока
									"LEVEL_LAST" => "Y",	// Разрешить добавление только на последний уровень рубрикатора
									"LIST_URL" => "",	// Страница со списком своих элементов
									"MAX_FILE_SIZE" => "0",	// Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
									"MAX_LEVELS" => "100000",	// Ограничить кол-во рубрик, в которые можно добавлять элемент
									"MAX_USER_ENTRIES" => "100000",	// Ограничить кол-во элементов для одного пользователя
									"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования текста анонса
									"PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
										0 => "10",
										1 => "11",
										2 => "NAME",
									),
									"PROPERTY_CODES_REQUIRED" => array(	// Свойства, обязательные для заполнения
										0 => "10",
										1 => "NAME",
									),
									"RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
									"SEF_MODE" => "N",	// Включить поддержку ЧПУ
									"STATUS" => "ANY",	// Редактирование возможно
									"STATUS_NEW" => "N",	// Деактивировать элемент
									"USER_MESSAGE_ADD" => "",	// Сообщение об успешном добавлении
									"USER_MESSAGE_EDIT" => "",	// Сообщение об успешном сохранении
									"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
									"COMPONENT_TEMPLATE" => ".default"
								),
								false
							); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
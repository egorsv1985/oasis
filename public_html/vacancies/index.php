<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Вакансии");
$APPLICATION->SetTitle("Вакансии"); ?><main class="pt-5">
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
									"PATH" => "",
									"SITE_ID" => "s1",
									"START_FROM" => "0"
								),
								false,
								array(
									'HIDE_ICONS' => 'Y'
								)
							); ?>
						</div>
						<div class="col-9">
							<? $APPLICATION->IncludeComponent(
								"bitrix:news",
								"vacancies",
								array(
									"ADD_ELEMENT_CHAIN" => "N",
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
										0 => "",
										1 => "",
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
									"DISPLAY_DATE" => "N",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "N",
									"DISPLAY_TOP_PAGER" => "N",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "2",
									"IBLOCK_TYPE" => "CONTENT",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
									"LIST_FIELD_CODE" => array(
										0 => "NAME",
										1 => "PREVIEW_TEXT",
										2 => "PREVIEW_PICTURE",
										3 => "",
									),
									"LIST_PROPERTY_CODE" => array(
										0 => "",
										1 => "POST",
										2 => "",
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
									"SEF_FOLDER" => "/vacansii/",
									"SEF_MODE" => "Y",
									"SET_LAST_MODIFIED" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "Y",
									"SHOW_404" => "N",
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
										"section" => "#SECTION_CODE#/",
										"detail" => "",
									)
								),
								false
							); ?>
						</div>
						<div class="fs-40 lh-12 fw-700 mb-4">
							Вакансии
						</div>
						<div class="fs-20 mb-4">
							Присоединяйся к команде
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-8">
					<? $APPLICATION->IncludeComponent(
						"bitrix:iblock.element.add.form",
						"horizontal",
						array(
							"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
							"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
							"CUSTOM_TITLE_DETAIL_PICTURE" => "",
							"CUSTOM_TITLE_DETAIL_TEXT" => "",
							"CUSTOM_TITLE_IBLOCK_SECTION" => "",
							"CUSTOM_TITLE_NAME" => "Имя",
							"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
							"CUSTOM_TITLE_PREVIEW_TEXT" => "",
							"CUSTOM_TITLE_TAGS" => "",
							"DEFAULT_INPUT_SIZE" => "30",
							"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
							"ELEMENT_ASSOC" => "CREATED_BY",
							"GROUPS" => array("2"),
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "FORMS",
							"LEVEL_LAST" => "Y",
							"LIST_URL" => "",
							"MAX_FILE_SIZE" => "0",
							"MAX_LEVELS" => "100000",
							"MAX_USER_ENTRIES" => "100000",
							"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
							"PROPERTY_CODES" => array("1", "2", "NAME"),
							"PROPERTY_CODES_REQUIRED" => array("1", "2", "NAME"),
							"RESIZE_IMAGES" => "N",
							"SEF_MODE" => "N",
							"STATUS" => "ANY",
							"STATUS_NEW" => "N",
							"USER_MESSAGE_ADD" => "",
							"USER_MESSAGE_EDIT" => "",
							"USE_CAPTCHA" => "N"
						)
					); ?>
				</div>
			</div>
		</div>
	</section>
</main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
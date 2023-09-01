<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Наша команда");
$APPLICATION->SetTitle("Наша команда");
?><main class="pt-5">
	<section class="teams py-5 position-relative" id="teams">
		<div class="container">
			<div class="row">
				<div class="col-1">
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
				<div class="col-11">
					<? $APPLICATION->IncludeComponent(
						"bitrix:news",
						"commands",
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
							"DETAIL_FIELD_CODE" => array("", ""),
							"DETAIL_PAGER_SHOW_ALL" => "Y",
							"DETAIL_PAGER_TEMPLATE" => "",
							"DETAIL_PAGER_TITLE" => "Страница",
							"DETAIL_PROPERTY_CODE" => array("", ""),
							"DETAIL_SET_CANONICAL_URL" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "N",
							"DISPLAY_TOP_PAGER" => "N",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "6",
							"IBLOCK_TYPE" => "CONTENT",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
							"LIST_FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
							"LIST_PROPERTY_CODE" => array("POST", ""),
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
							"SEF_FOLDER" => "/komanda/",
							"SEF_MODE" => "Y",
							"SEF_URL_TEMPLATES" => array("detail" => "", "news" => "", "section" => "#SECTION_CODE#/"),
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
							"USE_SHARE" => "N"
						)
					); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-3">
					<div class="fs-20">
						Выбери своего тренера
					</div>
				</div>
				<div class="col-12 col-md-9">
					<? $APPLICATION->IncludeComponent(
						"bitrix:catalog.section.list",
						"commands",
						array(
							"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
							"ADD_SECTIONS_CHAIN" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "7200",
							"CACHE_TYPE" => "A",
							"COUNT_ELEMENTS" => "Y",
							"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
							"FILTER_NAME" => "sectionsFilter",
							"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
							"IBLOCK_ID" => "6",
							"IBLOCK_TYPE" => "CONTENT",
							"SECTION_CODE" => "",
							"SECTION_FIELDS" => array("NAME", ""),
							"SECTION_ID" => "0",
							"SECTION_URL" => "",
							"SECTION_USER_FIELDS" => array("", ""),
							"SHOW_PARENT_NAME" => "Y",
							"TOP_DEPTH" => "2",
							"VIEW_MODE" => "LINE"
						)
					); ?>
				</div>
			</div>
		</div>
	</section>
</main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
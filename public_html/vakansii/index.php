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
								"bitrix:catalog.section.list",
								"vacancies",
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
									"IBLOCK_ID" => "2",
									"IBLOCK_TYPE" => "CONTENT",
									"SECTION_CODE" => "",
									"SECTION_FIELDS" => array("", ""),
									"SECTION_ID" => "0",
									"SECTION_URL" => "",
									"SECTION_USER_FIELDS" => array("", ""),
									"SHOW_PARENT_NAME" => "Y",
									"TOP_DEPTH" => "2",
									"VIEW_MODE" => "LINE"
								)
							); ?>

						</div>
						<h2 class="fs-40 lh-12 fw-700 mb-4"><?= $APPLICATION->GetTitle(); ?></h2>
						<div class="fs-20 mb-4">
							Присоединяйся к команде
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-8">
					<? $APPLICATION->IncludeComponent(
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
							"COMPONENT_TEMPLATE" => "vacancies",
							"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
							"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
							"DETAIL_DISPLAY_TOP_PAGER" => "N",
							"DETAIL_FIELD_CODE" => array(0 => "NAME", 1 => "DETAIL_TEXT", 2 => "",),
							"DETAIL_PAGER_SHOW_ALL" => "Y",
							"DETAIL_PAGER_TEMPLATE" => "",
							"DETAIL_PAGER_TITLE" => "Страница",
							"DETAIL_PROPERTY_CODE" => array(0 => "", 1 => "",),
							"DETAIL_SET_CANONICAL_URL" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FILE_404" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "2",
							"IBLOCK_TYPE" => "CONTENT",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
							"LIST_FIELD_CODE" => array(0 => "NAME", 1 => "DETAIL_TEXT", 2 => "DETAIL_PICTURE", 3 => "",),
							"LIST_PROPERTY_CODE" => array(0 => "", 1 => "",),
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
							"SEF_URL_TEMPLATES" => array("news" => "", "section" => "", "detail" => "#ELEMENT_CODE#/",),
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
							"USE_SHARE" => "N"
						)
					); ?>

				</div>
			</div>
		</div>
	</section>
</main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
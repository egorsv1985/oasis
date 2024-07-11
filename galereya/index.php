<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Галерея");
$APPLICATION->SetTitle("Галерея"); ?><main class="pt-5">
	<section class="gallery py-5" id="gallery">
		<div class="container">
			<div class="row gy-4">
				<div class="col-2 col-md-1 pt-lg-5">
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
				<div class="col-12 col-md-11 order-1 order-lg-0">
					<!-- <? $APPLICATION->ShowViewContent('gallery-swiper'); ?> -->
					<!-- <h2 class="d-lg-none fs-40 fw-700 lh-12 mb-4">
						<? $APPLICATION->ShowTitle(true); ?>
					</h2> --> <!-- <div class="d-lg-none fs-20 mb-3">
						Знакомьтесь с интерьерами нашего фитнес-клуба!
					</div> -->
					<? $APPLICATION->IncludeComponent(
						"bitrix:news",
						"gallery",
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
							"COMPONENT_TEMPLATE" => "gallery",
							"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
							"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
							"DETAIL_DISPLAY_TOP_PAGER" => "N",
							"DETAIL_FIELD_CODE" => array(0 => "", 1 => "",),
							"DETAIL_PAGER_SHOW_ALL" => "Y",
							"DETAIL_PAGER_TEMPLATE" => "",
							"DETAIL_PAGER_TITLE" => "Страница",
							"DETAIL_PROPERTY_CODE" => array(0 => "", 1 => "IMAGES", 2 => "ICON", 3 => "",),
							"DETAIL_SET_CANONICAL_URL" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "3",
							"IBLOCK_TYPE" => "CONTENT",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
							"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
							"LIST_FIELD_CODE" => array(0 => "", 1 => "",),
							"LIST_PROPERTY_CODE" => array(0 => "", 1 => "IMAGES", 2 => "ICON",),
							"MESSAGE_404" => "",
							"META_DESCRIPTION" => "-",
							"META_KEYWORDS" => "-",
							"NEWS_COUNT" => "2000",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Новости",
							"PREVIEW_TRUNCATE_LEN" => "",
							"SEF_FOLDER" => "/galereya/",
							"SEF_MODE" => "Y",
							"SEF_URL_TEMPLATES" => array("news" => "", "section" => "", "detail" => "#ELEMENT_ID#/",),
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
				<div class="col-10 col-lg-4">
					<h2 class="fs-40 fw-700 lh-12 mb-4">
						<? $APPLICATION->ShowTitle(true); ?></h2>
					<div class="fs-20 mb-4 mb-lg-0">
						Знакомьтесь с интерьерами нашего фитнес-клуба!
					</div>
					<div class=" d-lg-none">
						<? $APPLICATION->ShowViewContent('gallery-swiper2'); ?>
					</div>
				</div>
				<div class="col-12 col-lg-6 offset-lg-2 order-1 order-lg-0 d-none d-lg-block ">
					<? $APPLICATION->ShowViewContent('gallery-swiper'); ?>
				</div>
			</div>
		</div>
	</section>
</main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
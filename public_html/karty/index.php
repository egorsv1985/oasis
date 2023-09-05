<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Клубные карты");
$APPLICATION->SetTitle("Клубные карты");
?><main class="pt-5">
	<section class="cards py-5" id="cards">
		<div class="container">
			<div class="row pt-5">
				<div class="col-12 col-lg-4 pt-5">
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
							<div class="cards__box">
								<div class="cards__box-title">
									<div class="fs-80 fw-700 text-uppercase text">
										fitness
									</div>
									<div class="fs-80 fw-700 text-uppercase position-relative text-end text text--pseudo">
										SPA
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="fs-40 fw-700 lh-12 mb-4"><? $APPLICATION->ShowTitle(true); ?></div>
					<div class="fs-20">Выбери для себя удобный вариант тренировок</div>
					<div class="cards__btns row my-5 gy-3 px-3 px-lg-0">
						<a data-popup="#callback" href="#callback" role="button" class="btn btn-primary py-3 d-block fw-600 fs-16 col-12 col-lg-6"><span>Гостевой визит</span></a>
						<a data-popup="#callback" href="#callback" role="button" class="btn btn-transparent cards__btn btn--pseudo position-relative py-3 d-block fw-600 fs-16 col-12 col-lg-6 text-start text-md-center"><span>Заморозить карту</span></a>
					</div>
					<div class="cards__box-wave my-5">
						<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/wave.svg" alt="" class="" />
					</div>
					<a href="#" class="d-flex gap-3 align-items-center">
						<div class="cards__box-img">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/question.svg" alt="" class="" />
						</div>
						<div class="fs-16 text-info">
							Какую карту<br />
							выберишь ты?
						</div>
					</a>
				</div>

				<? $APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"cards",
					array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "7200",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"DISPLAY_DATE" => "Y",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "Y",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "5",
						"IBLOCK_TYPE" => "CONTENT",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "Y",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "20",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Новости",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"PREVIEW_TRUNCATE_LEN" => "",
						"PROPERTY_CODE" => array("", ""),
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SORT_BY1" => "SORT",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "ASC",
						"SORT_ORDER2" => "ASC",
						"STRICT_SECTION_CHECK" => "N"
					)
				); ?>
</main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
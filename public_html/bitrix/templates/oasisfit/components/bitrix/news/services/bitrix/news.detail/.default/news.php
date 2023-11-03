<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if (!$arResult["DETAIL_TEXT"]) {
	$arResult["DETAIL_TEXT"] = '<div class="alert alert-warning text-center">Страница находится в стадии доработки и наполнения!</div>';
}
$DETAIL_TEXT = explode('<hr>', $arResult["DETAIL_TEXT"]);
?>
<div class="service-text py-4">
	<? if ($arResult["DETAIL_TEXT"]) : ?>
		<div class="row">
			<div class="col text">
				<?= $DETAIL_TEXT[0]; ?>
			</div>
			<div class="col-md-2 text-center">
				<a href="/meropriyatiya/" target="_blank" class="events-link fs-18 fw-bold">
					<?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/images/events.svg'); ?>
					<span class="d-block mt-3">Мероприятия</span>
				</a>
			</div>
		</div>
	<? endif; ?>
</div>
<? if ($arResult['PROPERTIES']['GALLERY']['VALUE']) :
	global $arFilterGallery;
	$arFilterGallery = array(
		'ID' => $arResult['PROPERTIES']['GALLERY']['VALUE']
	);
?>
	</div>


	<div class="container pt-0 mt-0">
	<? endif; ?>

	<? if ($arResult['PROPERTIES']['PROGRAMMS']['VALUE']) :
		$SECTIONS = array();
	?>
		<div class="my-2">

			<?
			$arFilter = array(
				'IBLOCK_ID' => 3,
				'ACTIVE' => 'Y',
				'ID' => $arResult['PROPERTIES']['PROGRAMMS']['VALUE']
			);
			$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter, true);
			$i = 0;

			while ($arSection = $rsSections->GetNext()) :
				$SECTIONS[] = $arSection;
			endwhile;
			?>
			<? if (count($SECTIONS) > 1) : ?>
				<ul class="nav nav-pills justify-content-center justify-content-md-<?= count($SECTIONS) < 3 ? 'center' : 'center' ?>" id="programms-tab" role="tablist">
					<? foreach ($SECTIONS as $i => $arSection) : ?>
						<li class="nav-item my-2 mx-1" role="presentation">
							<button class="nav-link<?= ($i++ ? '' : ' active'); ?>" id="programms-<?= $arSection['ID']; ?>-tab" data-bs-toggle="pill" data-bs-target="#programms-<?= $arSection['ID']; ?>" type="button" role="tab" aria-controls="programms-<?= $arSection['ID']; ?>" aria-selected="true"><?= $arSection['NAME']; ?></button>
						</li>
					<? endforeach; ?>
				</ul>
			<? endif; ?>

			<div class="tab-content mb-4" id="programms-tabContent">
				<? foreach ($SECTIONS as $i => $arSection) : ?>
					<div class="tab-pane pb-3 fade<?= ($i ? '' : ' show active'); ?>" id="programms-<?= $arSection['ID']; ?>" role="tabpanel" aria-labelledby="programms-<?= $arSection['ID']; ?>-tab">
						<? if (count($SECTIONS) > 1) : ?>
							<div class="fs-40 color-red fw-bold my-5"><?= $arSection['NAME']; ?>:</div>
						<? endif; ?>


						<? $APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"directions",
							array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
								"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
								"AJAX_MODE" => "N",	// Включить режим AJAX
								"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
								"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
								"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
								"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
								"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
								"CACHE_GROUPS" => "Y",	// Учитывать права доступа
								"CACHE_TIME" => "7200",	// Время кеширования (сек.)
								"CACHE_TYPE" => "A",	// Тип кеширования
								"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
								"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
								"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
								"DISPLAY_DATE" => "N",	// Выводить дату элемента
								"DISPLAY_NAME" => "N",	// Выводить название элемента
								"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
								"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
								"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
								"FIELD_CODE" => array(	// Поля
									0 => "CODE",
									1 => "XML_ID",
									2 => "NAME",
									3 => "PREVIEW_TEXT",
									4 => "PREVIEW_PICTURE",
									5 => "DETAIL_TEXT",
									6 => "DETAIL_PICTURE",
									7 => "",
								),
								"FILTER_NAME" => "",	// Фильтр
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
								"IBLOCK_ID" => $arSection['IBLOCK_ID'],	// Код информационного блока
								"IBLOCK_TYPE" => "CONTENT",	// Тип информационного блока (используется только для проверки)
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
								"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
								"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
								"NEWS_COUNT" => "4",	// Количество новостей на странице
								"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
								"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
								"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
								"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
								"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
								"PAGER_TITLE" => "Новости",	// Название категорий
								"PARENT_SECTION" => $arSection['ID'],	// ID раздела
								"PARENT_SECTION_CODE" => "",	// Код раздела
								"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
								"PROPERTY_CODE" => array(	// Свойства
									0 => "DIRECTION",
									1 => "",
								),
								"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
								"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
								"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
								"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
								"SET_STATUS_404" => "N",	// Устанавливать статус 404
								"SET_TITLE" => "N",	// Устанавливать заголовок страницы
								"SHOW_404" => "N",	// Показ специальной страницы
								"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
								"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
								"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
								"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
								"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
								"COMPONENT_TEMPLATE" => ".default"
							),
							false
						); ?>

					</div>
				<? endforeach; ?>
			</div>
		</div>
	<? endif; ?>


	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"gallery",
		array(
			"NAME" => $arResult['NAME'],
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
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"FILTER_NAME" => "arFilterGallery",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "CONTENT",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "200",
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
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "IMAGES",
				2 => "",
			),
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
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "gallery"
		),
		false
	); ?>

	<div class=" pt-4 mt-2">
		<? if ($arResult['PROPERTIES']['SUBSCRIPTION']['VALUE']) : ?>
			<div class="my-4">
				<h3 class="text-center sub-title fs-30 fw-bold color-pink my-4 mb-5">Абонементы на тренировки</h3>
				<div class="table-responsive table-contaner rounded-5 p-4 fs-12">
					<? if (strpos($arResult['PROPERTIES']['SUBSCRIPTION']['~VALUE']['TEXT'], '<h3>') !== false) : ?>
						<?
						preg_match_all("|<h3>(.*?)<\/h3>|U", $arResult['PROPERTIES']['SUBSCRIPTION']['~VALUE']['TEXT'], $title);
						preg_match_all("/<table>(.*?)<\/table>/s", $arResult['PROPERTIES']['SUBSCRIPTION']['~VALUE']['TEXT'], $table);

						?>
						<div class="accordion" id="accordionPrice">
							<? foreach ($title[1] as $key => $value) : ?>
								<div class="accordion-item">
									<h3 class="accordion-header" id="heading<?= $key; ?>">
										<button class="accordion-button<?= $key ? ' collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $key; ?>" aria-expanded="false" aria-controls="collapse<?= $key; ?>">
											<?= $value; ?>
										</button>
									</h3>
									<div id="collapse<?= $key; ?>" class="accordion-collapse collapse<?= $key ? '' : ' show' ?>" aria-labelledby="heading<?= $key; ?>" data-bs-parent="#accordionPrice">
										<div class="accordion-body">
											<?= str_replace('<table', '<table class="table my-0"', $table[0][$key]); ?>
										</div>
									</div>
								</div>
							<? endforeach; ?>
						</div>
					<? else : ?>
						<?= str_replace('<table', '<table class="table my-0"', $arResult['PROPERTIES']['SUBSCRIPTION']['~VALUE']['TEXT']); ?>
					<? endif; ?>
				</div>
			</div>
		<? endif; ?>
	</div>
	<? if ($DETAIL_TEXT[1]) : ?>
		<div class="service-text py-4">
			<div class="row">
				<div class="col text">
					<?= $DETAIL_TEXT[1]; ?>
				</div>
			</div>
		</div>
	<? endif; ?>

	<? if ($arResult['PROPERTIES']['COMMANDS']['VALUE']) : ?>


		<? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"commands",
			array(
				"TITLE" => 'Тренеры' . ($arResult['ID'] == 1 ? ' тренажерного зала' : ''),
				"NOPADDING" => 'Y',
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
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "N",
				"DISPLAY_PICTURE" => "N",
				"DISPLAY_PREVIEW_TEXT" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "PREVIEW_TEXT",
					2 => "PREVIEW_PICTURE",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "5",
				"IBLOCK_TYPE" => "CONTENT",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "200",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => $arResult['PROPERTIES']['COMMANDS']['VALUE'],
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "POST",
					1 => "IMAGES",
					2 => "",
				),
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
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "commands"
			),
			false
		); ?>
	<? endif; ?>
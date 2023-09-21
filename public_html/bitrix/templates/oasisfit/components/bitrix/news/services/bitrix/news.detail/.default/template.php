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
$DETAIL_TEXT = explode('<hr>', $arResult["DETAIL_TEXT"]);
?>
<main class="pt-5">
	<section class="services-item" id="services-item">
		<div class="container">
			<div class="row gy-4">
				<div class="col-1 pt-5">
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
				<div class="col-11">
					<? if ($arResult['PROPERTIES']['GALLERY']['VALUE']) :
						global $arFilterGallery;
						$arFilterGallery = array(
							'ID' => $arResult['PROPERTIES']['GALLERY']['VALUE']
						);
					?>
				</div>



			<? endif; ?>
			<? if ($arResult['PROPERTIES']['GALLERY']['VALUE']) :
				global $arFilterGallery;
				$arFilterGallery = array(
					'ID' => $arResult['PROPERTIES']['GALLERY']['VALUE']
				);
			?>
			</div>
		<? endif; ?>
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
					1 => "IMAGES",
					2 => "ICON",
					3 => "",
				),
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
				"LIST_FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"LIST_PROPERTY_CODE" => array(
					0 => "",
					1 => "IMAGES",
					2 => "ICON",
					3 => "",
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
				"SEF_FOLDER" => "/galereya/",
				"SEF_MODE" => "Y",
				"SET_LAST_MODIFIED" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "DESC",
				"STRICT_SECTION_CHECK" => "N",
				"USE_CATEGORIES" => "N",
				"USE_FILTER" => "Y",
				"USE_PERMISSIONS" => "N",
				"USE_RATING" => "N",
				"USE_RSS" => "N",
				"USE_SEARCH" => "N",
				"USE_SHARE" => "N",
				"COMPONENT_TEMPLATE" => "gallery",
				"FILTER_NAME" => "arFilterGallery",
				"FILTER_FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"FILTER_PROPERTY_CODE" => array(
					0 => "",
					1 => "IMAGES",
				),
				"SEF_URL_TEMPLATES" => array(
					"news" => "",
					"section" => "",
					"detail" => "#ELEMENT_ID#/",
				)
			),
			false
		); ?>
		</div>
		<div class="col-10 col-lg-4">
			<h2 class="fs-40 fw-700 lh-12 mb-4">
				<? $APPLICATION->ShowTitle(true); ?></h2>
		</div>
		<div class="col-2">
			<a href="#" class="services-item__video-box">
				<img src="img/icons/video-btn.svg" alt="" class="services-item__video-btn" />
			</a>
		</div>
		<div class="col-12 col-lg-6">
			<? $APPLICATION->ShowViewContent('gallery-swiper'); ?>
		</div>
		<div class="col-12 col-lg-3">
			<a href="/meropriyatiya/" target="_blank" class="services-item__box-content d-block">
				<div class="fs-20 text-info">Мероприятия</div>
			</a>
		</div>
		<div class="col-12 col-lg-8 offset-lg-1">
			<div class="fs-16 lh-13 text-info mb-5">
				<?= $DETAIL_TEXT[0]; ?>
			</div>
		</div>
		</div>
		</div>
	</section>


	<section class="directions bg-success py-4 position-relative" id="directions">
		<div class="line1 position-absolute"></div>
		<div class="line2 position-absolute"></div>
		<div class="container">
			<div class="row gy-5 mb-5">
				<div class="col-12 col-sm-4">

					<?
					$arFilter = array(
						'IBLOCK_ID' => 9,
						'ACTIVE' => 'Y',
						'ID' => $arResult['PROPERTIES']['PROGRAMMS']['VALUE']
					);
					$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter, true);
					$i = 0;

					while ($arSection = $rsSections->GetNext()) :
						$SECTIONS[] = $arSection;
					endwhile;
					?>

					<ul class="nav nav-tabs flex-column" id="directionsTab" role="tablist">
						<? foreach ($SECTIONS as $i => $arSection) : ?>
							<li class="nav-item" role="presentation">
								<button class="nav-link<?= ($i++ ? '' : ' active'); ?>" id="tab-<?= $arSection['ID']; ?>-tab" data-bs-toggle="pill" data-bs-target="#tab-<?= $arSection['ID']; ?>" type="button" role="tab" aria-controls="tab-<?= $arSection['ID']; ?>" aria-selected="true"><?= $arSection['NAME']; ?></button>
							</li>
						<? endforeach; ?>
					</ul>

				</div>
				<div class="col-4 offset-lg-1">
					<div class="fs-36 fw-700 lh-12 text-white">
						Зоны/Направления тренажерного зала
					</div>
				</div>
			</div>
			<div class="tab-content my-5" id="directionsTabContent">
				<? foreach ($SECTIONS as $i => $arSection) : ?>
					<div class="tab-pane fade<?= ($i ? '' : ' show active'); ?>" id="tab-<?= $arSection['ID']; ?>" role="tabpanel" aria-labelledby="tab-<?= $arSection['ID']; ?>-tab">

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
	</section>

	<section class="trainers position-relative" id="trainers">
		<div class="container">
			<? $APPLICATION->IncludeComponent(
				"bitrix:news",
				"commands",
				array(
					"TITLE" => 'Тренеры' . ($arResult['ID'] == 1 ? ' тренажерного зала' : ''),
					"NOPADDING" => 'Y',
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "Y",
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
					"IBLOCK_ID" => "6",
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
			<div class="row flex-row-reverse flex-lg-row">
				<div class="col-12 col-lg-4">
					<div class="fs-36 fw-700 lh-12 mb-4">
						<? echo $title; ?>
					</div>
					<div class="fs-20">Выбери своего тренера</div>
				</div>
				<div class="col-12 col-lg-8">
					<? $APPLICATION->ShowViewContent('swiper__control'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="forms pb-5 position-relative" id="forms">
		<div class="container">
			<div class="fs-80 fw-700 text-uppercase text-center text position-relative">
				fitness
			</div>
			<? $APPLICATION->IncludeComponent(
				"bitrix:iblock.element.add.form",
				"form-services",
				array(
					"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",	// * дата начала *
					"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",	// * дата завершения *
					"CUSTOM_TITLE_DETAIL_PICTURE" => "",	// * подробная картинка *
					"CUSTOM_TITLE_DETAIL_TEXT" => "",	// * подробный текст *
					"CUSTOM_TITLE_IBLOCK_SECTION" => "",	// * раздел инфоблока *
					"CUSTOM_TITLE_NAME" => "",	// * наименование *
					"CUSTOM_TITLE_PREVIEW_PICTURE" => "",	// * картинка анонса *
					"CUSTOM_TITLE_PREVIEW_TEXT" => "",	// * текст анонса *
					"CUSTOM_TITLE_TAGS" => "",	// * теги *
					"DEFAULT_INPUT_SIZE" => "30",	// Размер полей ввода
					"DETAIL_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования подробного текста
					"ELEMENT_ASSOC" => "CREATED_BY",	// Привязка к пользователю
					"GROUPS" => array(	// Группы пользователей, имеющие право на добавление/редактирование
						0 => "2",
					),
					"IBLOCK_ID" => "12",	// Инфоблок
					"IBLOCK_TYPE" => "FORMS",	// Тип инфоблока
					"LEVEL_LAST" => "Y",	// Разрешить добавление только на последний уровень рубрикатора
					"LIST_URL" => "",	// Страница со списком своих элементов
					"MAX_FILE_SIZE" => "0",	// Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
					"MAX_LEVELS" => "100000",	// Ограничить кол-во рубрик, в которые можно добавлять элемент
					"MAX_USER_ENTRIES" => "100000",	// Ограничить кол-во элементов для одного пользователя
					"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования текста анонса
					"PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
						0 => "31",
						1 => "NAME",
					),
					"PROPERTY_CODES_REQUIRED" => array(	// Свойства, обязательные для заполнения
						0 => "31",
						1 => "NAME",
					),
					"RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
					"SEF_MODE" => "N",	// Включить поддержку ЧПУ
					"STATUS" => "ANY",	// Редактирование возможно
					"STATUS_NEW" => "N",	// Деактивировать элемент
					"USER_MESSAGE_ADD" => "",	// Сообщение об успешном добавлении
					"USER_MESSAGE_EDIT" => "",	// Сообщение об успешном сохранении
					"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
				),
				false
			); ?>
			<div class="fs-80 fw-700 text-uppercase position-relative text-center text text--pseudo">
				SPA
			</div>
		</div>
	</section>
</main>
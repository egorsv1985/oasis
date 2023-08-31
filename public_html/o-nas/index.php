<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "О нас");
$APPLICATION->SetTitle("О нас"); ?>
<main class="pt-5">

	<section class="about position-relative" id="about">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-4 pt-5">
					<div class="row">
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
						<div class="col-9">
							<a href="#" class="about__box-content d-block">
								<div class="fs-20 text-info">
									Меняем карту вашего клуба на
									<span class="text-uppercase">Oasis Sity</span>
								</div>
							</a>
						</div>
						<h1 class="fs-40 fw-700 lh-12 mb-3"><? $APPLICATION->ShowTitle(true); ?></h1>
						<div class="fs-20">Узнай нас еще лучше!</div>
					</div>

				</div>
				<div class="col-12 col-lg-8 pt-5">
					<?
					$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"for_you",
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
							"FIELD_CODE" => array(
								0 => "",
								1 => "ID",
								2 => "CODE",
								3 => "XML_ID",
								4 => "NAME",
								5 => "TAGS",
								6 => "SORT",
								7 => "PREVIEW_TEXT",
								8 => "PREVIEW_PICTURE",
								9 => "DETAIL_TEXT",
								10 => "DETAIL_PICTURE",
								11 => "DATE_ACTIVE_FROM",
								12 => "ACTIVE_FROM",
								13 => "DATE_ACTIVE_TO",
								14 => "ACTIVE_TO",
								15 => "SHOW_COUNTER",
								16 => "SHOW_COUNTER_START",
								17 => "IBLOCK_TYPE_ID",
								18 => "IBLOCK_ID",
								19 => "IBLOCK_CODE",
								20 => "IBLOCK_NAME",
								21 => "IBLOCK_EXTERNAL_ID",
								22 => "DATE_CREATE",
								23 => "CREATED_BY",
								24 => "CREATED_USER_NAME",
								25 => "TIMESTAMP_X",
								26 => "MODIFIED_BY",
								27 => "USER_NAME",
								28 => "",
							),
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "10",
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
							"PARENT_SECTION" => "0",
							"PARENT_SECTION_CODE" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"PROPERTY_CODE" => array(
								0 => "COLOR",
								1 => "ICON",
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
							"SORT_ORDER1" => "DESC",
							"SORT_ORDER2" => "ASC",
							"STRICT_SECTION_CHECK" => "N",
							"COMPONENT_TEMPLATE" => "for_you"
						),
						false
					); ?>
				</div>
			</div>

		</div>
	</section>
	<section class="plans bg-success py-4 position-relative" id="plans">
		<div class="container position-relative">
			<div class="row gy-5">
				<div class="col-12 col-sm-4">

					<ul class="nav nav-tabs flex-column" id="planTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">
								Аквапарк</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">
								3-ий этаж</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">4-ий этаж</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">5-ий этаж</a>
						</li>
					</ul>
				</div>
				<div class="col-12 col-sm-5">
					<h2 class="fs-36 fw-700 lh-12 text-white position-relative plans__title">
						В среднем наш клиент проходит 20 000 шагов в клубе:
					</h2>
				</div>
			</div>


			<div class="tab-content my-5" id="planTabContent">
				
				<div class="tab-pane fade position-relative" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
					<div class="plans__img">
						<picture>
							<source srcset="plan2.webp" type="image/webp"><img src="plan2.png" class="w-100">
						</picture>
					</div>
				</div>

				<div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
					<div class="plans__img position-relative" style="padding-top: 70%; background: url(plan.svg) no-repeat center / 100% 100%;">
						<?
						$arSelect = array("ID", "NAME", "PROPERTY_ICO", "PROPERTY_TOP", "PROPERTY_LEFT", "PROPERTY_LINK", "PROPERTY_COLOR");
						$arFilter = array(
							"IBLOCK_ID" => 4,
							"ACTIVE" => "Y",
							'SECTION_ID' => 1,
						);
						$rsElements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
						while ($arElement = $rsElements->GetNext()) {
							echo '	<div class="plans__marker position-absolute rounded-circle" style="background-color: ' . trim($arElement['PROPERTY_COLOR_VALUE'], ';			') . '; top: ' . $arElement['PROPERTY_TOP_VALUE'] . '; left: ' . $arElement['PROPERTY_LEFT_VALUE'] . ';">
										<div class="plans__ico" style="background: url(' . CFile::GetPath($arElement['PROPERTY_ICO_VALUE']) . ') no-repeat center / contain;"></div>
										<div class="plans__inform text-center text-nowrap position-absolute start-50 fs-16 fw-700 px-5 py-4 rounded-4">
											' . $arElement['~NAME'] . '	' . ($arElement['PROPERTY_LINK_VALUE'] ? '<div>
											<a href="' . $arElement['PROPERTY_LINK_VALUE'] . '#gallery" class="btn btn-primary mt-2 fw-500 fs-14" target="_blank">В галерею</a>
											</div>' : '') . '
										</div>
									</div>';
						}

						?>
					</div>
					<div class="plans__content position-relative">
						<div class="row">
							<div class="col-8 col-sm-6">
								<div class="fs-24 fw-700 text-white lh-15 mb-4">
									<h2>
										Тут можно что-нибудь написать интересное о клубе, но это не
										обязательно
									</h2>
								</div>

								<div class="plans__numbered-list fs-16 fst-italic text-white">
									<ol class="plans__list ps-0">
										<li class="fs-16 lh-13 text-white">
											Развитие функциональных и скоростно-силовых способностей,
											коррекция осанки, улучшение гибкости и подвижности суставов,
											развитие координационных способностей, динамическое
											вытяжение позвоночника за счет хореографии рук.
										</li>
										<li class="fs-16 lh-13 text-white">
											Коррекция веса, увеличение силовых показателей и мышечной
											массы, детский и подростковый тренинг.
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade position-relative" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
					<div class="plans__img position-relative" style="
            padding-top: 70%;
            background: url(plan4.svg) no-repeat center / 100% 100%;
          ">
						<?

						$arSelect = array("ID", "NAME", "PROPERTY_ICO", "PROPERTY_TOP", "PROPERTY_LEFT", "PROPERTY_LINK", "PROPERTY_COLOR");
						$arFilter = array(
							"IBLOCK_ID" => 11,
							"ACTIVE" => "Y",
							'SECTION_ID' => 2,
						);
						$rsElements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
						while ($arElement = $rsElements->GetNext()) {
							echo '
<div class="plans__marker position-absolute rounded-circle" style="background-color: ' . trim($arElement['PROPERTY_COLOR_VALUE'], ';') . '; top: ' . $arElement['PROPERTY_TOP_VALUE'] . '; left: ' . $arElement['PROPERTY_LEFT_VALUE'] . ';">
<div class="plans__ico" style="background: url(' . CFile::GetPath($arElement['PROPERTY_ICO_VALUE']) . ') no-repeat
center / contain;;"></div>
<div class="plans__inform text-center text-nowrap position-absolute start-50 fs-16 fw-700 px-5 py-4 rounded-4">
' . $arElement['~NAME'] . '
' . ($arElement['PROPERTY_LINK_VALUE'] ? '<div><a href="' . $arElement['PROPERTY_LINK_VALUE'] . '#gallery" class="btn btn-primary mt-2 fw-500 fs-14" target="_blank">В галерею</a></div>' : '') . '
</div>
</div>';
						}

						?>


					</div>
					<div class="plans__content position-relative">
						<div class="row">
							<div class="col-8 col-sm-6">
								<div class="fs-24 fw-700 text-white lh-15 mb-4">
									<h2>
										Тут можно что-нибудь написать интересное о клубе, но это не
										обязательно
									</h2>
								</div>

								<div class="plans__numbered-list fs-16 fst-italic text-white">
									<ol class="plans__list ps-0">
										<li class="fs-16 lh-13 text-white">
											Развитие функциональных и скоростно-силовых способностей,
											коррекция осанки, улучшение гибкости и подвижности суставов,
											развитие координационных способностей, динамическое
											вытяжение позвоночника за счет хореографии рук.
										</li>
										<li class="fs-16 lh-13 text-white">
											Коррекция веса, увеличение силовых показателей и мышечной
											массы, детский и подростковый тренинг.
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade position-relative" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
					<div class="plans__img position-relative" style="
            padding-top: 70%;
            background: url(plan5.svg) no-repeat center / 100% 100%;
          ">
						<?

						$arSelect = array("ID", "NAME", "PROPERTY_ICO", "PROPERTY_TOP", "PROPERTY_LEFT", "PROPERTY_LINK", "PROPERTY_COLOR");
						$arFilter = array(
							"IBLOCK_ID" => 11,
							"ACTIVE" => "Y",
							'SECTION_ID' => 3,
						);
						$rsElements = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
						while ($arElement = $rsElements->GetNext()) {
							echo '
<div class="plans__marker position-absolute rounded-circle" style="background-color: ' . trim($arElement['PROPERTY_COLOR_VALUE'], ';') . '; top: ' . $arElement['PROPERTY_TOP_VALUE'] . '; left: ' . $arElement['PROPERTY_LEFT_VALUE'] . ';">
<div class="plans__ico" style="background: url(' . CFile::GetPath($arElement['PROPERTY_ICO_VALUE']) . ') no-repeat
center / contain;;"></div>
<div class="plans__inform text-center text-nowrap position-absolute start-50 fs-16 fw-700 px-5 py-4 rounded-4">
' . $arElement['~NAME'] . '
' . ($arElement['PROPERTY_LINK_VALUE'] ? '<div><a href="' . $arElement['PROPERTY_LINK_VALUE'] . '#gallery" class="btn btn-primary mt-2 fw-500 fs-14" target="_blank">В галерею</a></div>' : '') . '
</div>
</div>';
						}

						?>


					</div>
					<div class="plans__content position-relative">
						<div class="row">
							<div class="col-8 col-sm-6">
								<div class="fs-24 fw-700 text-white lh-15 mb-4">
									<h2>
										Тут можно что-нибудь написать интересное о клубе, но это не
										обязательно
									</h2>
								</div>

								<div class="plans__numbered-list fs-16 fst-italic text-white">
									<ol class="plans__list ps-0">
										<li class="fs-16 lh-13 text-white">
											Развитие функциональных и скоростно-силовых способностей,
											коррекция осанки, улучшение гибкости и подвижности суставов,
											развитие координационных способностей, динамическое
											вытяжение позвоночника за счет хореографии рук.
										</li>
										<li class="fs-16 lh-13 text-white">
											Коррекция веса, увеличение силовых показателей и мышечной
											массы, детский и подростковый тренинг.
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>




	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"community",
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
			"DISPLAY_DATE" => "Y",	// Выводить дату элемента
			"DISPLAY_NAME" => "Y",	// Выводить название элемента
			"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
			"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
			"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
			"FIELD_CODE" => array(	// Поля
				0 => "NAME",
				1 => "PRIVEW_TEXT",
				2 => "PRIVEW_PICTURE",
			),
			"FILTER_NAME" => "",	// Фильтр
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
			"IBLOCK_ID" => "10",	// Код информационного блока
			"IBLOCK_TYPE" => "CONTENT",	// Тип информационного блока (используется только для проверки)
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
			"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
			"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
			"NEWS_COUNT" => "20",	// Количество новостей на странице
			"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
			"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
			"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
			"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
			"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
			"PAGER_TITLE" => "Новости",	// Название категорий
			"PARENT_SECTION" => "0",	// ID раздела
			"PARENT_SECTION_CODE" => "",	// Код раздела
			"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
			"PROPERTY_CODE" => array(	// Свойства
				0 => "",
				1 => "ICON",
				2 => "",
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
			"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
			"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
			"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		),
		false
	); ?>
</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
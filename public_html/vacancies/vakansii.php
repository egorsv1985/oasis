<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты");
$APPLICATION->SetPageProperty("TTITLE", "Контакты");
$APPLICATION->SetTitle("Контакты");
?><main class="pt-5">
	<section class="contacts" id="contacts">
		<div class="container">
			<div class="row mb-4">
				<div class="col-1">
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
					<? $APPLICATION->IncludeComponent(
						"bitrix:map.yandex.view",
						".default",
						array(
							"API_KEY" => "",
							"CONTROLS" => array(
								0 => "ZOOM",
								1 => "SMALLZOOM",
								2 => "TYPECONTROL",
								3 => "SCALELINE",
							),
							"INIT_MAP_TYPE" => "MAP",
							"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:61.263305193075;s:10:\"yandex_lon\";d:73.429972213835;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.834502840623;s:3:\"LAT\";d:55.811321389916;s:4:\"TEXT\";s:0:\"\";}}}",
							"MAP_HEIGHT" => "500",
							"MAP_ID" => "",
							"MAP_WIDTH" => "100%",
							"OPTIONS" => array(
								0 => "ENABLE_SCROLL_ZOOM",
								1 => "ENABLE_DBLCLICK_ZOOM",
								2 => "ENABLE_DRAGGING",
							),
							"COMPONENT_TEMPLATE" => ".default"
						),
						false
					); ?>
				</div>
			</div>
			<div class="row gy-4">
				<div class="col-12 col-md-4 col-lg-3">
					<h2 class="fs-40 lh-12 fw-700 mb-4"><? $APPLICATION->ShowTitle(true); ?></h2>
					<div class="fs-20 mb-4">
						Мы всегда на связи!
					</div>
					<a href="#" class="contacts__box-content d-block">
						<div class="fs-20 text-info">
							Написать в WhatsApp
						</div>
					</a>
				</div>
				<div class="col-12 col-md-4 col-lg-3 offset-lg-1">
					<a href="#" class="d-flex gap-2 mb-4 align-items-center">
						<div class="contacts__link contacts__link--map">
						</div>
						<div class="fs-16 fw-700">
							<div>
								г. Сургут,<br>
								ул.Профсоюзов, 53/2
							</div>
						</div>
					</a> <a href="tel:+73462949090" class="d-flex gap-2 mb-4 align-items-center">
						<div class="contacts__link contacts__link--phone">
						</div>
						<div class="fs-16 fw-700 text-end">
							<span class="d-block text-nowrap">+7 346 294 90 90</span>
						</div>
					</a>
					<div class="d-flex gap-2 mb-4 align-items-center">
						<div class="contacts__link contacts__link--work">
						</div>
						<div class="fs-16 fw-700 text-end">
							<span class="d-block">Пн-Пт 6:30-23:00 </span> <span class="d-block">Сб-Вс 9:00-22:00 </span>
						</div>
					</div>
					<a href="mailto:info@oasis.ru" class="d-flex gap-2 mb-4 align-items-center">
						<div class="contacts__link contacts__link--phone">
						</div>
						<div class="fs-16 fw-700 text-end">
							<span class="d-block text-nowrap">info@oasis.ru</span>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-4 offset-xl-1 ">
					<ul class="contacts__list mb-4">
						<li><a href="#">Способы оплаты</a></li>
						<li><a href="#">Правила клуба</a></li>
						<li><a href="#">Политика конфиденциальности</a></li>
						<li><a href="#">Разработка сайта: ТКК</a></li>
					</ul>
					<div class="row align-items-center gy-3 mb-3">
						<div class="col-12 col-sm-6">
							<a class="btn border-primary py-2 rounded-2 d-block text-center">
								<img src="/bitrix/templates/oasisfit/img/icons/app-store-dark.svg" data-bx-app-ex-src="#BXAPP0#" class="mw-100" data-bx-orig-src="/bitrix/templates/oasisfit/img/icons/app-store-dark.svg">
							</a>
						</div>
						<div class="col-12 col-sm-6">
							<a class="btn border-primary py-2 rounded-2 d-block text-center">
								<img src="/bitrix/templates/oasisfit/img/icons/google-play-dark.svg" data-bx-app-ex-src="#BXAPP1#" class="mw-100" data-bx-orig-src="/bitrix/templates/oasisfit/img/icons/google-play-dark.svg">
							</a>
						</div>
					</div>
					<div class="fs-16 text-info">
						ООО «Ворлд Фитнес» 628418, РФ, ХМАО-Югра, г. Сургут, ул.Профсоюзов, д. 55, оф. 76 ИНН/КПП: 8602257953/ 860201001
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
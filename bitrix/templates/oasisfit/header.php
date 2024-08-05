<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

if (!defined("PAGE"))
	define("PAGE", "TEXT");

use \Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
$asset->addCss('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap');
$asset->addCss('https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap');
$asset->addJs('https://code.jquery.com/jquery-3.6.0.min.js');
$asset->addJs('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');

$asset->addCss('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');


$asset->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js');

$asset->addJs('https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js');


$asset->addJs(SITE_TEMPLATE_PATH . '/script.js');

?>

<!DOCTYPE html>
<html lang="ru">

<head>

	<meta name="yandex-verification" content="2b9b6b06def27c8a" />

	<? if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false) : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<? else : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<? endif; ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon/favicon.ico">
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/favicon//apple-touch-icon.png"> -->
	<!-- <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/favicon//favicon-32x32.png"> -->
	<!-- <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/favicon//favicon-16x16.png"> -->
	<!-- <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/favicon//site.webmanifest"> -->
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>

	<body class="<?= PAGE === "MAIN" ? 'main' : '' ?>">
		<? if (strpos($APPLICATION->GetCurPage(), 'o-nas') !== false) : ?>
			<style>
				.modal-backdrop {
					opacity: 0;
				}
			</style>
		<? endif; ?>
		<div class="wrapper">
			<header class="header py-3 fixed-top w-100">
				<div class="container">
					<div class="row">
						<div class="col-6 col-xl-4">
							<div class="d-flex justify-content-between align-items-center">
								<button type="button" class="header__burger burger button py-3 d-flex gap-3 align-items-center me-3 position-relative">
									<span class="burger__inner position-relative d-flex justify-content-center align-items-center">
										<span></span>
									</span>
									<span class="fs-16 fw-700 text-uppercase">МЕНЮ</span>
								</button>
								<a href="/raspisanie/" class="header__btn-shedule btn btn-primary py-3 fw-600 fs-16 px-5"><span>Расписание</span></a>

								<div class="header__box-work">
									<div class="d-flex gap-2 align-items-center">
										<div class="header__link header__link--work"></div>
										<div class="fs-16 fw-700 text-end">
											<span class="d-block">Пн-Пт 6:30-23:00 </span>
											<span class="d-block">Сб-Вс 9:00-22:00 </span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4 position-relative header__box-logo">
							<div class="text-center">
								<a href="/" class="d-block mw-100 text-center">
									<picture>
										<source srcset="<?= PAGE === "MAIN" ? SITE_TEMPLATE_PATH . '/img/logo_oasis.webp' : SITE_TEMPLATE_PATH . '/img/logo_oasis-black.webp' ?>" type="image/webp">
										<img src="<?= PAGE === "MAIN" ? SITE_TEMPLATE_PATH . '/img/logo_oasis.png' : SITE_TEMPLATE_PATH . '/img/logo_oasis-black.png' ?>" alt="oasis" title="oasis" class="mw-100 h-auto" width="141" height="58">
									</picture>
								</a>
							</div>
						</div>
						<div class="col-2 col-xl-3 d-block">
							<a href="tel:+73462949090" class="d-flex gap-2 justify-content-end align-items-center" title="+73462949090">
								<div class="header__link header__link--phone rounded-circle"></div>
								<div class="d-none d-xl-block fs-20 fw-700 text-end">
									<span class="d-block text-nowrap">+7 (3462) 94 90 90</span>
								</div>
							</a>
						</div>
						<div class="header__menu col-12 col-md-6 col-lg-4">
							<div class="d-flex flex-column justify-content-between h-100">
								<div class="header__menu-top pb-4">
									<? $APPLICATION->IncludeComponent(
										"bitrix:menu",
										"main",
										array(
											"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
											"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
											"DELAY" => "N",	// Откладывать выполнение шаблона меню
											"MAX_LEVEL" => "1",	// Уровень вложенности меню
											"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
												0 => "",
											),
											"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
											"MENU_CACHE_TYPE" => "N",	// Тип кеширования
											"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
											"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
											"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
										),
										false
									); ?>
									<div class="header__btns row mt-5 gy-3 px-3 px-lg-0">
										<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="header__btn-shedule btn btn-primary py-3 fw-600 fs-16 px-5"><span>Расписание</span></button>
										<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn btn-light py-3 d-block fw-600 fs-16 col-12 col-lg-6"><span>Гостевой визит</span></button>
										<button type="button" data-bs-toggle="modal" data-bs-target="#freeze" class="btn btn-transparent header__btn btn--pseudo position-relative py-3 d-block fw-600 fs-16 col-12 col-lg-6 text-start text-md-center"><span>Заморозить карту</span></button>
									</div>
									<div class="header__icons">
										<div class="chevron"></div>
										<div class="chevron"></div>
										<div class="chevron"></div>
									</div>
								</div>

								<div class="header__menu-bottom pb-4 mt-4">
									<div class="row align-items-center gy-3 px-3">
										<div class="col-12 col-lg-6">
											<a href="#" class="btn border-white py-2 rounded-2 d-block text-center" title="app-store">
												<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/app-store-white.svg" class="mw-100" alt="app-store" width="100" height="33">
											</a>
										</div>
										<div class="col-12 col-lg-6">
											<a href="#" class="btn border-white py-2 rounded-2 d-block text-center" title="google-play">
												<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/google-play-white.svg" class="mw-100" alt="google-play" width="100" height="33">
											</a>
										</div>
										<a href="#" class="d-flex gap-2 mt-4">
											<div class="header__menu-link header__menu-link--map"></div>
											<div class="fs-20 fw-700">
												<div>
													г. Сургут,<br>
													ул.Профсоюзов, 53/2
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="header__services">
								<div class="menu-title fs-36 fw-700 lh-12 mb-4 text-start">
									Услуги
								</div>

								<div class="header__services-menu py-3">
									<ul>
										<?
										CModule::IncludeModule("iblock");
										$arSelect = array("ID", "NAME", "PROPERTY_ICO", "PROPERTY_COLOR", 'DETAIL_PAGE_URL');
										$arFilter = array("IBLOCK_ID" => 11, "ACTIVE" => "Y");
										$rsElements = CIBlockElement::GetList(array('SORT' => 'ASC'), $arFilter, false, false, $arSelect);
										while ($arElement = $rsElements->GetNext()) : ?>
											<li>
												<a href="<?= $arElement['DETAIL_PAGE_URL']; ?>">
													<?= $arElement['NAME']; ?>
													<span class="header__ico position-absolute top-0 bottom-0 start-0" style="background: url(<?= CFile::GetPath($arElement['PROPERTY_ICO_VALUE']); ?>) no-repeat center;"></span>
													<span class="header__back  position-absolute top-0 bottom-0 start-0" style="background-color: <?= $arElement['PROPERTY_COLOR_VALUE']; ?>"></span>
												</a>
											</li>

										<? endwhile; ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
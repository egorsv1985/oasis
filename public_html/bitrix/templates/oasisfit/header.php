<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

if (!defined("PAGE"))
	define("PAGE", "TEXT");

use \Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addJs('https://code.jquery.com/jquery-3.6.0.js');
$asset->addJs('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');

$asset->addCss('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');

$asset->addCss('https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js');

$asset->addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css');
$asset->addJs('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.js');

$asset->addJs('https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js');

$asset->addJs(SITE_TEMPLATE_PATH . '/script.js');

?>

<!DOCTYPE html>
<html lang="ru">

<head>
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

	<body class="home">
		<div class="wrapper">
			<header class="header py-3 position-fixed w-100">
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
								<a data-popup="#callback" href="#callback" role="button" class="header__btn-shedule btn btn-primary py-3 fw-600 fs-16 px-5"><span>Расписание</span></a>
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
						<div class="col-6 col-xl-5 position-relative header__box-logo">
							<div class="text-center">
								<a href="/" class="d-block mw-100 text-center">
									<picture>
										<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/logo.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="logo" class="mw-100" width="141" height="58">
									</picture>

								</a>
							</div>
						</div>
						<div class="col-3 d-none d-xl-block">
							<a href="tel:+73462949090" class="d-flex gap-2 justify-content-end align-items-center">
								<div class="header__link header__link--phone"></div>
								<div class="fs-20 fw-700 text-end">
									<span class="d-block text-nowrap">+7 346 294 90 90</span>
								</div>
							</a>
						</div>
						<div class="header__menu col-12 col-md-6 col-lg-4">
							<div class="d-flex flex-column justify-content-between h-100">
								<div class="header__menu-top">
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
								</div>
								<div class="header__btns row mt-5 gy-3 px-3 px-lg-0">
									<a data-popup="#callback" href="#callback" role="button" class="btn btn-light py-3 d-block fw-600 fs-16 col-12 col-lg-6"><span>Гостевой визит</span></a>
									<a data-popup="#callback" href="#callback" role="button" class="btn btn-transparent header__btn btn--pseudo position-relative py-3 d-block fw-600 fs-16 col-12 col-lg-6 text-start text-md-center"><span>Заморозить карту</span></a>
								</div>
								<div class="header__menu-bottom pb-4 mt-4">
									<div class="row align-items-center gy-3 px-3">
										<div class="col-12 col-lg-6">
											<a class="btn border-white py-2 rounded-2 d-block text-center">
												<img src="img/icons/app-store.svg" class="mw-100" />
											</a>
										</div>
										<div class="col-12 col-lg-6">
											<a class="btn border-white py-2 rounded-2 d-block text-center">
												<img src="img/icons/google-play.svg" class="mw-100" />
											</a>
										</div>
										<a href="#" class="d-flex gap-2 mt-4">
											<div class="header__menu-link header__menu-link--map"></div>
											<div class="fs-20 fw-700">
												<div>
													г. Сургут,<br />
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
										$arSelect = array("ID", "NAME", "PROPERTY_ICO", "PROPERTY_GRADIENT", 'DETAIL_PAGE_URL');
										$arFilter = array("IBLOCK_ID" => 1, "ACTIVE" => "Y");
										$rsElements = CIBlockElement::GetList(array('SORT' => 'ASC'), $arFilter, false, false, $arSelect);
										while ($arElement = $rsElements->GetNext()) : ?>
											<li>
												<a href="<?= $arElement['DETAIL_PAGE_URL']; ?>">
													<?= $arElement['NAME']; ?>
													<span class="gradient" style="background:<?= $arElement['PROPERTY_GRADIENT_VALUE']; ?>"></span>
													<span class="ico" style="background-image: url(<?= CFile::GetPath($arElement['PROPERTY_ICO_VALUE']); ?>)"></span>
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





			<!-- <main>
				<section class="promo position-fixed w-100 top-0 start-0 h-100" id="promo">
					<div class="container h-100">
						<div class="row h-100 position-relative">
							<div class="col-11 offset-1 h-100">
								<div class="promo__box-fon text-center position-relative h-100">
									<div class="promo__box-trener position-absolute w-100 h-100"></div>
									<div class="promo__box-fon-1 d-inline-block h-100">
										<picture>
											<source srcset="img/fon.webp" type="image/webp"><img src="img/fon.png" alt="" class="h-100" />
										</picture>
									</div>
									<div class="promo__box-text-fon d-inline-block h-100 position-absolute start-50">
										<img src="img/icons/oasis-fon.svg" alt="" class="w-100 h-100" />
									</div>
									<div class="promo__box-text-border d-inline-block h-100 position-absolute start-50">
										<img src="img/icons/oasis-border.svg" alt="" class="w-100 h-100" />
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="promo__box d-flex flex-column p-5 position-absolute start-0">
									<div class="fs-48 h1 fw-700 lh-12">
										<h1>Стань лучшей<br />версией себя!</h1>
									</div>
									<div class="fs-24 mb-5">Присоединяйся к нам в фитнес зале!</div>
									<div class="promo__box-btn">
										<a data-popup="#callback" href="#callback" role="button" class="promo__btn btn btn-primary py-3 d-block fw-500 fs-18"><span>Купить клубную карту</span></a>
									</div>
								</div>
							</div>
						</div>

						<div class="row">

						</div>
					</div>
				</section>
			</main> -->



			<!-- 

	</body>

	<body <? if (PAGE == 'FENCES') : ?> style="background-color: #e0edc1;" <? endif; ?> <?= ($USER->IsAdmin() ? ' class="admin"' : '') ?>>


		<div class="wrapper">
			
			<main>
				<div class="container">
					<? if (PAGE == 'TEXT') : ?>
						<? $APPLICATION->IncludeComponent(
							"bitrix:breadcrumb",
							"",
							array()
						); ?>
						<div class="row pt-4 mb-3 mb-5">
							<div class="col">
								<h1 class="fs-48 fw-700 ff-roboto"><? $APPLICATION->ShowTitle(true); ?></h1>
							</div>
							<div class="col-4 offset-3">
								<div class="fs-18 lh-11">
									<p>
										Более 20 разных цветов. Возможно изготовление индивидуальных цветов
										по спецзаказу!
									</p>
								</div>

							</div>
						</div>


					<? endif; ?>
				</div>






				<body>


					<section class="main-content">
						<? if (TYPE_PAGE == 'MAIN') : ?>
							<div class="main-page">
								<div class="container position-relative">
									<div class="man">

									</div>
									<div class="offer fs-28 px-5 py-4 rounded-5">
										Привет, братан,<br>
										не вижу тебя в зале!<br>
										<a href="#" class="btn btn-green mt-3 fw-normal">
											<strong>Хочу клубную карту</strong>
										</a>
									</div>
								</div>
							</div>
						<? elseif (TYPE_PAGE == 'TEXT') : ?>

							<div class="container pt-4 mt-2">
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
								<div class="page-title mb-4">
									<h1><? $APPLICATION->ShowTitle(true); ?></h1>
									<span class="title-shadow text-nowrap"><? $APPLICATION->ShowTitle(true); ?></span>
								</div>
							<? endif; ?> -->
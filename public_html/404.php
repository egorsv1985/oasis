<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found"); ?>

<main>
	<section class="promo position-fixed w-100 top-0 start-0 h-100" id="promo">
		<div class="container h-100">
			<div class="row h-100 position-relative">
				<div class="col-11 offset-1 h-100">
					<div class="promo__box-fon text-center position-relative h-100">
						<div class="error__box-trener position-absolute w-100 h-100"></div>
						<div class="promo__box-fon-1 d-inline-block h-100">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/fon.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/fon.png" alt="oasisfit" class="h-100">
							</picture>
						</div>
						<div class="error__box-text-fon d-inline-block h-100 position-absolute start-50">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/404-fon.svg" alt="" class="w-100 h-100">
						</div>
						<div class="error__box-text-border d-inline-block h-100 position-absolute start-50">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/404-border.svg" alt="" class="w-100 h-100">
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="error__box d-flex flex-column p-5 position-absolute start-0 gap-4">
						<div class="fs-24 fw-500">
							<h2>Извините, страница не найдена!</h2>
						</div>

						<div class="promo__box-btn">
							<a href="/" role="button" class="promo__btn btn btn-primary py-3 d-block fw-500 fs-18"><span>На главную</span></a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">

			</div>
		</div>
	</section>
</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
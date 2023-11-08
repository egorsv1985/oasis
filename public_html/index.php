<?
define('PAGE', 'MAIN');
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "Фитнес-центр OasisFit");
$APPLICATION->SetTitle("Главная");
?><main>
	<section class="promo position-fixed w-100 top-0 start-0 h-100" id="promo">
		<div class="container h-100">
			<div class="row h-100 position-relative">
				<div class="col-11 offset-1 h-100">
					<div class="promo__box-fon text-center position-relative h-100">
						<div class="promo__box-trener position-absolute w-100 h-100">
						</div>
						<div class="promo__box-fon-1 position-relative d-inline-block h-100">
							<picture>
								<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/fon-promo.png" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/fon-promo.png" alt="oasisfit" class="h-100">
							</picture>
						</div>
						<div class="promo__box-text-fon d-inline-block h-100 position-absolute start-50">
							<img src="/bitrix/templates/oasisfit/img/icons/oasis-fon.svg" alt="" class="w-100 h-100">
						</div>
						<div class="promo__box-text-border d-inline-block h-100 position-absolute start-50">
							<img src="/bitrix/templates/oasisfit/img/icons/oasis-border.svg" alt="" class="w-100 h-100">
						</div>
					</div>
				</div>
				<div class="promo__box d-none d-md-flex flex-column p-5 position-absolute">
					<div class="fs-48 h1 fw-700 lh-12">
						<h1>Стань лучшей<br>
							версией себя!</h1>
					</div>
					<div class="fs-24 mb-5">
						Присоединяйся к нам в фитнес зале!
					</div>
					<div class="promo__box-btn">
						<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="promo__btn btn btn-primary py-3 px-sm-4 d-block fw-500 fs-18">Купить клубную карту</button>
					</div>
				</div>
			</div>
		</div>
		<div class="promo__box d-flex d-md-none flex-column align-items-center p-5 position-absolute">
			<div class="fs-48 h1 fw-700 lh-12 text-center">
				<h1>Стань лучшей<br>
					версией себя!
				</h1>
			</div>
			<div class="fs-24 mb-5 text-center">
				Присоединяйся к нам в фитнес зале!
			</div>
			<div class="promo__box-btn">
				<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="promo__btn btn btn-primary py-3 px-sm-4 d-block fw-500 fs-18">Купить клубную карту</button>
			</div>
		</div>
	</section>
</main>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
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
<div class="service-text py-4">
	<? if ($arResult["DETAIL_TEXT"]) : ?>
		<div class="row">
			123
			<div class="col">
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



	
	


	

	

	
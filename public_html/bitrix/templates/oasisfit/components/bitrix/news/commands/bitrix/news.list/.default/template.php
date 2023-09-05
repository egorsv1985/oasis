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

?>
<div class="swiper teamSwiper mb-5">
	<div class="swiper-wrapper">
		<?
		// Инициализируем переменную для подсчета слайдов
		$slideCount = 0;
		foreach ($arResult["ITEMS"] as $arItem) :
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			$slideCount++; // Увеличиваем счетчик слайдов
		?>

			<div class="swiper-slide">
				<a href="#team" class="d-block text-center position-relative" data-popup="#team">
					<div class="swiper__box-img">
						<picture>
							<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp">
							<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="w-100" width="350" height="460">
						</picture>
					</div>
					<div class="d-flex flex-column">
						<div class="swiper__box-content position-absolute">
							<div class="fs-24 fw-700"><?= $arItem["NAME"]; ?></div>
							<div class="fs-16 lh-12 text-primary"><?= $arItem['PROPERTIES']['POST']['VALUE']; ?></div>
						</div>
					</div>
				</a>
			</div>

		<? endforeach; ?>
	</div>
</div>


<?$this->SetViewTarget('swiper__control');?>
		<div class="swiper__control d-flex align-items-center gap-4">
			<span class="swiper__span fs-20 fw-700 lh-12">01</span>
			<div class="swiper-pagination position-relative d-flex align-items-center"></div>
			<span class="swiper__span fs-20 fw-700 lh-12"><? echo ($slideCount < 10) ? str_pad($slideCount, 2, '0', STR_PAD_LEFT) : $slideCount; ?></span>
			<div class="swiper__buttons d-flex gap-1">
				<div class="swiper-button-prev rounded-circle border-success border"></div>
				<div class="swiper-button-next rounded-circle border-success border"></div>
			</div>
		</div>
<?$this->EndViewTarget();?>

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
// print_r($arResult);

// $arResult['PROPERTIES']['IMAGES']['VALUE'] = array();
$IMAGES_ARRAY = array();
foreach ($arResult['ITEMS'] as $arItem) {
	//print_r($arItem);
	//$arResult['PROPERTIES']['IMAGES']['VALUE'] = array_merge($arResult['PROPERTIES']['IMAGES']['VALUE'], $arItem['PROPERTIES']['IMAGES']['VALUE']);

	foreach ($arItem['PROPERTIES']['IMAGES']['VALUE'] as $key => $IMG) {
		$IMAGES_ARRAY[] = array(
			'TITLE' => $arItem['NAME'],
			'ICON' => $arItem['PROPERTIES']['ICON']['VALUE'],
			'DESCRIPTION' => $arItem['PROPERTIES']['IMAGES']['DESCRIPTION'][$key],
			'IMG' => $IMG,
		);
	}
}
if (empty($IMAGES_ARRAY)) return false;
//print_r($IMAGES_ARRAY);
?>
<? $this->SetViewTarget('gallery-swiper2'); ?>
<div class="swiper gallerySwiper2">
	<div class="large-ctrl">
		<div class="swiper-button-prev rounded-circle border-success border"></div>
		<div class="swiper-button-next rounded-circle border-success border"></div>
	</div>
	<div class="swiper-wrapper">
		<?
		// Инициализируем переменную для подсчета слайдов
		$slideCount = 0;

		foreach ($IMAGES_ARRAY as $arItem) :
			if (CModule::IncludeModule("millcom.phpthumb")) {
				$arItem["WEBP"] = CMillcomPhpThumb::generateImg($arItem['IMG'], 2);
				$arItem["PNG"] = CMillcomPhpThumb::generateImg($arItem['IMG'], 1);
			}
			$slideCount++; // Увеличиваем счетчик слайдов
		?>
			<div class="swiper-slide">

				<div class="swiper__box position-relative">
					<div class="swiper__title d-flex gap-3 position-absolute align-items-center">
						<div class="fs-18 text-white"><?= $arItem["NAME"] ?></div>
					</div>
					<picture>
						<source srcset="<?= $arItem["WEBP"] ?>" type="image/webp"><img class="rounded-2 w-100 h-auto" src="<?= $arItem["PNG"] ?>" />
					</picture>
				</div>

			</div>
		<? endforeach; ?>
	</div>
</div>
<? $this->EndViewTarget(); ?>
<? $this->SetViewTarget('gallery-swiper'); ?>
<div thumbsSlider="" class="swiper gallerySwiper">
	<div class="swiper-wrapper mb-5">
		<?
		// Инициализируем переменную для подсчета слайдов
		$slideCount = 0;
		foreach ($IMAGES_ARRAY as $arItem) :
			if (CModule::IncludeModule("millcom.phpthumb")) {
				$arItem["WEBP"] = CMillcomPhpThumb::generateImg($arItem['IMG'], 9);
				$arItem["PNG"] = CMillcomPhpThumb::generateImg($arItem['IMG'], 8);
			}
			$slideCount++; // Увеличиваем счетчик слайдов
		?>
			<div class="swiper-slide">
				<picture>
					<source srcset="<?= $arItem["WEBP"] ?>" type="image/webp"><img class="rounded-2 w-100 h-auto" src="<?= $arItem["PNG"] ?>" />
				</picture>
			</div>
		<? endforeach; ?>
	</div>
</div>
<div class="swiper__control d-flex align-items-center gap-4">
	<span class="swiper__span fs-20 fw-700 lh-12">01</span>
	<div class="swiper-pagination position-relative d-flex align-items-center"></div>
	<span class="swiper__span fs-20 fw-700 lh-12"><? echo ($slideCount < 10) ? str_pad($slideCount, 2, '0', STR_PAD_LEFT) : $slideCount; ?></span>
	<div class="swiper__buttons d-flex gap-1">
		<div class="swiper-button-prev rounded-circle border-success border"></div>
		<div class="swiper-button-next rounded-circle border-success border"></div>
	</div>
</div>
<? $this->EndViewTarget(); ?>
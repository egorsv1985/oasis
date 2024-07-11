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
print_r($arResult);

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


?>
<div class="swiper gallerySwiper2">
	<div class="large-ctrl">
		<div class="swiper-button-prev rounded-circle border-success border"></div>
		<div class="swiper-button-next rounded-circle border-success border"></div>
	</div>
	<div class="swiper-wrapper">
		<?
		// Инициализируем переменную для подсчета слайдов
		$slideCount = 0;
		foreach ($arResult["ITEMS"] as $arItem) :
			if (isset($arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE']['ID'])) $arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE'] = array($arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE']);
			foreach ($arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE'] as $img) :
				if (CModule::IncludeModule("millcom.phpthumb")) {
					$img["WEBP"] = CMillcomPhpThumb::generateImg($img["SRC"], 2);
					$img["PNG"] = CMillcomPhpThumb::generateImg($img["SRC"], 1);
				}
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$slideCount++; // Увеличиваем счетчик слайдов
		?>
				<div class="swiper-slide">

					<div class="swiper__box-img position-relative">
						<div class="swiper__title d-flex gap-3 position-absolute align-items-center">
							<div class="swiper__box-svg rounded-circle bg-secondary d-flex justify-content-center align-items-center">
								<img src="<?= $arItem['DISPLAY_PROPERTIES']['ICON']['FILE_VALUE']['SRC'] ?>">
							</div>
							<div class="fs-18 text-white"><?= $arItem["NAME"] ?></div>
						</div>
						<picture>
							<source srcset="<?= $img['WEBP'] ?>" type="image/webp"><img class="rounded-2 w-100 h-auto" src="<?= $img['PNG'] ?>">
						</picture>
					</div>

				</div>
			<? endforeach; ?>
		<? endforeach; ?>
	</div>
</div>
<? $this->SetViewTarget('gallery-swiper'); ?>

<div thumbsSlider="" class="swiper gallerySwiper d-none d-lg-block">
	<div class="swiper-wrapper mb-5">
		<?
		// Инициализируем переменную для подсчета слайдов
		$slideCount = 0;
		foreach ($arResult["ITEMS"] as $arItem) :
			if (isset($arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE']['ID'])) $arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE'] = array($arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE']);
			foreach ($arItem['DISPLAY_PROPERTIES']['IMAGES']['FILE_VALUE'] as $img) :

				if (CModule::IncludeModule("millcom.phpthumb")) {
					$img["WEBP"] = CMillcomPhpThumb::generateImg($img["SRC"], 9);
					$img["PNG"] = CMillcomPhpThumb::generateImg($img["SRC"], 8);
				}
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$slideCount++; // Увеличиваем счетчик слайдов
		?>
				<div class="swiper-slide">
					<div class="swiper__box-img position-relative">
						<div class="swiper__box-small-svg rounded-circle bg-secondary position-absolute d-flex justify-content-center align-items-center">
							<img src="<?= $arItem['DISPLAY_PROPERTIES']['ICON']['FILE_VALUE']['SRC'] ?>">
						</div>
						<picture>
							<source srcset="<?= $img['WEBP'] ?>" type="image/webp"><img class="rounded-2 w-100 h-auto" src="<?= $img['PNG'] ?>">
						</picture>
					</div>

				</div>
			<? endforeach; ?>
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
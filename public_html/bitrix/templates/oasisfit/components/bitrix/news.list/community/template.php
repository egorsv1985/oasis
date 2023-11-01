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
?>

<section class="community">
	<div class="container position-relative">
		<div class="community__title fs-36 fw-700 lh-12 mb-5">Oasis community</div>
		<div class="community__box-fon"></div>
		<div class="swiper communitySwiper">
			<div class="swiper-wrapper">
				<?
				// Инициализируем переменную для подсчета слайдов
				$slideCount = 0;
				foreach ($arResult["ITEMS"] as $arItem) :
					if (CModule::IncludeModule("millcom.phpthumb")) {
						$arItem['PREVIEW_PICTURE']["WEBP"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], 10);
						$arItem['PREVIEW_PICTURE']["PNG"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], 11);
					}
					$slideCount++;
				?>
					<div class="swiper-slide">
						<div class="swiper__box-content">
							<div class="d-flex gap-3 mb-5">
								<div class="swiper__box-img rounded-circle d-block">
									<picture>
										<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp">
										<img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem['NAME']; ?>" title="<?= $arItem['NAME']; ?>" width="50" height="50" class="d-block rounded-circle w-100 h-100">
									</picture>
								</div>
								<div class="d-flex flex-column">
									<div class="fs-16 fw-700"><?= $arItem['NAME']; ?></div>
									<div class="fs-14 text-info">
										Отзыв с <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>" class="fw-500 swiper__link"><?= $arItem['PROPERTIES']['LINK']['VALUE'] ?></a>
									</div>
								</div>
							</div>
							<div class="fs-16 fw-700 mb-4">
								<?= $arItem['PREVIEW_TEXT']; ?>
							</div>
							<div class="fs-16 text-info">
								<?= $arItem['DETAIL_TEXT']; ?>
							</div>
						</div>
					</div>
				<? endforeach ?>
			</div>

			<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
				<?= $arResult["NAV_STRING"] ?>
			<? endif; ?>

			<div class="swiper__control d-flex align-items-center gap-4">
				<span class="swiper__span fs-20 fw-700 lh-12">01</span>
				<div class="swiper-pagination position-relative d-flex align-items-center"></div>
				<span class="swiper__span fs-20 fw-700 lh-12"><? echo ($slideCount < 10) ? str_pad($slideCount, 2, '0', STR_PAD_LEFT) : $slideCount; ?></span>
				<div class="swiper__buttons d-flex gap-1">
					<div class="swiper-button-prev rounded-circle border-success border"></div>
					<div class="swiper-button-next rounded-circle border-success border"></div>
				</div>
			</div>
		</div>
	</div>
</section>
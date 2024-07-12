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

		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="phones-contaner">
					<div class="community-slider">
						<div class="swiper communitySwiper">
							<div class="swiper-wrapper">
								<?foreach ($arResult["ITEMS"] as $arItem):?>
								<div class="swiper-slide">
									<div class="image text-center">
										<img src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arItem['NAME']; ?>" title="<?= $arItem['NAME']; ?>" width="50" height="50" class="rounded-2">
									</div>
									<div class="pt-3 fs-12">
										<?=$arItem['DETAIL_TEXT'];?>
									</div>
								</div>
								<?endforeach;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--
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
							<div class="fs-16 text-info community__overflow mb-4">
								<?= $arItem['DETAIL_TEXT']; ?>
							</div>
							<button type="button" data-bs-toggle="modal" data-bs-target="#photo" class="community__photo mx-auto d-block"></button>
							<div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content  ">
										<div class="modal-body p-0">
											<div class="swiper__box-img rounded-2 d-block">
												<picture>
													<source srcset="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" type="image/webp">
													<img src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arItem['NAME']; ?>" title="<?= $arItem['NAME']; ?>" width="50" height="50" class="d-block rounded-2 w-100 h-100">
												</picture>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<? endforeach ?>
			</div>

			<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
				<?= $arResult["NAV_STRING"] ?>
			<? endif; ?>

			<div class="swiper__control d-flex align-items-center gap-4 d-none">
				<span class="swiper__span fs-20 fw-700 lh-12">01</span>
				<div class="swiper-pagination position-relative d-flex align-items-center"></div>
				<span class="swiper__span fs-20 fw-700 lh-12"><? echo ($slideCount < 10) ? str_pad($slideCount, 2, '0', STR_PAD_LEFT) : $slideCount; ?></span>
				<div class="swiper__buttons d-flex gap-1">
					<div class="swiper-button-prev rounded-circle border-success border"></div>
					<div class="swiper-button-next rounded-circle border-success border"></div>
				</div>
			</div>
		</div>
			-->
	</div>
</section>

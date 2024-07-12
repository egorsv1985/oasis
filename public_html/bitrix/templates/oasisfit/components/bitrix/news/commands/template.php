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

<div class="swiper teamSwiper mb-5">
	<div class="swiper-wrapper pt-5">
		<?
		$slideCount = 0;
		$arResult['TITLE'] = 'Тренеры' . ($arResult['ID'] == 1 ? ' тренажерного зала' : '');

		foreach ($arResult["ITEMS"] as $arItem) :
			if (CModule::IncludeModule("millcom.phpthumb")) {
				$arItem['PREVIEW_PICTURE']["WEBP"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], 3);
				$arItem['PREVIEW_PICTURE']["PNG"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], 5);
			}
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			$slideCount++; // Увеличиваем счетчик слайдов
			if (!$arItem['PROPERTIES']['SCALE_PREVIEW_PICTURE']['VALUE']) $arItem['PROPERTIES']['SCALE_PREVIEW_PICTURE']['VALUE'] = 100;
		?>
			<div class="swiper-slide">
				<a href="#" class="d-block text-center position-relative" data-bs-toggle="modal" data-bs-target="#team-<?= $arItem['ID'] ?>">
					<div class="swiper__box-img image-<?=$arItem['ID']?>"<?=($arItem['PROPERTIES']['SCALE_PREVIEW_PICTURE']['VALUE']) ? ' style="transform: scale('.round($arItem['PROPERTIES']['SCALE_PREVIEW_PICTURE']['VALUE']/100, 2).'); transform-origin: 50% 100%;"' : ''?>>
						<picture>
							<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp">
							<img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="w-100 h-auto" width="350" height="460">
						</picture>
					</div>
					<div class="d-flex flex-column">
						<div class="swiper__box-content position-absolute">
							<div class="fs-24 fw-700 text-start"><?= $arItem["NAME"]; ?></div>
							<div class="fs-16 lh-12 text-primary text-start"><?= $arItem['PROPERTIES']['POST']['VALUE'][0]; ?></div>
						</div>
					</div>
				</a>
			</div>

		<? endforeach; ?>
	</div>
</div>


<? $this->SetViewTarget('swiper__control'); ?>
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
<? foreach ($arResult["ITEMS"] as $arItem) :
	if (CModule::IncludeModule("millcom.phpthumb")) {
		$arItem['PREVIEW_PICTURE']["WEBP"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], 3);
		$arItem['PREVIEW_PICTURE']["PNG"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], 5);
	}
?>
	<!-- Modal -->
	<div class="modal fade modal-team p-4" id="team-<?= $arItem['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal__wrapper my-0 p-4" role="document">
			<div class="modal-content modal__content border border-success rounded-3 position-relative">
				<button type="button" class="btn-close modal__close rounded-circle opacity-100 text-white" data-bs-dismiss="modal" aria-label="Close"> </button>
				<div class="modal-body p-0">
					<div class="row">
						
						<div class="col-12 col-lg-6 position-relative d-none d-lg-block">
							<div class="modal__box-fon text-center position-relative ">
								<picture>
									<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp">
									<img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="w-75">
								</picture>
								<div class="modal__box-fon-1 d-inline-block h-100"></div>
							</div>
							<?if ($arItem["DETAIL_TEXT"]):?>
							<div class="modal__box-text position-absolute rounded-3 border border-success p-4 end-0">
								<div class="fs-16 fw-700">
									<?= $arItem["DETAIL_TEXT"] ?>
								</div>
							</div>
							<?endif;?>
						</div>
						
						<div class="col-12 col-lg-6">
							<div class="modal__box-content py-5 px-5">
								<div class="fs-24 fw-700 mb-4"><?= $arItem["NAME"] ?></div>
								<ul class="modal__list fs-16 lh-12 text-info ps-0 mb-5 flex-wrap gap-sm-3">
									<? foreach ($arItem['PROPERTIES']['POST']['VALUE'] as $postItem) : ?>
										<li><?= $postItem ?></li>
									<? endforeach; ?>
								</ul>
								<div class="modal__numbered-list fs-16 lh-13 text-info">
									<?= str_replace('class="ps-0"', '', $arItem["PREVIEW_TEXT"]);?>

								</div>
								<div class="row">
									<div class="col-12 col-sm-6">
										<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn btn-primary py-3 d-block fw-600 fs-16 w-100"><span>Записаться к тренеру</span></button>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
<? endforeach; ?>
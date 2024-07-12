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
<div class="row align-items-center gy-4 flex-row-reverse">
	<? foreach ($arResult["ITEMS"] as $arItem) :
		if (CModule::IncludeModule("millcom.phpthumb")) {
			$arItem['PREVIEW_PICTURE']["WEBP"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], 6);
			$arItem['PREVIEW_PICTURE']["PNG"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], 7);
		}
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction(
			$arItem['ID'],
			$arItem['DELETE_LINK'],
			CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
			array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
		);
	?>
		<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="events__item col-12 col-md-6 col-xl-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<div class="events__box-img mb-2">
				<picture>
					<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp">
					<img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="w-100">
				</picture>
			</div>
			<div class="events__content position-relative">
				<div class="fs-16 lh-12 text-info mb-1"><?= $arItem["DISPLAY_PROPERTIES"]['TYPE']['VALUE']; ?> </div>
				<div class="fs-24 fw-700 mb-3 pe-5"><?= $arItem['NAME']; ?></div>
				<div class="fw-16 text-info mb-1 ps-5" style="background: url(img/icons/calendar.svg) no-repeat left center / 20px 20px;">
					<?= $arItem['DISPLAY_PROPERTIES']['DATE']['VALUE']; ?> | <?= $arItem['DISPLAY_PROPERTIES']['TIME']['VALUE']; ?>
				</div>
				<div class="fw-16 text-info mb-1 ps-5" style="background: url(img/icons/map.svg) no-repeat left center / 20px 20px;">
					<?= $arItem['DISPLAY_PROPERTIES']['LOCATION']['VALUE']; ?>
				</div>
				<div class="fw-16 text-info mb-1 ps-5" >
					<?= $arItem['DETAIL_TEXT']; ?>
				</div>
			</div>
		</a>
	<? endforeach; ?>
</div>
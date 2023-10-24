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
<div class="row gy-4">

	<? foreach ($arResult["ITEMS"] as $arItem) :
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		if (CModule::IncludeModule("millcom.phpthumb"))
			$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 4);
	?>
		<div class="col-12 col-lg-4">
			<div class="directions__box-img rounded-3 mb-4">
				<picture>
					<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp" />
					<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="w-100 rounded-3" />
				</picture>
			</div>
			<div class="fs-24 text-uppercase text-white fw-700 mb-2">
				<?= $arItem["NAME"] ?>
			</div>
			<div class="fs-16 lh-13 text-white">
				<?= $arItem["PREVIEW_TEXT"] ?>
			</div>
		</div>
		<div class="col-12 col-lg-2">
			<div class="fs-18 fw-500 fst-italic directions__citation text-white">
				Ваш прогресс к более сложным упражнениям и программам
			</div>
		</div>
	<? endforeach; ?>
</div>
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

$arFilter = array(
	'IBLOCK_ID' => 11
);

$ICONS = array();
$rsElements = CIBlockElement::GetList(false, $arFilter, false, false, $arSelect);
while ($arElements = $rsElements->GetNext()) {
	$ICONS[$arElements['PROPERTY_COMMANDS_VALUE']] = $arElements;
}


$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
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
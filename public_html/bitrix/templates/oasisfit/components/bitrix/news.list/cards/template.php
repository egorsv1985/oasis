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
<? foreach ($arResult["ITEMS"] as $index => $arItem) :
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

	// Проверяем, является ли индекс четным числом
	$isEven = ($index % 2 === 0);
	// Добавляем класс "flex-row-reverse" для четных элементов
	$rowClass = $isEven ? "flex-row-reverse" : "";
?>
	<div class="row mb-4 <?= $rowClass ?>">
		<div class="col-12 col-lg-6 col-xl-8">
			<div class="cards__box-content py-5 position-relative <?= $arItem['PROPERTIES']['COLOR']['VALUE']; ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>" style="background: url(<?= $arItem['DISPLAY_PROPERTIES']['STAR']['FILE_VALUE']['SRC']; ?>) no-repeat top 2% left / 50px 50px;">
				<div class="fs-24 fw-700 mb-4 mt-3"><?= $arItem["NAME"] ?></div>
				<div class="cards__list fs-16 lh-12 text-info ps-0">
					<?= $arItem['PREVIEW_TEXT']; ?>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-6 col-xl-4">
			<div class="cards__box-images mb-3 rounded-2">
				<picture>
					<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>" title="<?= $arItem["NAME"] ?>" class="w-100 h-auto" width="255" height="150" />
				</picture>
			</div>
			<div class="fs-14 lh-12 text-center text-info mb-4">
				<?= $arItem['DETAIL_TEXT']; ?>
			</div>
			<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="btn btn-primary py-3 d-block fw-600 fs-16 w-100"><span>Узнать цену</span></button>
		</div>
	</div>
<? endforeach; ?>
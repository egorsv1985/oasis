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
<h2 class="fs-36 fw-700 lh-12 mb-5">
	Специально для <br />тебя у нас есть:
</h2>
<div class="row gy-4 gy-md-5">

	<? foreach ($arResult["ITEMS"] as $arItem) :
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

	?>
		<div class="col-md-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<div class="d-flex flex-column gap-3">
				<div class="about__box-img" style="background-image: url('<?= CFile::GetPath($arItem['PROPERTIES']['ICON']['VALUE']) ?>') no-repeat 0 0;"></div>
				<div class="fs-20 item"><?= $arItem['NAME']; ?></div>
			</div>
		</div>
	<? endforeach; ?>
	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</div>
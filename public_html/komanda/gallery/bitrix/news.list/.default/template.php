<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="commands-gallery pt-5" id="commands-gallery">
<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if (CModule::IncludeModule("millcom.phpthumb") && $arItem["PREVIEW_PICTURE"]["SRC"])
		$arItem["PREVIEW_PICTURE"]["SRC"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 5);

	?>
	<div class="commands-item mt-5 pt-5" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="row">
			<div class="col-md-5">
				<div class="w-100 h-100 position-relative">
					<?if ($arItem["PREVIEW_PICTURE"]):?>
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="w-100 position-absolute d-none d-md-inline start-0 bottom-0">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="w-100 position-relative d-md-none start-0 bottom-0">
					<?endif;?>
				</div>
			</div>
			<div class="col-md-6 offset-md-1 pb-5 pt-4">
				<div class="name fs-40 fw-600 mb-3 pt-3"><?=str_replace(' ', '<br>', $arItem["NAME"]);?></div>
				<div class="description mb-4 command-info">
					<p class="fs-12 mb-4"><?=$arItem['PROPERTIES']['POST']['VALUE'];?></p>
					<div class="pb-md-5">
						<?=$arItem["PREVIEW_TEXT"];?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?endforeach;?>
</div>

<div class="slider-ctrl scroll-horizontal commands-ctrl d-none d-md-block mb-4" data-slider="commands-gallery">
	<div class="d-flex gap-4 flex-nowrap">
<?foreach($arResult["ITEMS"] as $key => $arItem):
	if (CModule::IncludeModule("millcom.phpthumb"))
		$arItem["PREVIEW_PICTURE"]["SRC"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 6);
	?>
		<div class="item">
			<a href="#" class="rounded-5<?=!$key ? ' active' : ''?>">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="">
			</a>
		</div>
<?endforeach;?>

	</div>
</div>

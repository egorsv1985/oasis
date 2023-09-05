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
<div class="row gy-4">

<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if (!$arItem["PREVIEW_PICTURE"]["SRC"]) $arItem["PREVIEW_PICTURE"]["SRC"] = $arItem['PROPERTIES']['IMAGES']['VALUE'][0];
	if (CModule::IncludeModule("millcom.phpthumb"))
		$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 1);

	?>
	<div class="col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" class="gallery-item position-relative rounded-5 overflow-hidden">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["WEBP"];?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="w-100">
			<span class="name position-relative bottom-0 start-0 end-0 position-absolute fs-14 text-center p-3 fw-bold"><?=$arItem["NAME"]?></span>
		</a>
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>

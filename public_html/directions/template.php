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
<div class="directions-items row gy-4 mb-4">

<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if (CModule::IncludeModule("millcom.phpthumb"))
		$arItem["PREVIEW_PICTURE"]["WEBP"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 4);

	
	?>
	<div class="col-md-4 col-xl-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="directions-item h-100 rounded-5">
			<div class="row gx-0 h-100">
				<?if ($arItem["PREVIEW_PICTURE"]["SRC"]):?>
				<div class="col-xl-5 col-image">
					<?if($arItem['DETAIL_TEXT']):?>
					<a href="<?=$arItem['DETAIL_PAGE_URL'];?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" class="d-block h-100">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["WEBP"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="w-100 rounded-5 rounded-end">
					</a>
					<?else:?>
						<img src="<?=$arItem["PREVIEW_PICTURE"]["WEBP"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="w-100 rounded-5 rounded-end">
					<?endif;?>
				</div>
				<?endif;?>
				<div class="col-xl-<?=$arItem["PREVIEW_PICTURE"]["SRC"] ? 5 : 10?> offset-xl-1 px-4 px-xl-0 py-3">
					<?if ($arItem['PROPERTIES']['DIRECTION']['VALUE']):?>
					<div class="fs-14 color-grey pt-2 mb-2"><?=$arItem['PROPERTIES']['DIRECTION']['VALUE'];?></div>
					<?endif;?>
					<div class="fs-20 fw-bold mb-2">
						<?if($arItem['DETAIL_TEXT']):?>
						<a href="<?=$arItem['DETAIL_PAGE_URL'];?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
							<?=$arItem["NAME"]?>
						</a>
						<?else:?>
							<?=$arItem["NAME"]?>
						<?endif;?>
					</div>
					<div class="fs-12 lh-13 color-grey">
						<?=$arItem["PREVIEW_TEXT"]?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?endforeach;?>

	<?if ($arResult['NAV_RESULT']->NavRecordCount > count($arResult["ITEMS"])):?>
	<div class="text-center fs-18 fw-bold mt-5 text-decoration-underline">
		<a href="<?=$arResult['SECTION']['PATH'][0]['SECTION_PAGE_URL'];?>">Показать все <?=mb_strtolower($arResult['SECTION']['PATH'][0]['NAME']);?></a>
	</div>
	<?endif;?>

</div>

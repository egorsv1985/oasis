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
<div class="row gy-3">
<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if (CModule::IncludeModule("millcom.phpthumb"))
		$arItem["PREVIEW_PICTURE"]["SRC"] = CMillcomPhpThumb::generateImg($arItem["PREVIEW_PICTURE"]["SRC"], 7);

	?>
	<div class="col-md-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="events-item rounded-5 overflow-hidden">
			<div class="row gx-0">
				<div class="col-sm-5">
					<!--
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" class="d-block">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="w-100">
					</a>
					-->
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="w-100">
				</div>
				<div class="col-sm-7">
					<div class="p-4 px-md-5 h-100">
						<div class="d-flex flex-column h-100 justify-content-between">
							<div class="top">
								<div class="type fs-14 mb-2"><?=$arItem["DISPLAY_PROPERTIES"]['TYPE']['VALUE'];?></div>
								<div class="name fs-30 fw-600 mb-2"><?=$arItem['NAME'];?></div>
							</div>
							<div class="bottom">
								<div class="date fs-14 fw-600 my-2">
									<?=$arItem['DISPLAY_PROPERTIES']['DATE']['VALUE'];?> | <?=$arItem['DISPLAY_PROPERTIES']['TIME']['VALUE'];?><br>
									<?=$arItem['DISPLAY_PROPERTIES']['LOCATION']['VALUE'];?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?endforeach;?>

</div>

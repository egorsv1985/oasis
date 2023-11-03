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
<div class="row gy-5">
	<?
	$evenCount = 1;
	$counter = 1;
	foreach ($arResult["ITEMS"] as $arItem) :
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		if (CModule::IncludeModule("millcom.phpthumb")) {
			$arItem['PREVIEW_PICTURE']["WEBP"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], ($counter  == 2 || $counter  == 5 || $counter  == 8) ? '14' : '12');
			$arItem['PREVIEW_PICTURE']["PNG"] = CMillcomPhpThumb::generateImg($arItem['PREVIEW_PICTURE']["SRC"], ($counter  == 2 || $counter  == 5 || $counter  == 8) ? '15' : '13');
		}
	?>
		<?
		if ($arItem["PROPERTIES"]["CITE"]["VALUE"]) {
		?>
			<div class="col-12 col-lg-2">
				<div class="fs-18 fw-500 fst-italic directions__citation text-white">
					<?= $arItem["PROPERTIES"]["CITE"]["VALUE"] ?>
				</div>
			</div>
		<?
		}
		?>
		<div class="col-12 <? echo ($counter  == 2 || $counter  == 5 || $counter  == 8) ? 'col-lg-6' : 'col-lg-4'; ?> <? echo $evenCount % 2 == 0 ? 'offset-lg-2' : ''; ?> float-start">
			<div class="directions__box-img rounded-3 mb-4" style="background-image: url('<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>')">
				<?
				if ($arItem['DETAIL_TEXT']) :
				?>

					<a href="<?= $arItem['DETAIL_PAGE_URL']; ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="d-block h-100">
						<div class="row">
							<div class="col-12 col-md-12">
								<picture>
									<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp">
									<img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="w-100 rounded-3 h-100">
								</picture>

							</div>
						</div>
					</a>
				<? else : ?>
					<div class="row">
						<div class="col-12 col-md-12">
							<picture>
								<source srcset="<?= $arItem["PREVIEW_PICTURE"]["WEBP"] ?>" type="image/webp">
								<img src="<?= $arItem["PREVIEW_PICTURE"]["PNG"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="w-100 rounded-3 h-100">
							</picture>
						</div>
					</div>
				<? endif; ?>
			</div>
			<div class="fs-24 text-uppercase text-white fw-700 mb-2">
				<?= $arItem["NAME"] ?>
			</div>
			<div class="fs-16 lh-13 text-white">
				<?= $arItem["PREVIEW_TEXT"] ?>
			</div>
		</div>
	<?
		$evenCount++;
		$counter++;
	endforeach; ?>
	<div class="clearfix"></div>
</div>
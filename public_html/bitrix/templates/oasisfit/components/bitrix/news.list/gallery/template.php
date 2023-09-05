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
$arResult['PROPERTIES']['IMAGES']['VALUE'] = array();
$IMAGES_ARRAY = array();
foreach ($arResult['ITEMS'] as $arItem) {
	$arResult['PROPERTIES']['IMAGES']['VALUE'] = array_merge($arResult['PROPERTIES']['IMAGES']['VALUE'], $arItem['PROPERTIES']['IMAGES']['VALUE']);
	foreach ($arItem['PROPERTIES']['IMAGES']['VALUE'] as $key => $IMG) {
		$IMAGES_ARRAY[] = array(
			'TITLE' => $arItem['NAME'],
			'ICON' => $arItem['PROPERTIES']['ICON']['VALUE'],
			'DESCRIPTION' => $arItem['PROPERTIES']['IMAGES']['DESCRIPTION'][$key],
			'IMG' => $IMG,
		);
	}
}

?>

</div>
<?if ($arParams['NAME']):?>
		<div class="container position-relative">
			<div class="gallery-title">
				<?=$arParams['NAME'];?>
			</div>
		</div>
	<?endif;?>
<div class="gallery slider-gallery" id="gallery_<?=$arResult['ID'];?>">
	<?foreach($IMAGES_ARRAY as $key => $IMAGES):
		if (CModule::IncludeModule("millcom.phpthumb"))
			$WEBP = CMillcomPhpThumb::generateImg($IMAGES['IMG'], 2);
		?>
		<div class="item" id="item_<?=$arResult['ID'];?>_<?=$key;?>">
		<?if ($arParams['NAME']):?>
			<?else:?>
			<div class="container position-relative">
				<div class="gallery-title">
					<?=$IMAGES['ICON'] ? '<img src="'.CFile::GetPath($IMAGES['ICON']).'">' : '';?>
					<?=$IMAGES['TITLE'];?><?=$IMAGES['DESCRIPTION'] ? '.<small>'.$IMAGES['DESCRIPTION'].'</small>' : '';?>
				</div>
			</div>
			<?endif;?>
			<img src="<?=$WEBP;?>" alt="<?=$IMAGES['TITLE']?> <?=$IMAGES['DESCRIPTION']?>" class="w-100">
		</div>
	<?endforeach;?>
</div>
<div class="container">
	<?if (count($IMAGES_ARRAY) > 1):?>
	<div class="slider-ctrl scroll-horizontal d-none d-md-block" data-slider="gallery_<?=$arResult['ID'];?>">
		<div class="d-flex gap-4 flex-nowrap">
		<?foreach($IMAGES_ARRAY as $key => $IMAGES):
			if (CModule::IncludeModule("millcom.phpthumb"))
				$WEBP = CMillcomPhpThumb::generateImg($IMAGES['IMG'], 3);
			?>
			<div class="item<?=($key ? '' : ' active')?>">
				<a href="#" class="rounded-5">
					<img src="<?=$WEBP;?>" alt="" class="rounded-5">
					<span class="d-block fs-14"><?=$IMAGES['DESCRIPTION']?></span>
				</a>
			</div>
		<?endforeach;?>
		</div>
	</div>
	<?endif;?>
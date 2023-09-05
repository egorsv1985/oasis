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
</div>
<div class="gallery slider-gallery" id="gallery_<?=$arResult['ID'];?>">
	<?foreach($arResult['PROPERTIES']['IMAGES']['VALUE'] as $key => $IMAGES):
		if (CModule::IncludeModule("millcom.phpthumb"))
			$WEBP = CMillcomPhpThumb::generateImg($IMAGES, 2);
		?>
		<div class="item" id="item_<?=$arResult['ID'];?>_<?=$key;?>">
			<img src="<?=$WEBP;?>" alt="" class="w-100">
		</div>
	<?endforeach;?>
</div>
<div class="container">
	<?if (count($arResult['PROPERTIES']['IMAGES']['VALUE']) > 1):?>
	<div class="slider-ctrl scroll-horizontal d-none d-md-block mb-4" data-slider="gallery_<?=$arResult['ID'];?>">
		<div class="d-flex gap-4 flex-nowrap">
		<?foreach($arResult['PROPERTIES']['IMAGES']['VALUE'] as $IMAGES):
			if (CModule::IncludeModule("millcom.phpthumb"))
				$WEBP = CMillcomPhpThumb::generateImg($IMAGES, 3);
			?>
			<div class="item">
				<a href="#" class="rounded-5">
					<img src="<?=$WEBP;?>" alt="" class="rounded-5">
				</a>
			</div>
		<?endforeach;?>
		</div>
	</div>
	<?endif;?>
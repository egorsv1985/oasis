<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"])>0):?>
	<div class="service-menu">
		<ul>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<li>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<?=$arItem["NAME"]?>
					<span class="gradient" style="background:<?=$arItem['PROPERTIES']["GRADIENT"]['VALUE'];?>"></span>
					<span class="ico" style="background-image: url(<?=CFile::GetPath($arItem['PROPERTIES']["ICO"]['VALUE']);?>)"></span>
				</a>
			</li>
		<?endforeach;?>
		</ul>
	</div>
<?endif?>

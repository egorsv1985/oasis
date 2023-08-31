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

$arFilter = array(
	'IBLOCK_ID' => 1
);
$arSelect = array(
	'ID',
	'NAME',
	'PROPERTY_ICO',
	'PROPERTY_GRADIENT',
	'PROPERTY_COMMANDS'
);
$ICONS = array();
$rsElements = CIBlockElement::GetList(false, $arFilter, false, false, $arSelect);
while ($arElements = $rsElements->GetNext()) {
	$ICONS[$arElements['PROPERTY_COMMANDS_VALUE']] = $arElements;
}


$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
?>
<!--
<div class="service-menu service-scroll">
	<ul class="flex-nowrap">
<? foreach ($arResult['SECTIONS'] as &$arSection) :
	$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete);
?>
		<li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
			<a href="<?= $arSection['SECTION_PAGE_URL'] ?>"<?= ($APPLICATION->GetCurPage() == $arSection['SECTION_PAGE_URL'] ? ' class="active"' : '') ?>>
				<?= $arSection['NAME']; ?>

				<span class="gradient" style="background:<?= $ICONS[$arSection['ID']]['~PROPERTY_GRADIENT_VALUE'] ?>"></span>
				<span class="ico" style="background-image: url(<?= CFile::GetPath($ICONS[$arSection['ID']]['PROPERTY_ICO_VALUE']) ?>)"></span>
			</a>
		</li>
<? endforeach; ?>
	</ul>
</div>
-->

<div class="service-menu scroll-horizontal">
	<ul class="flex-nowrap">
		<? foreach ($arResult['SECTIONS'] as &$arSection) :
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete);
		?>
			<li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
				<a href="<?= $arSection['SECTION_PAGE_URL'] ?>" <?= ($APPLICATION->GetCurPage() == $arSection['SECTION_PAGE_URL'] ? ' class="active"' : '') ?>>
					<?= $arSection['NAME']; ?>

					<span class="gradient" style="background:<?= $ICONS[$arSection['ID']]['~PROPERTY_GRADIENT_VALUE'] ?>"></span>
					<span class="ico" style="background-image: url(<?= CFile::GetPath($ICONS[$arSection['ID']]['PROPERTY_ICO_VALUE']) ?>)"></span>
				</a>
			</li>
		<? endforeach; ?>
	</ul>
</div>
<!-- 
<ul class="teams__nav-tabs nav nav-tabs" id="teamTab" role="tablist">
	<li class="nav-item" role="presentation">
		<a class="nav-link active team-tab" data-toggle="tab" data-target=".team-content.tab1" role="tab" aria-controls="tab1" aria-selected="true">
			Тренажерный зал</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link team-tab" data-toggle="tab" data-target=".team-content.tab2" role="tab" aria-controls="tab2" aria-selected="false">
			Бойцовский клуб</a>
	</li>

	<li class="nav-item" role="presentation">
		<a class="nav-link team-tab" data-toggle="tab" data-target=".team-content.tab3" role="tab" aria-controls="tab3" aria-selected="false">Фитнес-консультанты</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link team-tab" data-toggle="tab" data-target=".team-content.tab4" role="tab" aria-controls="tab4" aria-selected="false">Групповые программы</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link team-tab" data-toggle="tab" data-target=".team-content.tab5" role="tab" aria-controls="tab5" aria-selected="false">Детский клуб</a>
	</li>
	<li class="nav-item" role="presentation">
		<a class="nav-link team-tab" data-toggle="tab" data-target=".team-content.tab6" role="tab" aria-controls="tab6" aria-selected="false">Отдел продаж</a>
	</li>
</ul> -->
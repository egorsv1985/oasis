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
	'IBLOCK_ID' => 11
);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
?>

<ul class="teams__nav-tabs nav nav-tabs">
	<? foreach ($arResult['SECTIONS'] as &$arSection) :
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete);
	?>

		<li class="nav-item" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
			<a href="<?= $arSection['SECTION_PAGE_URL'] ?>" class="nav-link team-tab" <?= ($APPLICATION->GetCurPage() == $arSection['SECTION_PAGE_URL'] ? ' class="active"' : '') ?>>
				<?= $arSection['NAME']; ?>


			</a>
		</li>
		

	<? endforeach; ?>
</ul>
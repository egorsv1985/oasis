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
$arFilter = array(
	'IBLOCK_ID' => 2
);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
?>

<ul class="vacancies__nav-tabs nav nav-tabs flex-column gap-2">
	<? foreach ($arResult["SECTIONS"] as &$arSection) :
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete);
	?>
		<li class="nav-item" id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
			<a href="<?= $arSection["DETAIL_PAGE_URL"]; ?>" class="nav-link vacancies-tab" <?= ($APPLICATION->GetCurPage() == $arSection["DETAIL_PAGE_URL"] ? ' class="active"' : '') ?>>
				<?= $arSection["NAME"]; ?>
			</a>
		</li>
	<? endforeach; ?>
</ul>


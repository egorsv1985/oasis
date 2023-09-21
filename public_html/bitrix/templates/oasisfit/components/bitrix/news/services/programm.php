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

$arSelect = array("ID", "NAME", "DETAIL_PAGE_URL");
$arFilter = array(
	"IBLOCK_ID" => $arParams['IBLOCK_ID'],
	"ACTIVE" => "Y",
	'CODE' => $arResult['VARIABLES']['ELEMENT_CODE']
);
$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNext()) {
	//print_r($ob);
	$APPLICATION->AddChainItem($ob['NAME'], $ob['DETAIL_PAGE_URL']);
}

$arSelect = array("ID", "NAME", "SECTION_PAGE_URL");
$arFilter = array(
	"IBLOCK_ID" => 3,
	"ACTIVE" => "Y",
	'CODE' => $arResult['VARIABLES']['PROGRAMM_SECTION']
);
$rsSections = CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
while($arSection = $rsSections->GetNext()) {
	$APPLICATION->AddChainItem($arSection['NAME'], $arSection['SECTION_PAGE_URL']);
}

$arParams['ADD_SECTIONS_CHAIN'] = 'N';
/*
$arParams['SEF_URL_TEMPLATES']['detail'] = '#SECTION_CODE#/#ELEMENT_CODE#/';
$arParams['SEF_URL_TEMPLATES']['section'] = '#SECTION_CODE#/';
$arParams['INCLUDE_IBLOCK_INTO_CHAIN'] = 'Y';
$arParams['SEF_FOLDER'] = '/uslugi/gruppovye-programmy/';
print_r($arParams);
*/
$arResult['VARIABLES']['ELEMENT_CODE'] = $arResult['VARIABLES']['PROGRAMM_CODE'];
$arResult['VARIABLES']['SECTION_CODE'] = $arResult['VARIABLES']['PROGRAMM_SECTION'];
$arParams['IBLOCK_ID'] = 3;
require_once 'detail.php';
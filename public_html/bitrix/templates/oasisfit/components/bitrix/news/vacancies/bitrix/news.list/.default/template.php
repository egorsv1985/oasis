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
<div class="accordion" id="vacanciesAccordion">
	<?
	$counter = 1;
	foreach ($arResult['ITEMS'] as $key => $arItem) :
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strItemEdit);
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strItemDelete, $arItemDeleteParams);
	?>
		<div class="card">
			<div class="card-header ps-0" id="heading-<?= $counter ?>">
				<h2 class="mb-0">
					<button class="card__btn fw-700 fs-24 ps-0 d-flex justify-content-between w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $counter ?>" aria-expanded="<?= $key ? 'false' : 'true' ?>" aria-controls="collapse-<?= $counter ?>">
						<span class="py-3"><?= $arItem["NAME"] ?> </span>
						<span class="vacancies__box-circle rounded-circle bg-primary d-flex justify-content-center align-items-center position-relative">
						</span>
					</button>
				</h2>
			</div>

			<div id="collapse-<?= $counter ?>" class="collapse <?= $key ? '' : ' show' ?> mb-4" aria-labelledby="heading-<?= $counter ?>" data-parent="#vacanciesAccordion">
				<div class="card-body ps-0">
					<?= $arItem["DETAIL_TEXT"]; ?>
					<? $APPLICATION->IncludeComponent(
						"bitrix:iblock.element.add.form",
						"horizontal",
						array(
							"COMPONENT_TEMPLATE" => "horizontal",
							"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
							"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
							"CUSTOM_TITLE_DETAIL_PICTURE" => "",
							"CUSTOM_TITLE_DETAIL_TEXT" => "",
							"CUSTOM_TITLE_IBLOCK_SECTION" => "",
							"CUSTOM_TITLE_NAME" => "Имя",
							"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
							"CUSTOM_TITLE_PREVIEW_TEXT" => "",
							"CUSTOM_TITLE_TAGS" => "",
							"DEFAULT_INPUT_SIZE" => "30",
							"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
							"ELEMENT_ASSOC" => "CREATED_BY",
							"GROUPS" => array(
								0 => "2",
							),
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "FORMS",
							"LEVEL_LAST" => "Y",
							"LIST_URL" => "",
							"MAX_FILE_SIZE" => "0",
							"MAX_LEVELS" => "100000",
							"MAX_USER_ENTRIES" => "100000",
							"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
							"PROPERTY_CODES" => array(
								0 => "NAME",
								1 => "2",
								2 => "1",
								3 => "29",
								4 => "30",
							),
							"PROPERTY_CODES_REQUIRED" => array(
								0 => "NAME",
								1 => "2",
								2 => "1",
								3 => "29",
								4 => "30",
							),
							"RESIZE_IMAGES" => "N",
							"SEF_MODE" => "N",
							"STATUS" => "ANY",
							"STATUS_NEW" => "N",
							"USER_MESSAGE_ADD" => "",
							"USER_MESSAGE_EDIT" => "",
							"USE_CAPTCHA" => "N"
						),
						false
					); ?>
				</div>
			</div>
		</div>
		<? $counter++; ?>
	<? endforeach; ?>
</div>
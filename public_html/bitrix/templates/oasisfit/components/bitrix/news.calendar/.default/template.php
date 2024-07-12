<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
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

	$MONTH_TIMESTAMP = time();
	if (isset($_GET['date'])) {
		$date = explode('_', $_GET['date']);
		$MONTH_TIMESTAMP = strtotime('01.'.$date[1].'.'.$date[0]);
	}
	$MONTH_PREV_TIMESTAMP = strtotime('-1 month', $MONTH_TIMESTAMP);
	$MONTH_NEXT_TIMESTAMP = strtotime('+1 month', $MONTH_TIMESTAMP);
	$MONTH = date('n', $MONTH_TIMESTAMP);

	$MONTH_ARRAY = array(
		1 => 'Январь',
		2 => 'Февраль',
		3 => 'Март',
		4 => 'Апрель',
		5 => 'Май',
		6 => 'Июнь',
		7 => 'Июль',
		8 => 'Август',
		9 => 'Сентябрь',
		10 => 'Октябрь',
		11 => 'Ноябрь',
		12 => 'Декабрь',
	);
	$arSelect = Array("ID", "NAME", "PROPERTY_DATE");
	$arFilter = Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	$EVENTS = array();
	while($ob = $res->GetNext()) {
		$DATE = strtotime($ob['PROPERTY_DATE_VALUE']);
		$EVENTS[date('Y', $DATE)][date('n', $DATE)][date('j', $DATE)][] = $ob;
	}
?>
<div class="date-top mb-4">
	<a href="<?=$APPLICATION->GetCurDir();?>?date=<?=date('Y_m', $MONTH_PREV_TIMESTAMP)?>" class="prev-month"></a>
	<?=$MONTH_ARRAY[$MONTH];?>
	<a href="<?=$APPLICATION->GetCurDir();?>?date=<?=date('Y_m', $MONTH_NEXT_TIMESTAMP)?>" class="next-month"></a>
</div>
<div class="date-bottom mb-5 pb-3">
	<div class="row">
		<div class="col-md-7">
	<?
	$number = cal_days_in_month(CAL_GREGORIAN, date('n', $MONTH_TIMESTAMP), date('Y', $MONTH_TIMESTAMP));
	for ($i = 1; $i <= $number; $i++) {
		$day = strtotime($i.'.'.date('n', $MONTH_TIMESTAMP).'.'.date('Y', $MONTH_TIMESTAMP));
		$day_of_the_week = date('w', $day);
		$class = array(
			'd-inline-block',
			'me-2',
			'pt-3'
		);
		if ($day_of_the_week == 0 || $day_of_the_week == 6) $class[] = 'day-off';
		if (isset($_GET['date']) && $_GET['date'] == date('Y_m_d', $day)) $class[] = 'active';

		if(isset($EVENTS[date('Y', $MONTH_TIMESTAMP)][date('n', $MONTH_TIMESTAMP)][$i])) {
			echo '<a href="'.$APPLICATION->GetCurDir().'?date='.date('Y_m_d', $day).'" class="'.implode(' ', $class).'" date-day="'.date('l', $day).'">'.$i.'</a> ';
		} else {
			echo '<span class="'.implode(' ', $class).'" date-day="'.date('l', $day).'">'.$i.'</span> ';
		}
	}
	?>
		</div>
	</div>
</div>
<?

$arParams["FILTER_NAME"] = 'arFilterMonth';

global $arFilterMonth;


$arFilterMonth['>PROPERTY_DATE'] = date('Y-m-01', $MONTH_TIMESTAMP).' 00:00:00';
$arFilterMonth['<PROPERTY_DATE'] = date('Y-m-31', $MONTH_TIMESTAMP).' 23:59:59';

if (isset($_GET['date'])) {
	$date = explode('_', $_GET['date']);
	if ($date[2]) {
		$arFilterMonth = array();
		$day = strtotime($date[0].'-'.$date[1].'-'.$date[2]);
		$arFilterMonth['=PROPERTY_DATE'] = date('Y-m-d', $day);
	}
}

?>
<?
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	[
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => $arParams["NEWS_COUNT"],
		"SORT_BY1" => $arParams["SORT_BY1"],
		"SORT_ORDER1" => $arParams["SORT_ORDER1"],
		"SORT_BY2" => $arParams["SORT_BY2"],
		"SORT_ORDER2" => $arParams["SORT_ORDER2"],
		"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
		"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
	],
	$component,
	['HIDE_ICONS' => 'Y']
);

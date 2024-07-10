<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
	$MONTH_TIMESTAMP = strtotime('01.' . $date[1] . '.' . $date[0]);
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
$arSelect = array("ID", "NAME", "PROPERTY_DATE");
$arFilter = array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y");
$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
$EVENTS = array();
while ($ob = $res->GetNext()) {
	$DATE = strtotime($ob['PROPERTY_DATE_VALUE']);
	$EVENTS[date('Y', $DATE)][date('n', $DATE)][date('j', $DATE)][] = $ob;
}
?>

<div class="row gy-4">
	<div class="col-12 col-md-10">
		<div class="d-flex justify-content-between mb-3">
			<div class="fs-24 fw-700"><?= $MONTH_ARRAY[$MONTH]; ?></div>
			<div class="fs-20 text-info"><?= date('d/m/Y', time()); ?></div>
		</div>
		<div class="events__calendar">
			<div class="events__calendar-top bg-success text-white fs-16 fw-700 d-flex justify-content-between mb-3 px-3 py-1">
				<?php
				$weekdays = ['Пн.', 'Вт.', 'Ср.', 'Чт.', 'Пт.', 'Сб.', 'Вс.'];
				foreach ($weekdays as $weekday) {
					echo '<div class="events__calendar-day">' . $weekday . '</div>';
				}
				?>
			</div>

			<div class="events__calendar-bottom">
				<?php
				$firstDayOfMonth = strtotime('first day of ' . date('F Y', $MONTH_TIMESTAMP));
				$lastDayOfMonth = strtotime('last day of ' . date('F Y', $MONTH_TIMESTAMP));

				// Определяем первый и последний дни недели в текущем месяце
				$firstDayOfWeek = date('N', $firstDayOfMonth);
				$lastDayOfWeek = date('N', $lastDayOfMonth);

				// Определяем количество дней предыдущего и следующего месяцев
				$daysInPrevMonth = $firstDayOfWeek - 1;
				$daysInNextMonth = 7 - $lastDayOfWeek;

				$dayCount = 0; // Счетчик дней в неделе
				$currentDate = date('Y_m_d'); // Текущая дата

				// Выводим дни предыдущего месяца
				for ($i = $firstDayOfMonth - 86400 * $daysInPrevMonth; $i < $firstDayOfMonth; $i += 86400) {
					if ($dayCount == 0) {
						echo '<div class="events__week d-flex justify-content-between text-info fs-16 mb-2">';
					}

					$dateStr = date('Y_m_d', $i);
					$class = ['events__day', 'border', 'border-success', 'prev-month'];
					if ($dateStr == $currentDate) {
						$class[] = 'current';
					}

					if (isset($EVENTS[date('Y', $MONTH_TIMESTAMP)][date('n', $MONTH_TIMESTAMP)][date('j', $i)])) {
						$class[] = 'event';
						echo '<a href="' . $APPLICATION->GetCurDir() . '?date=' . date('Y_m_d', $i) . '" class="' . implode(' ', $class) . '" date-day="' . date('l', $i) . '">' . date('d', $i) . '</a> ';
					} else {
						echo '<span class="' . implode(' ', $class) . '" date-day="' . date('l', $i) . '">' . date('d', $i) . '</span> ';
					}

					$dayCount++;

					if ($dayCount == 7) {
						echo '</div>';
						$dayCount = 0;
					}
				}

				// Выводим дни текущего месяца
				for ($i = $firstDayOfMonth; $i <= $lastDayOfMonth; $i += 86400) {
					if ($dayCount == 0) {
						echo '<div class="events__week d-flex justify-content-between text-info fs-16 mb-2">';
					}

					$dateStr = date('Y_m_d', $i);
					$class = ['events__day', 'border', 'border-success'];
					if ($dateStr == $currentDate) {
						$class[] = 'current';
					}

					if (isset($EVENTS[date('Y', $MONTH_TIMESTAMP)][date('n', $MONTH_TIMESTAMP)][date('j', $i)])) {
						$class[] = 'event';
						echo '<a href="' . $APPLICATION->GetCurDir() . '?date=' . date('Y_m_d', $i) . '" class="' . implode(' ', $class) . '" date-day="' . date('l', $i) . '">' . date('d', $i) . '</a> ';
					} else {
						echo '<span class="' . implode(' ', $class) . '" date-day="' . date('l', $i) . '">' . date('d', $i) . '</span> ';
					}

					$dayCount++;

					if ($dayCount == 7) {
						echo '</div>';
						$dayCount = 0;
					}
				}

				// Выводим дни следующего месяца
				for ($i = $lastDayOfMonth + 86400; $i <= $lastDayOfMonth + 86400 * $daysInNextMonth; $i += 86400) {
					if ($dayCount == 0) {
						echo '<div class="events__week d-flex justify-content-between text-info fs-16 mb-2">';
					}

					$dateStr = date('Y_m_d', $i);
					$class = ['events__day', 'border', 'border-success', 'next-month'];

					if (isset($EVENTS[date('Y', $MONTH_TIMESTAMP)][date('n', $MONTH_TIMESTAMP)][date('j', $i)])) {
						$class[] = 'event';
						echo '<a href="' . $APPLICATION->GetCurDir() . '?date=' . date('Y_m_d', $i) . '" class="' . implode(' ', $class) . '" date-day="' . date('l', $i) . '">' . date('d', $i) . '</a> ';
					} else {
						echo '<span class="' . implode(' ', $class) . '" date-day="' . date('l', $i) . '">' . date('d', $i) . '</span> ';
					}

					$dayCount++;

					if ($dayCount == 7) {
						echo '</div>';
						$dayCount = 0;
					}
				}
				?>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-2">
		<div class="events__description-box">
			<div class="events__description d-flex flex-wrap gap-2  gap-md-0">
				<div class="fs-16 text-info ps-5 w-50 d-flex align-items-center" style="
                            background: url(img/icons/month.svg) no-repeat left
                              center / 20px 20px;
                          ">
					Текущий месяц
				</div>
				<div class="fs-16 text-info ps-5 w-50 d-flex align-items-center" style="
                            background: url(img/icons/event.svg) no-repeat left
                              center / 20px 20px;
                          ">
					Мероприятие
				</div>
				<div class="fs-16 text-info ps-5 w-50 d-flex align-items-center" style="
                            background: url(img/icons/day.svg) no-repeat left
                              center / 20px 20px;
                          ">
					Текущая дата
				</div>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="d-flex justify-content-between align-items-center gap-4">
			<span class="d-none fs-20 fw-700 lh-12">07</span>
			<div class="d-none events__lines-box d-flex align-items-center">
				<div class="events__line"></div>
			</div>
			<div class="d-none fs-20 fw-700 lh-12">12</div>
			<div class="events__links-box d-flex gap-1">
				<a href="<?= $APPLICATION->GetCurDir(); ?>?date=<?= date('Y_m', $MONTH_PREV_TIMESTAMP) ?>" class="events__prev rounded-circle border-success border"></a>
				<a href="<?= $APPLICATION->GetCurDir(); ?>?date=<?= date('Y_m', $MONTH_NEXT_TIMESTAMP) ?>" class="events__next rounded-circle border-success border"></a>
			</div>
		</div>
	</div>
</div>
<?

$arParams["FILTER_NAME"] = 'arFilterMonth';

global $arFilterMonth;


$arFilterMonth['>PROPERTY_DATE'] = date('Y-m-01', $MONTH_TIMESTAMP) . ' 00:00:00';
$arFilterMonth['<PROPERTY_DATE'] = date('Y-m-31', $MONTH_TIMESTAMP) . ' 23:59:59';

if (isset($_GET['date'])) {
	$date = explode('_', $_GET['date']);
	if ($date[2]) {
		$arFilterMonth = array();
		$day = strtotime($date[0] . '-' . $date[1] . '-' . $date[2]);
		$arFilterMonth['=PROPERTY_DATE'] = date('Y-m-d', $day);
	}
}

?>
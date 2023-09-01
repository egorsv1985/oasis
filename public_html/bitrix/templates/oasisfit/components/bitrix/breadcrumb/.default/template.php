<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
	return "";


$strReturn = '
<div class="breadcrumb__box">
	<nav aria-label="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb__nav position-relative ">
		<ol class="breadcrumb flex-row-reverse align-items-center m-0 gap-4">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);


	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
		$strReturn .= '
		
			<li class="breadcrumb-item" id="bx_breadcrumb_' . $index . '" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<meta itemprop="position" content="' . ($index + 1) . '" />
				<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" class="bg-success rounded-circle d-block" itemprop="item">
					
				</a>
			</li>';
	} else {
		$strReturn .= '
			<li class="breadcrumb-item active ff-inter fs-14 bg-body px-1" aria-current="page">' . $title . '</li>';
	}
}

$strReturn .= '
	</ol>
</nav> 
</div>';

return $strReturn;

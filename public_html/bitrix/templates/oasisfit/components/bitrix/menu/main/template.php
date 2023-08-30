<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>
	<nav>
		<ul>
			<?
			foreach ($arResult as $arItem) :
				if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
					continue;
			?>
				<li>
					<? if ($arItem["TEXT"] == 'Услуги') : ?>
						<button role="button" class="header__service-item text-start w-100">
							<?= $arItem["TEXT"] ?>
						</button>
					<? else : ?>
						<a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
					<? endif ?>

				<? endforeach ?>

		</ul>
	</nav>
<? endif ?>
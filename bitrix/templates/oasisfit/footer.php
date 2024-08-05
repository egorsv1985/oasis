<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>


<footer class="footer py-5">
	<div class="container">
		<div class="d-flex justify-content-between flex-column flex-sm-row gap-4">
			<a href="/kontakti/" class="d-flex gap-2">
				<div class="footer__link rounded-circle"></div>
				<div class="fs-20 fw-700">
					<div>
						г. Сургут,<br>
						ул.Профсоюзов, 53/2
					</div>
				</div>
			</a>

			<ul class="footer__social social d-flex gap-1 ps-0">
				<li>
					<a href="https://vk.com/oasiscity" target="_blank" class="social__link rounded-circle" title="vk">
						<?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/img/icons/vk.svg'); ?>
					</a>
				</li>
				<!-- <li>
					<a href="#" target="_blank" class="social__link rounded-circle" title="fb">
						<?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/img/icons/fb.svg'); ?>
					</a>
				</li> -->
				<li>
					<a href="https://www.instagram.com/_oasis_city/" target="_blank" class="social__link rounded-circle" title="inst">
						<?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/img/icons/inst.svg'); ?>
					</a>
				</li>
			</ul>
		</div>
	</div>
</footer>

</div>


<!-- Modal -->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal__wrapper my-0" role="document">
		<div class="modal-content modal__content border border-success rounded-3 position-relative align-items-center">
			<!-- <button type="button" class="btn-close modal__close rounded-circle opacity-100 text-white" data-bs-dismiss="modal" aria-label="Close"> </button> -->
			<div class="modal-body p-0">
				<? $APPLICATION->IncludeComponent(
					"bitrix:iblock.element.add.form",
					"consultations",
					[
						"AJAX_MODE" => 'Y',
						"AJAX_OPTION_STYLE" => "Y",
						"AJAX_OPTION_JUMP" => "N",
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
							1 => "1",
						),
						"PROPERTY_CODES_REQUIRED" => array(
							0 => "NAME",
							1 => "1",
						),
						"RESIZE_IMAGES" => "N",
						"SEF_MODE" => "N",
						"STATUS" => "ANY",
						"STATUS_NEW" => "N",
						"USER_MESSAGE_ADD" => "Спасибо, Ваша заявка успешно сохранена!",	// Сообщение об успешном добавлении
						"USER_MESSAGE_EDIT" => "Спасибо, Ваша заявка успешно сохранена!",	// Сообщение об успешном сохранении
						"USE_CAPTCHA" => "N",
						"COMPONENT_TEMPLATE" => "consultations"
					],
					false
				); ?>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="freeze" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal__wrapper my-0" role="document">
		<div class="modal-content modal__content border border-success rounded-3 position-relative align-items-center">
			<!-- <button type="button" class="btn-close modal__close rounded-circle opacity-100 text-white" data-bs-dismiss="modal" aria-label="Close"> </button> -->
			<div class="modal-body p-0">
				<? $APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	"freeze", 
	array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
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
			1 => "1",			
			2 => "39",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "NAME",
			1 => "1",
			2 => "39",
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Спасибо, Ваша заявка успешно сохранена!",
		"USER_MESSAGE_EDIT" => "Спасибо, Ваша заявка успешно сохранена!",
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "freeze"
	),
	false
); ?>
			</div>
		</div>
	</div>
</div>

</body>

</html>
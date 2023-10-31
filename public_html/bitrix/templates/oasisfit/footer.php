<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>


<footer class="footer py-5">
	<div class="container">
		<div class="d-flex justify-content-between flex-column flex-sm-row gap-4">
			<a href="#" class="d-flex gap-2">
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
					<a href="#" target="_blank" class="social__link rounded-circle">
						<?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/img/icons/vk.svg'); ?>
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="social__link rounded-circle">
						<?= file_get_contents($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/img/icons/fb.svg'); ?>
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="social__link rounded-circle">
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
					array(
						"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",	// * дата начала *
						"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",	// * дата завершения *
						"CUSTOM_TITLE_DETAIL_PICTURE" => "",	// * подробная картинка *
						"CUSTOM_TITLE_DETAIL_TEXT" => "",	// * подробный текст *
						"CUSTOM_TITLE_IBLOCK_SECTION" => "",	// * раздел инфоблока *
						"CUSTOM_TITLE_NAME" => "",	// * наименование *
						"CUSTOM_TITLE_PREVIEW_PICTURE" => "",	// * картинка анонса *
						"CUSTOM_TITLE_PREVIEW_TEXT" => "",	// * текст анонса *
						"CUSTOM_TITLE_TAGS" => "",	// * теги *
						"DEFAULT_INPUT_SIZE" => "30",	// Размер полей ввода
						"DETAIL_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования подробного текста
						"ELEMENT_ASSOC" => "CREATED_BY",	// Привязка к пользователю
						"GROUPS" => array(	// Группы пользователей, имеющие право на добавление/редактирование
							0 => "2",
						),
						"IBLOCK_ID" => "12",	// Инфоблок
						"IBLOCK_TYPE" => "FORMS",	// Тип инфоблока
						"LEVEL_LAST" => "Y",	// Разрешить добавление только на последний уровень рубрикатора
						"LIST_URL" => "",	// Страница со списком своих элементов
						"MAX_FILE_SIZE" => "0",	// Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
						"MAX_LEVELS" => "100000",	// Ограничить кол-во рубрик, в которые можно добавлять элемент
						"MAX_USER_ENTRIES" => "100000",	// Ограничить кол-во элементов для одного пользователя
						"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования текста анонса
						"PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
							0 => "32",
							1 => "NAME",
						),
						"PROPERTY_CODES_REQUIRED" => array(	// Свойства, обязательные для заполнения
							0 => "32",
							1 => "NAME",
						),
						"RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
						"SEF_MODE" => "N",	// Включить поддержку ЧПУ
						"STATUS" => "ANY",	// Редактирование возможно
						"STATUS_NEW" => "N",	// Деактивировать элемент
						"USER_MESSAGE_ADD" => "",	// Сообщение об успешном добавлении
						"USER_MESSAGE_EDIT" => "",	// Сообщение об успешном сохранении
						"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
					),
					false
				); ?>
			</div>
		</div>
	</div>
</div>
</body>

</html>
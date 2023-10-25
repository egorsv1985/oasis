<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>


<footer class="footer py-5">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center flex-column flex-sm-row gap-4">
			<a href="#" class="d-flex gap-2">
				<div class="footer__link rounded-circle"></div>
				<div class="fs-20 fw-700">
					<div>
						г. Сургут,<br>
						ул.Профсоюзов, 53/2
					</div>
				</div>
			</a>

			<ul class="footer__social social d-flex gap-1">
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
				<form action="#" class="modal__form form border-3 d-flex flex-column justify-content-center ">
					<div class="fs-24 text-center fw-700 mb-2">Оставить заявку</div>
					<p class="fs-16 text-info text-center lh-13 mb-4">Оставьте свои контакты и мы с вами свяжемся</p>
					<div class="form-group position-relative mb-3">
						<input type="text" class="form-control form__input bg-light rounded-2 text-info p-3 h-100" name="name" id="name" placeholder="" required />
						<label for="name" class="form-label form__label fs-16 text-info position-absolute top-50 mb-0">Имя*</label>
					</div>
					<div class="form-group position-relative mb-4">
						<input type="text" class="form-control form__input bg-light rounded-2 text-info p-3 h-100" name="tel" id="tel" placeholder="" required />
						<label for="tel" class="form-label form__label fs-16 text-info position-absolute top-50 mb-0 ">Телефон*</label>
					</div>
					<button type="submit" class="form__btn btn fs-16 fw-600 px-3 py-3 btn-primary w-100 border-0 mb-4">
						Отправить
					</button>
					<p class="fs-14 lh-12 text-info text-center">
						Нажимая на кнопку, вы даете согласие на обработку персональных
						данных
					</p>
				</form>
			</div>
		</div>
	</div>
</div>



</body>

</html>
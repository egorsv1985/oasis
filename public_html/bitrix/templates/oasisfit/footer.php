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
<div class="modal fade" id="team" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">				</button>
			</div>
			<div class="modal-body">
			<div class="row">
				<div class="col-12 col-lg-6 position-relative">
					<div class="popup__box-fon text-center position-relative h-100">
						<div class="popup__box-trener position-absolute w-100 h-100"></div>

						<div class="popup__box-fon-1 d-inline-block h-100"></div>
					</div>
					<div class="popup__box-text position-absolute rounded-3 border border-success p-4 end-0">
						<div class="fs-16 fw-700">
							«Тут можно написать приветствие от тренера или любую цитату от
							него»
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="popup__box-content">
						<div class="fs-24 fw-700 mb-4">Фамилия Имя</div>
						<ul class="popup__list fs-16 lh-12 text-info ps-0 mb-5">
							<li>Координатор групповых программ</li>
							<li>Мастер-тренер тренажерного зала</li>
						</ul>
						<div class="popup__numbered-list fs-16 lh-13 text-info">
							<ol class="ps-0">
								<li>
									Развитие функциональных и скоростно-силовых способностей,
									коррекция осанки, улучшение гибкости и подвижности суставов,
									развитие координационных способностей, динамическое вытяжение
									позвоночника за счет хореографии рук.
								</li>
								<li>
									Коррекция веса, увеличение силовых показателей и мышечной
									массы, детский и подростковый тренинг.
								</li>
								<li>
									Коррекция веса, увеличение силовых показателей и мышечной
									массы, детский и подростковый тренинг.
								</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-6">
								<a data-popup="#callback" href="#callback" role="button" class="btn btn-primary py-3 d-block fw-600 fs-16 w-100"><span>Записаться к тренеру</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			</div>
		</div>
	</div>
</div>
<div id="callback" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content bg-secondary rounded-3 d-flex justify-content-center align-items-center position-relative">
			<button data-close type="button" class="popup__close">
				<svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M22.4999 24.6545L32.7543 34.9117L34.7455 32.9232L24.4883 22.666L34.7455 12.4117L32.7571 10.4204L22.4999 20.6776L12.2455 10.4204L10.2571 12.4117L20.5115 22.666L10.2571 32.9204L12.2455 34.9117L22.4999 24.6545Z" fill="#262722" />
				</svg>
			</button>

			<form action="#" class="popup__form form border-3 d-flex flex-column justify-content-center ">
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



</body>

</html>
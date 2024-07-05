;(() => {
	'use strict'

	// Когда DOM полностью загружен
	document.addEventListener('DOMContentLoaded', function () {
		// Флаг для состояния блокировки скролла
		let isScrollBlocked = false

		// Функция для снятия/установки блокировки скролла
		const toggleScrollLock = () => {
			// Получаем ссылку на элементы "burger" и "header__services"
			const burgerElement = document.querySelector('.burger')
			const servicesElement = document.querySelector('.header__services')

			// Флаг для состояния открытия/закрытия "header__services"
			let isServicesOpen = false

			// Обработчик клика по элементу "burger"
			if (burgerElement) {
				burgerElement.addEventListener('click', function () {
					// Проверяем текущее состояние блокировки скролла
					if (isScrollBlocked) {
						// Если скролл разблокирован
						unlockScroll()
						console.log('Скролл разблокирован')
					} else {
						// Если скролл заблокирован
						lockScroll()
						console.log('Скролл заблокирован')
					}

					// Переключаем класс "open" у <html>
					document.documentElement.classList.toggle('open')

					// Если класс "open" отсутствует, закрываем "header__services"
					if (!document.documentElement.classList.contains('open')) {
						servicesElement.classList.remove('open')
						isServicesOpen = false
					}
				})
			}

			// Получаем ссылку на элемент "header__service-item"
			const serviceItem = document.querySelector('.header__service-item')

			// Обработчик клика по элементу "header__service-item"
			if (servicesElement && serviceItem) {
				serviceItem.addEventListener('click', function () {
					// Переключаем состояние открытия/закрытия "header__services"
					isServicesOpen = !isServicesOpen
					console.log('isHeaderServicesOpen: ' + isServicesOpen)

					// Добавляем/удаляем класс "open" у "header__services"
					servicesElement.classList.toggle('open', isServicesOpen)
				})
			}
		}

		// Функция для разблокировки скролла
		const unlockScroll = () => {
			const bodyElement = document.querySelector('body')

			// Получаем все элементы с атрибутом "data-lp"
			const elementsWithAttribute = document.querySelectorAll('[data-lp]')

			// Снимаем стили padding у всех элементов
			for (let i = 0; i < elementsWithAttribute.length; i++) {
				elementsWithAttribute[i].style.paddingRight = '0px'
			}

			// Снимаем стили padding у <body>
			bodyElement.style.paddingRight = '0px'

			// Удаляем класс блокировки у <html>
			document.documentElement.classList.remove('lock')

			// Разрешаем скролл
			isScrollBlocked = false
		}

		// Функция для блокировки скролла
		const lockScroll = () => {
			const bodyElement = document.querySelector('body')

			// Получаем все элементы с атрибутом "data-lp"
			const elementsWithAttribute = document.querySelectorAll('[data-lp]')

			// Устанавливаем стили padding для всех элементов, чтобы избежать сдвига контента из-за скрытого скролла
			for (let i = 0; i < elementsWithAttribute.length; i++) {
				elementsWithAttribute[i].style.paddingRight =
					window.innerWidth - document.documentElement.clientWidth + 'px'
			}

			// Устанавливаем стили padding для <body>
			bodyElement.style.paddingRight =
				window.innerWidth - document.documentElement.clientWidth + 'px'

			// Добавляем класс блокировки к <html>
			document.documentElement.classList.add('lock')

			// Запрещаем скролл
			isScrollBlocked = true
		}
		// выбираем элемент с классом "communitySwiper" и создаем новый Swiper объект
		var swiper = new Swiper('.communitySwiper', {
			// задаем количество слайдов, которые будут показываться одновременно
			slidesPerView: 1,
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 992px
				992: {
					slidesPerView: 3,
					spaceBetween: 50,
				},
			},
			centeredSlides: true,
			// включаем курсор в виде "руки" при наведении на слайды
			grabCursor: true,
			// включаем использование клавиатуры для навигации по слайдам
			keyboard: {
				enabled: true,
			},
			loop: true,
			pagination: {
				el: '.community .swiper-pagination',
				type: 'bullets',
				clickable: true,
			},
			// включаем кнопки "вперед" и "назад" для навигации по слайдам
			navigation: {
				nextEl: '.community .swiper-button-next',
				prevEl: '.community .swiper-button-prev',
			},
		})
		// Получаем ссылки на вкладки и соответствующие контенты
		const tabLinks = document.querySelectorAll('.team-tab')
		const teamContentTabs = document.querySelectorAll('.team-content')
		const controlContentTabs = document.querySelectorAll('.tab-content.my-5')

		// Обработчик кликов по вкладкам
		tabLinks.forEach(tabLink => {
			tabLink.addEventListener('click', event => {
				event.preventDefault()

				// Получаем data-target для текущей вкладки
				const targetSelector = tabLink.getAttribute('data-target')

				// Удаляем классы show и active у всех вкладок и контентов
				tabLinks.forEach(tl => tl.classList.remove('active'))
				teamContentTabs.forEach(tc => tc.classList.remove('show', 'active'))
				controlContentTabs.forEach(cc => cc.classList.remove('show', 'active'))

				// Добавляем классы show и active для соответствующей вкладки и контента
				tabLink.classList.add('active')

				// Обновляем контент в обоих группах вкладок
				const targetTeamContentTabs = document.querySelectorAll(targetSelector)
				targetTeamContentTabs.forEach(ttct =>
					ttct.classList.add('show', 'active')
				)
			})
		})

		// выбираем элемент с классом "teamSwiper" и создаем новый Swiper объект
		var swiper = new Swiper('.teamSwiper', {
			// задаем количество слайдов, которые будут показываться одновременно
			slidesPerView: 1,
			centeredSlides: true,
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 1200px
				992: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
			},

			// включаем курсор в виде "руки" при наведении на слайды
			grabCursor: true,
			// включаем использование клавиатуры для навигации по слайдам
			keyboard: {
				enabled: true,
			},
			// centeredSlides: true,
			loop: true,
			pagination: {
				el: '.teams .swiper-pagination',
				type: 'bullets',
				clickable: true,
			},
			// включаем кнопки "вперед" и "назад" для навигации по слайдам
			navigation: {
				nextEl: '.teams .swiper-button-next',
				prevEl: '.teams .swiper-button-prev',
			},
		})
		// выбираем элемент с классом "teamSwiper" и создаем новый Swiper объект
		var swiper = new Swiper('.teamSwiper', {
			// задаем количество слайдов, которые будут показываться одновременно
			slidesPerView: 1,
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 992px
				992: {
					slidesPerView: 3,
					spaceBetween: 20,
				},
			},
			// centeredSlides: true,
			// включаем курсор в виде "руки" при наведении на слайды
			grabCursor: true,
			// включаем использование клавиатуры для навигации по слайдам
			keyboard: {
				enabled: true,
			},
			loop: true,
			pagination: {
				el: '.trainers .swiper-pagination',
				type: 'bullets',
				clickable: true,
			},
			// включаем кнопки "вперед" и "назад" для навигации по слайдам
			navigation: {
				nextEl: '.trainers .swiper-button-next',
				prevEl: '.trainers .swiper-button-prev',
			},
		})
		var swiper = new Swiper('.gallerySwiper', {
			loop: true,
			spaceBetween: 30,
			slidesPerView: 1,
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 992px
				992: {
					slidesPerView: 2,
				},
			},
			pagination: {
				el: '#gallery .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '#gallery .swiper-button-next',
				prevEl: '#gallery .swiper-button-prev',
			},
			freeMode: true,
			watchSlidesProgress: true,
		})

		var swiper2 = new Swiper('.gallerySwiper2', {
			loop: true,
			spaceBetween: 30,

			pagination: {
				el: '#gallery .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '#gallery .swiper-button-next',
				prevEl: '#gallery .swiper-button-prev',
			},
			thumbs: {
				swiper: swiper,
			},
		})
		var swiper = new Swiper('.gallerySwiper', {
			loop: true,
			spaceBetween: 30,
			slidesPerView: 1,
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 992px
				992: {
					slidesPerView: 2,
				},
			},
			pagination: {
				el: '#services-item .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '#services-item .swiper-button-next',
				prevEl: '#services-item .swiper-button-prev',
			},
			freeMode: true,
			watchSlidesProgress: true,
		})

		var swiper2 = new Swiper('.gallerySwiper2', {
			loop: true,
			spaceBetween: 30,

			pagination: {
				el: '#services-item .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '#services-item .swiper-button-next',
				prevEl: '#services-item .swiper-button-prev',
			},
			thumbs: {
				swiper: swiper,
			},
		})
		// Вызов функции для снятия/установки блокировки скролла
		toggleScrollLock()

		// Функция для определения поддержки формата WebP
		const checkWebpSupport = () => {
			const image = new Image()
			image.onload = image.onerror = () => {
				// Проверяем, поддерживается ли формат WebP
				const isWebpSupported = image.height === 2

				// Добавляем класс "webp" или "no-webp" к <html> в зависимости от поддержки
				document.documentElement.classList.add(
					isWebpSupported ? 'webp' : 'no-webp'
				)
			}

			// Загружаем тестовое изображение в формате WebP
			image.src =
				'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA'
		}

		// Вызов функции для проверки поддержки WebP
		checkWebpSupport()
	}),
		jQuery(document).ready(function () {
			var e = document.querySelectorAll('input[type="tel"]')
			jQuery(e).inputmask({
				mask: ['+7 (999) 999 99 99', '8 (999) 999 99 99'],
				greedy: !1,
				placeholder: '_',
			})
		})
})()

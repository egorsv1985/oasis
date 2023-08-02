// /*
// (i) Код попадает в итоговый файл,
// только когда вызвана функция,
// например flsFunctions.spollers();
// Или когда импортирован весь файл,
// например import "files/script.js";
// Неиспользуемый (не вызванный)
// код в итоговый файл не попадает.

// Если мы хотим добавить модуль
// следует его расскоментировать
// */

// // Включить/выключить FLS (Full Logging System) (в работе)
// window["FLS"] = true;

// // ========================================================================================================================================================================================================================================================
// // Функционал ========================================================================================================================================================================================================================================================
// // ========================================================================================================================================================================================================================================================
// import * as flsFunctions from "./files/functions.js";

// /* Проверка поддержки webp, добавление класса webp или no-webp для HTML */
// /* (i) необходимо для корректного отображения webp из css  */
// flsFunctions.isWebp();
// /* Добавление класса touch для HTML если браузер мобильный */
// // flsFunctions.addTouchClass();
// /* Добавление loaded для HTML после полной загрузки страницы */
// // flsFunctions.addLoadedClass();
// /* Модуль для работы с меню (Бургер) */
// flsFunctions.menuInit();
// /* Учет плавающей панели на мобильных устройствах при 100vh */
// // flsFunctions.fullVHfix();

// /*
// Модуль работы со спойлерами
// Документация:
// Сниппет (HTML): spollers
// */
// // flsFunctions.spollers();

// /*
// Модуль работы с табами
// Документация:
// Сниппет (HTML): tabs
// */
// // flsFunctions.tabs();

// /*
// Модуль "показать еще"
// Документация по работе в шаблоне:
// Сниппет (HTML): showmore
// */
// // flsFunctions.showMore();

// /*
// Попапы
// Документация по работе в шаблоне:
// Сниппет (HTML): pl
// */
import "./libs/popup.js";

// /*
// Модуль параллакса мышью
// Документация по работе в шаблоне:
// Сниппет (HTML):
// */
// // import './libs/parallax-mouse.js'

// // ========================================================================================================================================================================================================================================================
// // Работа с формами ========================================================================================================================================================================================================================================================
// // ========================================================================================================================================================================================================================================================
// // import * as flsForms from "./files/forms/forms.js";

// /* Работа с полями формы: добавление классов, работа с placeholder. */
// // flsForms.formFieldsInit();

// /* Oтправка формы со встроенной валидацией полей. false - отключит валидацию */
// // flsForms.formSubmit(true);

// /* Модуль формы "количество" */
// // flsForms.formQuantity();

// /* Модуль формы "показать пароль" */
// // flsForms.formViewpass();

// /* Модуль звездного рейтинга */
// // flsForms.formRating();

// /* Модуль работы с select. */
// // import './libs/select.js'

// /* (В работе) Модуль работы с масками.*/
// /*
// Подключение и настройка выполняется в файле js/files/forms/inputmask.js
// Документация по работе в шаблоне:
// Документация плагина: https://github.com/RobinHerbots/inputmask
// Сниппет(HTML):
// */
// // import "./files/forms/inputmask.js";

// /* Модуль работы с ползунком */
// /*
// Подключение и настройка выполняется в файле js/files/forms/range.js
// Документация по работе в шаблоне:
// Документация плагина: https://refreshless.com/nouislider/
// Сниппет (HTML): range
// */
// // import "./files/forms/range.js";

// /* Модуль работы с подсказками (tippy) */
// /*
// Подключение плагина Tippy.js и настройка выполняется в файле js/files/tippy.js
// Документация по работе в шаблоне:
// Документация плагина: https://atomiks.github.io/tippyjs/
// Сниппет (HTML): tip (добавляет атрибут с подсказкой для html тега)
// */
// // import "./files/tippy.js";

// // ========================================================================================================================================================================================================================================================
// // Работа со слайдером (Swiper) ========================================================================================================================================================================================================================================================
// // ========================================================================================================================================================================================================================================================
// /*
// Настройка подключения плагина слайдера Swiper и новых слайдеров выполняется в файле js/files/sliders.js
// Документация по работе в шаблоне:
// Документация плагина: https://swiperjs.com/
// Сниппет(HTML): swiper
// */
// import "./files/sliders.js";

// // Модули работы с прокруткой страницы ========================================================================================================================================================================================================================================================

// /*
// Изменение дизайна скроллбара
// Документация по работе в шаблоне: В HTML добавляем к блоку атрибут data-simplebar
// Документация плагина: https://github.com/Grsmto/simplebar/tree/master/packages/simplebar
// Сниппет(HTML):
// */
// // import './files/scroll/simplebar.js';

// // Ленивая (отложенная) загрузка картинок
// // Документация по работе в шаблоне: В HTML добавляем img, video, audio, iframe но вместо src пишем data-src
// // Документация плагина: https://github.com/verlok/vanilla-lazyload
// // Сниппет(HTML):
// //import './files/scroll/lazyload.js';

// // Наблюдатель за объектами c атрибутом data-watch
// // Документация по работе в шаблоне: js/libs/watcher.js
// // Сниппет(HTML):
// // import './libs/watcher.js'

// // Функции работы скроллом
// import * as flsScroll from "./files/scroll/scroll.js";

// // Плавная навигация по странице
// flsScroll.pageNavigation();

// // Функционал добавления классов к хедеру при прокрутке
// flsScroll.headerScroll();

// // Функционал липкого блока
// flsScroll.stickyBlock();

// /*
// Документация по работе в шаблоне: https://www.lightgalleryjs.com/docs/
// Документация плагина: https://www.lightgalleryjs.com/docs/
// Сниппет(HTML):
// */
// // import "./files/gallery.js";

// // Прочие плагины ============================================================================================================================================================================================================================================================================================================

// /* Динамический адаптив */
// // import "./libs/dynamic_adapt.js";

// /* Форматирование чисел */
// // import './libs/wNumb.min.js';

// // Прочее ========================================================================================================================================================================================================================================================

// /* Подключаем файлы со своим кодом */
// import "./files/script.js";
// //============================================================================================================================================================================================================================================

// const body = document.body;
// const scrollUp = "scroll-up";
// const scrollDown = "scroll-down";
// let lastScroll = 0;

// window.addEventListener("scroll", () => {
//   const currentScroll = window.pageYOffset;
//   if (currentScroll <= 0) {
//     body.classList.remove(scrollUp);
//     return;
//   }

//   if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
//     // down
//     body.classList.remove(scrollUp);
//     body.classList.add(scrollDown);
//     // lottiePlayer.play();
//   } else if (
//     currentScroll < lastScroll &&
//     body.classList.contains(scrollDown)
//   ) {
//     // up
//     body.classList.remove(scrollDown);
//     body.classList.add(scrollUp);
//     // lottiePlayer.stop();
//   }
//   lastScroll = currentScroll;
// });

// // Подключение основного файла стилей
import Swiper from "swiper";
import "../scss/style.scss";

("use strict");
// Обработчик события DOMContentLoaded для выполнения кода после полной загрузки DOM
document.addEventListener("DOMContentLoaded", function () {
  let scrollLocked = false; // Флаг, определяющий, заблокирован ли скролл страницы

  // Функция разблокировки скролла с параметром delay по умолчанию равным 500 миллисекундам.
  const unlockScroll = (delay = 500) => {
    // Поиск элемента тега "body" на странице.
    const body = document.querySelector("body");

    // Проверка флага "scrollLocked".
    if (scrollLocked) {
      // Поиск всех элементов с атрибутом "data-lp" на странице.
      const elements = document.querySelectorAll("[data-lp]");

      // Убрать отступ у элементов с атрибутом "data-lp".
      for (let i = 0; i < elements.length; i++) {
        elements[i].style.paddingRight = "0px";
      }

      // Убрать отступ у тега "body".
      body.style.paddingRight = "0px";

      // Убрать класс "lock" у элемента "documentElement".
      document.documentElement.classList.remove("lock");

      // Установить флаг "scrollLocked" на "false".
      scrollLocked = false;

      // Установить таймер на повторное блокирование скролла через указанное время задержки.
      setTimeout(function () {
        // Установить флаг "scrollLocked" на "true" для возможности повторной блокировки.
        scrollLocked = true;
        // Вывести сообщение о разблокировке скролла в консоль.
        console.log("Скролл разблокирован");
      }, delay);
    }
  };

  // Функция блокировки скролла с параметром delay по умолчанию равным 500 миллисекундам.
  const lockScroll = (delay = 500) => {
    // Получаем элемент "body" через document.querySelector
    const body = document.querySelector("body");

    // Если флаг scrollLocked равен false, то выполняем следующий код
    if (!scrollLocked) {
      // Получаем все элементы с атрибутом "data-lp"
      const elements = document.querySelectorAll("[data-lp]");

      // Проходимся по всем элементам и устанавливаем отступ слева равный разнице между шириной окна и шириной содержимого элемента
      for (let i = 0; i < elements.length; i++) {
        elements[i].style.paddingRight = `${
          window.innerWidth - document.documentElement.clientWidth
        }px`;
      }

      // Устанавливаем отступ у элемента "body"
      body.style.paddingRight = `${
        window.innerWidth - document.documentElement.clientWidth
      }px`;

      // Добавляем класс "lock" к элементу "documentElement"
      document.documentElement.classList.add("lock");

      // Устанавливаем флаг scrollLocked в true
      scrollLocked = true;

      // Через указанное время задержки снова устанавливаем флаг scrollLocked в false для разблокировки скролла
      setTimeout(function () {
        scrollLocked = false;
        console.log("Скролл заблокирован");
      }, delay);
    }
  };

  // Обработчик клика на элемент с классом "header__burger"
  function handleBurgerClick() {
    // Получаем элемент с классом "burger" через document.querySelector
    const burger = document.querySelector(".burger");
    const headerServices = document.querySelector(".header__services");

    // Проверяем, существует ли элемент с классом "burger"
    if (burger) {
      // Добавляем обработчик события клика на элемент "burger"
      burger.addEventListener("click", function (event) {
        // Проверяем, заблокирован ли скролл
        if (scrollLocked) {
          // Вызываем функцию разблокировки скролла
          unlockScroll();
          // Выводим сообщение в консоль
          console.log("Скролл разблокирован");
        } else {
          // Вызываем функцию блокировки скролла
          lockScroll();
          // Выводим сообщение в консоль
          console.log("Скролл заблокирован");
        }

        // Переключаем класс "open" у элемента "documentElement"
        document.documentElement.classList.toggle("open");
      });
    }

    if (headerServices) {
      const servicesLink = document.querySelector(".service-item");

      // Добавляем обработчики событий наведения мыши на элемент "service-item"
      servicesLink.addEventListener("mouseover", function () {
        headerServices.classList.add("open");
      });

      servicesLink.addEventListener("mouseout", function () {
        headerServices.classList.remove("open");
      });
    }
  }

  // Вызываем функцию для обработки клика на "burger"
  handleBurgerClick();

  // Определение поддержки формата WebP и добавление класса "webp" или "no-webp" в зависимости от поддержки
  ((callback) => {
    // Создаем новый объект Image
    const image = new Image();

    // Добавляем обработчики событий загрузки и ошибки
    image.onload = image.onerror = () => callback(image.height === 2);

    // Задаем источник изображения в формате WebP
    image.src =
      "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";

    // Коллбэк функция для добавления класса 'webp' или 'no-webp' в зависимости от поддержки формата WebP
  })((supported) =>
    document.documentElement.classList.add(supported ? "webp" : "no-webp")
  );
});

(() => {
  "use strict";

  // Когда DOM полностью загружен
  document.addEventListener("DOMContentLoaded", function () {
    // Флаг для состояния блокировки скролла
    let isScrollBlocked = false;

    // Функция для снятия/установки блокировки скролла
    const toggleScrollLock = () => {
      // Получаем ссылку на элементы "burger" и "header__services"
      const burgerElement = document.querySelector(".burger");
      const servicesElement = document.querySelector(".header__services");

      // Флаг для состояния открытия/закрытия "header__services"
      let isServicesOpen = false;

      // Обработчик клика по элементу "burger"
      if (burgerElement) {
        burgerElement.addEventListener("click", function () {
          // Проверяем текущее состояние блокировки скролла
          if (isScrollBlocked) {
            // Если скролл разблокирован
            unlockScroll();
            console.log("Скролл разблокирован");
          } else {
            // Если скролл заблокирован
            lockScroll();
            console.log("Скролл заблокирован");
          }

          // Переключаем класс "open" у <html>
          document.documentElement.classList.toggle("open");

          // Если класс "open" отсутствует, закрываем "header__services"
          if (!document.documentElement.classList.contains("open")) {
            servicesElement.classList.remove("open");
            isServicesOpen = false;
          }
        });
      }

      // Получаем ссылку на элемент "header__service-item"
      const serviceItem = document.querySelector(".header__service-item");

      // Обработчик клика по элементу "header__service-item"
      if (servicesElement && serviceItem) {
        serviceItem.addEventListener("click", function () {
          // Переключаем состояние открытия/закрытия "header__services"
          isServicesOpen = !isServicesOpen;
          console.log("isHeaderServicesOpen: " + isServicesOpen);

          // Добавляем/удаляем класс "open" у "header__services"
          servicesElement.classList.toggle("open", isServicesOpen);
        });
      }
    };

    // Функция для разблокировки скролла
    const unlockScroll = () => {
      const bodyElement = document.querySelector("body");

      // Получаем все элементы с атрибутом "data-lp"
      const elementsWithAttribute = document.querySelectorAll("[data-lp]");

      // Снимаем стили padding у всех элементов
      for (let i = 0; i < elementsWithAttribute.length; i++) {
        elementsWithAttribute[i].style.paddingRight = "0px";
      }

      // Снимаем стили padding у <body>
      bodyElement.style.paddingRight = "0px";

      // Удаляем класс блокировки у <html>
      document.documentElement.classList.remove("lock");

      // Разрешаем скролл
      isScrollBlocked = false;
    };

    // Функция для блокировки скролла
    const lockScroll = () => {
      const bodyElement = document.querySelector("body");

      // Получаем все элементы с атрибутом "data-lp"
      const elementsWithAttribute = document.querySelectorAll("[data-lp]");

      // Устанавливаем стили padding для всех элементов, чтобы избежать сдвига контента из-за скрытого скролла
      for (let i = 0; i < elementsWithAttribute.length; i++) {
        elementsWithAttribute[i].style.paddingRight =
          window.innerWidth - document.documentElement.clientWidth + "px";
      }

      // Устанавливаем стили padding для <body>
      bodyElement.style.paddingRight =
        window.innerWidth - document.documentElement.clientWidth + "px";

      // Добавляем класс блокировки к <html>
      document.documentElement.classList.add("lock");

      // Запрещаем скролл
      isScrollBlocked = true;
    };

    // Вызов функции для снятия/установки блокировки скролла
    toggleScrollLock();

    // Функция для определения поддержки формата WebP
    const checkWebpSupport = () => {
      const image = new Image();
      image.onload = image.onerror = () => {
        // Проверяем, поддерживается ли формат WebP
        const isWebpSupported = image.height === 2;

        // Добавляем класс "webp" или "no-webp" к <html> в зависимости от поддержки
        document.documentElement.classList.add(
          isWebpSupported ? "webp" : "no-webp"
        );
      };

      // Загружаем тестовое изображение в формате WebP
      image.src =
        "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
    };

    // Вызов функции для проверки поддержки WebP
    checkWebpSupport();
  });
})();

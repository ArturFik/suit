$(document).ready(function () {
  const $body = $("body");

  function ensureBackdrop() {
    let $backdrop = $(".modal__backdrop");
    if (!$backdrop.length) {
      $backdrop = $('<div class="modal__backdrop"></div>').appendTo("body");
    }
    return $backdrop;
  }

  function resolveModalSelector(target) {
    if (target === undefined || target === null) {
      return null;
    }

    if (typeof target === "string") {
      const trimmed = target.trim();
      if (!trimmed.length) {
        return null;
      }
      return trimmed.charAt(0) === "#" ? trimmed : "#" + trimmed;
    }

    if (typeof target === "number") {
      return "#" + target;
    }

    if (target && typeof target === "object") {
      if (target.id) {
        return resolveModalSelector(target.id);
      }
      if (target.selector) {
        return resolveModalSelector(target.selector);
      }

      const aliasAttr =
        $(target).attr("data-modal-alias") || $(target).data("modalAlias");
      if (aliasAttr) {
        return resolveModalSelector(aliasAttr);
      }
    }

    const stringified = String(target || "").trim();
    if (!stringified.length) {
      return null;
    }

    return stringified.charAt(0) === "#" ? stringified : "#" + stringified;
  }

  function findModalByTarget(target) {
    const selector = resolveModalSelector(target);
    let $modal = selector ? $(selector) : $();

    if ($modal.length) {
      return $modal;
    }

    const raw =
      typeof target === "string" || typeof target === "number"
        ? String(target)
        : target && target.id
        ? String(target.id)
        : target && target.selector
        ? String(target.selector)
        : "";

    const key = raw.replace(/^#/, "").trim();
    if (!key) {
      return $();
    }

    const $aliases = $(".modal[data-modal-alias]").filter(function () {
      const aliases = ($(this).attr("data-modal-alias") || "")
        .split(",")
        .map(function (alias) {
          return alias.trim();
        })
        .filter(Boolean);

      return aliases.indexOf(key) !== -1;
    });

    if ($aliases.length) {
      return $aliases.first();
    }

    return $();
  }

  function openSiteModal(target) {
    const $modal = findModalByTarget(target);
    if (!$modal.length) {
      console.warn("[modal-debug] openSiteModal: modal not found", { target });
      return;
    }

    const hasBootstrapModal = typeof $.fn.modal === "function";
    const disableBootstrap =
      $modal.is("[data-modal-no-bootstrap='true']") ||
      $modal.data("modalNoBootstrap") === true ||
      $modal.hasClass("modal--site");

    if (hasBootstrapModal && $modal.hasClass("modal") && !disableBootstrap) {
      console.log("[modal-debug] openSiteModal via bootstrap", {
        target,
        modalId: $modal.attr("id"),
      });

      // Логируем причину закрытия bootstrap‑модалки
      $modal.off("hide.bs.modal.modalDebugger");
      $modal.on("hide.bs.modal.modalDebugger", function (e) {
        console.log("[modal-debug] bootstrap hide triggered", {
          relatedTarget: e.relatedTarget,
          isTrusted: e.isTrusted,
        });
      });

      $modal.modal("show");
      return;
    }

    $(".modal")
      .not($modal)
      .each(function () {
        $(this)
          .removeClass("_active modal--active")
          .attr("aria-hidden", "true");
      });

    const $backdrop = ensureBackdrop().stop(true, true).fadeIn(200);
    const modalRef =
      $modal.attr("id") ||
      $modal.attr("data-modal-alias") ||
      $modal.data("modalAlias");
    if (modalRef) {
      $backdrop.attr("data-modal-open", modalRef);
    }

    $modal.addClass("_active modal--active").attr("aria-hidden", "false");
    $body.addClass("_modal-open");
  }

  function closeSiteModal(target, reason) {
    let $targets = $();

    if (target) {
      $targets = findModalByTarget(target);
    }

    if (!$targets || !$targets.length) {
      $targets = $(".modal._active, .modal.modal--active");
    }

    console.log("[modal-debug] closeSiteModal request", {
      providedTarget: target,
      resolvedCount: $targets.length,
      reason: reason || "unspecified",
    });

    const hasBootstrapModal = typeof $.fn.modal === "function";

    if (hasBootstrapModal && $targets.length) {
      $targets.each(function () {
        const $thisModal = $(this);
        const disableBootstrap =
          $thisModal.is("[data-modal-no-bootstrap='true']") ||
          $thisModal.data("modalNoBootstrap") === true ||
          $thisModal.hasClass("modal--site");

        if ($thisModal.hasClass("modal") && !disableBootstrap) {
          console.log("[modal-debug] invoking bootstrap hide", {
            modalId: $thisModal.attr("id"),
          });
          $thisModal.modal("hide");
        } else {
          $thisModal
            .removeClass("_active modal--active")
            .attr("aria-hidden", "true");
        }
      });
    } else {
      $targets.each(function () {
        $(this)
          .removeClass("_active modal--active")
          .attr("aria-hidden", "true");
      });
    }

    if (!$(".modal._active, .modal.modal--active").length) {
      console.log("[modal-debug] backdrop removal");
      ensureBackdrop()
        .stop(true, true)
        .fadeOut(200)
        .removeAttr("data-modal-open");
      $body.removeClass("_modal-open");
    }
  }

  window.siteModals = window.siteModals || {};
  window.siteModals.open = openSiteModal;
  window.siteModals.close = closeSiteModal;

  var documentWidth = Math.abs(document.documentElement.clientWidth);
  var windowsWidth = Math.abs(window.innerWidth);
  var scrollbarWidth = windowsWidth - documentWidth;

  $(window).on("scroll", function () {
    var scrollPosition = $(this).scrollTop();
    if (scrollPosition > 0) {
      $("header").addClass("header__scroll");
    } else {
      $("header").removeClass("header__scroll");
    }

    if (scrollPosition > 149) {
      $("header").addClass("header__scroll_fixed-menu");
    } else {
      $("header").removeClass("header__scroll_fixed-menu");
    }
  });

  // header-catalig
  // $(".header__catalog-content").hide();
  //$(".sub-menu").hide();

  $(".header__catalog").on("click", function (e) {
    e.preventDefault(); // Предотвратить переход по ссылке

    const $catalogContent = $(".header__catalog-content");

    if ($catalogContent.is(":visible")) {
      // Если каталог уже открыт — скрываем его
      $catalogContent.animate({ left: "-700%" }, 300, function () {
        $(this).hide();
      });
    } else {
      // Если закрыт — показываем
      $catalogContent.show().animate({ left: "0" }, 300);
    }
  });

  // Скрыть подкатегории (субменю) и показать/скрыть при клике на основную категорию
  $(".header__catalog-nav > ul > li > a").on("click", function (e) {
    if ($(this).closest(".categories-column-left").length == 0) {
      e.preventDefault();
    }

    const $submenu = $(this).siblings(".sub-menu");
    const $parentLi = $(this).parent("li");

    if ($submenu.is(":visible")) {
      $submenu.slideUp(300);
      $parentLi.removeClass("active");
    } else {
      $(".sub-menu").slideUp(300);
      $(".header__catalog-nav > ul > li").removeClass("active");
      $submenu.slideDown(300);
      $parentLi.addClass("active");
    }
  });

  // Закрытие каталога при клике вне его области
  $(document).on("click", function (e) {
    if (
      !$(e.target).closest(".header__catalog, .header__catalog-content").length
    ) {
      $(".header__catalog-content").animate(
        { left: "-700%" },
        300,
        function () {
          $(this).hide();
        }
      );
    }
  });

  $(".header__mob-nav > a").on("click", function (e) {
    e.preventDefault(); // Предотвратить переход по ссылке

    const $headerTop = $(".header__top");

    if ($headerTop.is(":visible")) {
      // Если элемент виден, скрываем его
      $headerTop.slideUp(300, function () {
        $(this).css("display", "none"); // Убираем display: flex
      });
    } else {
      // Если элемент скрыт, показываем его
      $headerTop
        .css("display", "flex") // Устанавливаем flex перед анимацией
        .hide()
        .slideDown(300);
    }
  });

  //-------  home banner

  var owl = $(".banner__carousel");
  owl.owlCarousel({
    /* autoplay: false, */
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    dots: true,
    items: 1,
    nav: true,
    navText: [
      '<img src="images/sld-back.svg">',
      '<img src="images/sld-next.svg">',
    ],
  });

  // Перемещение `owl-dots` внутрь `owl-nav`
  var $owlNav = $(".banner__carousel .owl-nav");
  var $owlDots = $(".banner__carousel .owl-dots");

  if ($owlNav.length && $owlDots.length) {
    $owlNav.append($owlDots);
  }

  //-------- brand__sld
  var owlBrand = $(".brand__sld");

  owlBrand.owlCarousel({
    autoplay: false,
    loop: true,
    dots: true,
    items: 1,
    responsive: {
      0: {},
      768: {},
      1000: {},
    },

    nav: true,
    navText: [
      '<img src="images/sld-back.svg">',
      '<img src="images/sld-next.svg">',
    ],
  });

  // Перемещение `owl-dots` внутрь `owl-nav`
  var $owlNavBrand = $(".brand__sld .owl-nav");
  var $owlDotsBrand = $(".brand__sld .owl-dots");

  if ($owlNavBrand.length && $owlDotsBrand.length) {
    $owlNavBrand.append($owlDotsBrand);
  }

  //-------- our-team sld
  var owlBrand = $(".our-team__content");

  owlBrand.owlCarousel({
    autoplay: false,
    loop: true,
    dots: true,
    margin: 30,
    responsive: {
      0: {
        items: 2,
        margin: 15,
      },
      768: {
        items: 2,
        margin: 15,
      },
      1000: {
        items: 6,
        margin: 30,
      },
    },

    nav: true,
    navText: [
      '<img src="images/sld-back.svg">',
      '<img src="images/sld-next.svg">',
    ],
  });

  // Перемещение `owl-dots` внутрь `owl-nav`
  var $owlNavBrand = $(".our-team__content .owl-nav");
  var $owlDotsBrand = $(".our-team__content .owl-dots");

  if ($owlNavBrand.length && $owlDotsBrand.length) {
    $owlNavBrand.append($owlDotsBrand);
  }

  //-------- certificate sld
  var owlBrand = $(".certificate__content");

  owlBrand.owlCarousel({
    autoplay: false,
    loop: true,
    dots: true,
    margin: 30,
    responsive: {
      0: {
        items: 2,
        margin: 15,
      },
      768: {
        items: 2,
        margin: 15,
      },
      1000: {
        items: 6,
        margin: 30,
      },
    },

    nav: true,
    navText: [
      '<img src="images/sld-back.svg">',
      '<img src="images/sld-next.svg">',
    ],
  });

  // Перемещение `owl-dots` внутрь `owl-nav`
  var $owlNavBrand = $(".certificate__content .owl-nav");
  var $owlDotsBrand = $(".certificate__content .owl-dots");

  if ($owlNavBrand.length && $owlDotsBrand.length) {
    $owlNavBrand.append($owlDotsBrand);
  }

  //---modal
  $(".toggler").on("click", function (e) {
    const target = $(this).data("target");
    console.log("[modal-debug] toggler click", {
      element: this,
      rawTarget: target,
      href: $(this).attr("href"),
    });

    if (!target) {
      console.warn("[modal-debug] click ignored: data-target отсутствует");
      return;
    }

    e.preventDefault();
    e.stopPropagation();
    if (typeof e.stopImmediatePropagation === "function") {
      e.stopImmediatePropagation();
    }

    const $resolvedModal = findModalByTarget(target);
    console.log("[modal-debug] resolve candidate", {
      resolvedCount: $resolvedModal.length,
      resolvedId: $resolvedModal.attr("id"),
      aliases: $resolvedModal.attr("data-modal-alias"),
    });

    openSiteModal(target);

    // Защита от мгновенного закрытия: запрещаем клик сквозь прозрачные зоны
    const $modal = $resolvedModal.first();
    if ($modal.length) {
      $modal.off("mousedown.modalGuard");
      $modal.on("mousedown.modalGuard", function (evt) {
        evt.stopPropagation();
      });
    }
  });

  $(document).on(
    "click",
    ".modal__close, .modal__mask, .j-close",
    function (e) {
      e.preventDefault();
      const target = $(this).data("target");
      if (target) {
        closeSiteModal(target);
      } else {
        closeSiteModal();
      }
    }
  );

  $(document).on("click", ".modal__backdrop", function (e) {
    e.preventDefault();
    closeSiteModal();
  });

  $(".j-basked").on("click", function () {
    $(".basket").addClass("open");
    $(".overlay").fadeToggle();
  });

  $(".close, .overlay").on("click", function () {
    $(".basket").removeClass("open");
    $(".overlay").fadeOut();
  });

  $("#file-upload").on("change", function () {
    const fileName = $(this).val().split("\\").pop(); // Получаем имя файла
    if (fileName) {
      $(".custom-file__label span").text(fileName); // Устанавливаем имя файла
    } else {
      $(".custom-file__label span").text("Выберите файл"); // Возвращаем дефолтный текст
    }
  });

  // sort
  // Открыть/закрыть "sort__options" при клике на "sort__val"
  $(".sort__val").on("click", function () {
    const $options = $(".sort__options");
    if ($options.is(":visible")) {
      $options.slideUp(300); // Скрыть, если видно
    } else {
      $options
        .hide() // Убедиться, что элемент скрыт
        .css("display", "flex") // Установить flex
        .slideDown(300); // Плавно открыть
    }
  });

  // Выбор опции сортировки
  $(".sort__option").on("click", function () {
    // Удалить класс active у всех опций
    $(".sort__option").removeClass("active");

    // Добавить класс active на выбранную опцию
    $(this).addClass("active");

    // Обновить текст в "sort__val"
    $(".sort__val").text($(this).text());

    // Закрыть "sort__options"
    $(".sort__options").slideUp(300);
  });

  // Закрыть дропдаун при клике вне блока
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".sort").length) {
      $(".sort__options").slideUp(300);
    }
  });

  $(".mob-filter__link").on("click", function () {
    const $catlist = $(this)
      .closest(".catalog__aside")
      .find(".catalog-aside__nav");

    // Проверяем текущее состояние и изменяем его
    if ($catlist.is(":visible")) {
      $catlist.slideUp(300); // Если уже открыто - закрываем
    } else {
      $catlist.slideDown(300); // Если закрыто - открываем
    }
  });

  //прд карт
  var $bigCarousel = $(".prd-card__img-big");
  var $thumbCarousel = $(".prd-card__img-thumb.owl-carousel");
  var thumbItemHeight = $(".prd-card__thumb").outerHeight(true);
  var visibleThumbs = 3;
  var currentThumbIndex = 0;

  // Инициализация Owl Carousel для большой картинки
  $bigCarousel.owlCarousel({
    items: 1,
    dots: false,
    nav: false,
    autoplay: false,
  });

  // Функция для инициализации/удаления карусели миниатюр
  function initThumbCarousel() {
    if ($(window).width() <= 768) {
      if (!$thumbCarousel.hasClass("owl-loaded")) {
        $thumbCarousel.owlCarousel({
          items: 4,
          dots: false,
          nav: false,
          margin: 10,
        });
      }
    } else {
      if ($thumbCarousel.hasClass("owl-loaded")) {
        $thumbCarousel
          .trigger("destroy.owl.carousel")
          .removeClass("owl-loaded");
        $thumbCarousel.find(".owl-stage-outer").children().unwrap();
      }
    }
  }

  // Инициализация миниатюр при загрузке
  initThumbCarousel();

  $(window).on("resize", function () {
    initThumbCarousel();
  });

  // Клик по миниатюре — смена изображения
  $(".prd-card__thumb").on("click", function () {
    var index = $(this).data("slide");
    $bigCarousel.trigger("to.owl.carousel", [index, 300]);
    $(".prd-card__thumb").removeClass("active");
    $(this).addClass("active");
  });

  // Функции для прокрутки миниатюр вверх/вниз
  function moveThumbs(direction) {
    var maxIndex = $(".prd-card__thumb").length - visibleThumbs;

    if (direction === "up" && currentThumbIndex > 0) {
      currentThumbIndex--;
    } else if (direction === "down" && currentThumbIndex < maxIndex) {
      currentThumbIndex++;
    } else {
      return;
    }

    var offset = -currentThumbIndex * thumbItemHeight - 16;
    if ($(window).width() > 768) {
      $thumbCarousel.css("transform", "translateY(" + offset + "px)");
    }
  }

  // Клики по кнопкам навигации
  $(".thumb-prev").click(function () {
    moveThumbs("up");
  });

  $(".thumb-next").click(function () {
    moveThumbs("down");
  });

  //prd-tab
  $(".prd-tab__header-item").click(function () {
    if ($(this).hasClass("prd-tab__link")) {
      return true;
    } else {
      var index = $(this).index();

      $(".prd-tab__header-item").removeClass("active");
      $(this).addClass("active");

      $(".prd-tab__item").hide().eq(index).fadeIn();
    }
  });

  // Показываем первую вкладку по умолчанию
  $(".prd-tab__header-item:not(.prd-tab__link):first").addClass("active");
  $(".prd-tab__item").hide().first().show();

  //аккордион
  $(".faq__item-title").click(function () {
    var $content = $(this).next(".faq__item-content");

    // Закрываем все кроме текущего
    $(".faq__item-content").not($content).slideUp();
    $(".faq__item-title").not(this).removeClass("active");

    // Переключаем текущий
    $(this).toggleClass("active");
    $content.stop(true, true).slideToggle();
  });

  $(".about-header__img-small img").click(function () {
    var newSrc = $(this).attr("src");
    $(".about-header__img-big img").attr("src", newSrc);
  });

  //кол-во
  $(".plus").click(function () {
    let input = $(this).siblings(".qty");
    let value = parseInt(input.val()) || 0;
    input.val(value + 1);
  });

  $(".minus").click(function () {
    let input = $(this).siblings(".qty");
    let value = parseInt(input.val()) || 0;
    if (value > 1) {
      input.val(value - 1);
    }
  });
});

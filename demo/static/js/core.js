$(document).ready(function () {
  var documentWidth = Math.abs(document.documentElement.clientWidth);
  var windowsWidth = Math.abs(window.innerWidth);
  var scrollbarWidth = windowsWidth - documentWidth;

  $(window).on('scroll', function() {
    var scrollPosition = $(this).scrollTop();

    if (scrollPosition > 0) {
      $('header').addClass('header__scroll');
    } else {
      $('header').removeClass('header__scroll');
    }
  });

  // header-catalig
  // $(".header__catalog-content").hide();
  $(".sub-menu").hide();

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
    e.preventDefault();
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
    if (!$(e.target).closest(".header__catalog, .header__catalog-content").length) {
      $(".header__catalog-content").animate({ left: "-700%" }, 300, function () {
        $(this).hide();
      });
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
      autoplay: false,
      loop: true,
      dots: true,
      items: 1,
      nav: true,
      navText: [
        '<img src="images/sld-back.svg">',
        '<img src="images/sld-next.svg">'
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
      items:1,
      responsive:{
        0:{

        },
        768:{

        },
        1000:{

        }
      },

      nav: true,
      navText: [
        '<img src="images/sld-back.svg">',
        '<img src="images/sld-next.svg">'
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
      responsive:{
        0:{
          items:2,
          margin: 15,
        },
        768:{
          items:2,
          margin: 15,
        },
        1000:{
          items:6,
          margin: 30,
        }
      },

      nav: true,
      navText: [
        '<img src="images/sld-back.svg">',
        '<img src="images/sld-next.svg">'
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
      responsive:{
        0:{
          items:2,
          margin: 15,
        },
        768:{
          items:2,
          margin: 15,
        },
        1000:{
          items:6,
          margin: 30,
        }
      },

      nav: true,
      navText: [
        '<img src="images/sld-back.svg">',
        '<img src="images/sld-next.svg">'
      ],
    });

    // Перемещение `owl-dots` внутрь `owl-nav`
    var $owlNavBrand = $(".certificate__content .owl-nav");
    var $owlDotsBrand = $(".certificate__content .owl-dots");

    if ($owlNavBrand.length && $owlDotsBrand.length) {
      $owlNavBrand.append($owlDotsBrand);
    }




  //---modal
  $('.toggler').on('click', function (e) {
    e.preventDefault();
    var $this = $(e.currentTarget);
    var target = $this.data('target');
    $('.modal').removeClass('_active');
    $('body').removeClass('_modal-open');
    $('.modal__backdrop').fadeOut();

    $("#" + $(this).data("target")).toggleClass('_active');
    $('.modal__backdrop').fadeIn();
    $("#" + $(this).data("target")).closest('body').toggleClass('_modal-open');
    //$('.mask-modal').fadeIn();
    // $('html, body').animate({
    //   scrollTop: $('html, body').offset().top,
    // });
  });

  $('.modal__close, .modal__mask, .modal__backdrop, .j-close').on('click', function (e) {
    e.preventDefault();

    $('.modal').removeClass('_active');
    $('.modal__backdrop').fadeOut();
    $('body').removeClass('_modal-open');
  });


  $('.j-basked').on('click', function() {
    $('.basket').addClass('open');
    $('.overlay').fadeToggle();
  });

  $('.close, .overlay').on('click', function() {
    $('.basket').removeClass('open');
    $('.overlay').fadeOut();
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

  $(".mob-filter__link").on("click", function() {
    const $catlist = $(this).closest(".catalog__aside").find(".catalog-aside__nav");

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
    autoplay: false
  });

  // Функция для инициализации/удаления карусели миниатюр
  function initThumbCarousel() {
    if ($(window).width() <= 768) {
      if (!$thumbCarousel.hasClass("owl-loaded")) {
        $thumbCarousel.owlCarousel({
          items: 4,
          dots: false,
          nav: false,
          margin: 10
        });
      }
    } else {
      if ($thumbCarousel.hasClass("owl-loaded")) {
        $thumbCarousel.trigger("destroy.owl.carousel").removeClass("owl-loaded");
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
    var index = $(this).index();

    $(".prd-tab__header-item").removeClass("active");
    $(this).addClass("active");

    $(".prd-tab__item").hide().eq(index).fadeIn();
  });

  // Показываем первую вкладку по умолчанию
  $(".prd-tab__header-item:first").addClass("active");
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
})
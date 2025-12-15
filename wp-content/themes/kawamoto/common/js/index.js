//header menu
$('.l-header-toggle').click(function(){
  $(this).toggleClass('nav_open');
  $(".l-header").toggleClass('header_open');
  $(".l-header-nav__home").toggleClass('nav_active');
  $(".l-header-nav").toggleClass('nav_active');
  $('.l-header-logo').toggleClass('nav_logo');
  $('body').toggleClass('hidden');

  var target = $(this).find("span");
  var text = target.text().trim();

  target.fadeOut(200, function() {

    if (text === "CLOSE") {
      target.text("MENU");
      flg = "open";
    } else {
      target.text("CLOSE");
      flg = "close";
    }

    target.fadeIn(200);
  });
    
});

//href無効化
document.addEventListener('DOMContentLoaded', function () {
  const breakpoint = 768;
  const links = document.querySelectorAll('.has-sub');

  function toggleHref() {
    const isSP = window.innerWidth < breakpoint;

    links.forEach(link => {
      if (isSP) {
        if (link.getAttribute('href')) {
          link.dataset.href = link.getAttribute('href');
          link.removeAttribute('href');
        }
      } else {
        if (!link.getAttribute('href') && link.dataset.href) {
          link.setAttribute('href', link.dataset.href);
        }
      }
    });
  }

  toggleHref();

  window.addEventListener('resize', toggleHref);
});

//sp header
$(function() {
  $('.l-header-nav-sp__toggle').click(function(){
    $('.l-header-nav-sp').toggleClass('is-open');
    $('.l-header-logo').toggleClass('__white');
  });
});

$(function() {
  $('a[href^="#"]').on("click", function(e) {
    e.preventDefault();
    var adjust = -100;
    var speed = 800;
    var href = $(this).attr("href");
    var $target = href === "#" || href === "" ? $("html") : $(href);

    if ($target.length) {
      var position = $target.offset().top + adjust;
      $("html, body").animate({ scrollTop: position }, speed, "swing");
    }
  });
});

//toggle menu - header
$('.__toggle').click(function(){
  $(this).toggleClass('menu-toggle');
  $(this).children('.l-header-nav-sp__list--sub').slideToggle();
});

//toggle menu - footer
$('.has-sub').on('click', function () {
  if ($(window).width() <= 768) {
    $(this).toggleClass('menu-toggle');
    $(this).next('.l-footer-left-menu__list--sub').slideToggle();
  }
});

//toggle link
$('.c-index-contents__slider__toggle-ttl').click(function(){
  $(this).toggleClass('is-open');
  $(this).next().slideToggle();
});
$(document).ready(function(){
  $('a[href^="#"]').on('click', function(){
    $('.l-header-nav').removeClass('is-open');
  });
});

//inview package
$(function () {
    $(".is-fade").on("inview", function () {
        $(this).addClass("is-inview");
    });
    $(".is-blur").on("inview", function () {
        $(this).addClass("is-inview");
    });
    //front-page
    $(".__up").on("inview", function () {
        $(this).addClass("is-inview");
    });
    // recruit
    $(".is-slide").on("inview", function () {
        $(this).addClass("is-inview");
    });
});

//service img hover
document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".c-index-service__detail--img-list");
  const links  = document.querySelectorAll(".c-index-service__detail--list .__link");

  // ✅ 初期表示：1番目を表示
  if (images.length > 0) {
    images[0].classList.add("is-active");
  }

  links.forEach((link, index) => {
    link.addEventListener("mouseenter", () => {
      images.forEach(img => img.classList.remove("is-active"));

      const target = document.querySelector(
        `.c-index-service__detail--img-list[data-index="${index + 1}"]`
      );
      if (target) target.classList.add("is-active");
    });
  });
});


//wpcf7-previous
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.wpcf7-previous').forEach(function(button) {
        button.addEventListener('click', function() {
            history.back();
        });
    });
});

//slick
$(function () {
  $(".c-index-news-slider").slick({
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    appendArrows: $('.c-index-news__info--btn'),
    prevArrow: '<div class="slick-prev"><img src="http://veldom03.xsrv.jp/kawamoto/wp-content/themes/kawamoto/common/img/common/ico_arrow.svg" alt="" class="__img"><span class="__sub">PREV</span></div>',
    nextArrow: '<div class="slick-next"><span class="__sub">NEXT</span><img src="http://veldom03.xsrv.jp/kawamoto/wp-content/themes/kawamoto/common/img/common/ico_arrow.svg" alt="" class="__img"></div>',
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 2,
          centerMode: true,
        },
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
          centerMode: true,
        },
      },
    ]
  });

  $(".c-works-detail-item__slider--inner").on("init", function (event, slick) {
		$('.c-index-visual-slider__item.slick-slide[data-slick-index="0"]').addClass("add-animation");
		$(".c-works-detail-item__slider--number").append(
			'<div class="c-works-detail-item__slider--count"><span class="now_count"></span><span class="all_count"></span></div>'
		  );
		  $(".now_count").text(slick.currentSlide + 1);
		  $(".all_count").text(slick.slideCount);
	}).slick({
    autoplay: false,
    speed: 1000,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    appendArrows: $('.c-works-detail-item__slider--btn'),
    prevArrow: '<div class="slick-prev"></div>',
    nextArrow: '<div class="slick-next"></div>',
  }).on({
		beforeChange: function (event, slick, currentSlide, nextSlide) {
			$(".c-works-detail-item__slider--img.slick-slide", this).eq(nextSlide).addClass("add-animation");
			$(".c-works-detail-item__slider--img.slick-slide", this).eq(currentSlide).addClass("remove-animation");
			$(".now_count").text(nextSlide + 1);
		},
		afterChange: function () {
			$(".remove-animation", this).removeClass(
				"remove-animation add-animation"
			);
		},
	});

  $(".c-index-slide").slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    arrows: false,
    cssEase: "linear",
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          centerMode: true,
        },
      },
      {
        breakpoint: 414,
        settings: {
          slidesToShow: 1,
          centerMode: true,
        },
      },
    ]
  });
});

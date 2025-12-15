function markFirstInRow() {
  const items = document.querySelectorAll('.c-recruit-menu__link');
  let prevTop = null;

  items.forEach((item, index) => {
    item.classList.remove('is-first-in-row'); // 既存のクラスを削除
    const top = item.getBoundingClientRect().top;

    if (top !== prevTop) {
      item.classList.add('is-first-in-row');
      prevTop = top;
    }
  });
}

// ページ読み込みとリサイズ時に実行
window.addEventListener('DOMContentLoaded', markFirstInRow);
window.addEventListener('resize', markFirstInRow);

$(window).on("load scroll", function () {
  $(".js-count-up").each(function () {
    var txtPos = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    if (scroll > txtPos - windowHeight + windowHeight / 5) {
      var $num = $(".js-number", this);
      var value = parseInt($num.attr("data-num"), 10);

      if (!$num.hasClass("counted")) {
        $num.addClass("counted");

        $({count: 0}).animate({count: value}, {
          duration: 1000,
          easing: "linear",
          step: function (now) {
            if ($num.hasClass("__comma")) {
              $num.text(Math.floor(now).toLocaleString());
            } else {
              $num.text(Math.floor(now));
            }
          },
          complete: function () {
            if ($num.hasClass("__comma")) {
              $num.text(value.toLocaleString());
            } else {
              $num.text(value);
            }
          }
        });
      }
    }
  });
});

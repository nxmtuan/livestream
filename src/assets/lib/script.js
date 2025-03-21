(() => {
  (function ($) {
    window.onload = function () {
      $(document).ready(function () {
        backToTop();
        handleMenu();
      });
    };

    function backToTop() {
      var $backToTop = $(".back-to-top");
      $backToTop.hide();

      $(window).on("scroll", function () {
        if ($(this).scrollTop() > 200) {
          $backToTop.fadeIn();
        } else {
          $backToTop.fadeOut();
        }
      });

      $backToTop.on("click", function (e) {
        $("html, body").animate({ scrollTop: 0 }, 50);
      });
    }

    function handleMenu() {
      let menu = $(".menu");
      let menuBtn = $(".menu-btn");
      let closeBtn = $(".close-btn");

      if (menu.length && menuBtn.length && closeBtn.length) {
        menuBtn.click(function () {
          if (menu.hasClass("-translate-y-full")) {
            menu.removeClass("-translate-y-full").addClass("translate-y-0");
            menuBtn.hide();
            closeBtn.show();
          }
        });

        closeBtn.click(function () {
          if (menu.hasClass("translate-y-0")) {
            menu.removeClass("translate-y-0").addClass("-translate-y-full");
            closeBtn.hide();
            menuBtn.show();
          }
        });
      }
    }
  })(jQuery);
})();

(() => {
  (function ($) {
    window.onload = function () {
      $(document).ready(function () {
        backToTop();
        handleMenu();
        countdown();
        switchTab();
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

    function countdown() {
      function getValidNumber(selector) {
        let value = parseInt($(selector).text(), 10);
        return isNaN(value) || value < 0 ? 0 : value;
      }

      let days = getValidNumber("#days");
      let hours = getValidNumber("#hours");
      let minutes = getValidNumber("#minutes");
      let seconds = getValidNumber("#seconds");

      let countdown = days * 24 * 3600 + hours * 3600 + minutes * 60 + seconds;

      function updateCountdown() {
        if (
          !$("#days").length ||
          !$("#hours").length ||
          !$("#minutes").length ||
          !$("#seconds").length
        ) {
          return;
        }

        let days = Math.floor(countdown / (24 * 3600));
        let hours = Math.floor((countdown % (24 * 3600)) / 3600);
        let minutes = Math.floor((countdown % 3600) / 60);
        let seconds = countdown % 60;

        $("#days").text(days);
        $("#hours").text(hours.toString().padStart(2, "0"));
        $("#minutes").text(minutes.toString().padStart(2, "0"));
        $("#seconds").text(seconds.toString().padStart(2, "0"));

        if (countdown > 0) {
          countdown--;
          setTimeout(updateCountdown, 1000);
        }
      }

      updateCountdown();
    }

    function switchTab() {
      $(".tab-content").hide();
      $("#tab1").show();

      $('.tab-button[data-tab="tab1"]').addClass("active");

      $(".tab-button").click(function () {
        const tabId = $(this).data("tab");

        if (!tabId || $("#" + tabId).length === 0) return;

        if ($("#" + tabId).is(":visible")) return;

        $(".tab-content").hide();
        $("#" + tabId).show();

        // Làm nổi bật nút đang chọn
        $(".tab-button").removeClass("active");
        $(this).addClass("active");
      });
    }
  })(jQuery);
})();

(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".nas-consulting-lite-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".nas-consulting-lite-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".nas-consulting-lite-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".nas-consulting-lite-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".nas-consulting-lite-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".nas-consulting-lite-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".nas-consulting-lite-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".nas-consulting-lite-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".nas-consulting-lite-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".nas-consulting-lite-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".nas-consulting-lite-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".nas-consulting-lite-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".nas-consulting-lite-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".nas-consulting-lite-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".nas-consulting-lite-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".nas-consulting-lite-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".nas-consulting-lite-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".nas-consulting-lite-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".nas-consulting-lite-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".nas-consulting-lite-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".nas-consulting-lite-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".nas-consulting-lite-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".nas-consulting-lite-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".nas-consulting-lite-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".nas-consulting-lite-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".nas-consulting-lite-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".nas-consulting-lite-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".nas-consulting-lite-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".nas-consulting-lite-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".nas-consulting-lite-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".nas-consulting-lite-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".nas-consulting-lite-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".nas-consulting-lite-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".nas-consulting-lite-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".nas-consulting-lite-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".nas-consulting-lite-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".nas-consulting-lite-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".nas-consulting-lite-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".nas-consulting-lite-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".nas-consulting-lite-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".nas-consulting-lite-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".nas-consulting-lite-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".nas-consulting-lite-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".nas-consulting-lite-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".nas-consulting-lite-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var mightyBuildersStickyMenu = $(".nas-consulting-lite-sticky-menu");
    var mightyBuildersStickyNavigation = $(".nas-consulting-lite-sticky-navigation");

    if (mightyBuildersStickyMenu.length && scrollTop > 0) {
      mightyBuildersStickyMenu.addClass("sticky-menu-enabled nas-consulting-lite-zoom-in-up");
    } else {
      mightyBuildersStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".nas-consulting-lite-scrollto-top a").fadeIn();
    } else {
      jQuery(".nas-consulting-lite-scrollto-top a").fadeOut();
    }
  });
  jQuery(".nas-consulting-lite-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  // Function to check if an element is in the viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  }

  // Function to start counter animation when element is in viewport
  function startCounterAnimation() {
    $(".nas-consulting-lite-number-counter")
      .not(".counted")
      .each(function () {
        if (isElementInViewport(this)) {
          var $this = $(this);
          $this
            .addClass("counted")
            .prop("Counter", 0)
            .animate(
              {
                Counter: $this.text(),
              },
              {
                duration: 1000,
                easing: "swing",
                step: function (now) {
                  $this.text(Math.ceil(now));
                },
              }
            );
        }
      });
  }

  // Check if element is in viewport on page load
  $(document).ready(function () {
    startCounterAnimation();
  });

  // Check if element is in viewport on scroll
  $(window).on("scroll", function () {
    startCounterAnimation();
  });
})(jQuery);

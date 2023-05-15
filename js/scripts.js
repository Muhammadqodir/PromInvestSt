function changeSrc(element, img) {
  element.setAttribute('src', img);
}
window.addEventListener('resize', function (event) {
  updateSlider();
});

function updateSlider() {
  var prefix = "";
  if (bootstrapDetectBreakpoint()["index"] < 2) {
    prefix = "_mobile";
    $(".partners .title").css("display", "none");
  } else {
    $(".partners .title").css("display", "block");
    prefix = "";
  }
  for (let index = 1; index < 5; index++) {
    $("#slide" + index).attr("src", "assets/slider-items/" + index + prefix + ".png");
  }
}

updateSlider();

(function() {
  "use strict";

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    slidesPerView: 'auto',
    navigation: {
      nextEl: '.swiper-button-next-unique',
      prevEl: '.swiper-button-prev-unique'
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 100
      }
    }
  });


})();
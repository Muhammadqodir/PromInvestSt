function changeSrc(element, img) {
  element.setAttribute('src', img);
}
window.addEventListener('resize', function (event) {
  updateSlider();
});

function updateSlider() {
  var prefix = "";
  var type = ".png";
  if (bootstrapDetectBreakpoint()["index"] < 2) {
    prefix = "m";
    $(".partners .title").css("display", "none");
    var type = ".jpg";
  } else {
    $(".partners .title").css("display", "block");
    var type = ".png";
    prefix = "";
  }
  for (let index = 1; index < 5; index++) {
    $("#slide" + index).attr("src", "assets/slider-items/" + prefix + index + type);
  }
}

updateSlider();

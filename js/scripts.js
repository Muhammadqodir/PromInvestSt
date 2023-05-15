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
  } else {
    prefix = "";
  }
  for (let index = 1; index < 5; index++) {
    $("#slide" + index).attr("src", "assets/slider-items/" + index + prefix + ".png");
  }
}

updateSlider();
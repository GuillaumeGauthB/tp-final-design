var posSlider = 0;
var slides = document.getElementById("caroussel");
setInterval(ChangerPos, 10000);

function ChangerPos(){
  console.log(posSlider);
  posSlider += 1;
  SlideShow(slides);
}

function plusSlides(n) {
  posSlider = n;
  SlideShow(slides);
}

function SlideShow(slide) {
  console.log(posSlider);
  if (posSlider < 0){
    posSlider = 2;
  }
  else if (posSlider > 2){
    posSlider = 0;
  }

  if(posSlider == 0){
    slide.style.transform = "translate(0vw)";
  }
  else if(posSlider == 1){
    slide.style.transform = "translate(-99vw)";
  }
  else if(posSlider == 2){
    slide.style.transform = "translate(-198vw)";
  }
  console.log(posSlider);
}
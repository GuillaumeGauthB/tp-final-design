// var slidePosition = 1;
// SlideShow(slidePosition);

// // forward/Back controls
// function plusSlides(n) {
//   SlideShow(slidePosition += n);
// }

// //  images controls
// function currentSlide(n) {
//   SlideShow(slidePosition = n);
// }

// function SlideShow(n) {
//   var i;
//   var slides = document.getElementsByClassName("boites");
//   if (n > slides.length) {slidePosition = 1}
//   if (n < 1) {slidePosition = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   slides[slidePosition-1].style.display = "grid";
// }

let posSlider = 0;
// var slides = document.getElementsByClassName("caroussel");
var slides = document.getElementById("caroussel");
SlideShow(posSlider, slides);

// forward/Back controls
function plusSlides(n) {
  posSlider += n;
}

//  images controls
// function currentSlide(n) {
  
// }

function SlideShow(pos, slide) {
  var i;
  if(pos = -1){
    slide.style.transform = "translate(0, -100vw);";
  }
  else if(pos = 0){
    slide.style.transform = "translate(0, 0);"
  }
  else if(pos = 1){
    slide.style.transform = "translate(0, 100vw);"
  }
  else if (pos < -1){
    pos = 1;
  }
  else{
    pos = -1;
  }
  // if (n > slides.length) {slidePosition = 1}
  // if (n < 1) {slidePosition = slides.length}
  // for (i = 0; i < slides.length; i++) {
  //     slides[i].style.display = "none";
  // }
  // slides[slidePosition-1].style.display = "grid";
}
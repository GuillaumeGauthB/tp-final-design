var slidePosition = 1;
SlideShow(slidePosition);

// forward/Back controls
function plusSlides(n) {
  SlideShow(slidePosition += n);
}

//  images controls
function currentSlide(n) {
  SlideShow(slidePosition = n);
}

function SlideShow(n) {
  var i;
  var slides = document.getElementsByClassName("boites");
  if (n > slides.length) {slidePosition = 1}
  if (n < 1) {slidePosition = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slidePosition-1].style.display = "grid";
}

// var slidePosition = 1;
// SlideShow(slidePosition);
// var slides = document.getElementsByClassName("caroussel");

// // forward/Back controls
// function plusSlides(n) {
//   if ((slidePosition += n) == 1){
//     slides.style.transform = "translate(100vw)";
//   }
//   else if ((slidePosition += n) == 2){
//     slides.style.transform = "translate(100vw)";
//   }
//   else{

//   }
//   SlideShow(slidePosition += n);
// }

// //  images controls
// function currentSlide(n) {
//   SlideShow(slidePosition = n);
// }

// function SlideShow(n) {
//   var i;
//   var slides = document.getElementsByClassName("caroussel");
//   if (n == 1){
//     slides.style.transform = "translate(100vw)";
//   }
//   else if (n == 2){

//   }
//   else{

//   }
// }
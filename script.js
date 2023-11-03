var slideIndex = 0;
showSlides(slideIndex);

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

function plusSlides(n) {
  showSlides((slideIndex += n));
}
function minesSlides(n) {
  showSlides((slideIndex += n));
}

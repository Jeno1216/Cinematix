var slideIndex = 1;
showSlides(slideIndex);
 
function plusSlides(n) {
    showSlides(slideIndex += n);
}
 
function currentSlide(n) {
    showSlides(slideIndex = n);
}
 
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("top-element");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
        dots[i].style.transform = "scale(1)";
        dots[i].style.color = "white";

    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    dots[slideIndex - 1].style.transform = "scale(1.5)";
    dots[slideIndex - 1].style.transition = ".3s";
    dots[slideIndex - 1].style.color = "#ff2c1f";



}
 
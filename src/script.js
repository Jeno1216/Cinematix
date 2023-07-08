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
  var slides = document.getElementsByClassName("change-element");
  var dotsContainer = document.getElementById("dot-container");
  if (n > slides.length) { slideIndex = 1; }
  if (n < 1) { slideIndex = slides.length; }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.opacity = 0;
    slides[i].style.display = "none";
  }
  for (i = 0; i < dotsContainer.children.length; i++) {
    dotsContainer.children[i].className = dotsContainer.children[i].className.replace(" active", "");
    dotsContainer.children[i].style.transform = "scale(1)";
    dotsContainer.children[i].style.color = "white";
  }
  slides[slideIndex - 1].style.display = "block";

  // Apply fade-in effect using opacity and transition
  setTimeout(function() {
    slides[slideIndex - 1].style.opacity = 1;
    slides[slideIndex - 1].style.transition = "opacity 0.3s";

  }, 20);

  dotsContainer.innerHTML = ""; // Clear previous dots

  // Generate dot navigation
  for (i = 0; i < slides.length; i++) {
    var dot = document.createElement("span");
    dot.className = "dot";
    dot.innerHTML = i + 1; // Set the dot number
    dot.onclick = function() {
      currentSlide(parseInt(this.innerHTML));
    };
    dotsContainer.appendChild(dot);
  }

  dotsContainer.children[slideIndex - 1].className += " active";
  dotsContainer.children[slideIndex - 1].style.transform = "scale(1.5)";
  dotsContainer.children[slideIndex - 1].style.transition = " 3s !important";
dotsContainer.children[slideIndex - 1].style.color = "#ff2c1f";

}

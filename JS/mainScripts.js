var slideIndex = 1;

showSlides(slideIndex);

function setSlide(n) {
    slideIndex = n;
    showSlides(slideIndex);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("indexSlides");
    var dots = document.getElementsByClassName("slideDot");
    if(n > slides.length) {slideIndex = 1}
    if(n < 1) {slideIndex = slides.length}
    for(i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for(i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].setAttribute("class", "slideDot active");
}

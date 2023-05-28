var slides = document.getElementsByClassName("slide");
var currentSlide = 0;

function showSlide() {
 
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }


    slides[currentSlide].style.display = "block";


    currentSlide++;
    if (currentSlide >= slides.length) {
        currentSlide = 0; 
    }

    
    setTimeout(showSlide, 3000);
}

showSlide();
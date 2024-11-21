function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    if (index >= slides.length) {
        currentSlide = 0; // Volver al primer slide
    } else if (index < 0) {
        currentSlide = slides.length - 1; // Volver al último slide
    } else {
        currentSlide = index;
    }
    document.getElementById('slides').style.transform = `translateX(-${currentSlide * 100}%)`; // Usar backticks
}

function nextSlide() {
    showSlide(currentSlide + 1); // Avanzar al siguiente slide
}

function prevSlide() {
    showSlide(currentSlide - 1); // Retroceder al slide anterior
}
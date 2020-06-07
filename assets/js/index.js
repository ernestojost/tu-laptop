'use strict'

window.addEventListener('load', () => {

    // Productos destacados
    $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < 4; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        }
    });


});

// Funciones para cuando pasa el ratón por encima de Cuenta y Carrito
function changeIconHover(option) {
    document.getElementById('img' + option.charAt(0).toUpperCase() + option.slice(1)).src = "./assets/img/" + option + "Hover.svg";
}

function changeIconNormal(option) {
    document.getElementById('img' + option.charAt(0).toUpperCase() + option.slice(1)).src = "./assets/img/" + option + "Normal.svg";
}
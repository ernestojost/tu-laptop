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


// CAMBIAR VISIBILIDAD LOGIN
function changeVisibilityLogin(bool) {
    if (bool) {
        disableScroll();
        document.getElementById('login-account').style.setProperty('display', 'flex', 'important');
        document.getElementsByTagName("html")[0].style.overflow = "hidden";
    } else {
        enableScroll();
        document.getElementById('login-account').style.setProperty('display', 'none', 'important');
        document.getElementsByTagName("html")[0].style.overflow = "auto";
    }
}

/* DESHABILITAR Y HABILITAR SCROLL */
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
    e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
    window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () {
            supportsPassive = true;
        }
    }));
} catch (e) {
}

var wheelOpt = supportsPassive ? {passive: false} : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// call this to Disable
function disableScroll() {
    window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

// call this to Enable
function enableScroll() {
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
    window.removeEventListener('touchmove', preventDefault, wheelOpt);
    window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}
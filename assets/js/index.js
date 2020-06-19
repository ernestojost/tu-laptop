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


    // Abrir crear cuenta
    document.getElementById("openCreateAccount").addEventListener("click", function () {
        document.getElementById('login-form').style.setProperty('display', 'none', 'important');
        document.getElementById('create-account-form').style.setProperty('display', 'block', 'important');
        document.getElementById('email-login').value = "";
        document.getElementById('password-login').value = "";
    }, false);
    
    // Cerrar crear cuenta
    document.getElementById("closeCreateAccount").addEventListener("click", function () {
        document.getElementById('create-account-form').style.setProperty('display', 'none', 'important');
        document.getElementById('login-form').style.setProperty('display', 'block', 'important');
        document.getElementById('name-create-account').value = "";
        document.getElementById('surname-create-account').value = "";
        document.getElementById('email-create-account').value = "";
        document.getElementById('password-create-account').value = "";
    }, false);


    // Login Ingresar
    document.getElementById("login-enter").addEventListener("click", function(){
        console.log("1");
    }, false);
    
    
    // Producto
    var configBoton = function() {
        console.log("TOCA");
    };
    
    for (var i = 0; i < 10; i++) {
        document.getElementsByClassName("dropdown-item")[i].addEventListener('click', configBoton, false);
    }

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
        document.getElementsByTagName("html")[0].style.overflow = "hidden";  // Deshabilitar barra scroll
    } else {
        enableScroll();
        document.getElementById('login-account').style.setProperty('display', 'none', 'important');
        document.getElementsByTagName("html")[0].style.overflow = "auto";  // Habilitar barra scroll
        if(document.getElementById('login-form').style.display == "none"){
            document.getElementById('login-form').style.setProperty('display', 'block', 'important');
            document.getElementById('create-account-form').style.setProperty('display', 'none', 'important');
            document.getElementById('name-create-account').value = "";
            document.getElementById('surname-create-account').value = "";
            document.getElementById('email-create-account').value = "";
            document.getElementById('password-create-account').value = "";
        }else{
            document.getElementById('email-login').value = "";
            document.getElementById('password-login').value = "";
        }
    }
}


// CAMBIAR VISIBILIDAD LOGIN
function changeVisibilityShoppingCart(bool) {
    if (bool) {
        disableScroll();
        document.getElementById('shopping-cart').style.setProperty('display', 'flex', 'important');
        document.getElementsByTagName("html")[0].style.overflow = "hidden";  // Deshabilitar barra scroll
    } else {
        enableScroll();
        document.getElementById('shopping-cart').style.setProperty('display', 'none', 'important');
        document.getElementsByTagName("html")[0].style.overflow = "auto";  // Habilitar barra scroll
    }
}



/* DESHABILITAR Y HABILITAR SCROLL */
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

function disableScroll() {
    window.addEventListener('DOMMouseScroll', preventDefault, false);
    window.addEventListener(wheelEvent, preventDefault, wheelOpt);
    window.addEventListener('touchmove', preventDefault, wheelOpt);
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

function enableScroll() {
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
    window.removeEventListener('touchmove', preventDefault, wheelOpt);
    window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}

/* FIN DESHABILITAR Y HABILITAR SCROLL */




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
    if (document.getElementById("openCreateAccount") != null) {
        document.getElementById("openCreateAccount").addEventListener("click", function () {
            document.getElementById('login-form').style.setProperty('display', 'none', 'important');
            document.getElementById('create-account-form').style.setProperty('display', 'block', 'important');
            document.getElementById('email-login').value = "";
            document.getElementById('password-login').value = "";
        }, false);
    }

    // Cerrar crear cuenta
    if (document.getElementById("closeCreateAccount") != null) {
        document.getElementById("closeCreateAccount").addEventListener("click", function () {
            document.getElementById('create-account-form').style.setProperty('display', 'none', 'important');
            document.getElementById('login-form').style.setProperty('display', 'block', 'important');
            document.getElementById('nombre').value = "";
            document.getElementById('apellidos').value = "";
            document.getElementById('email').value = "";
            document.getElementById('password').value = "";
        }, false);
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
        if (document.getElementById('login-form').style.display == "none") {
            document.getElementById('login-form').style.setProperty('display', 'block', 'important');
            document.getElementById('create-account-form').style.setProperty('display', 'none', 'important');
            document.getElementById('nombre').value = "";
            document.getElementById('apellidos').value = "";
            document.getElementById('email').value = "";
            document.getElementById('password').value = "";
        } else {
            document.getElementById('email-login').value = "";
            document.getElementById('password-login').value = "";
        }
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



/* PRODUCTO */
function changeQuantity(quantity,id) {
    document.getElementById("quantity").innerHTML = quantity;
    document.getElementById("product-buy").href = "agregar-carrito.php?id="+id+"&cant="+quantity;
}

/* CREAR PRODUCTOS */
function changeVisibilityPriceOffer() {
    var valor = document.getElementById("oferta").value;
    if (valor == "Si") {
        document.getElementById("precio_oferta-content").style.setProperty('display', 'block', 'important');
    } else {
        document.getElementById("precio_oferta").value = "0.00";
        document.getElementById("precio_oferta-content").style.setProperty('display', 'none', 'important');
    }
}
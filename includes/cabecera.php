<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tu Laptop</title>
        <link rel='icon' type='image/x-icon' href='favicon.ico' />

        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

        <!-- Mis estilos -->
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
        <script type="text/javascript" src="./assets/js/index.js"></script>
    </head>
    <body>
        <div id="content">
            <!-- CABECERA -->
            <header id="header" class="container">
                <nav class="navbar navbar-light bg-white row mx-auto">
                    <a class="navbar-brand p-0" href="index.php">
                        <img src="assets/img/logo.webp" height="40" alt="Logo" loading="lazy">
                    </a>
                    <div>
                        <form class="form-inline d-inline" action="buscar.php" method="POST">
                            <input id="text-search" class="form-control rounded-0" placeholder="Buscar productos..." type="text" name="busqueda" required/>
                            <input id="button-search" class="btn rounded-0" type="submit" value=""/>
                        </form>
                        <button id="account" class="nav-link d-inline align-middle border-0 bg-transparent" type="button" onmouseover="changeIconHover('account')" onmouseout="changeIconNormal('account')" onclick="changeVisibilityLogin(true)">
                            <img id="imgAccount" src="./assets/img/accountNormal.svg"/>
                            <?php if (isset($_SESSION['usuario'])): ?>
                                <span><?= $_SESSION['usuario']['nombre']; ?></span>
                            <?php else: ?>
                                <span>Mi cuenta</span>
                            <?php endif; ?>
                        </button>
                        <a id="shop" class="nav-link d-inline align-middle" href="carrito.php" onmouseover="changeIconHover('shop')" onmouseout="changeIconNormal('shop')" onclick="changeVisibilityShoppingCart(true)">
                            <img id="imgShop" src="./assets/img/shopNormal.svg"/>
                            <?php
                            $precio_total = 0.00;
                            foreach ($_SESSION['carrito'] as $indice) :
                                $producto = conseguirProducto($db, $indice['id_producto']);
                                if ($producto['precio_oferta'] == "0.00"):
                                    $precio_total += ($producto['precio'] * $indice['unidades']);
                                else:
                                    $precio_total += ($producto['precio_oferta'] * $indice['unidades']);
                                endif;
                            endforeach;
                            ?>
                            <span><strong>USD <?= $precio_total ?></strong></span>
                        </a>
                    </div>
                </nav>
            </header>
            <hr class="m-0"/>

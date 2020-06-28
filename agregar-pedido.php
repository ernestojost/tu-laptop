<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php

if (isset($_POST) && isset($_SESSION['carrito'])) {

    $errores = array();

    if ($_POST['department'] == "" || $_POST['address'] == "") {
        $errores['vacio'] = "Hay campos vacíos";
    }

    if (count($errores) == 0) {
        /* Recorrer los productos del carrito y agregar pedidos a la base de datos */
        foreach ($_SESSION['carrito'] as $indice) {
            $producto_actual = conseguirProducto($db, $indice['id_producto']);
            if ($producto_actual['precio_oferta'] == "0.00"):
                $precio_total = $producto_actual['precio'] * $indice['unidades'];
            else:
                $precio_total = $producto_actual['precio_oferta'] * $indice['unidades'];
            endif;
            agregarPedido($db, $_SESSION['usuario']['id'], $indice['id_producto'], $indice['unidades'], $_POST['department'], $_POST['address'], $precio_total);
        }
        
        // Vaciar el carrito
        require_once 'vaciar-carrito.php';
        
        header('Location: index.php');
        
    } else {
        
        $_SESSION["errores_address"] = $errores;
        header('Location: agregar-direccion.php');
        
    }
}
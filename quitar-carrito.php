<?php

if (isset($_GET)) {

    // Conexión a la base de datos
    require_once 'includes/conexion.php';


    if (isset($_GET['id'])) {
        if (isset($_SESSION['carrito'])) {
            
            // Buscar el producto en el carrito y borrarlo
            foreach ($_SESSION['carrito'] as $indice => $elemento) {
                if ($elemento['id_producto'] == $_GET['id']) {
                    unset($_SESSION['carrito'][$indice]);
                }
            }
            
            
        }
    }
}

header("Location: carrito.php");
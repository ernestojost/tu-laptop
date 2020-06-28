<?php

if (isset($_GET)) {

    // Conexión a la base de datos
    require_once 'includes/conexion.php';

    // Array de errores
    $errores = array();

    // Recorger el id por GET
    $id = isset($_GET['id']) ? mysqli_real_escape_string($db, $_GET['id']) : false;


    if (!isset($_SESSION['usuario'])) {

        $errores['comprar'] = "Debe ingresar con un usuario";
    }
    
    if (count($errores) == 0) {

        if (isset($_SESSION['carrito'])) {
            // Si ya tiene ese producto, le agrega la cantidad que se le pasa
            $counter = 0;
            foreach ($_SESSION['carrito'] as $indice => $elemento) {
                if ($elemento['id_producto'] == $_GET['id']) {
                    $_SESSION['carrito'][$indice]['unidades'] += $_GET['cant'];
                    $counter++;
                }
            }
        }

        // Si el carrito estaba vacio o no estaba el producto en el carrito
        if (!isset($counter) || $counter == 0) {

            // Añadir al carrito
            $_SESSION['carrito'][] = array(
                "id_producto" => $_GET['id'],
                "unidades" => $_GET['cant']
            );
            
        }

        header('Location: carrito.php');
    } else {

        $_SESSION["errores_comprar"] = $errores;
        header('Location: producto.php?id=' . $_GET['id']);
    }
}



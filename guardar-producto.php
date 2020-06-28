<?php

if (isset($_POST)) {

    require_once 'includes/conexion.php';

    $categoria = isset($_POST['categoria']) ? (int) $_POST['categoria'] : false;
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
    $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
    $oferta = isset($_POST['oferta']) ? mysqli_real_escape_string($db, $_POST['oferta']) : false;
    $precio_oferta = isset($_POST['precio_oferta']) ? $_POST['precio_oferta'] : false;
    $imagen = isset($_POST['imagen']) ? mysqli_real_escape_string($db, $_POST['imagen']) : false;
    $destacado = isset($_POST['destacado']) ? mysqli_real_escape_string($db, $_POST['destacado']) : false;


    // Validación
    $errores = array();

    if (empty($categoria) || !is_numeric($categoria)) {
        $errores['categoria'] = 'La categoría no es válida';
    }

    if (empty($nombre)) {
        $errores['nombre'] = 'El nombre no es válido';
    }

    if (empty($descripcion)) {
        $errores['descripcion'] = 'La descripción no es válida';
    }

    if (empty($precio) || !is_numeric($precio)) {
        $errores['precio'] = 'El precio no es válido';
    }

    if (empty($stock) || !is_numeric($stock)) {
        $errores['stock'] = 'El stock no es válido';
    }

    if ($oferta == "Si") {
        if (empty($precio_oferta) || !is_numeric($precio_oferta) || ($precio_oferta <= 0) || ($precio_oferta >= $precio)) {
            $errores['precio_oferta'] = 'El precio de oferta no es válido';
        }
    }

    if (empty($imagen)) {
        $errores['imagen'] = 'La imagen no es válida';
    }



    if (count($errores) == 0) {

        $precio = sprintf("%.2f", $precio);
        $precio_oferta = sprintf("%.2f", $precio_oferta);

        $sql = "INSERT INTO productos VALUES(null, $categoria, '$nombre', '$descripcion', '$precio', '$stock', '$precio_oferta', '$imagen', '$destacado');";

        $guardar = mysqli_query($db, $sql);

        header("Location: index.php");
    } else {

        $_SESSION["errores_producto"] = $errores;

        $_SESSION['errores']['general'] = "Fallo al crear el producto!!";
        header("Location: crear-productos.php");
    }
}


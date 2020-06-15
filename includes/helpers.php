<?php

function mostrarError($errores, $campo) {
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . '</div>';
    }

    return $alerta;
}

function borrarErrores() {
    $borrado = false;

    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        $borrado = true;
    }

    return $borrado;
}

function conseguirCategorias($conexion) {
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = $categorias;
    }

    return $resultado;
}

function conseguirCategoria($conexion, $id) {
    $sql = "SELECT * FROM categorias WHERE id = $id;";
    $categorias = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = mysqli_fetch_assoc($categorias);
    }

    return $resultado;
}

function conseguirProducto($conexion, $id) {
    $sql = "SELECT p.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ', u.apellidos) AS usuario ". 
            "FROM productos p " .
            "INNER JOIN categorias c ON p.categoria_id = c.id " .
            "WHERE p.id = $id;";
    $producto = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($producto && mysqli_num_rows($producto) >= 1) {
        $resultado = mysqli_fetch_assoc($producto);
    }

    return $resultado;
}

function conseguirProductos($conexion, $limit = null, $categoria = null, $busqueda = null) {
    $sql = "SELECT p.*, c.nombre AS 'categoria' FROM productos p " .
            "INNER JOIN categorias c ON p.categoria_id = c.id ";

    if (!empty($categoria)) {
        $sql .= "WHERE p.categoria_id = $categoria ";
    }

    if (!empty($busqueda)) {
        $sql .= "WHERE p.titulo LIKE '%$busqueda%' ";
    }

    $sql .= "ORDER BY p.id DESC ";

    if ($limit) {
        // $sql = $sql." LIMIT 4";
        $sql .= "LIMIT 4";
    }

    $productos = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($productos && mysqli_num_rows($productos) >= 1) {
        $resultado = $productos;
    }

    return $resultado;
}
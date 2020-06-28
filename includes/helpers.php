<?php

function mostrarError($errores, $campo) {
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alert alert-danger'>" . $errores[$campo] . '</div>';
    }

    return $alerta;
}

function borrarErrores() {
    $borrado = false;

    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['errores_producto'])) {
        $_SESSION['errores_producto'] = null;
        $borrado = true;
    }
    
    if (isset($_SESSION['errores_categoria'])) {
        $_SESSION['errores_categoria'] = null;
        $borrado = true;
    }
    
    if (isset($_SESSION['errores_comprar'])) {
        $_SESSION['errores_comprar'] = null;
        $borrado = true;
    }
    
    if (isset($_SESSION['errores_address'])) {
        $_SESSION['errores_address'] = null;
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
    $sql = "SELECT p.*, c.nombre AS 'categoria' ". 
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
        $sql .= "WHERE p.nombre LIKE '%$busqueda%' ";
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

function conseguirPedidosUsuario($conexion, $usuario_id) {
    $sql = "SELECT * FROM pedidos WHERE usuario_id = $usuario_id ORDER BY id DESC;";

    $productos = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($productos && mysqli_num_rows($productos) >= 1) {
        $resultado = $productos;
    }

    return $resultado;
}
/*
function conseguirProductosPedido($conexion, $pedido_id) {
    $sql = "SELECT p.* FROM productos p " .
             "INNER JOIN lineas_pedidos lp ON p.id = lp.id AND lp.pedido_id = $pedido_id;";

    $productos = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($productos && mysqli_num_rows($productos) >= 1) {
        $resultado = $productos;
    }

    return $resultado;
}*/

function conseguirIdUltimoPedido($conexion, $usuario_id){
    $sql = "SELECT MAX(p.id) AS 'id' FROM pedidos p WHERE p.usuario_id = $usuario_id;";
    
    $id = mysqli_query($conexion, $sql);
    
    return mysqli_fetch_assoc($id);
}

function agregarPedido($conexion, $usuario_id, $producto_id, $unidades, $departamento, $direccion, $coste) {

    $sql1 = "INSERT INTO pedidos VALUES(null, $usuario_id, '$departamento', '$direccion', '$coste', 'pendiente', CURRENT_DATE(), CURRENT_TIME());";
    
    mysqli_query($conexion, $sql1);
    
    $pedido_id = (conseguirIdUltimoPedido($conexion, $usuario_id))['id'];
    
    $sql2 = "INSERT INTO lineas_pedidos VALUES(null, $pedido_id, $producto_id, '$unidades');";
    
    mysqli_query($conexion, $sql2);
}
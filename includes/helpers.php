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
    
    if (isset($_SESSION['errores_guardar_pedido'])) {
        $_SESSION['errores_guardar_pedido'] = null;
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

function conseguirProducto($conexion, $producto_id) {
    $sql = "SELECT p.*, c.nombre AS 'categoria' ". 
            "FROM productos p " .
            "INNER JOIN categorias c ON p.categoria_id = c.id " .
            "WHERE p.id = $producto_id;";
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

    $sql1 = "INSERT INTO pedidos VALUES(null, $usuario_id, '$departamento', '$direccion', '$coste', 'pending', CURRENT_DATE(), CURRENT_TIME());";
    
    mysqli_query($conexion, $sql1);
    
    $pedido_id = (conseguirIdUltimoPedido($conexion, $usuario_id))['id'];
    
    $sql2 = "INSERT INTO lineas_pedidos VALUES(null, $pedido_id, $producto_id, '$unidades');";
    
    mysqli_query($conexion, $sql2);
}

function conseguirTodosPedidos($conexion) {
    
    $sql = "SELECT * FROM pedidos ORDER BY id DESC;";

    $pedidos = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($pedidos && mysqli_num_rows($pedidos) >= 1) {
        $resultado = $pedidos;
    }

    return $resultado;
    
}

function conseguirProductoDesdeIdPedido($conexion, $pedido_id) {
    $sql = "SELECT pr.*, lp.unidades AS 'unidades' FROM productos pr " . 
        "INNER JOIN lineas_pedidos lp ON lp.pedido_id = $pedido_id AND pr.id = lp.producto_id " .
        "INNER JOIN pedidos pe ON pe.id = $pedido_id;";
   
    $producto = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($producto && mysqli_num_rows($producto) >= 1) {
        $resultado = mysqli_fetch_assoc($producto);
    }

    return $resultado;
}

function cambiarEstadoPedido($conexion, $pedido_id, $estado){
    $sql = "UPDATE pedidos SET estado = '$estado' WHERE id = $pedido_id;";
    
    mysqli_query($conexion, $sql);
}

function quitarUnidadesDelStock($conexion, $stock, $producto_id){
    $sql = "UPDATE productos SET stock = $stock WHERE id = $producto_id;";
    
    mysqli_query($conexion, $sql);
}

function conseguirPedidoDesdeId($conexion, $pedido_id){
    $sql = "SELECT * FROM pedidos WHERE id = $pedido_id";
    
    $pedido = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($pedido && mysqli_num_rows($pedido) >= 1) {
        $resultado = mysqli_fetch_assoc($pedido);
    }

    return $resultado;
}
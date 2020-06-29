<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php

if (isset($_POST)) {

    $errores = array();

    /* Recorrer los productos de los pedidos, cambiarles el estado */
    foreach ($_POST['pedido_id'] as $pedido) {
        
        $producto_actual = conseguirProductoDesdeIdPedido($db, $pedido);
        $pedido_actual = conseguirPedidoDesdeId($db, $pedido);
   
        if (($pedido_actual['estado'] == "pending") && ($_POST['estado'][$pedido] != "pending")) {
            /* Si no hay stock de un producto, no cambia el estado y muestra un error */
            if ($producto_actual['stock'] < $_POST['unidades'][$pedido]) {
                if (!isset($errores['stock'])){
                    $errores['stock'] = "No hay tanto stock del pedido: $pedido";
                } else {
                    $errores['stock'] .= ", $pedido";
                }
            } else {
                cambiarEstadoPedido($db, $pedido, $_POST['estado'][$pedido]);
                quitarUnidadesDelStock($db, ($producto_actual['stock'] - $_POST['unidades'][$pedido]), $producto_actual['id']);
            }
        } else {
            cambiarEstadoPedido($db, $pedido, $_POST['estado'][$pedido]);
        }
        
    }

    if (count($errores) != 0) {
        $_SESSION['errores_guardar_pedido'] = $errores;
    } else {
        $_SESSION['completado'] = "Cambios guardados con éxito";
    }

    header('Location: carrito.php');
}
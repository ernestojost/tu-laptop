<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/menu.php'; ?>

<!-- CONTENIDO CENTRAL -->
<div id="principal-content" class="bg-light pb-5 pt-5">
    <?php if ($_SESSION['usuario']['rol'] != "admin"): // Si es usuario ?>
        <div id="carrito" class="container mx-auto">
            <h1 id="carrito-title">CARRITO</h1>
            <hr/>
            <?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
                <div class="table-responsive bg-white">
                    <table class="table">
                        <tr id="title-table">
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Unidades</th>
                            <th>Eliminar</th>
                        </tr>
                        <?php
                        $precio_total = 0;
                        foreach ($_SESSION['carrito'] as $indice) :
                            $producto_actual = conseguirProducto($db, $indice['id_producto']);
                            if ($producto_actual['precio_oferta'] == "0.00"):
                                $precio_total += ($producto_actual['precio'] * $indice['unidades']);
                            else:
                                $precio_total += ($producto_actual['precio_oferta'] * $indice['unidades']);
                            endif;
                            ?>

                            <tr>
                                <td>
                                    <?php if ($producto_actual['imagen'] != null): ?>
                                        <img src="<?= $producto_actual['imagen'] ?>" class="img_carrito" />
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="producto.php?id=<?= $producto_actual['id'] ?>"><?= $producto_actual['nombre'] ?></a>
                                </td>
                                <td>
                                    <?php
                                    if ($producto_actual['precio_oferta'] == "0.00"):
                                        echo $producto_actual['precio'];
                                    else:
                                        echo $producto_actual['precio_oferta'];
                                    endif;
                                    ?>
                                </td>
                                <td>
                                    <?= $indice['unidades'] ?>
                                </td>
                                <td>
                                    <a href="quitar-carrito.php?id=<?= $producto_actual['id'] ?>" class="button button-carrito button-red">Quitar producto</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
                <br/>
                <a class="text-white btn btn-danger" href="vaciar-carrito.php">Vaciar carrito</a>
                <div class="total-carrito mt-2">
                    <h4 class="text-center">Precio total: USD <?= $precio_total ?></h4>
                    <div class="d-flex justify-content-center">
                        <a href="agregar-direccion.php" class="btn btn-success">Hacer pedido</a>
                    </div>
                </div>
            <?php else: ?>
                <p>El carrito está vacio, añade algun producto</p>
            <?php endif; ?>
            <h1 id="pedidos-anteriores-title" class="mt-5">PEDIDOS ANTERIORES</h1>
            <hr/>
            <?php
            $pedidos = conseguirPedidosUsuario($db, $_SESSION['usuario']['id']);
            if (!empty($pedidos)):
                ?>
                <div class="table-responsive bg-white">
                    <table class="table">
                        <tr>
                            <th>N° Pedido</th>
                            <th>Coste</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                        </tr>
                        <?php
                        foreach ($pedidos as $pedido):
                            ?>
                            <tr>
                                <td>
                                    <?= $pedido['id'] ?>
                                </td>
                                <td>
                                    <?= $pedido['coste'] ?>
                                </td>
                                <td>
                                    <?= $pedido['fecha'] ?>
                                </td>
                                <td class="text-capitalize">
                                    <?= $pedido['estado'] == "pending" ? 'Pendiente' : ''; ?>
                                    <?= $pedido['estado'] == "preparation" ? 'En preparación' : ''; ?>
                                    <?= $pedido['estado'] == "ready" ? 'Preparado para enviar' : ''; ?>
                                    <?= $pedido['estado'] == "sended" ? 'Enviado' : ''; ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </table>
                </div>

            <?php else: ?>
                <p>Aún no ha realizado ningún pedido</p>
            <?php endif; ?>
        </div>
    <?php else: // Si es administrador ?> 
        <div id="pedidos-clientes" class="container mx-auto">
            <?php if (isset($_SESSION['errores_guardar_pedido'])):
                echo mostrarError($_SESSION['errores_guardar_pedido'], 'stock');
            elseif (isset ($_SESSION['completado'])):?>
                <div class='alert alert-success'><?= $_SESSION['completado'] ?></div>
            <?php endif;
            ?>
            <h1 id="pedidos-clientes-title">PEDIDOS CLIENTES</h1>
            <hr/>
            <?php
            $pedidos = conseguirTodosPedidos($db);
            if (!empty($pedidos)):
                ?>
                <form action="guardar-pedidos.php" method="POST">
                    <div class="table-responsive bg-white">
                        <table class="table">
                            <tr id="title-table">
                                <th>N° Pedido</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Unidades</th>
                                <th>Departamento</th>
                                <th>Dirección</th>
                                <th>Estado</th>
                            </tr>

                            <?php
                            $contador = 1;
                            foreach ($pedidos as $pedido) :
                                $producto_pedido = conseguirProductoDesdeIdPedido($db, $pedido['id']);
                                ?>
                                <tr>
                                    <td>
                                        <?= $pedido['id'] ?>
                                    </td>
                                    <td>
                                        <?php if ($producto_pedido['imagen'] != null): ?>
                                            <img src="<?= $producto_pedido['imagen'] ?>" class="img_carrito" />
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="producto.php?id=<?= $producto_pedido['id'] ?>"><?= $producto_pedido['nombre'] ?></a>
                                    </td>
                                    <td>
                                        <?php
                                        if ($producto_pedido['precio_oferta'] == "0.00"):
                                            echo $producto_pedido['precio'];
                                        else:
                                            echo $producto_pedido['precio_oferta'];
                                        endif;
                                        ?>
                                    </td>
                                    <td>
                                        <input type="hidden" value="<?= $producto_pedido['unidades'] ?>" name="unidades[<?= $pedido['id'] ?>]"/>
                                        <?= $producto_pedido['unidades'] ?>
                                    </td>
                                    <td>
                                        <?= $pedido['departamento'] ?>
                                    </td>
                                    <td>
                                        <?= $pedido['direccion'] ?>
                                    </td>
                                    <td>
                                        <input type="hidden" value="<?= $pedido['id'] ?>" name="pedido_id[<?= $contador ?>]"/>
                                        <select name="estado[<?= $pedido['id'] ?>]">
                                            <option value="pending" <?= $pedido['estado'] == "pending" ? 'selected' : ''; ?>>Pendiente</option>
                                            <option value="preparation" <?= $pedido['estado'] == "preparation" ? 'selected' : ''; ?>>En preparación</option>
                                            <option value="ready" <?= $pedido['estado'] == "ready" ? 'selected' : ''; ?>>Preparado para enviar</option>
                                            <option value="sended" <?= $pedido['estado'] == "sended" ? 'selected' : ''; ?>>Enviado</option>
                                        </select>
                                    </td>
                                </tr>

                            <?php $contador++;
                            endforeach; ?>
                        </table>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <input class="btn btn-success" type="submit" value="Guardar" />
                    </div>
                </form>
            <?php else: ?>
                <p>No hay ningún pedido</p>
            <?php endif; ?>
        </div>
    <?php borrarErrores();
    endif; ?>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>


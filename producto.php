<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
$producto_actual = conseguirProducto($db, $_GET['id']);

if (!isset($producto_actual['id'])) {
    header("Location: index.php");
}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/menu.php'; ?>

<!-- CONTENIDO CENTRAL -->
<div id="principal-content" class="bg-light pb-5 pt-5">
    <div id="product" class="container mx-auto">
        <div class="d-flex">
            <img id="product-img" class="border" src="<?= $producto_actual['imagen'] ?>" alt="<?= $producto_actual['nombre'] ?>"/>
            <div>
                <h1 id="product-name" class="text-dark mb-2"><?= $producto_actual['nombre'] ?></h1>
                <?php
                if ($producto_actual['precio_oferta'] != "0.00"):
                    ?>
                    <div id="product-price" class="d-flex">
                        <h3 class="normal-product-price float-left m-0">USD <?= $producto_actual['precio_oferta'] ?></h3>
                        <p class="old-product-price text-muted float-left ml-4 mb-0"><s>USD <?= $producto_actual['precio'] ?></s></p>
                    </div>
                <?php else:
                    ?>
                    <h3 class="normal-product-price float-left">USD <?= $producto_actual['precio'] ?></h3>
                <?php
                endif;
                ?>
                <div class="clearfix mb-4"></div>
                <div id="shop-buttons" class="d-flex">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle bg-white border rounded-0 float-left mr-3 py-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p class="float-left m-0 mr-1 text-dark">Cant.:</p>
                            <p id="quantity" class="float-left m-0 text-dark mr-2">1</p>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                            $contadorStock = 1;
                            while (($contadorStock <= $producto_actual['stock']) && ($contadorStock <= 10)):
                                ?>
                                <a class="dropdown-item" onclick="changeQuantity(<?= $contadorStock ?>,<?= $producto_actual['id'] ?>)"><?= $contadorStock ?></a>
                                <?php
                                $contadorStock++;
                            endwhile;
                            ?>
                        </div>
                    </div>
                    <a id="product-buy" class="float-left font-weight-bold px-5 py-3 text-decoration-none" href="agregar-carrito.php?id=<?= $producto_actual['id'] ?>&cant=1"><span class="font-family-websymbols mr-2">,</span>COMPRAR</a>
                </div>
                <br>
                <?php echo isset($_SESSION['errores_comprar']) ? mostrarError($_SESSION['errores_comprar'], 'comprar') : ''; ?>
            </div>
        </div>
        <div id="featured" class="mt-5">
            <h3 class="text-ali">CARACTERÍSTICAS</h3>
            <p class="text-dark"><?= $producto_actual['descripcion'] ?></p>
        </div>
    </div>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>
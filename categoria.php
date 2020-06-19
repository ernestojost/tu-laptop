<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
$categoria_actual = conseguirCategoria($db, $_GET['id']);

if (!isset($categoria_actual['id'])) {
    header("Location: index.php");
}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/menu.php'; ?>

<!-- CONTENIDO CENTRAL -->
<div id="principal-content" class="bg-light pb-5 pt-5">
    <div id="category" class="container mx-auto p-2">
        <h1 id="category-name" class="text-uppercase"><?= $categoria_actual['nombre'] ?></h1>
        <div class="d-flex">
            <?php
            $productos = conseguirProductos($db);
            while ($producto = mysqli_fetch_assoc($productos)):
                if (($_GET['id'] == $producto['categoria_id']) && ($producto['stock'] != 0)):
                    ?>
                    <a class="w-20 text-decoration-none bg-white border my-2" href="producto.php?id=<?=$producto['id']?>" type="button">
                        <div class="d-flex p-0 mx-auto">
                            <img class="align-self-center d-block mh-100 mw-100 mx-auto" src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                        </div>
                        <p class="name-product text-center mx-auto text-dark"><?= $producto['nombre'] ?></p>
                        <div class="prices">
                            <?php
                            if ($producto['precio_oferta'] != "0.00"):
                                ?>
                                <p class="normal-price">USD <?= $producto['precio_oferta'] ?></p>
                                <p class="old-price text-muted"><s>USD <?= $producto['precio'] ?></s></p>
                            <?php else:
                                ?>
                                <p class="normal-price">USD <?= $producto['precio'] ?></p>
                            <?php
                            endif;
                            ?>
                        </div>
                    </a>
                    <?php
                endif;
            endwhile;
            ?>
        </div>
    </div>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>

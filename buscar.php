<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
if (!isset($_POST['busqueda'])) {
    header("Location: index.php");
}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/menu.php'; ?>

<!-- CONTENIDO CENTRAL -->
<div id="principal-content" class="bg-light pb-5 pt-5">
    <div id="search" class="container mx-auto">
        <h1 id="search-name" class="text-uppercase">RESULTADOS DE LA BUSQUEDA "<?= $_POST['busqueda'] ?>"</h1>
        <hr>
        <div class="d-flex">
            <?php
            $productos = conseguirProductos($db, null, null, $_POST['busqueda']);
            if (!empty($productos) && mysqli_num_rows($productos) >= 1):
                while ($producto = mysqli_fetch_assoc($productos)):
                    if ($producto['stock'] != 0):
                        ?>
                        <a class="w-20 text-decoration-none bg-white border my-2" href="producto.php?id=<?= $producto['id'] ?>" type="button">
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
            else:
                ?>
                <div>No hay productos para esta busqueda</div>
            <?php
            endif;
            ?>
        </div>
    </div>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>


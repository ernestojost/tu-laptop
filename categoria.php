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
<div id="principal-content" class="bg-light pb-5">

    <h1>Productos de <?= $categoria_actual['name'] ?></h1>

    <?php
    $entradas = conseguirProductos($db, null, $_GET['id']);

    if (!empty($productos) && mysqli_num_rows($productos) >= 1):
        while ($producto = mysqli_fetch_assoc($productos)):
            ?>

            <article>
                <a href="producto.php?id=<?= $producto['id'] ?>">
                    <h2><?= $producto['name'] ?></h2>
                    <span><?= $categoria_actual . ' | ' . $producto['date'] ?></span>
                    <p>
                        <?= substr($producto['description'], 0, 180) . "..." ?>
                    </p>
                </a>
            </article>


            <?php
        endwhile;
    else:
        ?>
        <div>No hay productos en esta categoría</div>
    <?php endif; ?>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>

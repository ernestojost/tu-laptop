<?php require_once 'includes/redireccion.php'; ?>
<?php
if ($_SESSION['usuario']['rol'] != "admin") {
    header("Location: index.php");
}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/menu.php'; ?>

<!-- CONTENIDO CENTRAL -->
<div id="principal-content" class="bg-light pb-5 pt-5">
    <div id="crear-productos" class="container mx-auto p-2">
        <h1 id="crear-productos-title">CREAR PRODUCTOS</h1>
        <hr/>
        <form class="d-flex flex-column container mx-auto" action="guardar-producto.php" method="POST">

            <label class="font-weight-bold" for="categoria">Categoría</label>
            <select class="mb-1" name="categoria" required>
                <?php
                $categorias = conseguirCategorias($db);
                if (!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                        ?>
                        <option value="<?= $categoria['id'] ?>">
                            <?= $categoria['nombre'] ?>
                        </option>
                        <?php
                    endwhile;
                endif;
                ?>
            </select>
            <span class="mb-1"></span>

            <label class="font-weight-bold" for="nombre">Nombre:</label>
            <input class="mb-1 p-1" type="text" name="nombre" required/>
            <?php echo isset($_SESSION['errores_producto']) ? mostrarError($_SESSION['errores_producto'], 'nombre') : ''; ?>
            <span class="mb-1"></span>

            <label class="font-weight-bold" for="descripcion">Descripción:</label>
            <textarea class="mb-1 p-1" name="descripcion" required></textarea>
            <?php echo isset($_SESSION['errores_producto']) ? mostrarError($_SESSION['errores_producto'], 'descripcion') : ''; ?>
            <span class="mb-1"></span>

            <label class="font-weight-bold" for="precio">Precio:</label>
            <input class="mb-1 p-1" name="precio" placeholder="Ejemplo: 1900.00" required/>
            <?php echo isset($_SESSION['errores_producto']) ? mostrarError($_SESSION['errores_producto'], 'precio') : ''; ?>
            <span class="mb-1"></span>

            <label class="font-weight-bold" for="stock">Stock:</label>
            <input class="mb-1 p-1" type="number" name="stock" required/>
            <?php echo isset($_SESSION['errores_producto']) ? mostrarError($_SESSION['errores_producto'], 'stock') : ''; ?>
            <span class="mb-1"></span>

            <label class="font-weight-bold" for="oferta">Oferta</label>
            <select id="oferta" name="oferta" onchange="changeVisibilityPriceOffer()">
                <option>Si</option>
                <option selected>No</option>
            </select>
            <span class="mb-1"></span>

            <div id="precio_oferta-content" class="mt-2 d-none">
                <label class="font-weight-bold" for="precio_oferta">Precio oferta:</label>
                <input class="mb-1 p-1" id="precio_oferta" name="precio_oferta" value="0.00"/>
                <?php echo isset($_SESSION['errores_producto']) ? mostrarError($_SESSION['errores_producto'], 'precio_oferta') : ''; ?>
            </div>
            <span class="mb-1"></span>
            
            <label class="font-weight-bold" for="imagen">Imagen(URL)</label>
            <input class="mb-1 p-1" name="imagen" required/>
            <?php echo isset($_SESSION['errores_producto']) ? mostrarError($_SESSION['errores_producto'], 'imagen') : ''; ?>
            <span class="mb-1"></span>

            <label class="font-weight-bold" for="destacado">Destacado</label>
            <select id="destacado" name="destacado">
                <option>si</option>
                <option selected>no</option>
            </select>
            <span class="mb-3"></span>
            
            <?php if (isset($_SESSION['errores']['general'])): ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['errores']['general'] ?>
                </div>
            <?php endif; ?>

            <input id="crear-productos-aceptar" class="py-2 font-weight-bold" type="submit" value="GUARDAR" />
        </form>
        <?php borrarErrores(); ?>
    </div>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>
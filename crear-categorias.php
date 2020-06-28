<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/menu.php'; ?>

<!-- CONTENIDO CENTRAL -->
<div id="principal-content" class="bg-light pb-5 pt-5">
    <div id="crear-categorias" class="container mx-auto p-2">
        <h1 id="crear-categorias-title">CREAR CATEGORIAS</h1>
        <hr/>
        <form class="d-flex flex-column container mx-auto" action="guardar-categoria.php" method="POST">

            <label class="font-weight-bold" for="nombre">Nombre de la categoría:</label>
            <input class="mb-1 p-1" type="text" name="nombre" required/>
            <?php echo isset($_SESSION['errores_categoria']) ? mostrarError($_SESSION['errores_categoria'], 'nombre') : ''; ?>
            <span class="mb-3"></span>
            
            <input id="crear-categorias-aceptar" class="py-2 font-weight-bold" type="submit" value="GUARDAR" />

        </form>
        <?php borrarErrores(); ?>
    </div>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>
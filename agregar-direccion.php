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
    <div id="address" class="container mx-auto">
        <h1 id="address-title">DIRECCION</h1>
        <hr/>
        <form id="address-form" class="d-flex flex-column container mx-auto" action="agregar-pedido.php" method="POST">
            <div class="form-group">
                <label class="font-weight-bold" for="department">Departamento</label>
                <input id="addres-department" type="text" name="department" class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="address">Direccion</label>
                <input id="address-address" type="text" name="address" class="form-control">
            </div>
            <?php if (isset($_SESSION['errores_address'])):
                echo mostrarError($_SESSION['errores_address'], 'vacio'); 
            endif; ?>
            <input id="address-enter" type="submit" class="btn mt-4 w-100 rounded-0 text-white text-uppercase font-size-13 p-2 font-weight-bold shadow-none" value="Enviar"/>
        </form>
        <?php borrarErrores(); ?>
    </div>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>


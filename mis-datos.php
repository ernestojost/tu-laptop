<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/menu.php'; ?>

<!-- CONTENIDO CENTRAL -->
<div id="principal-content" class="bg-light pb-5 pt-5">
    <div id="mis-datos" class="container mx-auto p-2">
        <h1 id="mis-datos-title">MIS DATOS</h1>
        <hr/>	
        <?php if (isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general'] ?>
            </div>
        <?php endif; ?>
        <form action="actualizar-usuario.php" method="POST"> 
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos']; ?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

            <input type="submit" name="submit" value="Actualizar" />
        </form>
        <?php borrarErrores(); ?>   
    </div>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>

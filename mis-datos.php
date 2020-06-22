<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/menu.php'; ?>

<!-- CONTENIDO CENTRAL -->
<div id="principal-content" class="bg-light pb-5 pt-5">
    <div id="mis-datos" class="container mx-auto p-2">
        <h1 id="mis-datos-title">MIS DATOS</h1>
        <hr/>	
        <form class="d-flex flex-column container mx-auto" action="actualizar-usuario.php" method="POST"> 
            <label class="font-weight-bold" for="nombre">Nombre</label>
            <input class="mb-1 p-1" type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
            <span class="mb-1"></span>

            <label class="font-weight-bold" for="apellidos">Apellidos</label>
            <input class="mb-1 p-1" type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos']; ?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
            <span class="mb-1"></span>

            <label class="font-weight-bold" for="email">Email</label>
            <input class="mb-1 p-1" type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
            <span class="mb-1"></span>

            <label class="font-weight-bold" for="rol">Rol(solo para pruebas)</label>
            <select id="rol" class="form-control" name="rol">
                <?php if($_SESSION['usuario']['rol'] == "user"): ?>
                <option selected>User</option>
                <option>Admin</option>
                <?php else: ?>
                <option>User</option>
                <option selected>Admin</option>
                <?php endif; ?>
            </select>
            <span class="mb-3"></span>

            <?php if (isset($_SESSION['completado'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['completado'] ?>
                </div>
            <?php elseif (isset($_SESSION['errores']['general'])): ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['errores']['general'] ?>
                </div>
            <?php endif; ?>

            <input id="mis-datos-actualizar" class="py-2 font-weight-bold" type="submit" name="submit" value="ACTUALIZAR" />
        </form>
        <?php borrarErrores(); ?>   
    </div>
</div> <!--fin contenido central-->

<?php require_once 'includes/pie.php'; ?>

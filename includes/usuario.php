<!-- USUARIO -->


<?php if (isset($_SESSION['error_login'])): ?>
    <div id="login-account" class="position-absolute w-100 h-100">
    <?php else: ?>
        <div id="login-account" class="position-absolute w-100 h-100 d-none">
        <?php endif; ?>
        <div id="login-account-content" class="bg-white">
            <button id="login-account-close" class="btn font-family-websymbols font-size-13 float-right text-dark" onclick="changeVisibilityLogin(false)">'</button>
            <?php if (!isset($_SESSION['usuario'])): ?>
                <form id="login-form" action="login.php" method="POST">
                    <div class="form-group">
                        <label class="font-weight-bold" for="email-login">Correo electrónico</label>
                        <input id="email-login" type="email" name="email-login" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="password-login">Contraseña</label>
                        <input id="password-login" type="password" name="password-login" class="form-control">
                    </div>
                    <?php if (isset($_SESSION['error_login'])): ?>
                        <div id="login-error" class="alert alert-danger font-size-13 d-block" role="alert"><?= $_SESSION['error_login']; ?></div>
                    <?php endif; ?>
                    <input id="login-enter" type="submit" class="btn mt-4 w-100 rounded-0 text-white text-uppercase font-size-13 p-2 font-weight-bold shadow-none" value="Ingresar"/>
                    <p class="mt-3">
                        No soy usuario registrado y quiero <a id="openCreateAccount" class="cursor-pointer">crear una cuenta</a>.
                    </p>
                </form>
                <form id="create-account-form" class="d-none" action="registro.php" method="POST">
                    <div class="form-group">
                        <label class="font-weight-bold" for="nombre">Nombre</label>
                        <input id="nombre" type="text" class="form-control" name="nombre">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="apellidos">Apellido</label>
                        <input id="apellidos" type="text" class="form-control" name="apellidos">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="email">Correo electrónico</label>
                        <input id="email" type="email" class="form-control" aria-describedby="emailHelp" name="email">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="password">Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password">
                        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
                    </div>
                    <p>
                        La contraseña debe contener como mínimo 8 caracteres de largo.
                    </p>
                    <div id="create-account-error" class="alert alert-danger font-size-13 d-none" role="alert"></div>
                    <input id="create-account" type="submit" name="submit" class="btn mt-4 w-100 rounded-0 text-white text-uppercase font-size-13 p-2 font-weight-bold shadow-none" value="Crear cuenta">
                    <p class="mt-3">
                        Si ya tienes una cuenta <a id="closeCreateAccount" class="cursor-pointer">ingresa aquí</a>.
                    </p>
                </form>
                <?php borrarErrores();
            else: ?>
                <h3><?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos']; ?></h3>
                <!--<a href="crear-entradas.php" class="boton boton-verde">Crear entradas</a>
                <a href="crear-categoria.php" class="boton">Crear categoria</a>-->
                <a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
                <a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
            <?php endif; ?>
        </div>
    </div>
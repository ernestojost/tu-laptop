<!-- USUARIO -->
<div id="login-account" class="position-absolute w-100 h-100 d-none">
    <div id="login-account-content" class="bg-white">
        <button id="login-account-close" class="btn font-family-websymbols font-size-13 float-right text-dark" onclick="changeVisibilityLogin(false)">'</button>
        <form id="login-form">
            <div class="form-group">
                <label class="font-weight-bold" for="email-login">Correo electrónico</label>
                <input type="email" class="form-control" id="email-login" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="password-login">Contraseña</label>
                <input type="password" class="form-control" id="password-login">
            </div>
            <div id="login-error" class="alert alert-danger font-size-13 d-none" role="alert"></div>
            <button id="login-enter" type="submit" class="btn mt-4 w-100 rounded-0 text-white text-uppercase font-size-13 p-2 font-weight-bold shadow-none">Ingresar</button>
            <p class="mt-3">
                No soy usuario registrado y quiero <a id="openCreateAccount" class="cursor-pointer">crear una cuenta</a>.
            </p>
        </form>
        <form id="create-account-form" class="d-none">
            <div class="form-group">
                <label class="font-weight-bold" for="name-create-account">Nombre</label>
                <input type="text" class="form-control" id="name-create-account">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="surname-create-account">Apellido</label>
                <input type="text" class="form-control" id="surname-create-account">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="email-create-account">Correo electrónico</label>
                <input type="email" class="form-control" id="email-create-account" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="password-create-account">Contraseña</label>
                <input type="password" class="form-control" id="password-create-account">
            </div>
            <p>
                La contraseña debe contener como mínimo 8 caracteres de largo.
            </p>
            <div id="create-account-error" class="alert alert-danger font-size-13 d-none" role="alert"></div>
            <button id="create-account" type="submit" class="btn mt-4 w-100 rounded-0 text-white text-uppercase font-size-13 p-2 font-weight-bold shadow-none">Crear cuenta</button>
            <p class="mt-3">
                Si ya tienes una cuenta <a id="closeCreateAccount" class="cursor-pointer">ingresa aquí</a>.
            </p>
        </form>
    </div>
</div>

<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
    Iniciar Sesión
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <div class="login-container d-flex justify-content-center align-items-center">
        <div class="login-content d-flex">
            <!-- Logo e información de Honestidad -->
            <div class="login-left text-center">
                <img src="images/logo_gob.png" alt="Logo Honestidad" class="logo-gob mb-3">
                <h5 class="login-text-honestidad">HONESTIDAD</h5>
                <p class="login-subtext-honestidad">SECRETARÍA DE HONESTIDAD, TRANSPARENCIA Y FUNCIÓN PÚBLICA</p>
            </div>
            <!-- Formulario de inicio de sesión -->
            <div class="login-right align-items center">
                <div class="logo-container">
                    <img src="images/logo_sihas.png" alt="Logo" class="logo-sihas">
                    <h4 class="login-sihas-text">SIHAS</h4>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="email" class="credenciales-login">Correo electrónico</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="email" class="form-control no-outline no-outline:focus" id="email" placeholder="email@example.com">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="credenciales-login">Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control no-outline no-outline:focus" id="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

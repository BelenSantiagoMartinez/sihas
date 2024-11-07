<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
    Registrar Administrador
<?= $this->endSection() ?>
    
<?= $this->section('content') ?>

    <div class="d-flex justify-content-center align-items-center">
        <div class="regadmin-content p-4 shadow rounded bg-white">
            <div class="logo-container">
                <img src="images/logo_sihas.png" alt="Logo" class="logo-sihas">
                <h4 class="login-sihas-text">SIHAS</h4>
            </div>
            <h5 class="text-center" style="margin-left:20px; opacity: 0.9; font-family:Montserrat-Regular;">Registrar Administrador</h5>
            </br>
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre (s)</label>
                    <input type="text" class="form-control" id="nombre" required>
                </div>
                <div class="col-md-4">
                    <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellidoPaterno" required>
                </div>
                <div class="col-md-4">
                    <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellidoMaterno" required>
                </div>
                <div class="col-md-4">
                    <label for="genero" class="form-label">Género</label>
                    <select class="form-select" id="genero" required>
                        <option selected disabled value="">Seleccionar</option>
                        <option>Masculino</option>
                        <option>Femenino</option>
                        <option>Otro</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNacimiento" required>
                </div>
                <div class="col-md-4">
                    <label for="lugarNacimiento" class="form-label">Lugar de Nacimiento</label>
                    <input type="text" class="form-control" id="lugarNacimiento" required>
                </div>
                <div class="col-md-4">
                    <label for="curp" class="form-label">CURP</label>
                    <input type="text" class="form-control" id="curp" required>
                </div>
                <div class="col-md-8">
                    <label for="correo" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" required>
                    <p style="font-style:italic; opacity:0.6; font-family:Montserrat-Regular; font-size:14px;">Extensiones: @oaxaca.gob.mx, @gmail.com, @hotmail.com, @outlook.com</p>
                </div>
                <div class="button-container">
                    <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
                    <button type="button" class="btn btn-danger btn-cancelar">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

<?= $this->endSection() ?>
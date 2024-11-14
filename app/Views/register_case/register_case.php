<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
    Registrar Caso
<?= $this->endSection() ?>  

<?= $this->section('content') ?>
    <?= $this->include('navbar/navbar') ?>
    <div class="container mt-4" id="registroCaso">
    <!-- Opciones de reporte sin incidentes y selección de bimestre -->
    <div class="row mb-4">
        <div class="col-md-6">
            <label>¿Desea reportar este bimestre sin registro de incidentes?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input verde" type="radio" name="reporte_incidentes" id="reporteSi" value="Si">
                <label class="form-check-label" for="reporteSi">Sí</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input rojo" type="radio" name="reporte_incidentes" id="reporteNo" value="No">
                <label class="form-check-label" for="reporteNo">No</label>
            </div>
        </div>
        <div class="col-md-6">
            <label for="bimestre">Seleccione el bimestre</label>
            <select class="form-select" id="bimestre" name="bimestre">
                <option selected>Bimestre</option>
                <!-- Opciones de bimestre -->
                <option value="1">Bimestre 1</option>
                <option value="2">Bimestre 2</option>
                <option value="3">Bimestre 3</option>
                <option value="4">Bimestre 4</option>
                <option value="5">Bimestre 5</option>
                <option value="6">Bimestre 6</option>
            </select>
        </div>
    </div>

    <!-- Título: Datos de la persona denunciante -->
    <h6 class="section-titledenuncia">Datos de la persona denunciante</h6>
    <div class="row g-3">
        <!-- Campos de información de la persona denunciante -->
        <div class="col-md-3">
            <label for="nombre">Nombre(s)</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre(s)" name="nombre">
        </div>
        <div class="col-md-3">
            <label for="apellidoPaterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellidoPaterno" placeholder="Apellido Paterno" name="apellido_paterno">
        </div>
        <div class="col-md-3">
            <label for="apellidoMaterno">Apellido Materno</label>
            <input type="text" class="form-control" id="apellidoMaterno" placeholder="Apellido Materno" name="apellido_materno">
        </div>
        <div class="col-md-3">
            <label for="genero">Género</label>
            <select class="form-select" id="genero" name="genero">
                <option selected>Género</option>
                <!-- Opciones de género -->
            </select>
        </div>
        <div class="col-md-3">
            <label for="correo">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" placeholder="Correo electrónico" name="correo_electronico">
        </div>
        <div class="col-md-3">
            <label for="fechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" name="fecha_nacimiento">
        </div>
        <div class="col-md-3">
            <label for="lugarNacimiento">Lugar de Nacimiento</label>
            <input type="text" class="form-control" id="lugarNacimiento" placeholder="Lugar de Nacimiento" name="lugar_nacimiento">
        </div>
        <div class="col-md-3">
            <label for="curp">CURP</label>
            <input type="text" class="form-control" id="curp" placeholder="CURP" name="curp">
        </div>
        <div class="col-md-3">
            <label for="grupoEtnico">Grupo étnico</label>
            <input type="text" class="form-control" id="grupoEtnico" placeholder="Grupo étnico" name="grupo_etnico">
        </div>
        <div class="col-md-3">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" placeholder="Edad" name="edad">
        </div>
        <div class="col-md-3">
            <label for="telefono">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" name="telefono">
        </div>
    </div>

    <!-- Pregunta: ¿Conoce a la persona denunciada? -->
    <div class="mt-3">
        <label>¿Conoce a la persona denunciada?</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input verde" type="radio" name="conoce_denunciado" id="conoceSi" value="Si">
            <label class="form-check-label" for="conoceSi">Sí</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input rojo" type="radio" name="conoce_denunciado" id="conoceNo" value="No">
            <label class="form-check-label" for="conoceNo">No</label>
        </div>
    </div>
    <!-- Título: Datos de la denuncia -->
    <h6 class="section-title mt-4">Datos de la denuncia</h6>
    <div class="row g-3">
        <div class="col-md-3">
            <label for="efectosViolencia">Efectos de violencia</label>
            <select class="form-select" id="efectosViolencia" name="efectos_violencia">
                <option selected>Efectos de violencia</option>
                <!-- Opciones -->
            </select>
        </div>
        <div class="col-md-3">
            <label for="motivosViolencia">Motivos de violencia</label>
            <select class="form-select" id="motivosViolencia" name="motivos_violencia">
                <option selected>Motivos de violencia</option>
                <!-- Opciones -->
            </select>
        </div>
        <div class="col-md-3">
            <label for="fechaHechos">Fecha de los hechos</label>
            <input type="date" class="form-control" id="fechaHechos" name="fecha_hechos">
        </div>
        <div class="col-md-3">
            <label for="autoridadConocimiento">Autoridad con conocimiento</label>
            <input type="text" class="form-control" id="autoridadConocimiento" placeholder="Autoridad con conocimiento" name="autoridad">
        </div>
        <div class="col-md-3">
            <label for="lugarHechos">Lugar de los hechos</label>
            <input type="text" class="form-control" id="lugarHechos" placeholder="Lugar de los hechos" name="lugar">
        </div>
        <div class="col-md-5">
            <label for="descripcionHechos">Descripción de los hechos</label>
            <textarea class="form-control" id="descripcionHechos" placeholder="Descripción de los hechos" rows="1" name="descripcion_hechos"></textarea>
        </div>
        <div class="col-md-4">
            <label for="observaciones">Observaciones</label>
            <textarea class="form-control" id="observaciones" placeholder="Observaciones" rows="" name="observaciones"></textarea>
        </div>
    </div>

    <!-- Botones de acción -->
    <div class="d-flex justify-content-end mt-4">
        <button type="submit" class="btn btn-primary me-2">Enviar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
</div>
<?= $this->endSection() ?>
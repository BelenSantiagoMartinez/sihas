<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
    Registrar Caso
<?= $this->endSection() ?>  

<?= $this->section('content') ?>
    <?= $this->include('navbar/navbar') ?>

    <!-- Título del formulario -->
    <h5 class="mt-3">¿Desea reportar este bimestre sin registro de incidentes?</h5>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="incidente" id="incidenteSi" value="Si">
        <label class="form-check-label" for="incidenteSi">Sí</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="incidente" id="incidenteNo" value="No">
        <label class="form-check-label" for="incidenteNo">No</label>
    </div>

    <!-- Formulario principal -->
    <form class="mt-4">
        <!-- Selección de bimestre -->
        <div class="mb-3">
            <label for="bimestre" class="form-label">Seleccione el bimestre</label>
            <select id="bimestre" class="form-select">
                <option selected>Bimestre</option>
                <!-- Opciones de bimestres -->
            </select>
        </div>

        <!-- Datos de la persona denunciante -->
        <h6 class="mt-4">Datos de la persona denunciante</h6>
        <div class="row g-3">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Nombre(s)" name="nombre">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_paterno">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Apellido Materno" name="apellido_materno">
            </div>
            <!-- Más campos para la persona denunciante -->
        </div>

        <!-- Pregunta sobre conocimiento del denunciado -->
        <div class="mt-3">
            <label>¿Conoce a la persona denunciada?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="conoce_denunciado" id="conoceSi" value="Si">
                <label class="form-check-label" for="conoceSi">Sí</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="conoce_denunciado" id="conoceNo" value="No">
                <label class="form-check-label" for="conoceNo">No</label>
            </div>
        </div>

        <!-- Datos de la denuncia -->
        <h6 class="mt-4">Datos de la denuncia</h6>
        <div class="row g-3">
            <div class="col-md-4">
                <select class="form-select" name="efectos_violencia">
                    <option selected>Efectos de violencia</option>
                    <!-- Opciones de efectos -->
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" name="motivos_violencia">
                    <option selected>Motivos de violencia</option>
                    <!-- Opciones de motivos -->
                </select>
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="Fecha de los hechos" name="fecha_hechos">
            </div>
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Descripción de los hechos" rows="2" name="descripcion_hechos"></textarea>
            </div>
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Observaciones" rows="2" name="observaciones"></textarea>
            </div>
        </div>

        <!-- Botones de acción -->
        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary me-2">Enviar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>

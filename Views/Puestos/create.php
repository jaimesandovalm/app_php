<?php include("../../Layout/header.php"); ?>

<div class="card">
    <div class="card-header">
        Puestos
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nombrepuesto" class="form-label">Nombre del Puesto</label>
                <input type="text" class="form-control" name="nombrepuesto" id="nombrepuesto" aria-describedby="helpId"
                    placeholder="">
            </div>

            <a name="btnagregar" id="btnagregar" class="btn btn-success" href="#" role="button">Agregar Registro</a>
            <a name="btncancelar" id="btncancelar" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>

<?php include("../../Layout/footer.php"); ?>
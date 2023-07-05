<?php include("../../Layout/header.php"); ?>

<div class="card">
    <div class="card-header">
        Datos del Empleado
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="primernombre" class="form-label">Primer Nombre</label>
                <input type="text" class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId"
                    placeholder="">
                <small id="helpId" class="form-text text-muted">Escribe tu Primer Nombre</small>
            </div>
        </form>
    </div>

</div>

<?php include("../../Layout/footer.php"); ?>
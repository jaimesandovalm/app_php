<?php include("../../Layout/header.php"); ?>
<br>
<div class="card">
    <div class="card-header">
        Datos del Empleado
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="primernombre" class="form-label">Primer Nombre</label>
                        <input type="text" class="form-control" name="primernombre" id="primernombre"
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="segundonombre" class="form-label">Segundo Nombre</label>
                        <input type="text" class="form-control" name="segundonombre" id="segundonombre"
                            aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="apellidopaterno" class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" name="apellidopaterno" id="apellidopaterno"
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="apellidomaterno" class="form-label">Apellido Materno</label>
                        <input type="text" class="form-control" name="apellidomaterno" id="apellidomaterno"
                            aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="foto" class="form-label">Foto:</label>
                        <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId"
                            placeholder="">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="cv" class="form-label">CV(PDF):</label>
                        <input type="file" class="form-control" name="cv" id="cv" aria-describedby="helpId"
                            placeholder="">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="idpuesto" class="form-label">Puesto</label>
                        <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
                            <option selected>Select one</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="fechaingreso" class="form-label">Fecha de Ingreso</label>
                        <input type="date" class="form-control" name="fechaingreso" id="fechaingreso"
                            aria-describedby="helpId" placeholder="">
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary">Agregar Registro</button>
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
        </form>
    </div>

</div>

<?php include("../../Layout/footer.php"); ?>
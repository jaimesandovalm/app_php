<?php include("../../Layout/header.php"); ?>
<br>
<div class="card">
    <div class="card-header">
        Crear Usuario
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nombreusuario" class="form-label">Nombre del Usuario</label>
                <input type="text" class="form-control" name="nombreusuario" id="nombreusuario"
                    aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId"
                    placeholder="">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                    placeholder="">
            </div>

            <a name="btnagregar" id="btnagregar" class="btn btn-primary" href="#" role="button">Agregar Registro</a>
            <a name="btncancelar" id="btncancelar" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
        </form>
    </div>

</div>

<?php include("../../Layout/footer.php"); ?>
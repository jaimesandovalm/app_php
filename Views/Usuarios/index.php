<?php include("../../Layout/header.php"); ?>

<div class="card">
    <div class="card-header">
        <a name="btncreate" id="btncreate" class="btn btn-primary" href="create.php" role="button">Agregar Usuario</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                        <td><a name="btneditar" id="btneditar" class="btn btn-info" href="edit.php"
                                role="button">Editar</a>
                            <a name="btneliminar" id="btneliminar" class="btn btn-danger" href="#"
                                role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php include("../../Layout/footer.php"); ?>
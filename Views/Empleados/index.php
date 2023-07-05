<?php include("../../Layout/header.php"); ?>

<div class="card">
    <div class="card-header">
        Empleados
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Cv</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Jaime Sandoval</td>
                        <td>foto.jpg</td>
                        <td>resumen.pdf</td>
                        <td>Programador Sr.</td>
                        <td>04/07/2023</td>
                        <td>Carta|Editar|Eliminar</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>

<?php include("../../Layout/footer.php"); ?>
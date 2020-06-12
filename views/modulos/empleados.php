<?php
session_start();
if (!$_SESSION['Ingreso']) {
    header('location:index.php?ruta=ingresar');
    exit();
}

?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Puesto</th>
            <th>Salario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

        <?php

        $mostrar = new EmpleadosC;
        $mostrar->mostrarEmpleadosC();

        ?>

    </tbody>
</table>

<?php

$eliminar  = new EmpleadosC;
$eliminar->eliminarEmpleadoC();

?>
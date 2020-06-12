<?php
session_start();
if (!$_SESSION['Ingreso']) {
    header('location:index.php?ruta=ingresar');
    exit();
}

?>
<form method="POST">
    <?php

    $editar = new EmpleadosC;
    $editar->editarEmpleadosC();
    $actualizar = new EmpleadosC;
    $actualizar->actulizarEmpleadosC();

    ?>

</form>
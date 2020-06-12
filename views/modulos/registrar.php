<?php
session_start();
if (!$_SESSION['Ingreso']) {
    header('location:index.php?ruta=ingresar');
    exit();
}

?>
<form method="POST">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="registronombre" />
    </div>
    <div class="form-group">
        <label for="apeliido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="registroapellido" />
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="registroimeail" />
    </div>
    <div class="form-group">
        <label for="puesto">Puesto</label>
        <input type="text" class="form-control" id="pwd" name="registropuesto" />
    </div>
    <div class="form-group">
        <label for="salario">Salario</label>
        <input type="text" class="form-control" id="pwd" name="registrosalario" />
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

$registrar = new EmpleadosC;
$registrar->registrarEmpleadoC();

?>
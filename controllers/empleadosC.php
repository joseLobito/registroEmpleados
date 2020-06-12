<?php
class EmpleadosC
{
    /*****************************
     * registrar empleados
     *******************************/
    public function registrarEmpleadoC()
    {
        if (isset($_POST['registronombre'])) {
            $datos = array(
                "nombre" => $_POST['registronombre'],
                "apellido" => $_POST['registroapellido'],
                "email" => $_POST['registroimeail'],
                "puesto" => $_POST['registropuesto'],
                "salario" => $_POST['registrosalario']
            );
            $tabla = "empleados";
            $respuesta = EmpleadosM::registrarEmpleadosM($datos, $tabla);

            if ($respuesta == 'ok') {
                header('location:index.php?ruta=empleados');
            } else {
                echo 'error';
            }
        }
    }
    /********************************
     * mostrar empleados
     ******************************/
    public function mostrarEmpleadosC()
    {
        $tabla = "empleados";
        $respuesta = EmpleadosM::mostrarEmpleadosM($tabla);


        foreach ($respuesta as $key => $value) {

            echo '<tr>
            <td>' . $value["nombre"] . '</td>
            <td>' . $value["apellido"] . '</td>
            <td>' . $value["email"] . '</td>
            <td>' . $value["puesto"] . '</td>
            <td>' . $value["salario"] . '</td>
            <td>
                <a href="index.php?ruta=editar&id=' . $value["id"] . '">
                <button class="btn btn-danger">Editar</button>
                </a>
                <a href="index.php?ruta=empleados&idB=' . $value["id"] . '">
                <button class="btn btn-danger">Eliminar</button>
                </a>
            </td>';
        }
    }
    public function editarEmpleadosC()
    {
        $datos = $_GET['id'];

        $tabla = 'empleados';

        $respuesta = EmpleadosM::editarEmpleadosM($datos, $tabla);

        echo '<div class="form-group">
        
                <input type="hidden" class="form-control" id="nombre" name="id" value="' . $respuesta["id"] . '"/>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="editarnombre" value="' . $respuesta["nombre"] . '"/>
            </div>
            <div class="form-group">
                <label for="apeliido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="editarapellido" value="' . $respuesta["apellido"] . '"/>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="editaremail" value="' . $respuesta["email"] . '"/>
            </div>
            <div class="form-group">
                <label for="puesto">Puesto</label>
                <input type="text" class="form-control" id="pwd" name="editarpuesto" value="' . $respuesta["puesto"] . '"/>
            </div>
            <div class="form-group">
                <label for="salario">Salario</label>
                <input type="text" class="form-control" id="pwd" name="editarsalario" value="' . $respuesta["salario"] . '"/>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Editar</button>';
    }
    public function actulizarEmpleadosC()
    {

        if (isset($_POST['editarnombre'])) {
            $tabla = "empleados";
            $datos = array(
                "id" => $_POST['id'],
                "nombre" => $_POST['editarnombre'],
                "apellido" => $_POST['editarapellido'],
                "email" => $_POST['editaremail'],
                "puesto" => $_POST['editarpuesto'],
                "salario" => $_POST['editarsalario']
            );
            $respuesta = EmpleadosM::actualizarEmpleadosM($datos, $tabla);

            if ($respuesta == 'ok') {
                header('location:index.php?ruta=empleados');
            } else {
                echo 'error';
            }
        }
    }
    public function eliminarEmpleadoC()
    {
        if (isset($_GET['idB'])) {
            $datos = $_GET['idB'];
            $tabla = 'empleados';
            $respuesta = EmpleadosM::eliminarEmpleadoM($datos, $tabla);
            if ($respuesta == 'ok') {
                header('location:index.php?ruta=empleados');
            } else {
                echo 'error';
            }
        }
    }
}

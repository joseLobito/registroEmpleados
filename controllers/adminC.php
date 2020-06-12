<?php

class AdminC
{
    public function ingresoC()
    {
        if (isset($_POST["emailIngreso"])) {
            $tabla = "administradores";
            $datos = array(
                "usuario" => $_POST["emailIngreso"],
                "clave" => $_POST["pwdIngreso"]
            );
            $respuesta = AdminM::ingresoM($datos, $tabla);
            if ($respuesta["usuario"] == $_POST["emailIngreso"] && $respuesta["clave"] == $_POST["pwdIngreso"]) {
                session_start();
                $_SESSION['Ingreso'] = true;
                header('location:index.php?ruta=empleados');
            } else {
                echo "error";
            }
        }
    }
}

<?php

require_once 'conexionBD.php';

class AdminM extends ConexionBD
{

    static public function ingresoM($datos, $tabla)
    {
        $pdo = ConexionBD::conectarBD()->prepare("SELECT usuario,clave FROM $tabla WHERE usuario=:usuario");
        $pdo->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $pdo->execute();
        return $pdo->fetch();
    }
}

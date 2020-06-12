<?php
require_once 'conexionBD.php';

class EmpleadosM extends ConexionBD
{
    static public function registrarEmpleadosM($datos, $tabla)
    {
        $pdo = ConexionBD::conectarBD()->prepare("INSERT INTO $tabla (nombre,apellido,email,puesto,salario)
         VALUES (:nombre,:apellido,:email,:puesto,:salario)");
        $pdo->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STMT);
        $pdo->bindParam(":apellido", $datos['apellido'], PDO::PARAM_STMT);
        $pdo->bindParam(":email", $datos['email'], PDO::PARAM_STMT);
        $pdo->bindParam(":puesto", $datos['puesto'], PDO::PARAM_STMT);
        $pdo->bindParam(":salario", $datos['salario'], PDO::PARAM_STMT);

        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }
    static public function mostrarEmpleadosM($tabla)
    {
        $pdo = ConexionBD::conectarBD()->prepare("SELECT id, nombre,apellido, email, puesto, salario  FROM $tabla");
        $pdo->execute();

        return $pdo->fetchAll();
    }
    static public function editarEmpleadosM($datos, $tabla)
    {
        $pdo = ConexionBD::conectarBD()->prepare("SELECT id, nombre,apellido, email, puesto, salario 
         FROM $tabla WHERE id = :id");
        $pdo->bindParam(":id", $datos, PDO::PARAM_INT);

        $pdo->execute();
        return $pdo->fetch();
    }
    static public function actualizarEmpleadosM($datos, $tabla)
    {
        $pdo = ConexionBD::conectarBD()->prepare("UPDATE $tabla SET nombre = :nombre,apellido = :apellido,email = :email,
        puesto = :puesto,salario = :salario WHERE id = :id");
        $pdo->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $pdo->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $pdo->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $pdo->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $pdo->bindParam(":puesto", $datos["puesto"], PDO::PARAM_STR);
        $pdo->bindParam(":salario", $datos["salario"], PDO::PARAM_STR);

        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }
    static public function eliminarEmpleadoM($datos, $tabla)
    {
        $pdo = ConexionBD::conectarBD()->prepare("DELETE FROM $tabla WHERE id = :id");
        $pdo->bindParam(":id", $datos, PDO::PARAM_INT);
        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }
}

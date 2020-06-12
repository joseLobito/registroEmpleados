<?php

class Modelo
{

    static public function rutasModelo($rutas)
    {
        if (
            $rutas == 'ingresar' || $rutas == 'registrar' ||
            $rutas == 'empleados' || $rutas == 'salir' ||
            $rutas == 'editar'
        ) {
            $pagina = "views/modulos/" . $rutas . ".php";
        } else if ($rutas == 'index') {
            $pagina = "views/modulos/ingresar.php";
        } else {
            $pagina = "views/modulos/ingresar.php";
        }
        return $pagina;
    }
}

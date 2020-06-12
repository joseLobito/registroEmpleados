<?php

/**************************
 * traer la plantilla
 *************************/
class RutasController
{
    public function plantilla()
    {
        include_once 'views/plantilla.php';
    }
    public function rutas()
    {
        if (isset($_GET['ruta'])) {
            $rutas = $_GET['ruta'];
        } else {
            $rutas = 'index';
        }
        $respuesta = Modelo::rutasModelo($rutas);

        include $respuesta;
    }
}

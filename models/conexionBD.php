<?php

class ConexionBD
{
    public function conectarBD()
    {
        $bd = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
        return $bd;
    }
}

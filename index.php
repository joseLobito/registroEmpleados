<?php

/**************************
 *requerir todos los archivos
 ************************ */

require_once 'controllers/rutasC.php';
require_once 'controllers/adminC.php';
require_once 'controllers/empleadosC.php';

require_once 'models/empleadosM.php';
require_once 'models/adminM.php';
require_once 'models/rutasM.php';

$plantilla = new RutasController;
$plantilla->plantilla();

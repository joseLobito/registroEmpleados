<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title> MVC</title>

    <!--=====================================
	PLUGINS DE CSS
	======================================-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <!--=====================================
	PLUGINS DE JS
	======================================-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled Fontawesome-->
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--=====================================
	LOGOTIPO
	======================================-->

    <div class="container-fluid">
        <h3 class="text-center py-3"></h3>
    </div>

    <!--=====================================
	BOTONERA
	======================================-->

    <div class="container-fluid bg-light">
        <?php
        include_once "modulos/menu.php";
        ?>
    </div>

    <!--=====================================
	CONTENIDO
	======================================-->

    <div class="container-fluid">
        <div class="container py-5">
            <?php
            $rutas = new RutasController;
            $rutas->rutas();
            ?>
        </div>
    </div>
</body>

</html>
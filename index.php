<?php
//Serguridad en la paginacion del Login.

session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/2ef3fe6e41.js" crossorigin="anonymous"></script>
        <script src="js/preview.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/402bbae3b2.js" crossorigin="anonymous"></script>
        <title>Ingreso a Inventario Red de Medios.</title>
        <link rel="stylesheet" type="text/css" href="InicioSesion/style.css">
    </head>

    <body>

        <div class="contenedor">
            <img class="logo" src="InicioSesion/img/logosena.png" alt="Logo de Sena">
            <h1>Inicio Sesion</h1>

          <form action="InicioSesion/validad_usuario.php" method="post">

                <label>Usuario</label>
                <input type="text" required placeholder="Usuario" name="usuarioUsuario">

                <label>Contraseña</label>
                <input type="password" required placeholder="Contraseña" name="usuarioClave">

                <input type="submit"  required value="Ingresar">

                <input type="reset" value="Borrar">
               </form>
            </div>
        </div>
    </body>
</html>
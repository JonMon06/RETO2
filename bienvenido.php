<?php

    session_start();

    if(!isset($_SESSION['usuario'])){

        echo'
            <script>
                alert("Por favor debes iniciar sesión");
            </script> 
        ';
        header("location: index.html");
        session_destroy();
        die();
         

    }

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido</title>
</head>
<body>
    <h1>bienvenido a mi mundo</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>
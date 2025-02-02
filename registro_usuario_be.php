<?php

    include 'conexion_be.php';

    $nombre_usuario = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $seguridad_social = $_POST['seguridad_social'];
    $contrasena = $_POST['contrasena'];
    

    $query = "INSERT INTO usuarios(nombre_usuario, correo, seguridad_social, contrasena)
            VALUES('$nombre_usuario', '$correo', '$seguridad_social', '$contrasena')";

    //verificar que el correo no se repita en la base de datos

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo esta registrado, prueba con otro");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    //verificar que el nombre no se repita en la base de datos

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario' ");
    
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este nombre de usuario esta registrado, prueba con otro");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
     
     
    


    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){

        echo '
            <script> 
                alert ("Usuario almacenado")
                window.location = "../login.php";
            </script>
        ';
    }else{
        
        echo '
            <script> 
                alert ("No es posible.")
                window.location = "../login.php";
            </script>
        ';
    }

    mysqli_close($conexion);


?>
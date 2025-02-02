<?php

    include 'conexiones_li.php';

    $libro_titulo = $_POST['libro_titulo'];
    $libro_autor = $_POST['libro_autor'];
    $libro_isbn = $_POST['libro_isbn'];
   
    

    $query = "INSERT INTO libro(libro_titulo, libro_autor, libro_isbn)
            VALUES('$libro_titulo', '$libro_autor', '$libro_isbn')";

    //verificar que el correo no se repita en la base de datos

    $verificarlibro_titulo = mysqli_query($conexion, "SELECT * FROM libro WHERE libro_titulo='$libro_titulo' ");
    


    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){

        echo '
            <script> 
                alert ("Libro almacenado")
                window.location = "../libros.html";
            </script>
        ';
    }else{
        
        echo '
            <script> 
                alert ("No es posible.")
                window.location = "../libros.html";
            </script>
        ';
    }

    mysqli_close($conexion);


?>
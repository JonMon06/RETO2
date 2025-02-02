<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <nav> <!-- Inicio de la barra de navegación -->
              
        <ul> <!-- Lista de enlaces del menú -->
            <li><a class="active" href="index.html">Inicio</a></li> 
            <li><a href="Catalogo.html">Libros</a></li> 
            <li><a href="servicios.html">Nuestros Servicios</a></li> 
            <li><a href="informacion.html">Sobre Nosotros</a></li> 
            <li><a href="login.html">Iniciar Sesion</a></li> 
			<li><a href="juego.html">Juego</a></li> 

        </ul>
      </nav>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
		</div>
		<div class="login-content">
			<form action="php/login_usuario_be.php" method="post" >
				<img src="img/avatar.svg">
				<h2 class="title">BIENVENIDO</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nombre</h5>
           		   		<input type="text" class="input" name="nombre_usuario">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="contrasena">
            	   </div>
            	</div>
				
				
            	<a href="contrasena.php">Has olvidado la contrasena?</a>
				<br>
                <a href="registrar.php">Crear Cuenta</a>
            	<input type="submit" class="btn" value="Login">
                
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
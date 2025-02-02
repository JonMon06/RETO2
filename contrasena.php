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
            <li><a href="Catalogo.html">Catalogo</a></li> 
            <li><a href="servicios.html">Nuestros Servicios</a></li> 
            <li><a href="informacion.html">Sobre Nosotros</a></li> 
            <li><a href="login.html">Iniciar Sesion</a></li>
			<li><a href="juego.html">Juego</a></li> 
			<li><a href="libros.html">Agregar Libros</a></li> 
        </ul>
      </nav>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="img/avatar.svg">
				<h2 class="title">BIENVENIDO</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nombre de usuario</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Nueva Contrasena</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
                <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <h5>Repite Contrasena</h5>
                         <input type="password" class="input">
                 </div>
              </div>
                
                <a href="registrar.php">Crear Cuenta</a>
                <br>
				
            	<a href="login.php">login</a>
				
               
            	<input type="submit" class="btn" value="Login">
                
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
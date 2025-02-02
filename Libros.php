
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
            <li><a href="juego.html">Juego</a></li> 
            
        </ul>
      </nav>
      
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
		</div>
		<div class="login-content">
			<form action="php/insertar_libros.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Añadir Libros</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
                              
           		   <div class="div">
           		   		<h5>Titulo Libro</h5>
           		   		<input type="text" class="input" name="libro_titulo">
           		   </div>
           		</div>
           	
                <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Autor Libro
                            </h5>
                            <input type="text" class="input" name="libro_autor">
                    </div>
                    
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>ISBN 
                            </h5>
                            <input type="text" class="input" name="libro_isbn">
                    </div>
                    
                </div>
                <input type="submit" class="btn" value="Insertar Libro">
                 
            </div>

        </form>
        
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
    
</body>
</html> 

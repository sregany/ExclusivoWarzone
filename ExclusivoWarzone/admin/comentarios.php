<?php

 include "../database/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../css/estilosweb.css">
    <link rel="stylesheet"  href="../css/comentarios.css">
    <link rel="stylesheet" href="../css/pie.css">
	
</head>
<body>
	<header>
        <div class="header-container">

            <div class="letras">
            <h1>Exclusivo<b>Warzone</b></h1>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="adminacces.php">Inicio</a></li>
                        <li><a href="armasmeta.php">Todas las Armas</a></li>
                        <li><a href="mejoresarmas.php">Mejores Armas</a></li>
                        <li><a href="usuarios.php">Usuarios</a></li>
                        <li><a href="comentarios.php">foro</a></li>
                        <li><a href="../funcionesphp/exit.php">cerrar sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div> 
    </header>

    <div class="container-portada">
        	
        	<h1>Comentarios </h1>
    </div>   
    <div class="container-portada">
    <article> 

	<?php 

	$consulta = mysqli_query($conexion, "SELECT * FROM comentarios ") or die(mysqli_error($conexion));
	while($row =mysqli_fetch_assoc($consulta)){

		echo "<b><h4>". $row['usuario']. "</b></br></br>
		".$row['comentario']."</br></br><br><h4>";
	}

	?>
	</div>
    <div class="container-portada">
	<center>
	<form action="comentarios.php" method="POST" >
	<input type="text" name="usuario"   placeholder="Escribe tu usuario"></br></br>
	<textarea type="text" name="comentario" cols="40" rows="5" placeholder="Escribe aqui tu comentario"></textarea></br></br>
	<input type="submit" name="enviar" value="enviar comentario">
	</form>
	</center>
    </div>
    
    
	<?php

	if(isset($_POST['enviar'])){
		$usuario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['usuario']));
		$comentario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['comentario']));
		if($usuario == '' or $comentario == ''){
			echo "Rellene los campos.";

		}
		else{
			$insertar = mysqli_query($conexion,  "INSERT INTO comentarios(usuario,comentario) VALUES ('".$_POST['usuario']."' ,'".$_POST['comentario']."')");
				
		}
	}

	?>
	
   </article>
    <div class="conta-footer">    

        <footer>
            <div class="logo-footer">
                <img src="../imagen/image1234.jpg" alt="">
            </div>

            <hr>
            <h4>Exclusive Warzone 2022</h4>

        </footer>

    </div>

</body>
</html>
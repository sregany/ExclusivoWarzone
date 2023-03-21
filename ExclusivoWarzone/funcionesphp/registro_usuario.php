<?php

     include "../database/db.php";

    
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
//Crearemos una consulta donde le diremos que inserte en la tabla usuario

    $query = "INSERT INTO usuarios(correo, usuario, contrasena, rol_id ) VALUES ('$correo', '$usuario', '$contrasena', '2')";
// validacion del correo para que un usuario no se pueda registrar con el mismo correo
    $validarCorreo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if(mysqli_num_rows($validarCorreo) > 0 ){
        echo '

            <script>
              alert("Este correo ya está registrado, intente con uno nuevo");
              window.location = "../index.php";
            </script>
        ';
        exit();
    }

// validacion del usuario para que no se pueda registrar con el mismo usuario
    $validarUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if(mysqli_num_rows($validarUsuario) > 0 ){
        echo '

            <script>
               alert("Este usuario ya está registrado, intente con uno nuevo");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }


    


    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){
    	echo '
    	     <script>
    	         alert("Usuario registrado correctamente");
    	         window.location = "../index.php"
    	     </script>
        ';
            

    }else{
    	echo '
    	      <script>
    	         alert("El Usuario no se ha registrado ");
    	         window.location = "index.php"
    	      </script>
    	'; 
    } 

    mysql_close($conexion);


    
?>
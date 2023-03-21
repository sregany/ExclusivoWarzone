<?php

    session_start();
  
    include "../database/db.php";
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // creamos una variable y la conectamos con una consulta en la tabla usuarios donde cojeremos correo  y contraseña
    $usuario_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");
   // crearemos un array y pondremos las variables 
   $filas=mysqli_fetch_array($usuario_login);
   // crearemos un if, y conectaremos con el rol_id de la base de datos el cual nombraremos al usuario 1 admin y lo manaremos con un header a la pagina que le corresponde
   if($filas['rol_id']==1){// admin
  
    header("location:../admin/adminacces.php");
    // seguirmos con un els if y le diremos que si el rol_id es 0 sera el cliente ya que por defecto rellenando 0 al hacer un registro y sera rederigido con un header a la pagina correspondiente
   }else if($filas['rol_id']==2){// cliente
  
    header("location:../user/home.php");

   // agregaremos un alert en caso de quien inicie sesion no indroduzca los datos correctamente que le aparezca un mensaje por patalle y sea rederigido al inicio
   }else{

        echo'
            <script>
                alert("Correo o contraseña incorrectas");
                window.location = "../index.php";
            </script>
            ';
            exit;


     }


 

?>
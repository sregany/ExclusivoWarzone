<?php
  /* Crearemos una funcion para cuando le demos a editar en la tabla usuarios, se mostren los datos actuales, crearemos la sentencia select from usuarios para recojer todos los datos de la tabla, crearmos la variable $sentencia que conectar con la base de datos.
  Con el return recojera la etiqueta value y rellenara los huecos selecionados
  Con la consulta pasaremos los datos por modo get para que se pueda comunicar con la base de datos y ejecute los cambios que le toca .*/
  $consulta=RellenareditUsuarios($_GET['id']);

  function RellenareditUsuarios( $id_us ){
   include "../database/db.php";
   $sentencia="SELECT * FROM usuarios WHERE id='".$id_us."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar usuarios".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['usuario'],
    $fila['correo'],
    $fila['contrasena']
   ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta charset="UTF-8">
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/estilosweb.css">
   
<title>Modificar usuarios</title>

<body>
<div class="todo">
  
  <div id="contenido">
    <div>
      <span> <h1>Modificar Usuarios</h1> </span>
      <br>
    <form action="../funcionesphp/editarFuncion.php" method="POST">


      <label>Id: </label>
      <input name="id"  value="<?php echo $_GET['id']?>"><br><br>
      
      <label>Usuario: </label>
      <input type="text" id="usuario" name="usuario" value="<?php echo $consulta[0] ?>"><br><br>

      <label>correo: </label>
      <input type="text" id= "correo" name="correo" value="<?php echo $consulta[1] ?>"><br><br>

      <label>contraseña: </label>
      <input type="text" id="contrasena" name="contrasena" value="<?php echo $consulta[2] ?>"><br><br><br>
      
      <br>
      <button type="submit">Insertar Cambios</button>
     </form>
    </div>
    
  </div>

</div>


</body>
</html>
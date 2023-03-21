<?php
  /* Crearemos una funcion modicarUsuarios para selecionar los datos de la tabla a trabes de una consulta con la base de datos y pasarlos por metodo post comunicara con la base de datos y se puedan editar de tal manera que cada uno esta enlazado con el que le toca, despues de pulsar el boton insertar cambios se mostrara con un alert el mensaje siguiente  */
  ModificarUsuarios($_POST['id'], $_POST['usuario'], $_POST['correo'],$_POST['contrasena'] );

  function ModificarUsuarios($id_us, $corr, $usua,$contra)
  {
    include "../database/db.php";
    echo $sentencia="UPDATE usuarios SET  usuario='".$usua."', correo='".$corr."' , contrasena='".$contra."' WHERE id='".$id_us."' ";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
  }
?>

<script>
  alert("Usuario Modificado!");
  window.location.href='../admin/usuarios.php';
</script>
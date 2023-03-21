<?php

/*Crearemos una funcion eliminar usuarios para eliminar los datos de la tabla a trabes de una consulta con la base de datos, con el get pasara la informacion para que pueda actuar en la base de datos*/

	EliminarUsuarios($_GET['id']);

	function EliminarUsuarios( $id_us )
	{
		include "../database/db.php";
		$sentencia="DELETE FROM usuarios WHERE id='".$id_us."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script>
	alert("Usuario Eliminado!!");
	window.location.href='../admin/usuarios.php';
</script>
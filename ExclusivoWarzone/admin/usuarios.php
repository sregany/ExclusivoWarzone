<?php

 include "../database/db.php";
    

    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilosweb.css">
   <link rel="stylesheet"  href="../css/usuarios.css">

  

 
</head>
<body>
    <!--MENU-->

    
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
        <table>
         
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>editar</th>
                    <th>eliminar</th>


                </tr>
            </thead> 

        <!--Crearemos una consulta con un select para recojer la informacion de la base de datos de la tabla usuarios y poderla mostrar por pantalla en la pagina-->
           <?php
        $sentecia="SELECT * FROM usuarios";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['id']; echo "</td>";
            echo "<td>"; echo $fila['correo']; echo "</td>";
            echo "<td>"; echo $fila['usuario']; echo "</td>";
            echo "<td>"; echo $fila['contrasena']; echo "</td>";
            echo "<td><a href='../funcionesphp/editarTabla.php?id=".$fila['id']."'> <button type='button'>Modificar</button> </a></td>";
            echo " <td><a href='../funcionesphp/eliminar.php?id=".$fila['id']."'> <button type='button' >Eliminar</button> </a></td>";
          echo "</tr>";
        }
      ?>

        </table>
    <div class="container-footer">    

        <footer>
            <div class="logo-footer">
                <img src="../imagen/image1234.jpg" alt="">
            </div>

            <hr>
            <h4>Exclusive Warzone 2022</h4>

        </footer>

    </div>

    
    </div>





    

</body>
</html>
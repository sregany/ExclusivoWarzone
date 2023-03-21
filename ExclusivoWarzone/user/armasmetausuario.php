<?php

 include "../database/db.php";
    

    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloscliente.css">
    <link rel="stylesheet" href="../css/todasarmas.css">
    <link rel="stylesheet" href="../css/armasmeta.css">
    <link rel="stylesheet" href="../css/pie.css">
    
    
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
                        <li><a href="home.php">Inicio</a></li>
                        <li><a href="armasmetausuario.php">Todas las Armas</a></li>
                        <li><a href="mejoresarmasusuario.php">Mejores Armas</a></li>
                        <li><a href="comentariosusuarios.php">foro</a></li>
                        <li><a href="../funcionesphp/exit.php">cerrar sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div>    

    </header>
        <div class="container"> 

        
        <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 1') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/ppsh.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
        <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 2') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/tipo100.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
        <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 3') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/mp40.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 4') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/welgun.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 5') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/owen.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 6') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/automata.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 7') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/as44.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 8') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/stg44.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 9') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/Volkssturmgenwehr.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 10') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/nz41.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 11') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/swiss.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 12') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/tipo99.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 13') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/treslineas.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 14') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/kar98.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 15') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/ax50.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 16') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/mg42.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 17') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/bren.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 18') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/dp27.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 19') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/typo11.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
          <div>
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 20') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                <h3><?php echo $row['Tipo']?></h3>
                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4>
                <p>Daño Cabeza:<?php echo $row['Daño'] ?></p>
                <p>Daño Cuerpo:<?php echo $row['Dañocuerpo'] ?></p>
                <a href="../armas/stoner.php">Leer más</a>
            </div>
            <?php
              }
            ?>
        </div>
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







       
        







       
    
    </div>


</body>
</html>
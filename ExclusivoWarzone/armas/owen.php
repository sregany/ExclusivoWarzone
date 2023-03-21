<?php

 include "../database/db.php";
    

    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilosweb.css">
    <link rel="stylesheet" href="../css/armas.css">
    
    
</head>
<body>
    
    <div class="container-armas"> 

        
        
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 5') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4></br>
                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                
                <p><b>Bocacha:</b> amplificador de retroceso</br>
                  <b>Cañón:</b> Hockenson de 142 mm rápido</br>
                  <b>Acople:</b> empuñadura delantera Carver</br>
                  <b>Mira:</b> reflector Slate</br>
                  <b>Cargador:</b> tambores de 7,62 mm Gorenko con 72 proyectiles</br>
                  <b>Culata:</b> Gawain H4 plegable</br>
                  <b>Munición:</b> de punta hueca</br>
                  <b>Empuñadura trasera:</b> empuñadura con brea de pino</br>
                  <b>Ventaja 1:</b> Refuerzo</br>
                  <b>Ventaja 2:</b> Totalmente cargado</br></br>
                  A pesar de que siempre tiramos de silenciador para la inmensa mayoría de armas, en este caso vamos a optar por el amplificador de retroceso, que le viene de perlas al Owen junto con el cañón Hockenson. Esta combinación de accesorios les meten un impulso a la cadencia que el subfusil necesita para compensar sus carencias en el apartado de atributos.</br></br>

                  Antes de que se nos olvide: para que no se te vaya de madre la fiesta, asegúrate de asignarle la ventaja de Totalmente cargado. Piensa que con semejante cadencia, te vendrá genial contar con más balas de base.</br></br>

                  Como comprenderás, el segundo campo en el que sufrirás los estragos de esa velocidad de tiro es el del retroceso, pero con los siguientes cuatro accesorios, solucionaremos ese problema directamente. Se trata de las dos empuñaduras, tanto la Carver como la de brea de pino; de la culata Gawain plegable y de los mismos tambores Gorenko que, por otra parte, te permiten reforzar el asunto de la capacidad de munición.</br></br>

                   El siguiente paso es conseguir que el Owen sea más potente, y eso es fácil de conseguir con la munición de punta hueca. Perderás algo de alcance de daño pero vas a disparar de cerca, ¿no? Para cerrar la clase que te recomendamos, colócale una mira limpia y sin penalizaciones como el reflector Slate y ya tendrás todo lo necesario para arrasar en las distancias cortas.</p></br></br>
                
            </div>
            <?php
              }
            ?>
        
       

       
        




    <footer class="footer">

        <p>Contenido Exclusivo Warzone</p>
        
    </footer>


       
    
    </div>

</body>
</html>
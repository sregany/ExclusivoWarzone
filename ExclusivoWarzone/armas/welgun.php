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
    <!--MENU-->

    
    <div class="container-armas"> 

        
        
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 4') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4></br>
                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                
                <p><b>Bocacha:</b> amplificador de retroceso</br>
                   <b>Cañón:</b>   Gawain de 120 mm corto</br>
                   <b>Mira:</b>   reflector monocular</br>
                   <b>Culata:</b> armazón de Gawain</br>
                   <b>Empuñadura:</b>tope de mano para M1941</br>
                   <b>Cargador:</b> de 9mm con 64 proyectiles</br>
                   <b>Tipo de munición:</b>  punta hueca</br>
                   <b>Empuñadura trasera:</b> Empuñadura de tela</br>
                   <b>Competencia:</b> Agarre firme</br>
                   <b>Kit:</b> Totalmente cargado</br></br>
                   <p>Nuestro principal objetivo con esta clase es aumentar su TTK. Por eso empezamos con el amplificador de retroceso, que aumenta la cadencia del arma. Lo siguiente es el cañón Gawain, que sigue trabajando en esa misma línea, pero con una subida aún más considerable. Perderás precisión, daño y velocidad de esprint a disparo, aparte de control de retroceso horizontal. Se trata de penalizaciones livianas y aisladas, así que no preocuparse.</br>

                   En tema de miras, te recomendamos algo con poco aumento. Un reflector monocular tiene solo un 1.35, así que está bien para encuentros cercanos. De culatas la que nos gusta es el paquete de SA 43M. Sí, le hace pupa a la precisión desde la cadera y la movilidad, pero a cambio te llevas un par de tazas de precisión al apuntar y control de retroceso horizontal. En resumen, con esta culata estabilizas tu Welgun que da gusto.</br></br>

                   El tope de mano es un clásico del Armero, porque le da un chute al control de retroceso y la precisión. Ahora no te despistes y quédate con esos cargadores de 64 proyectiles, que los necesitarás hasta la última bala. Vas a perder un poco de movilidad y velocidad al apuntar, claro que el arma pesa, pero lo agradecerás.</br></br>

                   Para terminar con la clase, te animamos a probar la munición de punta hueca, que aumenta el daño que efectúas en las extremidades. Con la empuñadura de tela aumentarás la agilidad del arma a costa de un poco de precisión, pero date cuenta de que sumas velocidad al apuntar, la de transición de carrera a apuntado y la recuperación de estabilidad desde la cadera.</br></br>

                  En lo que respecta a las ventajas, Frenético y Totalmente cargado te ayudarán a regenerar la salud en cuanto realices una baja, y aumentará tu munición de partida, respectivamente.</p></br></br>
                
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
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

        
        
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 8') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4></br>
                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                
                <p><b>Bocacha:</b> silenciador MX</br>
                   <b>Cañón:</b> Anastasia de francotirador</br>
                   <b>Mira:</b> reflector Slate</br>
                   <b>Culata:</b> Empress Broadsword</br>
                   <b>Acople:</b> empuñadura delantera para Carver</br>
                   <b>Cargador:</b> de 6,5 mm Sakura de 45 proyectiles</br>
                   <b>Tipo de munición:</b> alargada</br>
                   <b>Empuñadura trasera:</b> empuñadura de tela</br>
                   <b>Competencia:</b> Prestidigitación</br>
                   <b>Kit:</b> Totalmente cargado</br></br>
                  Es posible que te cueste un poquito de sudor llegar a desbloquear todos los accesorios, pero verás que el trayecto se te convierte en un paseo. Para empezar, la razón para meterle el MX es por el extra de precisión que añade (aparte de la clásica supresión de ruido, claro). Fíjate en que perderás un puntito de velocidad al apuntar, pero con el resto de la configuración, lo compensaremos.</br></br>

                  Para el apartado de los cañones nos gusta ese Anastasia porque aumenta la velocidad de proyectil, el alcance ¡y la precisión! Como la penalización no es más que al disparar desde la cadera, y es un golpe muy liviano, nos parece un intercambio respetable y equilibrado.</br></br>

                  En tema de miras, tenemos un problema, porque el reflector Slate es una de nuestras preferidas para los fusiles de asalto. Podrías colocarle el reflector monocular o alguno con aumentos como el G16 x2,5, claro, pero eso ya depende de tus gustos. Si te ves cómodo o cómoda al apuntar a distancia con uno sin aumentos, lo agradecerás a media y corta distancia.</br></br>

                   Si ves la Empress Broadsword como opción de culata es porque añade un par de puntitos en la precisión y control de retroceso iniciales, aparte de velocidad al apuntar y, ojo, también al estabilizar el arma después de disparar. Perdemos al apuntar desde la cadera y al mantener el disparo, pero si tienes que disparar mucho con un fusil así, mejor busca otra arma.</p></br></br>
                
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
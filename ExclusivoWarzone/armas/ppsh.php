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

        
        
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 1') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4></br>
                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                
                <p><b>Bocacha:</b> Silenciador Mercury</br>
                   <b>Cañón:</b> ZAC 300MM</br>
                   <b>Mira:</b> Reflector Slate</br>
                   <b>Culata:</b> Kovalevskaya Skeletal</br>
                   <b>Empuñadura:</b> Manual M1941</br>
                   <b>Cargador:</b> 8MM Nambu 71 Round Mags</br>
                   <b>Tipo de munición:</b> Alargada</br>
                   <b>Empuñadura trasera:</b> Empuñadura punteada</br>
                   <b>Competencia:</b> Agarre firme</br>
                   <b>Kit:</b> Totalmente cargado</br></br>
                   Todo esto está diseñado para aumentar la munición y la precisión del arma. Los primeros tres accesorios en la lista mantienen tus disparos en el objetivo, lo que permite derrotar enemigos sin tener que preocuparte por el retroceso. El resto refuerzan la precisión del SMG todavía más. Debido al gran tamaño del cargador Nambu y la velocidad de disparo rápida, el PPSH-41 puede volverse bastante difícil de manejar cuando se dispara durante largos períodos de tiempo.</br></br>

                   Afortunadamente, el Agarre firme evita que este SMG suba por la pantalla durante enfrentamientos prolongados. El PPSH-41 también se beneficia enormemente de la velocidad de bala adicional de la munición Alargada, mientras que el kit completamente cargado asegura que tengas suficiente munición para rociar a tus enemigos.</p></br>
                
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
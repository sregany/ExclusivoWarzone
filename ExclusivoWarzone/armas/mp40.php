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

        
        
            <?php foreach ($conexion->query('SELECT * from armas WHERE ArmasID = 3') as $row){ // Crearemos una conexion con la variable conexion de la bd cluego crearemos la consulta con una query y la iteraremos en un each?> 
            <div class="card">

                <h4><?php echo $row['Nombre'] // Con echo mostraremos las variables  ?></h4></br>
                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);?>">
                
                <p><b>Bocacha:</b> Recoil Booster</br>
                   <b>Cañón:</b>  Krausnick de 317 mm 04B</br>
                   <b>Mira:</b>  Reflector Slate</br>
                   <b>Culata:</b> Krausnick 33M Folding</br>
                   <b>Empuñadura:</b>Carver Foregrip</br>
                   <b>Cargador:</b> 9MM 24 Round Fast Mags</br>
                   <b>Tipo de munición:</b> Alargada</br>
                   <b>Empuñadura trasera:</b> Empuñadura punteada</br>
                   <b>Competencia:</b> Agarre firme</br>
                   <b>Kit:</b> Totalmente cargado</br></br>
                   Con 10 categorías para examinar, a menudo puede ser desalentador tratar de averiguar por dónde empezar. Así que vamos a desglosar cada accesorio del MP-40 para ayudarle a entender cómo funciona esta clase, al igual que ya hemos hecho con la STG44 o la PPSH-41.</br></br>

                   Empezando por la parte superior izquierda tenemos el Recoil Booster en la ranura de la bocacha junto con el cañón Krausnick 317MM 04B. Ambos accesorios sirven para un propósito similar al aumentar el control del retroceso y el manejo del arma. Con ellos combinados, tu SMG debería ser brillante en combates a corta y media distancia.</br></br>

                   En cuanto a la mira, esto se reduce a una preferencia personal. Nos hemos decantado por el Slate Reflector como algo sencillo, ya que no hay inconvenientes en esta opción. Si buscas en la lista, ten en cuenta que algunas ópticas tienen efectos negativos..</p></br></br>
                
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
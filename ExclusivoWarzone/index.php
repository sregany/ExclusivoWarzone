
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/container.css">

    
     
</head>
<body>

   <main>

            <div class="container-all">
                <div class="box-behind">
                    <div class="box-behind-login">
                        <h3>¿Ya tienes cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="boton-start-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="box-behind-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para iniciar sesión</p>
                        <button id="boton-register">Regístrarse</button>
                    </div>
                </div>

                <!--Formularios de login y registro-->
                <div class="container-login-register">
                    <!--Loguearse-->
                    <form action="funcionesphp/login_usuario.php" method="POST" class="formulario-login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text"      placeholder="Correo Electronico" name= "correo">
                        <input type="password"  placeholder="Contraseña"         name= "contrasena"> 
                        <button>Entrar</button>
                    </form>

                    <!--Registrarse-->
                    <form action="funcionesphp/registro_usuario.php" method="POST" class="formulario-register">
                        <h2>Regístrarse</h2>
                        <input type="text"     placeholder="Correo Electronico" name="correo">
                        <input type="text"     placeholder="Usuario de Warzone" name="usuario">
                        <input type="password" placeholder="Contraseña"         name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

    </main>


<script src="js/funciones_login_register.js"></script>
   

</body>
</html>
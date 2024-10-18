<!DOCTYPE html>
<html lang="esp">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/x-icon"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Inicio de sesion</title>
        <link rel="stylesheet" href="diseño.css">
    </head>
    <body class="body">
      <div class="centrado">
        <form name="inicio" method="post" action="login.php">
          <div class="cuadro_blanco2">
            <div class="imagen">
                <img src="logo.png" style="height: 12em;">
            </div>
            <div class="texto">Iniciar sesión</div>
            <br>
            <input id="usuario" name="usuario" class="input2" type="text" placeholder="Usuario" required>
            <br>
            <br>
            <input id="contraseña" name="contraseña" class="input2" type="password" placeholder="Contraseña" required maxlength="8">
            <br>
            <br>
            <div class="registrarse">
              <div>¿No tienes una cuenta?</div>
              <a href="agregar_doctores_form.php">Registrarse</a>
            </div>
            <button class="boton_agregar2" style="margin-left: 9.5rem;">Iniciar sesion</button>
          </div>
        </form>
      </div>  
    </body>
</html>
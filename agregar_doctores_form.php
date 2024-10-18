<!DOCTYPE html>
<html lang="esp">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Registrarse</title>
        <link rel="stylesheet" href="diseño.css">
    </head>

    <body class="body">
        <div style="position: absolute; top: 20px; left: 30px;">
            <img src="logo.png" style="height: 12em; justify-content: left; margin-top: -1.5em;">
        </div>
        <br>
        <br>
        <div class="centrado-centrado">
            <form name="registro" method="post" action="agregar_doctores.php">
                <br>
                <div class="cuadro_blanco">
                    <div class="texto">Registrarse</div>
                    <div class="filas">
                        <div class="columnas">
                            <label for="nombre" class="campos">Nombre</label>
                            <input id="nombre" name="nombre" class="input" type="text" placeholder="..." required>
                        </div>
                        <div class="columnas">
                            <label for="apellidos" class="campos">Apellidos</label>
                            <input id="apellidos" name="apellidos" class="input" type="text" placeholder="..." required>
                        </div>
                        <div class="columnas">
                            <label for="email" class="campos">Email</label>
                            <input id="email" name="email" class="input" type="email" placeholder="..." required>
                        </div>
                    </div>
                    <div class="filas">
                        <div class="columnas">
                            <label for="usuario" class="campos">Usuario</label>
                            <input id="usuario" name="usuario" class="input" type="text" placeholder="..." required>
                        </div>
                        <div class="columnas">
                            <label for="contraseña" class="campos">Crear contraseña (hasta 10 caracteres)</label>
                            <input id="contrasenya" name="contrasenya" class="input" type="password" placeholder="..." required maxlength="10">
                        </div>
                        <div class="columnas">
                            <button class="boton_agregar2">Registrarse</button>
                        </div>
                    </div>
                </div>
            </form>    
        </div>

    </body>
</html>
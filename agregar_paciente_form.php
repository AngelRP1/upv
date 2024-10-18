<!DOCTYPE html>
<html lang="esp">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="diseño.css">
        <title>Agregar Paciente</title>

    </head>
    <body class="body">
        <div class="centrado">
            <form name="formulario" method="post" action="agregar_paciente.php">
                <div class="cuadro_blanco">
                    <div class="texto">Agregar paciente</div>
                    <div class="filas">
                        <div class="columnas">
                            <label for="nombre" class="campos">Nombre del paciente</label>
                            <input id="nombre" name="nombre" class="input" required type="text" placeholder="...">
                        </div>
                        <div class="columnas">
                            <label for="apellidos" class="campos">Apellidos</label>
                            <input id="apellidos" name="apellidos" class="input" required type="text" placeholder="...">
                        </div>
                        <div class="columnas">
                            <label for="fecha" class="campos">Fecha de nacimiento</label>
                            <input id="fecha" name="fecha" class="input" required type="date">
                        </div>
                    </div>
                    <div class="filas">
                        <div class="columnas">
                            <label for="alergias" class="campos">Alergias</label>
                            <input id="alergias" name="alergias" class="input" required type="text" placeholder="...">
                        </div>
                        <div class="columnas">
                            <label for="peso" class="campos">Peso (Kg)</label>
                            <input id="peso" name="peso" class="input" required type="number" placeholder="...">
                        </div>
                        <div class="columnas">
                            <label for="sexo" class="campos">Sexo</label>
                            <select name="sexo" class="campos" required>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                                <option value="No Especificar">No Especificar</option>
                            </select>
                        </div>
                    </div>
                    <div class="filas">
                        <div class="columnas">
                            <label for="estatura" class="campos">Estatura (cm)</label>
                            <input id="estatura" name="estatura" class="input" required type="number" placeholder="...">
                        </div>
                        <div class="columnas">
                            <label for="afeccion" class="campos">Afección Crónica</label>
                            <input id="afeccion" name="afeccion" class="input_afeccion" required type="text" placeholder="...">
                        </div>
                        <div class="columnas">
                            <button class="boton_agregar">Agregar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

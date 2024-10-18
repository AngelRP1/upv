<?php
include('conexion.php'); // Conexión a la base de datos

// Verificar si se ha enviado el formulario de actualización
if (isset($_POST['nombre'])) {
    $id_paciente = $_POST['id_paciente'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $sexo = $_POST['sexo'];
    $alergias = $_POST['alergias'];
    $afeccion = $_POST['afeccion'];
    $peso = $_POST['peso'];
    $estatura = $_POST['estatura'];
    $fecha = $_POST['fecha'];

    // Actualizar los datos en la base de datos
    $query = "UPDATE pacientes SET 
              nombre='$nombre', 
              apellidos='$apellidos',
              sexo='$sexo', 
              alergias='$alergias', 
              afeccion_cronica='$afeccion', 
              peso='$peso', 
              estatura='$estatura', 
              fecha_nacimiento='$fecha' 
              WHERE id_paciente='$id_paciente'";

    if ($conection->query($query) === TRUE) {
        // Redirige al CRUD de la lista de pacientes si la actualización fue exitosa
        // header("Location: lista_pacientes_crud.php"); Versión sin alerta
        echo "<script>
                alert('El paciente ha sido modificado con éxito');
                window.location.href = 'lista_pacientes_crud.php';
              </script>";
        exit();
        
    } else {
        echo "Error al actualizar el paciente: " . $conection->error;
    }
}

// Obtener los datos del paciente a editar
if (isset($_GET['id'])) {
    $id_paciente = $_GET['id'];
    $query = "SELECT * FROM pacientes WHERE id_paciente='$id_paciente'";
    $result = $conection->query($query);

    if ($result->num_rows > 0) {
        $paciente = $result->fetch_assoc();
    } else {
        die("Paciente no encontrado.");
    }
}
?>

<!DOCTYPE html>
<html>
<head>    
    <title>Editar Paciente</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="diseño.css">
</head>
<body class="body">
    <div class="centrado">
        <div class="cuadro_blanco3">
        <form method="POST" class="contenedor_popup">
            <input type="hidden" name="id_paciente" value="<?php echo $paciente['id_paciente']; ?>">
            <table>
                <div class="texto">Editar paciente</div>
                <br><br><br><br>
                <div class="filas">
                    <div class="columnas">
                        <label for="nombre" class="campos2">Nombre del paciente</label>
                        <input id="nombre" name="nombre" class="input" type="text" value="<?php echo $paciente['nombre']; ?>" required>
                    </div>
                    <div class="columnas">
                        <label for="apellidos" class="campos2">Apellidos</label>
                        <input id="apellidos" name="apellidos" class="input" type="text" value="<?php echo $paciente['apellidos']; ?>" required>
                    </div>
                </div>
                <div class="filas">
                    <div class="columnas">
                        <label for="alergias" class="campos2">Alergias</label>
                        <input id="alergias" name="alergias" class="input" type="text" value="<?php echo $paciente['alergias']; ?>">
                    </div>
                    <div class="columnas">
                        <label for="fecha" class="campos2">Fecha de nacimiento</label>
                        <input id="fecha" name="fecha" class="input" type="date" value="<?php echo $paciente['fecha_nacimiento']; ?>" required>
                    </div>
                </div>
                <div class="filas">
                    <div class="columnas">
                        <label for="peso" class="campos2">Peso (Kg)</label>
                        <input id="peso" name="peso" class="input" type="number" value="<?php echo $paciente['peso']; ?>" required>
                    </div>
                    <div class="columnas">
                        <label for="sexo" class="campos">Sexo</label>
                        <select name="sexo" class="campos">
                            <option value="Hombre" <?php if($paciente['sexo'] == 'Hombre') echo 'selected'; ?>>Hombre</option>
                            <option value="Mujer" <?php if($paciente['sexo'] == 'Mujer') echo 'selected'; ?>>Mujer</option>
                            <option value="No Especificar" <?php if($paciente['sexo'] == 'No Especificar') echo 'selected'; ?>>No Especificar</option>
                        </select>
                    </div>
                </div>
                <div class="filas">
                    <div class="columnas">
                        <label for="estatura" class="campos2">Estatura (cm)</label>
                        <input id="estatura" name="estatura" class="input" type="number" value="<?php echo $paciente['estatura']; ?>" required>
                    </div>
                    <div class="columnas">
                        <label for="afeccion" class="campos2">Afección Crónica</label>
                        <input id="afeccion" name="afeccion" class="input" type="text" value="<?php echo $paciente['afeccion_cronica']; ?>">
                    </div>
                </div>
                <div class="filas">
                    <div class="columnas">
                        <button class="boton_agregar2" type="button" onclick="window.location.href='lista_pacientes_crud.php'">Cancelar</button>
                    </div>
                    <div class="columnas">
                        <button class="boton_agregar2" type="submit" onClick="return confirm('¿Deseas modificar a este usuario?');">Modificar</button>
                    </div>
                </div>
            </table>
        </form>
        </div>
    </div>
</body>
</html>

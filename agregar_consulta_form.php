<?php
session_start();
include("conexion.php");


if (!isset($_SESSION['id_medico'])) {
    header("Location: index.php");
    exit;
}
$id_medico = $_SESSION['id_medico'];

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


// Consulta para obtener los datos del paciente
$query_paciente = "SELECT * FROM pacientes WHERE id_paciente = ?";
$stmt = $conection->prepare($query_paciente);
$stmt->bind_param("i", $id_paciente);
$stmt->execute();
$result_paciente = $stmt->get_result();

if ($result_paciente->num_rows > 0) {
    $paciente = $result_paciente->fetch_assoc();
} else {
    echo "No se encontraron datos del paciente.";
    exit;
}


$fecha_nacimiento = $paciente['fecha_nacimiento'];
$fecha_actual = new DateTime();
$nacimiento = new DateTime($fecha_nacimiento);
$diferencia = $fecha_actual->diff($nacimiento);
$fecha_formateada = $fecha_actual->format('Y-m-d');

//* Obtener la edad en años
$edad = $diferencia->y;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Mejorado</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            padding: 20px;
        }

        .content {
            width: 95%;
            margin: 0 auto;
        }

        .content_header {
            display: flex;
            justify-content: space-between;
            padding-bottom: 10px;
            border-bottom: 1px solid #000;
        }

        .input_style {
            padding: 0.5em;
            width: 100%;
            border: 1px solid #75beff;
        }

        .input_style:focus {
            outline: none;
            border-color: #7ebef5;
        }

        .data_pac {
            padding: 10px 0;
        }

        .data_pac_flex {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .data_pac_flex_item {
            width: 32%;
        }

        .data_flex {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .data_flex_item {
            width: 42%;
        }

        .data_flex_tratamiento {
            width: 55%;
        }

        textarea {
            resize: none;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }

        .button {
            padding: 10px 20px;
            background-color: transparent;
            color: #5a1a8b;
            border: 1px solid #5a1a8b;
            cursor: pointer;
            width: 7rem;
            text-align: center;
        }

        .button:hover {
            background-color: #5a1a8b;
            color: white;
        }
    </style>
</head>

<body>
    <form class="content" method="POST" action="agregar_consulta.php">
        <input type="hidden" name="id" value="<?php echo $paciente['id_paciente']; ?>">
        <input type="hidden" name="id_medico" value="<?php echo $_SESSION['id_medico']; ?>">


        <div class="content_header">
            <div>Fecha y hora de elaboración: <input type="date" class="input_style" name="date" value="<?php echo $fecha_formateada; ?>" readonly></div>
        </div>

        <div class="data_pac">
            <div class="data_pac_flex">
                <div class="data_pac_flex_item">Nombre: <input type="text" class="input_style" name="nombre" value="<?php echo $paciente['nombre']; ?>" readonly></div>
                <div class="data_pac_flex_item">Clave: <input type="text" class="input_style" name="clave_diag" value="<?php echo $paciente['id_paciente']; ?>" readonly></div>
                <div class="data_pac_flex_item">Número de expediente: <input type="text" class="input_style" name="num_exp" readonly></div>
            </div>

            <div class="data_pac_flex">
                <div class="data_pac_flex_item">
                    Sexo:
                    <select name="sexo" class="input_style">
                        <option value="Hombre" <?php if ($paciente['sexo'] == 'Hombre') echo 'selected'; ?>>Hombre</option>
                        <option value="Mujer" <?php if ($paciente['sexo'] == 'Mujer') echo 'selected'; ?>>Mujer</option>
                        <option value="Mujer" <?php if ($paciente['sexo'] == 'No Especificar') echo 'selected'; ?>>Prefiero no decirlo</option>
                    </select>
                </div>
                <div class="data_pac_flex_item">Edad: <input type="number" class="input_style" name="edad" value="<?php echo $edad; ?>" readonly></div>
                <div class="data_pac_flex_item">Fecha de nacimiento: <input type="date" class="input_style" name="fecha_nacimiento" value="<?php echo $paciente['fecha_nacimiento']; ?>" readonly></div>
            </div>
        </div>

        <div class="data_flex">
            <div class="data_flex_item">
                <div>Temp. <input type="text" class="input_style" name="temp"></div>
                <div>Peso <input type="text" class="input_style" name="peso" value="<?php echo $paciente['peso']; ?>" readonly></div>
                <div>Alergias <input type="text" class="input_style" name="alergias" value="<?php echo $paciente['alergias']; ?>" readonly></div>
                <div>Indicaciones generales: <textarea name="indicaciones" rows="3" class="input_style"></textarea></div>
            </div>

            <div class="data_flex_tratamiento">
                Tratamiento:
                <textarea name="tratamiento" rows="10" class="input_style"></textarea>
            </div>
        </div>

        <div class="actions">
            <a href="lista_pacientes_crud.php"><button type="submit" class="button">Guardar</button></a>
        </div>
        <div class="actions">
            <a href="lista_pacientes_crud.php"><button type="button" class="button" onclick="">Regresar</button></a>
        </div>
        <div class="actions">
            <button type="button" class="button" onclick="window.print()">Imprimir</button>
        </div>
    </form>

</body>

</html>
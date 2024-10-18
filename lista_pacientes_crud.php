<?php
include('conexion.php');

// Consulta para obtener los datos de los pacientes
$query = "SELECT * FROM pacientes";
$result = $conection->query($query);

if (!$result) {
    die("Error en la consulta: " . $conection->error);
}
?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="diseño.css">
    <title>Lista de Pacientes</title>
</head>
<body>
	
        <table>
        <img src="logo.png" style="width: 10em; height: 10em;">
        <br><br><br><br><br><br><br>
        <tr>
            <th colspan="9">
                <div class="texto" style="font-weight: lighter; color: gray;">Lista de Pacientes</div>
                <td><a class="boton_agregar3" href="agregar_paciente_form.php">Agregar</a></td>
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Sexo</th>
            <th>Alergias</th>
            <th>Afecciones</th>
            <th>Peso</th>
            <th>Estatura</th>
            <th>Fecha de nacimiento</th>
            <th>Acción</th>
        </tr>

        <?php
        // Recorremos los resultados de la consulta e imprimimos cada fila
        while ($mostrar = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $mostrar['id_paciente'] . "</td>";
            echo "<td>" . $mostrar['nombre'] . "</td>";
            echo "<td>" . $mostrar['apellidos'] . "</td>";
            echo "<td>" . $mostrar['sexo'] . "</td>";
            echo "<td>" . $mostrar['alergias'] . "</td>";
            echo "<td>" . $mostrar['afeccion_cronica'] . "</td>";
            echo "<td>" . $mostrar['peso'] . "</td>";
            echo "<td>" . $mostrar['estatura'] . "</td>";
            echo "<td>" . $mostrar['fecha_nacimiento'] . "</td>";
            echo "<td style='width:10%'>
                    <a class='boton_agregar3' href='editar_paciente.php?id=" . $mostrar['id_paciente'] . "'>Modificar</a>
                    <br><br>
                    <a class='boton_agregar3' href='eliminar_paciente.php?id=" . $mostrar['id_paciente'] . "' onClick='return confirm(\"¿Deseas eliminar a este usuario?\");'>Eliminar</a>
					 <br><br>
                    <a class='boton_agregar3' href='agregar_consulta_form.php?id=" . $mostrar['id_paciente'] . "'>Consulta</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
    <center>
    <div class="menu">
		<a href="logout.php" class="boton_cerrar_sesion" onClick="return confirm('¿Estás seguro de que deseas cerrar sesión?');">Cerrar sesión</a>
    </div>  
    </center>
    
</body>
</html>

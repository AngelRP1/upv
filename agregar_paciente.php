<?php 

include_once('conexion.php');
include_once ('conexion_pacientes.php');

mysqli_query($conection, "INSERT INTO pacientes(nombre,apellidos,fecha_nacimiento,peso,estatura,afeccion_cronica, alergias, sexo)
VALUES('$nombre_paciente','$apellido_paciente','$fecha_nacimiento_paciente', '$peso_paciente','$estatura_paciente','$afeccion_paciente', '$alergias_paciente', '$sexo_paciente')");

header("Location:lista_pacientes_crud.php");

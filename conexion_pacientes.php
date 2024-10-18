<?php

include_once("conexion.php");

//Declaración de las variables de los pacientes
$nombre_paciente = $_POST['nombre'];
$apellido_paciente = $_POST['apellidos'];
$fecha_nacimiento_paciente = $_POST['fecha'];
$alergias_paciente = $_POST['alergias'];
$peso_paciente = $_POST['peso'];
$estatura_paciente = $_POST['estatura'];
$afeccion_paciente = $_POST['afeccion'];
$sexo_paciente = $_POST['sexo'];
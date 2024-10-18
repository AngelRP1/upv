<?php

include_once ('conexion.php');
include_once ('conexion_medicos.php');


mysqli_query($conection, "INSERT INTO doctores(nombre,apellido,email,usuario,contraseña) VALUES('$nombre_medico','$apellido_medico','$email_medico', '$usuario_medico','$contrasenya_medico')");

header("Location:index.php");
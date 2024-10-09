<?php

$conection = new mysqli("localhost","root","","consultorio_medico");

if($conn->connect_errno) {
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
}


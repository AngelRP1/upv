<?php

$conection = new mysqli("localhost","root","","con_med");

if ($conection->connect_errno) {
    die("Fallo la conexión a la base de datos: " . $conection->connect_error);
}

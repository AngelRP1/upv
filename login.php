<?php
include('conexion.php');

$usuario = $_POST['usuario'];
$contrasenya = $_POST['contraseña'];

$stmt = $conection->prepare("SELECT * FROM doctores WHERE usuario = ? AND contraseña = ?");
$stmt->bind_param("ss", $usuario, $contrasenya);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
    session_start();
    $doctor = $result->fetch_assoc();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['id_medico'] = $doctor['id_medico'];
    header("Location: lista_pacientes_crud.php");
} else {
    header("Location: index.php");
}

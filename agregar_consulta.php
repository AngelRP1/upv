<?php
include_once('conexion.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_paciente = $_POST['id'];
    $id_medico = $_POST['id_medico'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $temp = $_POST['temp'];
    $peso = $_POST['peso'];
    $alergias = $_POST['alergias'];
    $indicaciones = $_POST['indicaciones'];
    $tratamiento = $_POST['tratamiento'];
    $fecha = $_POST['date'];


    $insert_query = "INSERT INTO consultas (id_paciente, id_medico, temperatura, indicaciones_generales, tratamiento, fecha_elaboracion) VALUES 
    ('$id_paciente','$id_medico','$temp','$indicaciones','$tratamiento', '$fecha')";
    $stmt = $conection->prepare($insert_query);

    if ($stmt->execute()) {
        echo "<script>
                alert('La consulta ha sido agregada con éxito');
              </script>";
    } else {
       "<script>
                alert('La consulta no se ha logrado realizar.');
                window.location.href = 'lista_pacientes_crud.php';
              </script>";
    }
}

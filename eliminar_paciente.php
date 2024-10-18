<?php
include 'conexion.php';


if (isset($_GET['id'])) {
    $id_paciente = $_GET['id'];

    
    $sql = "DELETE FROM pacientes WHERE id_paciente = ?";

    if ($stmt = $conection->prepare($sql)) {
        // Vincular el parámetro
        $stmt->bind_param("i", $id_paciente);

        // Ejecutar la declaración
        if ($stmt->execute()) {
            // Redireccionar al listado
            echo "<script>
                    alert('Paciente eliminado exitosamente.');
                    window.location.href = 'lista_pacientes_crud.php';
                  </script>";
        } else {
            //!Error
            echo "<script>
                    alert('Error al eliminar el paciente. Inténtalo de nuevo.');
                    window.location.href = 'lista_pacientes_crud.php';
                  </script>";
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
} else {
    //* Redireccionar si no se recibió el ID del paciente
    echo "<script>
            alert('ID de paciente no válido.');
            window.location.href = 'listado_pacientes.php';
          </script>";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

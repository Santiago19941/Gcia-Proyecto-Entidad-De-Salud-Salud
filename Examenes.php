<?php

include('conexion.php');

if (!empty($_POST["examenes"])) {

    $id=$_SESSION['usuario_id']; 

    // Obtener el ID del paciente (si es necesario)
    // $id_paciente = $_SESSION['usuario_id']; // Reemplazar con el ID correcto

    // Consulta SQL con ordenamiento por fecha descendente para obtener el último medicamento
    $consulta = "SELECT *
                 FROM paciente p
                 JOIN citas c ON p.id = c.id_paciente
                 JOIN examenes ex ON c.id = ex.id_cita
                 JOIN estado_cita e ON c.est_cita = e.id
                 JOIN horario_doctor h ON h.id = c.id_horario
                 JOIN doctores d ON d.id = h.id_doctor
                 JOIN usuarios u ON u.id = d.id_usuario
                 WHERE p.id_usuario = $id
                 AND c.est_cita = 1
                 ORDER BY h.fecha DESC"; // Ordenar por fecha de cita descendente

    $resultado = mysqli_query($conexion, $consulta);

    
    if ($resultado) {
        if (mysqli_num_rows($resultado) > 0) {
            echo "<span class='pac-consultas-t'>Resultados" . "</span><br><br>";
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<span class='pac-consultas-op'>Doctor: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['nombre']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Fecha Cita: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['fecha']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Fecha Examen: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['fecha_examenes']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Hora Examen   : " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['hora_examen']) . "</span><br><br>";
                echo "<span class='pac-consultas-op'>Resultado: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['resultados']) . "</span><br><br>";
                echo "<span class='pac-consultas-op'>Interpretación: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['observaciones']) . "</span><br><br>";
            }
            
        } else {
            echo "No tienes examentes para visualizar<br><br>";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

    
    // Cerrar la conexión
    mysqli_close($conexion);
}

?>

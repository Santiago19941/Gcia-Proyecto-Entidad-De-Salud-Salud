<?php

include('conexion.php');

if (!empty($_POST["citas"])) {

    $id=$_SESSION['usuario_id']; 

    // Obtener el ID del paciente (si es necesario)
    // $id_paciente = $_SESSION['usuario_id']; // Reemplazar con el ID correcto

    // Consulta SQL con ordenamiento por fecha descendente para obtener el último medicamento
    $consulta = "SELECT *
                 FROM paciente p
                 JOIN citas c ON p.id = c.id_paciente
                 JOIN estado_cita e ON c.est_cita = e.id
                 JOIN horario_doctor h ON h.id = c.id_horario
                 JOIN doctores d ON d.id = h.id_doctor
                 JOIN usuarios u ON u.id = d.id_usuario
                 WHERE p.id_usuario = $id
                 AND c.est_cita = 1
                 ORDER BY h.fecha DESC"; // Ordenar por fecha de cita descendente

    $resultado = mysqli_query($conexion, $consulta);

    $consulta1 = "SELECT *
    FROM horario_doctor h
    JOIN doctores d ON d.id = h.id_doctor
    JOIN usuarios u ON u.id = d.id_usuario
    WHERE est_horario = 0
    ORDER BY h.fecha DESC"; // Ordenar por fecha de cita descendente

$resultado1 = mysqli_query($conexion, $consulta1);

    if ($resultado) {
        if (mysqli_num_rows($resultado) > 0) {
            echo "<span class='pac-consultas-t'>Citas Programadas" . "</span><br><br>";
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<span class='pac-consultas-op'>Doctor: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['nombre']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Fecha: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['fecha']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Hora: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['hora']) . "</span><br><br>";
            }
            
        } else {
            echo "No tienes citas programadas<br><br>";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

    if ($resultado1) {
        if (mysqli_num_rows($resultado1) > 0) {
            echo "<span class='pac-consultas-t'>Citas disponibles" . "</span><br><br>";
            while ($fila = mysqli_fetch_assoc($resultado1)) {
                echo "<span class='pac-consultas-op'>Doctor: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['nombre']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Fecha: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['fecha']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Hora: " . "</span>"; 
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['hora']) . "</span><br><br>";
            }
            echo "Comunicate a nuestra linea de Whatsapp 3205xxxxxx para la gestión de tus citas";
        } else {
            echo "En el momento no hay citas disponibles.";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}

?>

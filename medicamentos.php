<?php

include('conexion.php');

if (!empty($_POST["medicamentos"])) {

    $id=$_SESSION['usuario_id']; 

    // Obtener el ID del paciente (si es necesario)
    // $id_paciente = $_SESSION['usuario_id']; // Reemplazar con el ID correcto

    // Consulta SQL con ordenamiento por fecha descendente para obtener el último medicamento
    $consulta = "SELECT u.nombre,m.nom_med, m.observaciones, h.fecha, e.descripcion
                 FROM paciente p
                 JOIN citas c ON p.id = c.id_paciente
                 JOIN horario_doctor h ON h.id=c.id_horario
                 JOIN doctores d ON d.id = h.id_doctor
                 JOIN usuarios u ON u.id = d.id_usuario
                 JOIN medicamentos m ON c.id = m.id_cita
                 JOIN est_medicamento e ON e.id = m.estado_med
                 WHERE p.id_usuario = $id
                 ORDER BY h.fecha DESC"; // Ordenar por fecha de cita descendente

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        if (mysqli_num_rows($resultado) > 0) {
            echo "<span class='pac-consultas-t'>Medicamentos" . "</span><br><br>";
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<span class='pac-consultas-op'>Doctor: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['nombre']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Fecha: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['fecha']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Medicamento: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['nom_med']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Observaciones: "  . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['observaciones']) . "</span><br>";
                echo "<span class='pac-consultas-op'>Estado: " . "</span>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['descripcion']) . "</span><br><br>";
            }
            echo "Por favor comunicarse a nuestra linea de Whatsapp 3205xxxxxx para la gestión de tus medicamentos";
        } else {
            echo "No tienes medicamentos pendientes";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}

?>
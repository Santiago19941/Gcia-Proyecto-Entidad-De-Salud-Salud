<?php

include('conexion.php');

$id=$_SESSION['usuario_id'];


if (!empty($_POST["historia"])) {

    $id=$_SESSION['usuario_id']; 

    // Obtener el ID del paciente (si es necesario)
    // $id_paciente = $_SESSION['usuario_id']; // Reemplazar con el ID correcto

    // Consulta SQL con ordenamiento por fecha descendente para obtener el último medicamento
    $consulta = "SELECT h.fecha,h.descripcion
                 FROM paciente p
                 JOIN historia_clinica h ON p.id = h.id_paciente
                 WHERE p.id_usuario = $id"; 

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        if (mysqli_num_rows($resultado) > 0) {
            echo "<span class='pac-consultas-t'>Historia Clinica" . "</span><br><br>";
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['fecha']) . "</span><br>";
                echo "<span class='pac-consultas'>" . htmlspecialchars($fila['descripcion']) . "</span><br>";
                
            }
        } else {
            echo "No se encontro alguna hisotria clinica para el paciente";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}

?>
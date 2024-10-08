<?php
include('conexion.php');

if (!empty($_POST["iniciar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["contraseña"])) {
        echo '<div class="alert">Existen campos vacíos</div>';
    } else {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        // Consulta preparada para prevenir inyección SQL
        $stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE usuario=? AND contraseña=?");
        mysqli_stmt_bind_param($stmt, "ss", $usuario, $contraseña);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if ($fila = mysqli_fetch_array($resultado)) {
            session_start();
            $_SESSION['usuario_id'] = $fila['id'];// Asignar el ID del usuario
            $_SESSION['nombre'] = $fila['nombre']; 
            $_SESSION['usuario'] = $fila['usuario'];
            
            if ($fila['id_cargo'] == 1) {
                header("location:doctor.php");
            } else {
                header("location:paciente.php");
            }
        } else {
            echo '<div class="alert">Usuario o contraseña incorrectos</div>';
        }

        mysqli_stmt_close($stmt);
    }
}
mysqli_close($conexion);
?>
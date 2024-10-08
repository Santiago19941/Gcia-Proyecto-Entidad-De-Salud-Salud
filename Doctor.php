<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header class="header">

        <div class="menu container">
            <img src="images/sura.png" alt="sura" class="logo">
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="http://localhost/proyecto/index.php">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="http://localhost/proyecto/login.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </div>

        <div class="pac-header-content container">
            <div class="pac-header-txt">
                <h2>Gestiona a un clic</h2>
                <h3>Hola, 
                    <?php
                        session_start();

                        $id=$_SESSION['usuario_id']; //Para continuar mañana
                        $usuario=$_SESSION['usuario']; //Para continuar mañana

                        if (isset($_SESSION['nombre'])) {
                            echo "" . $_SESSION['nombre'] . "<br>" . "<br>";
                        }else {
                            echo "Debes iniciar sesión";
                        }
                   ?>
            
                </h3>
                <p>Realiza fácilmente tus procesos con EPS SURA. <br>
                    ¡Conoce aquí las soluciones virtuales que tenemos especialmente para ti!</p>
                    
                    <div class="pac-servi">
                        <h2>Servicios</h2>
                    </div>
            
                    <main class="pac-servicios">

                            
                        <div class="pac-servicios-content container">
                                           
                            <button class="pac-servicio-m" type="submit" value="Medicamentos" name="medicamentos">
                                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                                <h4>Medicamentos</h4>
                            </button>
                
                            <button class="pac-servicio-1" type="submit" value="Historia" name="historia">
                                <i class="fa-solid fa-bed-pulse"></i>
                                <h4>Historia</h4>
                            </button>

                                <button class="pac-servicio-1" type="submit" value="citas" name="citas">
                                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                                <h4>Citas</h4>
                                </button>                        

                            <button class="pac-servicio-1" type="submit" value="examenes" name="examenes">
                                <i class="fa-solid fa-hospital"></i>
                                <h4>Examenes</h4>
                            </button>
                
                            <button class="pac-servicio-1" type="submit" value="Contactanos" name="contacto">
                                <i class="fa-solid fa-phone-volume"></i>
                                <h4>Contactanos</h4>
                            </button>
                
                        </div>
                    </main>


            </div>
            <div class="pac-header-img">
                <img src="images/left.png" alt="">
            </div>
        </div>

    </header>

           


    
    </section>
      
</body>

<footer>
        <div class="footer-container">
            <p>&copy; 2024 Mi EPS. Todos los derechos reservados.</p>
            <a href="#">Términos y condiciones</a>
            <a href="#">Política de privacidad</a>
        </div>
    </footer>

</html>
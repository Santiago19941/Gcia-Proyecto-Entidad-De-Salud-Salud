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
            <img src="images/sura.png" alt="" class="logo">
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
                    <li><a href="http://localhost/proyecto/login.php">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Centro <br> Medico</h1>
                <p>
                Conoce la plataforma educativa de EPS SURA. <br>
                Te entregamos contenidos y experiencias de aprendizaje para cuidar tu
                salud y la de tu familia
                </p>
                <a href="#" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="images/left.png" alt="">
            </div>
        </div>

    </header>

    <section class="about container">

        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
            El 31 de enero de 1990 nació la Compañía Suramericana de Servicios de Salud,
            SUSALUD, como una empresa de Medicina Prepagada. Más adelante, el 16 de marzo
            de 1995 recibió su aprobación como Entidad Promotora de Salud (EPS) y comenzó
            su participación dentro del Sistema General de Seguridad Social en Salud colombiano,
            a raíz del surgimiento de la Ley 100 de 1993. A partir de 2009 Susalud cambia de marca y
            se convierte en EPS SURA.
            </p>
            <br>
            <p>
            EPS SURA como Entidad Promotora de Salud ofrece los servicios de PBS y Planes Complementarios de Salud.
            A través de la Compañía de Servicio de Salud IPS Suramericana S.A., la EPS cuenta con divisiones
            asistenciales para apoyar su gestión con entidades como: IPS Punto de Salud, Dinámica IPS,
            Salud en Casa, Punto de Vista y Consultoría en riesgos profesionales.
            </p>
        </div>

    </section>

    <main class="servicios">

        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Pediatria</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Ginecologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Dermatologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Cardiologia</h3>
            </div>

        </div>
    </main>


    <section class="formulario">

        <form method="post" autocomplete="off">
            
            <h2>Agenda consulta</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onClick="myFunction()">

            </div>

        </form>
    </section>

 
    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            windows.location.href="http://localhost/Proyecto"
        }
    </script>

        
</body>

<footer>
        <div class="footer-container">
            <p>&copy; 2024 Mi EPS. Todos los derechos reservados.</p>
            <a href="#">Términos y condiciones</a>
            <a href="#">Política de privacidad</a>
        </div>
</footer>

</html>
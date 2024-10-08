<html>

<section class="formulario">

        <form method="post" autocomplete="off">
            
            <h2>Diligenciar consulta</h2>

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

</html>


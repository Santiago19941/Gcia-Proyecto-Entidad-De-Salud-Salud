<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="sura1-img">
        <img src="images/sura.png" alt="sura">
    </div>
<section class="formulario1">
    
<form  action="" method="post" class="formulario1-form"   autocomplete="off">
    
    <h1 class="formulario1-h1">Iniciar Sesión</h1>
    
    <?php
    include('conexion.php');
    include('validar.php');
    ?>
 
    <div class="input-group">

        <div class="input-container-1">
            
            <select id="Tipo de identificación">
                <option value="" disabled selected hidden>Tipo de identificación</option>
                <option value="Cedula" >Cedula</option>
                <option value="Cedula">Cedula Extrangeria</option>
            </select>
        </div>

        <div class="input-container-1">
            <input type="int" name="usuario" placeholder="Identificación">
        </div>

        <div class="input-container-1">
            <input type="password" name="contraseña" placeholder="Contraseña">
        </div>
        
        <div class="recordar1"><a href="#">¿Has olidado tu contraseña?</a></div>
        
        <div class="btnh">
           <input type="submit" class="btn1"  name=iniciar value="Iniciar Sesión">
        </div>

       
    </div>
</form>

</section>

<div class="registrarse1">
    <p>¿Aún no tienes una cuenta?</p>
    <a href="#">Crear una cuenta</a>
</div>
   
</body>
</html>

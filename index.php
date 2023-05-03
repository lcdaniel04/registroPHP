<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <h2>Hola</h2>
        <P>Inicio tu registro</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="img-icon" src="images/name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="img-icon" src="images/email.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Dirección">
            <img class="img-icon" src="images/direction.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="phone" placeholder="Telefono">
            <img class="img-icon" src="images/phone.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="img-icon" src="images/password.svg" alt="">
        </div>
        <input class="btn" type="submit" name="register" value="Enviar">
    </form>  
    
    <?php
        include("registrar.php");
    ?>
</body>
</html>
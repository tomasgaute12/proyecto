<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/Style.css">
       <link href="https://fonts.googleapis.com/css?family=Vibes&display=swap" rel="stylesheet">

       <link rel="shortcut icon" type="image/x-icon" href="imagenes\descarga.ico">
        <title></title>
    </head>
    <body>
 <div id="menu">
<ul>
<li><a href=index.php>Inicio</a></li>
<li><a href=Login.php>LOGIN</a></li>
<li><a href=database.php>base de datos</a></li>
<li><a href=signup.php>Registrarse</a></li>
<li><a href="#">Contactar</a></li>
</ul>
</div>
        <?php
        
       
        
        ?>
        <form name="logg" method="POST" action="Login.php">
            <p align="center">Usuario: <input type="text" name="usuario" value="" size="20" placeholder="Pon tu usuario" /></p>
            <p align="center">Contraseña: <input type="password" name="contraseña" value="" placeholder="Aqui tu contraseña"/></p>
            <p align="center"><input type="submit" value="Enviar" name="SaludarT"  /></p>
        </form>
        
    </body>
</html>

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
       <!--<link href="https://fonts.googleapis.com/css?family=Vibes&display=swap" rel="stylesheet">-->

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
    
      
        
    <form  method="POST" action="almacenar.php">
            <p align="center">Usuario: <input type="text" name="nombre" size="20" placeholder="Pon tu usuario" /></p>
            <p align="center">Email: <input type="text" name="email"  size="20" placeholder="Pon tu email" /></p>
            <p align="center">Contraseña: <input type="password" name="contraseña" placeholder="Aqui tu contraseña"/></p>
            <p align="center">fecha de nacimiento: <input type="date" name="fechanac" value="" placeholder="año-mes-dia"/></p>
            <p align="center">   <input type="submit" value="Guardar" name="guardar" />  </p>
        </form>
    </body>
</html>

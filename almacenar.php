<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
       
        <?php
        
        $host= "localhost";
        $puerto= "3306";
        $usuario= "root";
        $contraseña= "";
        $baseDeDatos= "final";
        $tabla= "usuario";  
        
        //recibo los datos del registro y los asigno a cada variable
        $u=$_POST["nombre"];
        $e=$_POST['email'];
        $c=$_POST['contraseña'];
        $f=$_POST['fechanac'];
         
        
        if(!($enlace = mysqli_connect($host. ":" .$puerto,$usuario,$contraseña) )){
            echo"Error al conectarse a la base de datos";
            exit();
        }else{
            echo "conectado.<br>";
        }  
        if(!mysqli_select_db($enlace, $baseDeDatos)){
            echo "Error seleccionando a base de datos";
            exit();
        }else{
            echo "Obtuvimos la base de datos  sin problema.<br>";
        }  
        
      
        
  mysqli_query($enlace, "INSERT INTO usuario [ usuario, email, contraseña, fechanac] VALUES ('$u','$e','$c','$f')");
               
  mysqli_close($enlace);
        
        
        ?>
        <p>Datos intoducidos:      </p>
        Nombre:<?php echo $u ?><br>
        E-mail:<?php echo $e ?><br>
        Fecha de nacimiento:<?php echo $f ?><br>
        Contraseña:<?php echo $c ?><br>
        
        
        
    </body>
</html>

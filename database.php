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
        $usuario= "tomas";
        $contraseña= "final1234";
        $baseDeDatos= "final";
        $tabla= "usuario"; 
        
        if(!($link = mysqli_connect($host.":".$puerto, $usuario,$contraseña) )){
            echo"Error al conectarse a la base de datos";
            exit();
            
            
        }else{
            echo "Listo,estamos conectados.<br>";
        }
        if(!mysqli_select_db($link, $baseDeDatos)){
            echo "Error seleccionando a base de datos";
            exit();
        }else{
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
        }     
   
        
        ?>
   
      
        
       
      
    
    </body>
</html>

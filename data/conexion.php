<?php
   
   $db = new PDO('mysql:host=localhost; dbname=financiera', 'root', '');
   if(!$db){
       echo "Error al conectar la base de datos";
       exit;
   }
   
    ?>
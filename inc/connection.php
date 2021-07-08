<?php

      $dsn = 'mysql:host=localhost;dbname=database';
      $usuario = 'root';
      $senha = '';
     
      try{
        $db = new PDO($dsn, $usuario, $senha);
      }catch(PDOException $e){
        echo $e->getMessage();
        exit;
      }


?>
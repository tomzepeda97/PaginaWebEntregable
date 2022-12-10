<?php
    $server = 'localhost';
    $user   = 'root';
    $password = '';
    $database = 'alta_usuario';


    try{
      $conn = new PDO("mysql:host=$server;dbname=$database;",$user, $password);
    }catch (PDOException $e) {
     die('Sin Conexion: '<$e->getMessage());

    }

?>

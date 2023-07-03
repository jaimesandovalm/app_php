<?php

    $server = "localhost";
    $database = "app";
    $user = "root";
    $password = "Ccom2k17-*.";

    try {
        $conexion = new PDO("mysql:host=$server;dbname=$database",$user,$password);
        
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>
<?php

    $server = "";
    $database = "";
    $user = "";
    $password = "";

    try {
        $conexion = new PDO("mysql:host=$server;dbname=$database",$user,$password);
        
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>
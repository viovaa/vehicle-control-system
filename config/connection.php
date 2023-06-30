<?php

function connect() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'aduanas';

    $connection = mysqli_connect($host, $user, $password);

    #PRUEBAS
    // if (!$connection) {
    //     echo "<script>alert('Error al conectar a la base de datos.');</script>";
    //     return null;
    // }else{
    //     echo "<script>alert('Conexión establecida correctamente.');</script>";
    // }

    mysqli_select_db($connection, $database);

    

    return $connection;
}



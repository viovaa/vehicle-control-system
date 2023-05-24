<?php

function connect() {

    #Datos de la conexión
    $host = 'cs.ilab.cl'; 
    $user = '2_BD_44'; 
    $password = '2_BD_44';
    $database = 'S.C.V'; 

    #Ingresar datos de la conexión
    $connection = mysqli_connect($host, $user, $password); 

    #seleccionar base de datos
    mysqli_select_db($connection, $database); 

    return $connection; 

}

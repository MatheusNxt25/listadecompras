<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'listadeprodutos';


    //Usar para conectar ao banco de dados 

    $mysqli = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($mysqli->connect_errno)
    {
        echo "Erro";
    }
   

?>
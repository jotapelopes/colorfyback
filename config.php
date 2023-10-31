<?php

    $dbHost = 'localhost:3308';
    $dbUsername = 'root';
    $dbPassword = '8569923';
    $dbName = 'colorfy';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    /*if($conexao->connect_errno)
    {
        echo "Erro";
    } else {
        echo "Conectado!";
    }*/
    
?>
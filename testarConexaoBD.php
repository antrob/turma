<?php

    $hostname = "localhost";
    $databasename = "PW_2020";
    $username = "PW_User";
    $password = "1234";
    
    try {
        $conexao = new PDO("mysql:host=$hostname;dbname=$databasename",
                       $username, $password);
    }
    catch (\PDOException $e) {
        echo $e->getMessage();
    }
    
    print_r($conexao);
    

?>
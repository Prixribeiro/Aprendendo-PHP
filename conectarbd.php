<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "recodepro";
   
$link = mysqli_connect($servername ,$username , $password , $database);
 
    if (!$link)
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    else
        echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";
    
    mysqli_close($link);
    ?>
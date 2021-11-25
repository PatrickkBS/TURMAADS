<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "cadastro";
    $port = 3312;

  
    $mysqli = new mysqli($host, $user, $pass, $dbname, $port);

    if($mysqli->error){
      die("falha ao conectar no bnaoc de dados". $mysqli->error);
    }
    




?>
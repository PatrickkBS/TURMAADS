<?php 
session_start();

include_once ("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    echo "nome: $nome <br>";
    echo "email: $email <br>";
    echo "senha: $senha <br>";

    $result_usuario = "insert into clientes (nome, email, senha) values ('$nome', '$email', '$senha')";
    mysqli_query($mysqli, $result_usuario);

    if(mysqli_insert_id($mysqli)){
        $_SESSION{'msg'} = "<p style='color:green;'> cadastrado com sucesso!</p>";
        header("location: login.php");
    }else {
        $_SESSION{'msg'} = "<p style='color:red;'> cadastrado não cadastrado!</p>";
        header("location: login.php");   
    }
?>
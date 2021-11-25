<?php
session_start();
include ('conexao.php') ;

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $clientes = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $clientes['id'];
            $_SESSION['nome'] = $clientes['nome'];

            header("Location: usuarios.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pizza Cacoal</title>

    <link rel="stylesheet" href="style.css">
    <?php include_once "csspadrao.php" ?>
    
</head>

<body class="hold-transition login-page">
  <?php  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
     ?>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Pizza</b>Cacoal
                <span style='font-size:80px;'>&#127829;</span></a>
            </div>
            <div class="card-body">
                <div class="callout callout-warning">
                    <h5>Atenção!</h5>

                    <p>Dinheiro bem gasto é aquele usado para comprar pizza!.</p>
                </div>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail *">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha *">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" name="btn-entrar" class="btn btn-primary btn-block">Entre</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form> 
                <p class="mb-2">
                <div class="card-header text-center">
                    <a href="cadastro.php" class="text-center">Ainda não é cadastrado?<strong> Cadastre já!</strong> </a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Esqueci minha senha.</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    
    <?php include_once "jspadrao.php"?>
</body>

</html>


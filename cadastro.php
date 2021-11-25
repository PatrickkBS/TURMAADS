
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Piazza Cacoal</title>

<?php include_once "csspadrao.php" ?>
</head>
<link rel="stylesheet" href="style.css">
<body>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <a href="../../index2.html" class="h1"><b>Pizza</b>Cacoal
                <span style='font-size:80px;'>&#127829;</span></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Cadastrar Usuario</p>

      <form action="processa.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name = "nome"  placeholder="Nome completo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name = "email" placeholder="E-mail">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name = "senha" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Estou de acordo  <a href="#">Ler os termos!</a>
              </label>
            </div>
          </div>
          



      </div>
        </div>
 
      <div class="social-auth-links text-center">
      <button name = " bntsalvar "  id = " bntsalvar " type = " submit "  class = " btn btn-block btn-primary">
        <i  class = " fas fa-plus mr-2 " > </i>
          Cadastrar!
        </a>
      </div>
      <div class="social-auth-links text-center">
      <A href= "login.php " tipo = " botão " class="btn btn-block btn-aviso">
        <i  class = " fas fa-ban " > </i>
          Cancelar
        </a>
      </div>
     
     
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>


 
<?php include_once "jspadrao.php"?>
<script> relf="js/cadastro.js"</script>
</body>
</html>
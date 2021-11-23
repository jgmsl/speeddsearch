<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>Login</title>
   <!--Made with love by Mutiullah Samim -->
   
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<?php
include_once 'conexao.php'; 

if (isset($_POST['usuario'])) {

  $chave = $_POST['usuario'] ?? '';

  // se o usuario existe na tabela de usuario 
  $sql = "SELECT * FROM usuario WHERE usuario = '$chave'";

  if ($resultado = mysqli_query($conexao,$sql)) {
    // rodou a query
    $campos = mysqli_fetch_array($resultado);

    // testar se tem um valor em campos['usuario']
    if (isset($campos['usuario'])) {
      // achei o usuario que bate com o que foi digita
      $senha = $campos['senha'] ?? '';
      if ($_POST['senha'] == $senha) {
        // usuario com a senha certa
        if ($campos['ativo'] == 'S') {
          // ok usuario com nome,senha e ativo certos

          $_SESSION['usuario'] = $_POST['usuario'];
          $_SESSION['senha'] = $_POST['senha'];

          header('Location: ./cabecalho.php');
        }
        else
        {
          echo '<br>Usuário não ativo<br>';
          echo "<a href='index.php'><button>Voltar</button></a>";
        }
      }
      else
      {
        echo '<br>Senha Incorreta<br>';
        echo "<a href='index.php'><button>Voltar</button></a>";
      }
    }
    else
    {
      echo '<br>Usuário não encontrado<br>';
      echo "<a href='index.php'><button>Voltar</button></a>";
    }
  }
  else
  {
    echo '<br>A query no rodou :' . $sql;
    echo "<a href='index.php'><button>Voltar</button></a>";
  }
}
else
{
  // nao existe o name=usuario ,faz outra coisa
  //echo 'nao existe usuario no POST';
    
?>

<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
      <div class="card-body">
        <form action="index.php" method="POST">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input name="usuario" type="text" class="form-control" placeholder="Usuário">
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input name="senha" type="password" class="form-control" placeholder="Senha">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Lembra-me
          </div>
          <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn">
            <br>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Não tem conta?<a href="cadastro.php">Crie agora</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
}
?>

<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include_once 'bootjs.php';
?>

<br>
<br>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>
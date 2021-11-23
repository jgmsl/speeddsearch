<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Consulta Fornecedores</title>
  <?php 
  include_once 'bootmeta.php';
  ?>	
</head>
<body>
<?php
include_once 'conexao.php';
include_once 'cabecalho.php';
include_once 'funcoes.php';

// testa se veio algo no $_POST com nome chave 
if (isset($_POST['chave'])) {
  // se veio algo, guarda em $pesquisa
  $pesquisa = $_POST['chave'];
}
else
{
  // se não veio, coloca nulo ou '' em $pesquisa
  $pesquisa = '';
}

// cria a query que busca na tabela fornecedores um cnpj = a $pesquisa
// ou um nome = a $pesquisa, que faça parte de algum registro na tabela
$sql = "SELECT * FROM fornecedores  WHERE cnpj = '$pesquisa' OR razao LIKE '%$pesquisa%'";

$resultado = mysqli_query($conexao,$sql);
?>
<br><br><br><br><br>
<h1><p align="center">Consulta de Fornecedores</p></h1>

<!-- cria um navbar de campo de pesquisa -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" action="consulta-fornecedores.php" method="POST">
      <input class="form-control me-2" type="search" placeholder="Informe CNPJ ou Razão" aria-label="Search" name="chave">
      <button class="btn btn-outline-primary" type="submit">Consultar</button>
    </form>
  </div>
</nav>

<!-- cria uma table para lista os dados do banco -->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">CNPJ</th>
      <th scope="col">Razão Social</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Data Compra</th>
      <th scope="col">Saldo Compras</th>
    </tr>
  </thead>

  <tbody>
  <?php 
    // faz um loop buscando dentro de $resultado, linha por linha
    while ($linha = mysqli_fetch_assoc($resultado)) {  
      // carrega o conteundo da linha em cada campo
      $cnpj = $linha['cnpj']; 
      $razao = $linha['razao'];
      $telefone1 = $linha['telefone1'];
      $email = $linha['email'];
      $datacompra = formatadata($linha['datacompra']);
      $saldocompra = formatavalor($linha['saldocompra']);
      // mostra a linha da tabela formatada
      echo "<tr>
            <th scope='row'>$cnpj</th>
            <td>$razao</td>
            <td>$telefone1</td>
            <td>$email</td>
            <td>$datacompra</td>
            </tr>";
    // se tiver mais registro, vai para o próximo
    }
  ?>

  </tbody>

</table>
<br><br><br><br>  
<?php
include_once 'rodape.php';
include_once 'bootjs.php';
?>
</body>
</html>
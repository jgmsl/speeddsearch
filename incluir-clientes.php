<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Clientes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  
</head>
<body>
  <?php 
  include_once 'conexao.php';
  $cpf = $_POST['cpf'];
  $nome = $_POST['nomecompleto'];
  $endereco = $_POST['enderecocompleto'];
  $numero = $_POST['numerodoendereco'];
  $bairro = $_POST['bairrodoendereco'];
  $cidade = $_POST['cidadedoendereco'];
  $uf = $_POST['ufdoestado'];
  $cep = $_POST['cepdoendereco'];
  $nascimento = $_POST['datadenascimento'];
  $sexo = $_POST['sexodocliente'];
  $telefone = $_POST['telefonedocliente'];
  $email = $_POST['emaildocliente'];
  $obs = $_POST['observacao'];


  $sql = "UPDATE `clientes` SET `nome`='$nome',`endereco`='$endereco',`numero`='$numero',`bairro`='$bairro',`cidade`='$cidade',`uf`='$uf',`cep`='$cep',`nascimento`='$nascimento',`sexo`='$sexo',`telefone`='$telefone',`email`='$email',`observacao`='$obs' WHERE cpf='$cpf'";

  if (mysqli_query($conexao,$sql)) {
    //echo "Cliente incluido com sucesso! <br>";
    //echo $sql;
    echo('<a href="clientes.php"/a><button type="button" class="btn btn-success">Cliente alterado com sucesso!</button>');
  }
  else
  {
    echo "Deu erro:" .$conexao->error . '<br>';
    echo $sql;
  }
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>   
</body>
</html>
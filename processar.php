<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		table, th, tr, td{
			border: 1px solid;
			border-collapse: collapse;
			text-align: center;
			padding: 10px;
		}
	</style>
	<title>Processando</title>
</head>
<body>

<?php

include_once 'conexao.php';
session_start();
$acao = $_SESSION['acao'];
//echo "<h2>Processando - $acao - $chave </h2>";

if ($acao == 'Cadastro') {
	// code...
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$sql = "INSERT INTO usuario (usuario, senha, ativo) VALUES ('$usuario', '$senha', 'S')";


	if (mysqli_query($conexao, $sql)) {
		// code...
		echo "Cadastrado";
	}else{
		echo "Erro".$conexao->erro;
	}
}
	
$conexao->close();

?>

<br>
<br>
<a href="index.php"><button>Voltar</button></a>

</body>
</html>
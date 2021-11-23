<?php
//conexão do banco de dados
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'projetofaculdade';

//

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

if ($conexao->error) {
	die("Erro ao fazer a conexão:" . $conexao->error);
}
else
{
	//echo "Deu tudo certo";
}
?>
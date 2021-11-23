<?php 
// cria uma conexao com o banco de dados
include_once 'conexao.php';
include_once 'funcoes.php';

// pega os valores dos campos do formulário fornecedores e coloca em variaveis
$chave = $_POST['cnpj'];
$razao = $_POST['razao'];
$telefone1 = $_POST['telefone1'];
$telefone2 = $_POST['telefone2'];
$celular = $_POST['celular'];
$whatsapp = $_POST['whatsapp'];
$email = $_POST['email'];
$funcao =$_POST['funcao'];
$nascimento = $_POST['nascimento'];
$observacao = $_POST['observacao'];
$status = $_POST['status'];
$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];

// monta a query de pesquisa para a chave recebida 
$sql = "SELECT * FROM fornecedores WHERE cnpj = '$chave'";

// executar a query e testar se existe informação
if( $resultado = mysqli_query($conexao,$sql) ) {
	// se deu certo a conexao e a execução do sql
	if ($campo = mysqli_fetch_array($resultado) ) {
		// tem um registro com aquela chave (UPDATE)
		$sql = "UPDATE fornecedores SET razao = '$razao', telefone1 = '$telefone1', telefone2 = '$telefone2', celular = '$celular', whatsapp = '$whatsapp',		email = '$email', nascimento = '$nascimento', observacao = '$observacao', status = '$status' , banco = '$banco', agencia = '$agencia', conta = '$conta' WHERE cnpj = '$chave'";
		// executar a query e testar para ver se seu certo
		if ( mysqli_query($conexao,$sql) ) {
			// deu certo
			echo('<a href="fornecedores.php"/a><button type="button" class="btn btn-success">Fornecedor atualizado com sucesso!</button>');
		}
		else
		{
			// deu errao
			alerta('Deu erro:' .$conexao->error . '<br>','red','fornecedores.php');
			echo $sql;
		}
	}
	else
	{
		// não tem registro com aquela chave (INSERT)
		// montar a query do sql para fazer o insert do fornecedor
		$sql ="INSERT INTO fornecedores (cnpj, razao, telefone1, telefone2, celular, whatsapp, email, funcao, nascimento, observacao, status, banco, agencia, conta) VALUES ('$chave','$razao','$telefone1','$telefone2','$celular','$whatsapp','$email','$funcao','$nascimento','$observacao','$status','$banco','$agencia','$conta')";

		// executa a query e testa se o comando foi executado com sucesso
		if (mysqli_query($conexao,$sql)) {
			//alerta('Fornecedor incluido com sucesso!','sucess');
			//echo $sql;
			alerta('Fornecedor incluido com sucesso!','blue','fornecedores.php');
		}
		else
		{
			alerta('Deu erro:' .$conexao->error . '<br>','red','fornecedores.php');
			echo $sql;
		}
	}
}
else
{
	// nao deu certo a conexao ou a execução do sql
	echo "Deu errado a execução da conexão ou do sql <br>";
	echo "<br>" . $conexao->error;
	echo "<br>" . $sql;
}

// fecha a conexao com o banco de dados
$conexao->close();

botao('Voltar','success','fornecedores.php');

?>

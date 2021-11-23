<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mostrar fornecedores</title>
	<?php 
	include_once 'bootmeta.php';
	?>	
	<style>
		fieldset{
			border: groove;
		}
	</style>		
</head>
<body>
<?php 
include_once 'conexao.php'; 
include_once 'cabecalho.php';
include_once 'funcoes.php';
// pegar a chave
$chave = $_POST['cnpj'];

// pesquisar a chave para ver se tem este cnpj na tabela
$sql = "SELECT * FROM fornecedores WHERE cnpj = '$chave'";

// executa a query ($sql)
$resultado = mysqli_query($conexao,$sql);

// quebro o $resultado em $campos para poder mostrar
$campo = mysqli_fetch_array($resultado);

// pega os valores e coloca em varivais com o mesmo nome (para facilitar)
$cnpj = $cnpj['cnpj'] ??'';
$razao= $campo['razao'] ?? '';
$telefone1= $campo['telefone1'] ?? '';
$telefone2= $campo['telefone2'] ?? '';
$celular= $campo['celular'] ?? '';
$whatsapp= $campo['whatsapp'] ?? '';
$email= $campo['email'] ?? '';
$funcao= $campo['funcao'] ?? '';
$nascimento= $campo['nascimento'] ?? '';
$observacao= $campo['observacao'] ?? '';
$status= $campo['status'] ?? '';
$banco= $campo['banco'] ?? '';
$agencia= $campo['agencia'] ?? '';
$conta= $campo['conta'] ?? '';

?>
<div class="container">
	<div class="row">
		<div class="col">
			<form action="incluir-fornecedores.php" method="POST"> 
				<br><br><br><br><br>					
				<fieldset id="cabecalho1" >
				CADASTRO DE FORNECEDORES
				</fieldset>

				<fieldset>
					<table>
						<tr>
							<td>CNPJ</td>
							<td><input disabled type="number" name="cnpj" size="14" maxlength="14" value="<?php echo $chave; ?>">
							<input type="hidden" name="cnpj" value="<?php echo $chave; ?>">
							<?php if ($razao == '') {
								echo "<font color='red'> Fornecedor não cadastrado</font>";
							} ?>							
							</td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Razão Social</td>
								<td><input type="text" name="razao" size="50" maxlength="50" value="<?php echo $razao; ?>" >
								</td>	
							</tr>
							<tr>
								<td>Telefone 1</td>
								<td><input type="text" name="telefone1" size="15" maxlength="15" value="<?php echo $telefone1; ?>" ></td>
								<td>Telefone 2</td>
								<td><input type="text" name="telefone2" size="15" maxlength="15" value="<?php echo $telefone2; ?>"></td>
							</tr>
							<tr>
								<td>Celular</td>
								<td><input type="text" name="celular" size="15" maxlength="15" value="<?php echo $celular; ?>"></td>
								<td>Whatsapp</td>
								<td><input type="text" name="whatsapp"  size="15" maxlength="15" value="<?php echo $whatsapp; ?>"></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Email</td>
								<td><input type="email" name="email" size="50" maxlength="50" value="<?php echo $email; ?>"></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Função</td>
								<td><input type="text" name="funcao" size="50" maxlength="50" value="<?php echo $funcao; ?>" >
								</td>	
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Data de Nascimento</td>
								<td><input type="date" name="nascimento"  value="<?php echo $nascimento; ?>"></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Banco</td>
								<td><input type="text" name="banco" size="3" maxlength="3" value="<?php echo $banco; ?>"></td>
								<td>Agencia</td>
								<td><input type="text" name="agencia" size="5" maxlength="5" value="<?php echo $agencia; ?>"></td>
								<td>Conta</td>
								<td><input type="text" name="conta" size="15" maxlength="15" value="<?php echo $conta; ?>"></td>
							</tr>
						</table>
						<table>
							<tr>
								<td>Status</td>
								<td><input <?php if ($status == 'A') {echo "checked";}?>  type="radio" name="status" value="A">Ativo</td>
								<td><input <?php if ($status == 'I') {echo "checked";}?>  type="radio" name="status" value="I">Inativo</td>
							</tr>
						</table>
						<table>
							<tr>
								<td><p id="obs1">Observação</p>
									<textarea name="observacao" rows="5" cols="50" minlength="1" maxlength="500" value="<?php echo $observacao; ?>"><?php echo $observacao; ?></textarea></td>
								</tr>
							</table>
							<br>
							<a href="fornecedores.php" class="btn btn-outline-secondary">Voltar</a>
							<input class="btn btn-outline-success" type="submit" name="botaoenviar" value="Gravar">
							<br>							
						</fieldset>
					</form>
				</div>
			</div>
		</div>
<?php
include_once 'rodape.php';
include_once 'bootjs.php';
?>		
</body>
</html>


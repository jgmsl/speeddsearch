<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fornecedores</title>
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
?>
<div class="container">
	<div class="row">
		<div class="col">
			<form action="mostrar-fornecedores.php" method="POST"> 
				<br><br><br><br><br>					
				<fieldset id="cabecalho1" >
				CADASTRO DE FORNECEDORES
				</fieldset>

				<fieldset>
					<table>
						<tr>
							<td>CNPJ</td>
							<td><input type="text" name="cnpj" size="14" maxlength="14" required>
							<button>Buscar</button></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Razão Social</td>
								<td><input disabled type="text" name="razao" size="50" maxlength="50">
								</td>	
							</tr>
							<tr>
								<td>Telefone 1</td>
								<td><input disabled type="text" name="telefone1" size="15" maxlength="15"></td>
								<td>Telefone 2</td>
								<td><input disabled type="text" name="telefone2" size="15" maxlength="15"></td>
							</tr>
							<tr>
								<td>Celular</td>
								<td><input disabled type="text" name="celular" size="15" maxlength="15"></td>
								<td>Whatsapp</td>
								<td><input disabled type="text" name="whatsapp"  size="15" maxlength="15"></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Email</td>
								<td><input disabled type="email" name="email" size="50" maxlength="50"></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Função</td>
								<td><input disabled type="text" name="funcao" size="50" maxlength="50">
								</td>	
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Data de Nascimento</td>
								<td><input disabled type="date" name="nascimento"></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Banco</td>
								<td><input disabled type="text" name="banco" size="3" maxlength="3"></td>
								<td>Agencia</td>
								<td><input disabled type="text" name="agencia" size="5" maxlength="5"></td>
								<td>Conta</td>
								<td><input disabled type="text" name="conta" size="15" maxlength="15"></td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td>Status</td>
								<td><input disabled type="radio" name="status" value="A">Ativo</td>
								<td><input disabled type="radio" name="status" value="I">Inativo</td>
							</tr>
						</table>
						<br>
						<table>
							<tr>
								<td><p id="obs1">Observação:</p>
									<textarea disabled name="observacao" rows="5" cols="50" minlength="1" maxlength="500"></textarea></td>
								</tr>
							</table>
							<br>
							<a href="index.php" class="btn btn-outline-secondary">Voltar</a>
							<input class="btn btn-outline-success" type="submit" name="botaoenviar" value="Gravar" disabled>
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


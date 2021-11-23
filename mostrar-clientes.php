<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mostrar Clientes</title>
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
$chave = $_POST['cpf'];

$sql = "SELECT * FROM clientes WHERE cpf = '$chave'";

$resultado = mysqli_query($conexao,$sql);

$linha = mysqli_fetch_array($resultado);

$linha['nome'];
$nome = $linha['nome'] ?? '';  // pega o nome ou ''
$endereco = $linha['endereco'] ?? '';
$numero = $linha['numero'] ?? '';
$bairro = $linha['bairro'] ?? '';
$cidade = $linha['cidade'] ?? '';
$uf = $linha['uf'] ?? '';            
$cep = $linha['cep'] ?? '';
$nascimento = $linha['nascimento'] ?? '';
$sexo = $linha['sexo'] ?? '';
$telefone = $linha['telefone'] ?? '';
$email = $linha['email'] ?? '';
$salario = $linha['salario'] ?? '';
$cor = $linha['cor'] ?? '';
$curso = $linha['observacao'] ?? '';
?>
	<div class="container">	
		<div class="row">
			<div class="col">
				<form action="incluir-clientes.php" method="POST" >
	
				<br><br><br><br><br>

					<fieldset id="cabecalho1"> 			
					CADASTRO DE CLIENTES
					</fieldset>
					<fieldset id="cabecalho2">
						<table id="tabela1">
						<tr>
							<td>CPF</td>
							<td>
							<input id='cpf' type='text' name='cpf' size='11' maxlength='11' disabled value='<?php echo $chave; ?>'>
							<?php if ($nome == '') {
								echo "<font color='red'> Cliente não cadastrado</font>";
							} ?>
							<input type='hidden' name='cpf' value='<?php echo $chave;?>'>
							</td>
							</tr>

							<tr>
								<td>Nome Completo</td>
								<td><input type='text' name='nomecompleto' size='50' maxlength='50' value='<?php echo $nome; ?>'>
								</td>
							</tr>
							<tr>
								<td>Endereço</td>
								<td><input type='text' name='enderecocompleto' size='50' maxlength='50' value='<?php echo $endereco ?>' >
								</td>
							</tr>
							<tr>
								<td>Número do Endereço</td>
								<td><input type='text' name='numerodoendereco' size='10' maxlength="10" value='<?php echo $numero ?>' ></td>
							</tr>
						</table>
						<br>
						<table class="tabelacompleta" id="tabela2">
							<table id="tabela3">
								<tr>
									<td>Bairro</td>
									<td><input type='text' name='bairrodoendereco'  size='30' maxlength='30' value='<?php echo $bairro ?>'></td>
									<td>Cidade</td>
									<td><input type='text' name='cidadedoendereco' size='30' maxlength='30' value='<?php echo $cidade ?>' ></td>
								</tr>
								<tr>
									<td>UF</td>
									<td id='selecao' ><select name = 'ufdoestado' value='<?php echo $uf;?>' >
										<option value="<?php echo $uf ?>"><?php echo retornauf($uf);?></option>
										<option value="AC">Acre</option>
										<option value="AL">Alagoas</option>
										<option value="AP">Amapá</option>
										<option value="AM">Amazonas</option>
										<option value="BA">Bahia</option>
										<option value="CE">Ceará</option>
										<option value="DF">Distrito Federal</option>
										<option value="ES">Espirito Santo</option>
										<option value="GO">Goiás</option>
										<option value="MA">Maranhão</option>
										<option value="MS">Mato Grosso do Sul</option>
										<option value="MT">Mato Grosso</option>
										<option value="MG">Minas Gerais</option>
										<option value="PA">Pará</option>
										<option value="PB">Paraíba</option>
										<option value="PR">Paraná</option>
										<option value="PE">Pernambuco</option>
										<option value="PI">Piauí</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="RN">Rio Grande do Norte</option>
										<option value="RS">Rio Grande do Sul</option>
										<option value="RO">Rondônia</option>
										<option value="RR">Roraima</option>
										<option value="SC">Santa Catarina</option>
										<option value="SP">São Paulo</option>
										<option value="SE">Sergipe</option>
										<option value="TO">Tocantins</option>
									</select>
								</td>
								<td>CEP</td>
								<td><input type='text' name='cepdoendereco' size='8'  maxlength='8' value='<?php echo $cep;?>'></td>
							</tr>
							<tr>

								<td>Data Nascimento</td>
								<td><input type='date' name='datadenascimento' value='<?php echo $nascimento;?>' ></td>
							</tr>			
						</table>
						<br>
						<tr>
							<td>Sexo</td>
							<td>
								<input <?php if ($sexo == 'M') {echo "checked";}?> type='radio' name='sexodocliente' value='M'>Masculino
							</td>

							<td>
								<input <?php if ($sexo == 'F') {echo "checked";}?> type='radio' name='sexodocliente' value='F'>Feminino
							</td>

							<td>
								<input <?php if ($sexo == 'N') {echo "checked";}?> type='radio' name='sexodocliente' value='N'>ND
							</td>

						</tr>
						<br>
						<br>
						<table id="tabela4">
							<tr>
								<td>Telefone/Celular</td>
								<td><input type='text' name='telefonedocliente' size='9' maxlength='9' value='<?php echo $telefone;?>' > </td>
								<td>Email</td>
								<td><input type='email' name='emaildocliente' size='45' maxlength='45' value='<?php echo $email;?>' ></td>
							</tr>
							</table>
							<br>
						</tr>
						<p>Observações:</p>
						<textarea name='observacao' rows='3' cols='50' maxlength='500' value='<?php echo $curso;?>' ><?php echo $curso;?></textarea>
						<br>
						<a href="clientes.php" class="btn btn-outline-secondary">Voltar</a>
						<input class="btn btn-outline-success" type="submit" name="botaoenviar" value="Gravar">
						<br>
					</table>
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

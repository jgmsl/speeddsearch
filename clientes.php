<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clientes</title>
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
				<form action="mostrar-clientes.php" method="POST" >
	
				<br><br><br><br><br>

					<fieldset id="cabecalho1"> 			
						CADASTRO DE CLIENTES
					</fieldset>
					<fieldset id="cabecalho2">
						<table id="tabela1">
							<tr>
								<td>CPF</td>
								<td><input id="cpf" type="text" name="cpf" size="11" maxlength="11" required>  
								<button>Buscar</button>
								</td>
							</tr>

							<tr>
								<td>Nome Completo</td>
								<td><input type="text" name="nomecompleto" size="50" maxlength="50" disabled></td>
							</tr>
							<tr>
								<td>Endereço</td>
								<td><input type="text" name="enderecocompleto" size="50" maxlength="50" disabled></td>
							</tr>
							<tr>
								<td>Número do Endereço</td>
								<td><input type="text" name="numerodoendereco" size="10" maxlength="10" disabled></td>
							</tr>
						</table>
						<br>
						<table class="tabelacompleta" id="tabela2">
							<table id="tabela3">
								<tr>
									<td>Bairro</td>
									<td><input type="text" name="bairrodoendereco"  size="30" maxlength="30" disabled></td>
									<td>Cidade</td>
									<td><input type="text" name="cidadedoendereco" size="30" maxlength="30" disabled></td>
								</tr>
								<tr>
									<td>UF</td>
									<td id="selecao" ><select id="ufdoestado" name = "ufdoestado" disabled>
										<option value="">Selecione</option>
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
								<td><input type="text" name="cepdoendereco"size="8" maxlength="8" disabled ></td>
							</tr>
							</table>
							<br>
							<table>
							<tr>
								<td>Data Nascimento</td>
								<td><input type="date" name="datadenascimento" disabled></td>
							</tr>
							</table>			
						<br>
						<tr>
							<td>Sexo</td>
							<td><input type="radio" name="sexodocliente" id="sexodocliente" value="M" disabled>Masculino</td>
							<td><input type="radio" name="sexodocliente" id="sexodocliente" value="F" disabled>Feminino</td>
							<td><input type="radio" name="sexodocliente" id="sexodocliente" value="N" disabled>Não declarado</td>
						</tr>
						<br>
						<br>
						<table id="tabela4">
							<tr>
								<td>Telefone/Celular</td>
								<td><input type="text" name="telefonedocliente" size="9" maxlength="9" disabled> </td>
								<td>Email</td>
								<td><input type="email" name="emaildocliente"size="45" maxlength="45" disabled></td>
							</tr>
							</table>
							<br>
						</tr>
						<p>Observação:</p>
						<textarea name="observacao" rows="3" cols="50" maxlength="500" disabled > </textarea>
						<br>
						<a href="index.php" class="btn btn-outline-secondary">Voltar</a>
						<input class="btn btn-outline-success" type="submit" name="botaoenviar" value="Gravar" disabled>
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

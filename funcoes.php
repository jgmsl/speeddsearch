<?php
// retorna o nome por extenso no $estado (uf) passada como parametro
function retornauf($estado) { // passando DF retorna Distrito Federal
	switch ($estado) {
		case 'AC': return "Acre"; 
		case 'AL': return "Alagoas"; 
		case 'AP': return "Amapá"; 
		case 'AM': return "Amazonas"; 
		case 'BA': return "Bahia"; 
		case 'CE': return "Ceará"; 
		case 'DF': return "Distrito Federal"; 
		case 'ES': return "Espirito Santo"; 
		case 'GO': return "Goiás"; 
		case 'MA': return "Maranhão"; 
		case 'MS': return "Mato Grosso do Sul"; 
		case 'MT': return "Mato Grosso"; 
		case 'MG': return "Minas Gerais"; 
		case 'PA': return "Pará"; 
		case 'PB': return "Paraíba"; 
		case 'PR': return "Paraná"; 
		case 'PE': return "Pernambuco"; 
		case 'PI': return "Piauí"; 
		case 'RJ': return "Rio de Janeiro"; 
		case 'RN': return "Rio Grande do Norte"; 
		case 'RS': return "Rio Grande do Sul"; 
		case 'RO': return "Rondônia"; 
		case 'RR': return "Roraima"; 
		case 'SC': return "Santa Catarina"; 
		case 'SP': return "São Paulo"; 
		case 'SE': return "Sergipe"; 
		case 'TO': return "Tocantins"; 
		default: return ""; 
	}

}

// pega a data do sistema e mostra no formato dd/mm/aaaa hh:mm:ss
function datasistematela() {
	date_default_timezone_set('America/Sao_paulo');
	return date('d/m/Y H:i:s');
} 

// formata o valor passado na variavel $valor e devolve
function formatavalor($valor) {
	return number_format($valor,2,',','.');
}

// formata a data de aaaa-mm-dd para dd/mm/aaaa
function formatadata($data) {
	
	if (is_null($data)) {
		$data = '0000-00-00';
	}
	// quebra a variavel $data em pedaços em um array
	// a data vem como 2021-09-16, então o explode
	// quebra usando como delimitador o '-' 
	$parte = explode('-', $data);
	// devolvemos como 16/09/2021
	return $parte[2] . '/' . $parte[1] . '/' . $parte[0];
} 

// mostra um alert do bootstrap com a mensagem passada e a cor escolhida
function alerta($mensagem,$cor,$link) {
	//echo "<div class='alert alert-$cor' role='alert'> $mensagem </div>";
	echo "<form action='$link'>
    	  <input style='background-color: $cor;' type='submit' value='$mensagem'/>
	      </form>";
}

function botao($mensagem,$cor,$link) {
	echo "<a class='btn btn-$cor' href='$link' role='button'>$mensagem</a>";
}

function alertasemboot($mensagem,$cor){
	echo "
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title></title>
	<?php
	include_once 'bootmeta.php';
	?>
</head>
<body>
<?php  
echo '<div class='alert alert-$cor' role='alert'> $mensagem </div>';
?>
<?php 
include_once 'bootjs.php';
?>
</body>
</html>";
}




?>
	
    <h2><i class="fas fa-building"></i> -- </h2>
	<div class="busca">
		<h4><i class="fa fa-search"></i>Pesquisar</h4>
		<form method="post">
			<input style="font-size: 15px;" placeholder="Procure pelo nome do empreendimento" type="text" name="busca">
			<input type="submit" name="acao" value="Buscar">
    
<?php 
include_once 'conexao.php'; 
include_once 'cabecalho.php';
include_once 'funcoes.php';
?>
s
    <?php

			$query = "";
			if(isset($_POST['acao']) && $_POST['acao'] == 'Buscar'){
				$nome = $_POST['busca'];
				$query = "WHERE (nome LIKE '%$nome%')";
			}
			if($query == ''){
				$query2 = "";
			}else{
				$query2 = "";
			}
			$sql = MySql::conectar()->prepare("SELECT * FROM `empreendimentos` $query ORDER BY order_id ASC");

			$sql->execute();
			$produtos = $sql->fetchAll();
			if($query != ''){
				echo '<div style="width:100%;" class="busca-result"><p>Foram encontrados <b>'.count($produtos).'</b> resultado(s)</p></div>';
			}
			foreach ($produtos as $key => $value) {
		?>
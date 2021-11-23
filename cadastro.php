<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
</head>
<body>
	<?php
		session_start();
		$_SESSION['acao'] = 'Cadastro';
	?>
	<div align="center">
		<form action="processar.php" method="POST">
			<label>Nome de usuário</label>
			<input type="text" name="usuario">
			<label>Senha</label>
			<input id="pass" type="password" name="senha">
			<button>Enviar</button>
		</form>
		<!--<button id="btn-pass" onclick="mostrar()">Mostrar</button>-->
	</div>
	<script type="text/javascript">
	</script>
</body>
</html>
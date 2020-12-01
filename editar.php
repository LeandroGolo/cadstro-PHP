<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>

<body>
	<h1 class="titulo">Formulário de Edição</h1>
	<?php
		//conexão com o banco de dados
		include_once("conecta.php");
	
		//receber o ID que foi enviado via GET na URL e guardar em uma variavel
		$recid=$_GET["enviaid"];
	
		//buscar as informações da tabela_dados do banco que tenham o mesmo ID
		$dados=mysqli_query($conexao, "SELECT * FROM tabela_dados WHERE id=$recid");
	
		//transformando a variavel dados em um array para separar as informações
		$campo=mysqli_fetch_array($dados);
	?>
	
	<form class="formulario" action="atualiza.php" method="post">
		<input type="hidden" name="fid" value="<?=$campo["id"]?>">
		<input type="text" placeholder="Seu nome" required class="campo" name="fnome" value="<?=$campo["nome"]?>">
		
		<input type="email" placeholder="Seu e-mail" required class="campo" name="femail" value="<?=$campo["email"]?>">
		
		<textarea  rows="7" placeholder="Sua mensagem" required class="campo" name="fmsg"><?=$campo["msg"]?></textarea>
		
		<input type="submit" value="Gravar" class="botao">
	</form>
</body>
</html>



















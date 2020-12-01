<!DOCTYPE html>
<html lang="pt-br">
<head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Listagem de dados</title>
 	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="Js/script.js"></script>
</head>

<body>
  	<h1 class="titulo">Listagem de dados</h1>
	<table width="100%">
		<tr align="center" bgcolor="#EEEEEE">
			<td><strong>Nome</strong></td>
			<td><strong>E-Mail</strong></td>
			<td><strong>Mensagem</strong></td>
		</tr>
		
		<?php
			//conectar com o banco de dados
			include_once("conecta.php");
			
			//pegar os dados de uma determinada tabela 
			$dados=mysqli_query($conexao, "SELECT * FROM tabela_dados ORDER By id DESC");
			
			//utilizar o WHILE como laço de repetição para passar por cada linha 
		while($campo=mysqli_fetch_array($dados)){ ?>
			<tr>
				<td><?=$campo['nome']?></td>
				<td><?=$campo['email']?></td>
				<td><?=$campo['msg']?></td>
				
				<td align="center" width="30"><a href="editar.php?enviaid=<?=$campo['id']?>"><i class="fa fa-edit"></i></a></td>
				
				<td align="center" width="30"><a href="#" onClick="confirma(<?=$campo['id']?>)"><i class="fa fa-trash"></i></a></td>
			</tr>
		<?php } ?>		
	</table>
</body>

</html>









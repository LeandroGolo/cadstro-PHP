<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de cadastro</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>

<body> 
	<h1 class="titulo">Formulário de cadastro</h1>
	<form class="formulario" action="grava.php" method="post">
		<input type="text" placeholder="Seu nome" required class="campo" name="fnome">
		<input type="email" placeholder="Seu e-mail" required class="campo" name="femail">
		<textarea  rows="7" placeholder="Sua mensagem" required class="campo" name="fmsg"></textarea>
		<input type="submit" value="Gravar" class="botao">
	</form>
</body>
</html>
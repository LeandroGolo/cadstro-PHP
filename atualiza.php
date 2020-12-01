<?php
	//conexão com o banco de dados
	include_once("conecta.php");

	//recebendo os dados enviados pelo formulário e armazenando em variáveis
	$recid=$_POST["fid"];
	$recnome=$_POST["fnome"];
	$recemail=$_POST["femail"];
	$recmsg=$_POST["fmsg"];

	//gravando por cima do cadastro existente
	mysqli_query($conexao, "UPDATE tabela_dados SET nome='$recnome', email='$recemail', msg='$recmsg' WHERE id=$recid");

	//redirecionamento
	header("location:lista.php");
?>
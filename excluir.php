<?php 
	//Recebendo o ID passado via GET na URL
	$recid=$_GET["enviaid"];

	//conexão com o banco de dados
	include_once("conecta.php");

	//procurar na tabela_dados do banco um registro com o mesmo ID e excluir
	mysqli_query($conexao, "DELETE FROM tabela_dados WHERE id=$recid"); 

	//redirecionamento
	header("location:lista.php");
?>
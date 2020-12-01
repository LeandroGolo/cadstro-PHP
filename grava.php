<?php
  //lonkinando o arquivo de conexão com o banco de dados
  include_once("conecta.php");

  //recebendo os dados do formulário
  $recnome=$_POST["fnome"];
  $recemail=$_POST["femail"];
  $recmsg=$_POST["fmsg"];

  //gravação dos dados na tabela  do banco de dados
  mysqli_query($conexao,"INSERT INTO tabela_dados (nome, email, msg) VALUES('$recnome','$recemail', '$recmsg')");

  //redirecionamento
  header("location:lista.php");
?>
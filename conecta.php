<?php
	//configurando as informações do banco de dados
	$host="localhost";//endereço do servidor onde está o banco de dados
	$usuario="root"; //usuário de acesso ao banco de dados
	$senha=""; // senha de acesso ao banco de dados
	$nome_banco="bd_1929";


	//realizando a conexão com o banco de dados
	$conexao=mysqli_connect($host, $usuario, $senha, $nome_banco);

	//validação
	if(!$conexao){
		print("Algo de errado deu errado!");
	}
?> 
<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "projeto";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	$conn2 = new PDO('mysql:host=' . $servidor . ';dbname=' . $dbname . ';', $usuario, $senha);
	
	if(!$conn)
	{
		die("Falha na conexao: " . mysqli_connect_error());
	}
	else
	{
		//echo "Conexao realizada com sucesso <p>";
	}
	
?>
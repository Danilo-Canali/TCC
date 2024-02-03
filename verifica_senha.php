<?php
	session_start();	
	include_once("conexao.php");
		
	if((isset($_POST['email'])) && (isset($_POST['nome'])))
	{
	//	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
		$login = mysqli_real_escape_string($conn, $_POST['email']);
		$senha = mysqli_real_escape_string($conn, $_POST['nome']);
	//	$email = mysqli_real_escape_string($conn, $_POST['email']);
			
		$result_usuario = "SELECT * FROM cliente WHERE email = '$login' && nome = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		if(isset($resultado))
		{
		//	$_SESSION['usuarioCod'] = $resultado['codigo'];
			$_SESSION['nome'] = $resultado['nome'];
		//	$_SESSION['usuariologin'] = $resultado['login'];
		//	$_SESSION['usuarioSenha'] = $resultado['senha'];
		//	$_SESSION['usuarioEmail'] = $resultado['email'];
	
		//  aqui abaixo carregar a página de Principal
			header("Location: bad.html");
	  
		}
		
		else
		{	
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: login.php");
		}
	}
	else
	{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: login.php");
	}
?>
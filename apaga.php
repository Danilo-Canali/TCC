<?php
session_start();
include_once("conexao.php");
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
if(!empty($codigo)){
	$result_usuario = "DELETE FROM cliente WHERE codigo='$codigo'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>cliente excluído com sucesso</p>";
		header("Location: exe_listar3.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro! O cliente não foi excluído</p>";
		header("Location: exe_listar3.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um cliente</p>";
	header("Location: exe_listar3.php");
}
?>
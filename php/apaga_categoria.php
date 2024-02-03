<?php
session_start();
include_once("conexao.php");
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
if(!empty($codigo)){
	$result_ = "DELETE FROM categoria WHERE Cod_categoria='$codigo'";
	$resultado_ = mysqli_query($conn, $result_);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Categoria excluída com sucesso</p>";
		header("Location: exe_listar9.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro! O Categoria não foi excluída</p>";
		header("Location: exe_listar9.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um Categoria</p>";
	header("Location: exe_listar9.php");
}
?>
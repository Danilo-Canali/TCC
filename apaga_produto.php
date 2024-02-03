<?php
session_start();
include_once("conexao.php");
$id_produ = filter_input(INPUT_GET, 'id_produ', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id_produ)){
	$result_produto = "DELETE FROM produto WHERE id_produ='$id_produ'";
	$resultado_produto = mysqli_query($conn, $result_produto);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>produto excluído com sucesso</p>";
		header("Location: exe_listar3.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro! O produto não foi excluído</p>";
		header("Location: exe_listar3.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um produto</p>";
	header("Location: exe_listar3.php");
}
?>
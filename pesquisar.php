<?php
	session_start();
	include_once("conexao.php");
	
	$pesquisar = $_POST['pesquisar'];
	$result_produtos = "SELECT * FROM produtos WHERE nm_produ LIKE '%$pesquisar%' LIMIT 5";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	
	while($rows_produtos = mysqli_fetch_array($resultado_produtos)){
		echo "Categoria: ".$rows_produtos['nm_produ']."<br>";
	}
?>
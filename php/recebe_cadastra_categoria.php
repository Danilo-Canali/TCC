<?php
  session_start();
	include_once("conexao.php");


$nome = $_POST['nome'];

$result_categoria = "INSERT INTO categoria (Nome_categoria) VALUES ('$nome')";
$resultado_categoria = mysqli_query($conn, $result_categoria);

if($conn)
{
	$_SESSION['msg'] = "<p style='color:green;'> Categoria cadastrado com sucesso</p>";
	header("Location: categoria.php");
}
else
{
	$_SESSION['msg'] = "<p style='color:red;'> A Categoria não foi cadastrado com sucesso</p>";
	header("Location: categoria.php");
}
?>
<?php
  session_start();
	include_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$cpf = $_POST['cpf'];
$rua = $_POST['rua'];
$nascimento = $_POST['nascimento'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];


$sql ="INSERT INTO cliente (nome, email, senha, celular, cpf, rua, nascimento, cidade, bairro, numero, cep, estado)
VALUES ('$nome','$email','$senha','$celular','$cpf','$rua','$nascimento','$cidade','$bairro','$numero','$cep','$estado')";

if($conn->query($sql) === TRUE)
{
	$_SESSION['msg'] = "<p style='color:green;'>Cadastrado com sucesso</p>";
	header("Location: cadastro_cliente.php");
}
else
{
	echo" Erro na inserção: " . $conn->error;
	$_SESSION['msg'] = "<p style='color:red;'> Não foi cadastrado com sucesso</p>";
	header("Location: cadastro_cliente.php");
}
$conn->close();
?>
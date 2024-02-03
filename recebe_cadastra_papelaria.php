<?php
  session_start();
	include_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$cpf = $_POST['cpf'];
$rua = $_POST['rua'];
$nascimento = $_POST['nascimento'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];




$result_aluno = "INSERT INTO cliente (nome, email,senha, celular, cpf, rua, nascimento, bairro, numero, cep, estado) VALUES ('$nome','$email','$senha','$celular','$cpf','$rua','$nascimento','$bairro','$numero','$cep','$estado')";
$resultado_aluno = mysqli_query($conn, $result_aluno);

if($conn)
{
	$_SESSION['msg'] = "<p style='color:green;'>Cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}
else
{
	$_SESSION['msg'] = "<p style='color:red;'> O usuario não foi cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}
?>
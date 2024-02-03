<?php
session_start();
include_once("conexao.php");

$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'nascimento');
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE cliente SET nome='$nome', email='$email',senha='$senha',celular='$celular',cpf='$cpf',rua='$rua', bairro='$bairro', numero='$numero', cep='$cep', estado='$estado'  WHERE codigo='$codigo'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: texte.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: texte.php?codigo=$codigo");
}

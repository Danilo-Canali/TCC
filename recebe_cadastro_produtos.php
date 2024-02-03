<?php
  session_start();
	include_once("conexao.php");


$nome = $_POST['nome'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
if(isset($_FILES['img']))
{
  $extensao = strtolower(substr($_FILES['img']['name'], -5));
  $new_nome1 = md5(time()) . $extensao;
  $diretorio = "vitrine/img/";

  move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$new_nome1);
}

//return var_dump( );
$sql = "INSERT INTO produto (nm_produ, estoque, preco, descricao, img)
VALUES ('$nome', '$estoque', '$preco', '$descricao', '$new_nome1')";




if($conn->query($sql) === TRUE)
{
	//$_SESSION['msg'] = "<p style='color:green;'>Cadastrado com sucesso</p>";
	header("Location: cadastro_produtos.php");
}
else
{
	echo" Erro na inserção: " . $conn->error;
	//$_SESSION['msg'] = "<p style='color:red;'> Não foi cadastrado com sucesso</p>";
	header("Location: cadastro_produtos.php");
}
$conn->close();
?>
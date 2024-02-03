<?php
session_start();
include_once("conexao.php");
$id_produ = filter_input(INPUT_GET, 'id_produ', FILTER_SANITIZE_NUMBER_INT);
$result_produtos = "SELECT * FROM produto WHERE id_produ = '$id_produ'";
$resultado_produtos = mysqli_query($conn, $result_produtos);
$row_produtos = mysqli_fetch_assoc($resultado_produtos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
		<hr> <p>
		<a href="BAD.php"> <input type="button"  value="Página Inicial"></a> &nbsp
    	<a href="cadastro_produtos.php"> <input type="button"  value= "Cadastrar"></a> &nbsp 
        <a href="apaga_produto.php"><input type="button"  value="Apagar"></a> &nbsp 
		<p><hr><h1>Editar dados do produtos</h1> <p> <hr>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="editar_produto.php">
			<input type="hidden" name="id_produ" value="<?php echo $row_produtos['id_produ']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_produtos['nm_produ']; ?>"><br><br>
			
			<label>Estoque: </label>
			<input type="estoque" name="estoque" placeholder="Digite o estoque " value="<?php echo $row_produtos['estoque']; ?>"><br><br>

			<label>Preço: </label>
			<input type="text" name="preco" placeholder="Digite o preço do produto" value="<?php echo $row_produtos['preco']; ?>"><br><br>

			<label>Descrição: </label>
			<input type="text" name="descricao" placeholder="Digite a sua descrição" value="<?php echo $row_produtos['descricao']; ?>"><br><br>
			
			

			<input type="submit" value="Editar">
		</form>
	</body>
</html>
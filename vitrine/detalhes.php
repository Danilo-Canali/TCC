<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
<?php include_once("conexao.php");
$id_produ = $_GET['id_produ'];
$result_produtos = "SELECT * FROM produto WHERE id_produ='$id_produ'";
$resultado_produtos = mysqli_query($conn, $result_produtos);
$row_produto = mysqli_fetch_assoc($resultado_produtos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Criar pagina com abas</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Nome: <?php echo $row_produto['nm_produ']; ?> </h1> <br>
				<h1>Estoque: <?php echo $row_produto['estoque']; ?></h1> <br>
				<h1>Preço: <?php echo $row_produto['preco']; ?></h1> <br>
				<h1>Descrição: <?php echo $row_produto['descricao']; ?></h1> <br>
			
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
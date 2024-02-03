
<?php include_once("conexao.php");
$result_produtos = "SELECT * FROM produto";
$resultado_produtos = mysqli_query($conn, $result_produtos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vitrine</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>produtos</h1>
			</div>
			

<div class="container theme-showcase" role="main">
			<!-- <div class="page-header">
				<h1>Produtos</h1>
			</div> -->
			<div class="row">
				<?php while($row_produtos = mysqli_fetch_assoc($resultado_produtos)){ ?>
					<div class="col-sm-6 col-md-4">	
						<div class="thumbnail">
							<img src="img/<?php echo $row_produtos['img']; ?>" alt="..."> 
							<div class="caption text-center">
								<a href="detalhes.php?id_produ=<?php echo $row_produtos['id_produ']; ?>"><h3><?php echo $row_produtos['nm_produ']; ?><br></a>
								
								
								<!-- Colocar mais informações -->
								<!-- <a><?php echo $row_usuario['descricao']; ?><br></a>
								<a>R$ <?php echo $row_usuario['valor']; ?><br></a>
								<a>Quantidade Disponível: <?php echo $row_usuario['estoque']; ?></h3></a> -->

								<hr>


								<!-- <p><a href="#" class="btn btn-primary" role="button">Comprar</a> </p> -->
							</div>
						</div>
					</div>	
				<?php } ?>
			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
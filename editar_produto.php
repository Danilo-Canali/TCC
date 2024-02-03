<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
		<hr> <p>
		<a href="BAD.php"> <input type="button"  value="Página Inicial"></a> &nbsp
		<a class="btn-contained" href= "listar_produto.php"> <input type="button"  value="Listar" ></a> &nbsp
    	<a href="cadastro_produtos.php"> <input type="button"  value= "Cadastrar"></a> &nbsp 
        <a href="apg_produto.php"><input type="button"  value="Apagar"></a> &nbsp 
		<p><hr><h1>Listagem dos produtos</h1> <p> <hr> <h3>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_produtos = "SELECT * FROM produto LIMIT $inicio, $qnt_result_pg";
		$resultado_produtos = mysqli_query($conn, $result_produtos);
		while($row_produto = mysqli_fetch_assoc($resultado_produtos)){
			echo "Código: " . $row_produto['id_produ'] . "<br>";
			echo "Nome: " . $row_produto['nm_produ'] . "<br>";
			echo "Estoque: " . $row_produto['estoque'] . "<br> <br>";
			echo "Descrição: " . $row_produto['descricao'] . "<br>";
			


 			echo "<a href='edit_produto.php?id_produ=" . $row_produto['id_produ'] . "'>Editar</a><br> <hr>";
		
		}
		
		//Paginação - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id_produ) AS num_result FROM produto";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='editar_produto.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='editar_produto.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='editar_produto.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='editar_produto.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>		
	</body>
</html>
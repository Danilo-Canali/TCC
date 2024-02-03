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
		<a href="BAD.html"> <input type="button"  value="Página Inicial"></a> &nbsp
    	<a href="categoria.php"> <input type="button"  value= "Cadastrar"></a> &nbsp 
        <a href= "texte1.php"> <input type="button"  value="Listar" ></a> &nbsp
       <!--  <a href= "exe_listar2.php"> <input type="button"  value="Alterar"></a> &nbsp-->
        <a href="apaga_categoria.php"><input type="button"  value="Apagar"></a> &nbsp 
		<p><hr><h1>Listagem das categorias</h1> <p> <hr> <h3>
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
		
		$result_usuarios = "SELECT * FROM categoria LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_categoria = mysqli_fetch_assoc($resultado_usuarios)){
			echo "Código: " . $row_categoria['Cod_categoria'] . "<br>";
			echo "Nome: " . $row_categoria['Nome_categoria'] . "<br>";
	


 			echo "<a href='edit_
			.php?codigo=" . $row_categoria['Cod_categoria'] . "'>Editar</a><br> <hr>";
		//	echo "<a href='proc_apagar_usuario.php?id=" . $row_categoria['id'] . "'>Apagar</a><br><hr>";
		}
		
		//Paginação - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(Cod_categoria) AS num_result FROM categoria";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='exe_listar2.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='exe_listar2.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='exe_listar2.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='exe_listar2.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>		
	</body>
</html>
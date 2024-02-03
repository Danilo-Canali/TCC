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
    	<a href="cadastro_cliente.php"> <input type="button"  value= "Cadastrar"></a> &nbsp 
        <a href= "texte.php"> <input type="button"  value="Listar" ></a> &nbsp
        <a href= "texte.php"> <input type="button"  value="Listar Dados Completo"></a> &nbsp
         <a href= "editar_aluno.php"> <input type="button"  value="Alterar"></a> &nbsp
       <!-- <a href="exe_listar3.php"><input type="button"  value="Apagar"></a> &nbsp-->
		<p><hr><h1>Listagem dos clientes</h1> <p> <hr> <h3>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantcodigoade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM cliente LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_cliente = mysqli_fetch_assoc($resultado_usuarios)){
			echo "Código: " . $row_cliente['codigo'] . "<br>";
			echo "Nome: " . $row_cliente['nome'] . "<br>";
			echo "E-mail: " . $row_cliente['email'] . "<br> <br>";
			echo "Senha: " . $row_cliente['senha'] . "<br>";
			echo "Celular: " . $row_cliente['celular'] . "<br> <br>";
			echo "CPF: " . $row_cliente['cpf'] . "<br> <br>";
			echo "Rua: " . $row_cliente['rua'] . "<br> <br>";
			echo "Nascimento: " . $row_cliente['nascimento'] . "<br> <br>";
			echo "Bairro: " . $row_cliente['bairro'] . "<br> <br>";
			echo "Número: " . $row_cliente['numero'] . "<br> <br>";
			echo "CEP: " . $row_cliente['cep'] . "<br> <br>";
			echo "Estado: " . $row_cliente['estado'] . "<br> <br>";

 		//	echo "<a href='edit_cliente.php?codigo=" . $row_cliente['codigo'] . "'>Editar</a><br> <hr>";
			echo "<a href='apaga.php?codigo=" . $row_cliente['codigo'] . "'>Apagar</a><br><hr>";
		}
		
		//Paginção - Somar a quantcodigoade de usuários
		$result_pg = "SELECT COUNT(codigo) AS num_result FROM cliente";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantcodigoade de pagina 
		$quantcodigoade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='exe_listar3.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='exe_listar3.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantcodigoade_pg){
				echo "<a href='exe_listar3.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='exe_listar3.php?pagina=$quantcodigoade_pg'>Ultima</a>";
		
		?>		
	</body>
</html>
<?php
session_start();
include_once("conexao.php");
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cliente WHERE codigo = '$codigo'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
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
    	<a href="cadastro_cliente.php"> <input type="button"  value= "Cadastrar"></a> &nbsp 
        <a href= "texte.php"> <input type="button"  value="Listar" ></a> &nbsp
      <!--  <a href= "exe_listar.php"> <input type="button"  value="Listar Dados Completo"></a> &nbsp
         <a href= "exe_listar2.php"> <input type="button"  value="Alterar"></a> &nbsp-->
        <a href="apaga.php"><input type="button"  value="Apagar"></a> &nbsp 
		<p><hr><h1>Editar dados do usuario</h1> <p> <hr>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="editar_aluno.php">
			<input type="hidden" name="codigo" value="<?php echo $row_usuario['codigo']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>

			<label>Senha: </label>
			<input type="text" name="senha" placeholder="Digite a sua senha" value="<?php echo $row_usuario['senha']; ?>"><br><br>

			<label>Celular: </label>
			<input type="text" name="celular" placeholder="Digite o seu contato" value="<?php echo $row_usuario['celular']; ?>"><br><br>
			
			<label>CPF: </label>
			<input type="text" name="cpf" placeholder="Digite o seu CPF" value="<?php echo $row_usuario['cpf']; ?>"><br><br>

			<label>Rua: </label>
			<input type="text" name="rua" placeholder="Digite a sua rua" value="<?php echo $row_usuario['rua']; ?>"><br><br>

			<label>Nascimento: </label>
			<input type="date" name="nascimento" placeholder="Digite sua data de nascimento" value="<?php echo $row_usuario['nascimento']; ?>"><br><br>

			<label>Bairro: </label>
			<input type="text" name="Bairro" placeholder="Digite o seu Bairro" value="<?php echo $row_usuario['bairro']; ?>"><br><br>

			<label>Número: </label>
			<input type="numeric" name="número" placeholder="Digite o número de casa" value="<?php echo $row_usuario['numero']; ?>"><br><br>

			<label>CEP: </label>
			<input type="numeric" name="cep" placeholder="Digite seu CEP" value="<?php echo $row_usuario['cep']; ?>"><br><br>

			<label>Estado: </label>
			<input type="text" name="estado" placeholder="Digite o seu estado" value="<?php echo $row_usuario['estado']; ?>"><br><br>

			<input type="submit" value="Editar">
		</form>
	</body>
</html>
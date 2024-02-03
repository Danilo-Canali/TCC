<?php
	session_start();	
	include_once("conexao_adm.php");
  $cod_prod = filter_input(INPUT_GET, "cod_prod", FILTER_SANITIZE_NUMBER_INT);
  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="utf-8"> 
  </head>

  <style>
body {
  background-image: url('fundo.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.button {
  background-color: lightgrey; /* Green */
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  border-radius: 12px;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  border-radius: 12px;
}
</style>

  <body >

   <form  method="POST" action="saida_form.php?cod_prod=<?php echo $cod_prod; ?>">
        <center><h1><p><br><p><br><p><br> Login do Cliente </h1><p><p><br>
<h2> 
        <label for="nome" > Nome </label>
        <input type="nome" name="nome" id="nome"  placeholder="Nome" required autofocus> <p>
        <label for="email" > Email </label>
        <input type="email" name="email" id="email"  placeholder="Email" required autofocus> <p>
        <label for="senha" > Senha </label>
        <input type="password" name="senha" id="senha"  placeholder="Senha" required autofocus> <br><br>
        <button  type="submit"> Acessar </button>
      </form>
      <br>
      Não tem cadastro? 
<a href="cadastrarbtnLoginCli.php?cod_prod=<?php echo $cod_prod; ?>">cadastre-se</a>
<br>
Ao continuar com o acesso, você concorda com a nossa política de privacidade
	  <p>
		<?php 
		   if(isset($_SESSION['loginErro'])){
        $cod_prod = filter_input(INPUT_GET, "cod_prod", FILTER_SANITIZE_NUMBER_INT);
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
		    }
		?>
		</p> <p>
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
  
<p>
 <button class="button button2"><a href="vitrine.php">Voltar à página anterior</a></button>
<p>
  </body>
</html>

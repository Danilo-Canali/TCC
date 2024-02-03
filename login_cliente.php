<?php
	session_start();	
	include_once("conexao.php");
  $id_produ = filter_input(INPUT_GET, "id_produ", FILTER_SANITIZE_NUMBER_INT);
  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="utf-8"> 
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/fonts-icones.css" />

  </head>

  <style>
    body{
      background: #FFF5EE;
    }


</style>

  <body >

   <form  method="POST" class="w3-container" action="saida_form.php?id_produ=<?php echo $id_produ; ?>">
        <center><h1><p><br><p><br><p><br> Login do Cliente </h1><p><p><br>
<h2> 
<p>      
    <label class="w3-text-brown"><b>Nome:</b></label> 
    <input class="w3-input w3-border w3-sand" required name="nome" type="text" style="width: 50%"></p>
    <p> 
    <p>      
    <label class="w3-text-brown"><b>Email:</b></label>
    <input class="w3-input w3-border w3-sand" required name="email" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Senha:</b></label>
    <input class="w3-input w3-border w3-sand" required name="senha" type="password" style="width: 50%"></p>
    <p>
        
    <button class="w3-btn w3-" type="submit">Acessar</button></p>
      </form>
      <br>
      Não tem cadastro? 
<a href="cadastro.php?id_produ=<?php echo $id_produ; ?>">cadastre-se</a>
<br>
Ao continuar com o acesso, você concorda com a nossa política de privacidade
	  <p>
		<?php 
		   if(isset($_SESSION['loginErro'])){
        $id_produ = filter_input(INPUT_GET, "id_produ", FILTER_SANITIZE_NUMBER_INT);
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

aaa
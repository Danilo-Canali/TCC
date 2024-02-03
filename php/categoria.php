<?php
  session_start();
	include_once("conexao.php");
  ?>
 <!DOCTYPE html>
 <html lang             = "pt-br">
     <head>
        <meta charset   = "UTF-8">
         <!-- Fonte de texto -->
        <link
      href              = "https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900"
      rel               = "stylesheet">
          <!-- Estilo CSS-->
    <link rel           = "stylesheet" href="navbar.css">
    <link rel           = "stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body> <p><hr> <p>

   
      <?php
          if(isset($_SESSION['msg']))
          {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
      ?>  
          <div class    = "w3-card-4">
  <div class            = "w3-container w3-white">
    <center>
    <h2>Cadastro de Categoria</h2> 
        </center>
        <a href         = "BAD.html"> <input type="button"  value="Página Inicial"></a> &nbsp
        <a href="apaga_categoria.php"><input type="button"  value="Apagar"></a> &nbsp 
        <a href="texte1.php"><input type="button"  value="Listar"></a> &nbsp 
        <a href="editar_categoria.php"><input type="button"  value="Alterar"></a> &nbsp 
  </div>
  <form method          = "POST"class="w3-container" action="recebe_cadastra_categoria.php">
  <p>      
    <label class        = "w3-text-brown"><b>Nome:</b></label>
    <input class        = "w3-input w3-border w3-sand" name="nome" type="text"></p>
    <p>     
    <button class       = "w3-btn w3-" type="submit">Cadastrar</button></p>
  </form>
  </div>


      </form> 
       
     <hr> <p> 
      

    </body>
    </html>

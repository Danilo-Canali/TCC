<?php
  session_start();
	include_once("conexao.php");
  ?>
 <!DOCTYPE html>
 <html lang="pt-br">
     <head>
        <meta charset="UTF-8">
         <!-- Fonte de texto -->
        <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900"
      rel="stylesheet">
          <!-- Estilo CSS-->
    <link rel="stylesheet" href="navbar.css"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    

   </head>
          <style>
            h1{
             text-align="center"
            }
          </style> 

   <body> <p><hr> <p>
      <?php
          if(isset($_SESSION['msg']))
          {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
      ?>    
        
        
        
          <div class="w3-card-4">
  <div class="w3-container w3-white">
    <center>
    <h2>Cadastro de Produtos</h2> 
    <a href="BAD.php"> <input type="button"  value="Página Inicial"></a> &nbsp
    <a class="btn-contained" href= "listar_produto.php"> <input type="button"  value="Listar" ></a> &nbsp
    <a href="editar_produto.php"> <input type="button"  value="Editar Produtos"></a> &nbsp
    <a href="apg_produto.php"> <input type="button"  value="Excluir Produtos"></a> &nbsp 

    </center>
  </div>
  <form method="POST" enctype="multipart/form-data" class="w3-container" action="recebe_cadastro_produtos.php">
    <center>
    
    <p>      
    <label class="w3-text-brown"><b>Nome:</b></label> 
    <input class="w3-input w3-border w3-sand" required name="nome" type="text" style="width: 50%"></p>
    <p>      
    <label class="w3-text-brown"><b>Estoque:</b></label>
    <input class="w3-input w3-border w3-sand" required name="estoque" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Preço:</b></label>
    <input class="w3-input w3-border w3-sand" required name="preco" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Descrição:</b></label>
    <input class="w3-input w3-border w3-sand" required name="descricao" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Imagem:</b></label>
    <input class="w3-input w3-border w3-sand" required name="img" type="file" style="width: 50%"></p>
    <p>
    

    <button class="w3-btn w3-" type="submit">Cadastrar</button></p>
        </center>
  </form>

       
     <hr> <p> 
      

    </body>
    </html>
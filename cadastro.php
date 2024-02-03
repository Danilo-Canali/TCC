<?php
  session_start();
	include_once("conexao.php");
  $cod_produ = filter_input(INPUT_GET, "cod_produ", FILTER_SANITIZE_NUMBER_INT);
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
             text-aling="cen"
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
    <h2>Cadastro de Usuário</h2> 
    <a href="BAD.php"> <input type="button"  value="Página Inicial"></a> &nbsp
    </center>
  </div>
  <form method= "POST"class="w3-container" action="recebe_cadastra_papelaria.php">
    <center>
    
    <p>      
    <label class="w3-text-brown"><b>Nome:</b></label> 
    <input class="w3-input w3-border w3-sand" name="nome" type="text" style="width: 50%"></p>
    
    <p>      
    <label class="w3-text-brown"><b>Email</b></label>
    <input class="w3-input w3-border w3-sand" name="email" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Senha</b></label>
    <input class="w3-input w3-border w3-sand" name="senha" type="password" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Número de celular</b></label>
    <input class="w3-input w3-border w3-sand" name="celular" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>CPF</b></label>
    <input class="w3-input w3-border w3-sand" name="cpf" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Rua</b></label>
    <input class="w3-input w3-border w3-sand" name="rua" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Data de nascimento</b></label>
    <input class="w3-input w3-border w3-sand" name="nascimento" type="date" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Bairro</b></label>
    <input class="w3-input w3-border w3-sand" name="bairro" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Número da casa</b></label>
    <input class="w3-input w3-border w3-sand" name="numero" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>CEP</b></label>
    <input class="w3-input w3-border w3-sand" name="cep" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Estado</b></label>
    <input class="w3-input w3-border w3-sand" name="estado" type="text" style="width: 50%"></p>
    <p>
    <button class="w3-btn w3-" type="submit">Cadastrar</button></p>
        
        <p><br>

 <button class="button"><a href="login_cliente.php?cod_prod=<?php echo $cod_produ; ?>">Voltar à página anterior</a></button>
<p>
</center>
  </form>
</div>


      </form> 
       
     <hr> <p> 
      

    </body>
    </html>
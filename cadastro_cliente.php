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
    <link rel="stylesheet" href="estilo.css"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    

   </head>
        

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
  <form method= "POST"class="w3-container" action="recebe_cadastro_cliente.php">
    <center>
    
    <p>      
    <label class="w3-text-brown"><b>Nome:</b></label> 
    <input class="w3-input w3-border w3-sand" required name="nome" type="text" style="width: 50%"></p>
    <p>    
    <label class="w3-text-brown"><b>Email</b></label>
    <input class="w3-input w3-border w3-sand" requeired name="email" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Senha</b></label>
    <input class="w3-input w3-border w3-sand" name="senha" type="password" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Número de celular</b></label>
    <input class="w3-input w3-border w3-sand" required name="celular" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>CPF</b></label>
    <input class="w3-input w3-border w3-sand" required name="cpf" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Data de nascimento</b></label>
    <input class="w3-input w3-border w3-sand" required name="nascimento" type="date" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Cidade</b></label>
    <input class="w3-input w3-border w3-sand" required name="cidade" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Rua</b></label>
    <input class="w3-input w3-border w3-sand" required name="rua" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Bairro</b></label>
    <input class="w3-input w3-border w3-sand" required name="bairro" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>Número da casa</b></label>
    <input class="w3-input w3-border w3-sand" required name="numero" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>CEP</b></label>
    <input class="w3-input w3-border w3-sand" required name="cep" type="text" style="width: 50%"></p>
    <p>
    <p>      
    <label class="w3-text-brown"><b>UF</b></label>
    <input class="w3-input w3-border w3-sand" required name="estado" type="text" style="width: 50%"></p>
    <p>
    <button class="w3-btn w3-" type="submit">Cadastrar</button></p>
        </center>
  </form>
</div>


      </form> 
       
     <hr> <p> 
      

    </body>
    </html>
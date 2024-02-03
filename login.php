<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-card-4">
  <div class="w3-container w3-white">
    <center>
      <h2>Login</h2> 
      <a href="BAD.php"> <input type="button" value="Voltar"></a> &nbsp; <p>
      <p>
 <button class="button button2"><a href="login.php">Atualizar a página</a></button>
<p>
      <?php
      session_start();
      include_once("conexao.php");

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $email = $_POST['email']; // valor do campo de entrada de email
          $nome = $_POST['nome']; // valor do campo de entrada de senha
          $sql = "SELECT * FROM cliente WHERE email = ? AND nome = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("ss", $email, $nome);
          $stmt->execute();

          $resultado = $stmt->get_result();

          if ($resultado->num_rows > 0) {
              // Login válido
              echo "Login efetuado";
          } else {
              // Login inválido
              echo "Login incorreto";
          }
          
          $stmt->close();
      }
      mysqli_close($conn);
      ?>
      <form  method="POST" action="verifica_senha.php">
        <p>      
          <label class="w3-text-brown"><b>Email:</b></label>
          <input class="w3-input w3-border w3-sand" name="email" type="text"></p>
        <p>      
          <label class="w3-text-brown"><b>Senha:</b></label>
          <input class="w3-input w3-border w3-sand" name="nome" type="password"></p>
        <p>
          <input type="submit" value="Login">
        </p>
      </form>
      <?php 
		   if(isset($_SESSION['loginErro'])){
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
  

    </center>
  </div>
</div>
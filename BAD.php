<?php
  session_start();
	include_once("conexao.php");
  $result_produtos = "SELECT * FROM produto";
$resultado_produtos = mysqli_query($conn, $result_produtos);
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Angel Stars</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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

    <!-- Fonte de texto -->

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900"
      rel="stylesheet"
    />
    <!-- Estilo CSS-->
    <link rel="stylesheet" href="estilo.css" />
    <style>
   
    </style>
  </head>
  <body bgcolor="#FFFAF0">
    <header>
      <div class="container">
        <div class="nav-menu">
          <img src="refazer.png" alt="Logo site" width="8%" />


          <div class="search-box">
            <form method="POST" action="pesquisar.php">
              <input
                type="text"
                class="search-box-input"
                name="pesquisar"
                placeholder="Faça sua Pesquisa"
              />
              <button class="search-box-button">
                <i class="search-box-icone icon icon-search"></i>
              </button>
            </form>
          </div>

  <div class="dropdown">
  <button class="btn-contained">ADM</button>
  <div class="dropdown-content">
        <a class="btn-contained" href="texte.php"> Listar Cliente </a> <p>
        <a class="btn-contained" href="listar_produto.php"> Listar produto </a> <p>
        


        </div>
        </div>
        <a class="btn-contained" href="vitrine.php">  Produtos </a> <p>
        <a class="btn-contained" href="cadastro_cliente.php">Cadastre-se</a>
        <a class="btn-void" href="login_cliente.php">Login</a>
        </div>
      </div>
</header>
    <hr>
    <div class="w3-display-container w3-container">
      <center>
      <img src="seja.gif" alt="Logo" style="width: 90%" height="450" />
    </center>
      <div class="w3-display-topleft w3-text-white" style="padding: 24px 48px">
        <h1 class="w3-jumbo w3-hide-small"></h1>
        <h1 class="w3-hide-large w3-hide-medium"></h1>
        <h1 class="w3-hide-small"></h1>
      </div>
    </div>
    <hr>
      <!-- Product grid -->
      
      
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- Subscribe section -->
    <div class="w3-container w3-black w3-padding-32">
      <center>     
       <h1>Inscreva-se</h1>
       <p>Para obter ofertas especiais e tratamento VIP:</p>
       <p>
        
       </p>
         <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">inscrever-se</a> 
      </center>   
      </div>


    <!-- Footer -->
    <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
      <div class="w3-row-padding">
        <div class="w3-col s4 w3-center">
          <h4>Sobre</h4>
          <p><a href="#">Sobre Nós </a></p>
          <p><a href="#">Estamos Contratando</a></p>
          <p><a href="#">Apoiar</a></p>
          <p><a href="#">Encontrar a Loja</a></p>
          <p><a href="#">Envio</a></p>
          <p><a href="#">Pagamento</a></p>
          <p><a href="#">Cartão Presente</a></p>
          <p><a href="#">Retomar</a></p>
          <p><a href="#">Ajuda</a></p>
        </div>

        <div class="w3-col s4 w3-right">
          <h4>Loja</h4>
          <p><i class="fa fa-fw fa-map-marker"></i> Angel Stars</p>
          <p><i class="fa fa-fw fa-phone"></i> (18) 99832-4592</p>
          <p><i class="fa fa-fw fa-envelope"></i> Angelstarsbus@gmail.com</p>
          <h4>Nós aceitamos</h4>
          <p><i class="fa fa-fw fa-cc-amex"></i> Pix</p>
          <p><i class="fa fa-fw fa-credit-card"></i> Cartão de crédito</p>
          <br>
          <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
          <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
          <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
          <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
          <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
          <br>
          <br>
        </div>
      </div>
    </footer>

    <!-- Newsletter Modal -->
    <div id="newsletter" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom" style="padding: 32px">
        <div class="w3-container w3-white w3-center">
          <i
            onclick="document.getElementById('newsletter').style.display='none'"
            class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge">
          </i>
         
          <h2 class="w3-wide">BOLETIM DE PROMOÇÕES</h2>
          <p>
            Junte-se à nossa lista de envios para receber atualizações sobre
            novidades e ofertas especiais.
          </p>
          <p>
            <input
              class="w3-input w3-border"
              type="text"
              placeholder="Enter e-mail">

          </input>
          </p>
          <button
            type="button"
            class="w3-button w3-padding-large w3-red w3-margin-bottom"
            onclick="document.getElementById('newsletter').style.display='none'">
             Inscreva-se
          </button>
       
        </div>
      </div>
    </div>

    <script>
      // Accordion
      function myAccFunc() {
        var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else {
          x.className = x.className.replace(" w3-show", "");
        }
      }

      // Click on the "Jeans" link on page load to open the accordion for demo purposes
      document.getElementById("myBtn").click();

      // Open and close sidebar
      function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
      }

      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
  </body>
</html>

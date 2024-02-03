<?php
session_start();
//ob_start();
include_once './conexao_adm.php';
$cod_prod = filter_input(INPUT_GET, "cod_prod", FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar-se</title>
        <style>
body 
{
  background-image: url('fundo3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
title
{
  text-decoration-color: white;
}

.button
{
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
  float: center;
  justify-content: center;
  align-items: center;

}
.button:hover 
{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  border-radius: 12px;


}
        </style>
    </head>

       
        <h1><center>Cadastrar</h1>
        <h3>
        <div align="center">
        <?php 
                       
         if(isset($_SESSION['msg']))
         {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
         }
        ?>

        <form name="CadCliente" method="POST" action="recebe_clienteLogin.php?cod_prod=<?php echo $cod_prod; ?>">
            <label><center> Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" >
            <br><br>
            <label><center>CPF: </label>
            <input type="text" name="CPF" id="CPF" placeholder="Informe o CPF" >
            <br><br>
            <label><center>Email: </label>
            <input type="email" name="email" id="email"  >
            <br><br>
            <label><center>Senha: </label>
           <input type="password" name="senha" id="senha" placeholder="Informe a senha" >
            <br><br>
            <label><center>Estado: </label>
            <input type="text" name="estado" id="estado" placeholder="" >
            <br><br>
            <label><center>Cidade: </label>
            <input type="text" name="cidade" id="cidade" placeholder="" >
            <br><br>
            <label><center>Bairro: </label>
            <input type="text" name="bairro" id="bairro" placeholder=" ">
            <br><br>
            <label><center>Rua: </label>
            <input type="text" name="rua" id="rua" placeholder=" " >
            <br><br>
            <label><center>Número: </label>
            <input type="number" name="numero" id="numero" placeholder=" " >
            <br><br>

            <input type="submit" value="Cadastrar" name="CadCliente">
        </form>

    </body>
<p><br>

 <button class="button"><a href="login_cliente.php?cod_prod=<?php echo $cod_prod; ?>">Voltar à página anterior</a></button>
<p>
</html>
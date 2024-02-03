<?php
session_start();
include_once './conexao_adm.php';
$cod_prod = filter_input(INPUT_GET, "cod_prod", FILTER_SANITIZE_NUMBER_INT);

    //Receber os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);

    $result_cod_cli = "INSERT INTO tb_cliente(nome, CPF, email, senha, estado, cidade, bairro, rua, numero) VALUES ('$nome', '$CPF', '$email', '$senha', '$estado', '$cidade', '$bairro', '$rua', '$numero')";


     $resultado = mysqli_query($conn, $result_cod_cli);

     if(mysqli_insert_id($conn))
     {
        //$_SESSION['msg'] = "<p style='color:white;'>Cliente cadastrado com sucesso</p>";
         header("Location: login_cliente.php?cod_prod=$cod_prod");
     }
     else
     {
    //$_SESSION['msg'] = "<p style='color:red;'>O Cliente não foi cadastrado com sucesso</p>";
   header("Location: cadastrarbtn.php");
}

   


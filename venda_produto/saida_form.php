
<center>
<?php
    session_start();
  //ob_start();
        
    include_once("conexao_adm.php");
    $cod_prod = filter_input(INPUT_GET, "cod_prod", FILTER_SANITIZE_NUMBER_INT);
        
    if((isset($_POST['email'])) && (isset($_POST['senha'])))
    {
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $usuario = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
            
        $result_usuario = "SELECT cod_cli, nome, CPF, email, senha, estado, cidade, bairro, rua, numero FROM tb_cliente WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        if(isset($resultado))
        {
      
          //  $_SESSION['usuarioNome'] = $resultado['nome'];
            $nome = $resultado['nome'];
            $CPF = $resultado['CPF'];
            $estado = $resultado['estado'];
            $cidade = $resultado['cidade'];
            $bairro = $resultado['bairro'];
            $rua = $resultado['rua'];
            $numero = $resultado['numero'];
        
        }
        
        else
            
        {   
            $_SESSION['loginErro'] = "<font color='red'>Usuário ou senha Inválido";
           
            header("Location: login_cliente.php?cod_prod=$cod_prod");  
        }
    }
    else
    {
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: login_cliente.php?cod_prod=$cod_prod"); 
    }


$cod_prod = filter_input(INPUT_GET, "cod_prod", FILTER_SANITIZE_NUMBER_INT);
if (empty($cod_prod)) {
    //header("Location: vitrine.php");
    header("Location: login_cliente.php?cod_prod=$cod_prod");
    die("Erro: página encontrada!<br>");
}

include_once './conexao_adm.php';
/*include_once './config.php';*/

// Pesquisar a informações do produto BD
$query_products = "SELECT cod_prod, nome, marca, modelo, cor, tamanho, quantidade, preco, imagem FROM tb_produto WHERE cod_prod =:cod_prod LIMIT 1";
 
$result_products = $con2->prepare($query_products);
$result_products->bindParam(':cod_prod', $cod_prod, PDO::PARAM_INT);
$result_products->execute();
if ($result_products->rowCount() == 0) {
    header("Location: vitrine.php");
    die("Erro: página não encontrada!<br>");
}
$row_product = $result_products->fetch(PDO::FETCH_ASSOC);
extract($row_product);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="wcod_prodth=device-wcod_prodth, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="./banco_imagens/$cod_prod/$imagem" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Formulario </title>
    </head>
    <body>        

        <?php
        include_once './menu_vitrine.php';

        //Receber os dados do formulário
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        // A variável recebe a mensagem de erro
        $msg = "";

        // Acessar o IF quando o usuário clica no botão
        if (isset($data['BtnPicPay'])) {
            //var_dump($data);
            $empty_input = false;
            $data = array_map('trim', $data);
            if (in_array("", $data)) {
                $empty_input = true;
                $msg = "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher todos os campos!</div>";
            } 
            elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) 
            {
                $empty_input = true;
                $msg = "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher com e-mail válido!</div>";
            }

            // Acessa o IF quando não há nenhum erro no formulário
            if (!$empty_input) {
                //Data para salvar no BD e enviar para o PicPay
                $data['created'] = date('Y-m-d H:i:s');
                $data['due_date'] = date('Y-m-d H:i:s', strtotime($data['created'] . '+3days'));
                $due_date = date(DATE_ATOM, strtotime($data['due_date']));
                //Salvar os dados da compra no banco de dados
                

                    //Iniciar cUrl
            //        $ch = curl_init();

// URL de requisição no PicPay
                    curl_setopt($ch, CURLOPT_URL, 'https://appws.picpay.com/ecommerce/public/payments');

// Paramêtro de resposta
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Enviar o parâmetro referente ao SSL
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Enviar dados da compra
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_buy));

// Enviar os headers
                    $headers = [];
                    $headers[] = 'Content-Type: application/json';
                    $headers[] = 'x-picpay-token:' . PICPAYTOKEN;
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Realizar a requisição
                    $result = curl_exec($ch);

// Fechar a conexão
                    curl_close($ch);

// Ler o conteúdo da resposta
                    $data_result = json_decode($result);

// Imprimir o conteúdo da resposta
                    //var_dump($data_result);

                    if (isset($data_result->code) AND $data_result->code != 200) {
                        $msg = "<div class='alert alert-danger' role='alert'>Erro: Tente novamente!</div>";
                    } 
                    else 
                    {   
                       
                        ?>
                        <div class="modal-footer">

                        </div>
                                
                        <?php
                    }
                } else {
                    $msg = "<div class='alert alert-danger' role='alert'>Erro: Tente novamente!</div>";
               }
            }
        ?>

        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="banco_imagens/logo4.png" alt="" wcod_prodth="72" height="72">
                <h2>Formulário de Pagamento</h2>
                <p class="lead"></p>
            </div>

           
        </div>

            <div class="row mb-5">
                <div class="col-md-4">
                    <h3><?php echo $nome; ?></h3>
                </div>
                <div class="col-md-4">
                    <div class="mb-1 text-muted"><?php echo ("R$ ");echo number_format($preco, 2, ",", "."); ?>
                        
                </div>

                </div>  
<form method="POST" action="pdf_teste.php?cod_prod=<?php echo $cod_prod; ?>">

                <div class="col-md-4" >
                           <label for="qtd">Quantidade</label>
                            <input type="number" name="qtd" id="qtd" placeholder="Quantidade" value="1"> 
                </div>                               
           </div>

            <hr>

            <div class="row mb-5">
                <div class="col-md-12">
                    <h4 class="mb-3">Informações Pessoais</h4>
                    <?php
                    if (!empty($msg)) {
                        echo $msg;
                        $msg = "";
                    }
                    ?>
                    
                        <div class="form-row">
                            <div class="form-group col-md-6">

                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" value="<?php
                                if (isset($data['nome'])) {
                                    echo $data['nome'];
                                }
                                ?>" autofocus >
                            </div>

                            <div class="form-group col-md-6">

                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite o seu melhor e-mail" value="<?php
                                if (isset($data['email'])) {
                                    echo $data['email'];
                                }
                            ?>" autofocus>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="CPF" class="form-control" placeholder="Somente número do CPF" maxlength="14" oninput="maskCPF(this)" value="<?php
                               if (isset($resultado['CPF'])) {
                                    echo $CPF;
                                }
                                ?>" autofocus>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="estado">Estado</label>
                                <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado" maxlength="2" value="<?php
                                if (isset($resultado['estado'])) {
                                    echo $estado;
                                }
                                ?>" autofocus>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade</label>
                                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" value="<?php
                                if (isset($resultado['cidade'])) 
                                {
                                    echo $cidade;
                                }
                                ?>" autofocus >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="bairro">Bairro</label>
                                <input type="text" name="bairro" id=" bairro" class="form-control" placeholder="Digite o seu bairro" value="<?php
                                    if (isset($resultado['bairro'])) 
                                    {
                                        echo $bairro;
                                    }
                                    ?>" autofocus>
                        </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="rua">Rua</label>
                                <input type="text" name="rua" id="rua" class="form-control" placeholder="Insira o nome de sua rua" value="<?php
                                     if (isset($resultado['rua'])) 
                                     {
                                         echo $rua;
                                     }
                                     ?>" autofocus >
                            </div>

                            <div class="form-group col-md-6">
                            <label for="numero">Número</label>
                            <input type="text" name="numero" id="numero" class="form-control" placeholder="Número" value="<?php
                                if (isset($resultado['numero'])) 
                                {
                                    echo $numero;
                                }
                                ?>" autofocus>
                        </div>
                        </div>

                        <button type="submit" name="BtnPicPay" class="btn btn-info" value="Enviar" > Confirmar </button></a>
                    </form>

                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="js/custom.js"></script>

        <?php
        if (isset($data_result->paymentUrl)) {
            ?>
            <script>
                $(document).ready(function () {
                    $('#picpay').modal('show');
                });
            </script>
            <?php
        }
        ?>

    </body>
</html>


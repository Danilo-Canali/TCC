<?php
$cod_prod = filter_input(INPUT_GET, "cod_prod", FILTER_SANITIZE_NUMBER_INT);

include_once './conexao_adm.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="shortcut icon" href="images/icon/favicon.ico" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Visualizar Produtos</title>

<style> 

        img.card-img-top
        {
        height: 280x;
        width: 260px;
        }
        </style>

    </head>
    <body>
        <?php
        include_once './menu_vitrine.php';
        
      $query_products = "SELECT cod_prod, nome, marca, modelo, cor, tamanho, quantidade, preco, imagem FROM tb_produto WHERE cod_prod =:cod_prod LIMIT 1";

        $result_products = $con2->prepare($query_products);
        $result_products->bindParam(':cod_prod', $cod_prod, PDO::PARAM_INT);
        $result_products->execute();
        $row_product = $result_products->fetch(PDO::FETCH_ASSOC);
        extract($row_product);
        ?>
        <div class="container">
            <h1 class="display-4 mt-5 mb-5"><?php echo $nome; ?></h1>
            <div class="row">
                <div class="col-md-6">
                <img src='<?php echo "./imagens/$cod_prod/$imagem"; ?>' class="card-img-top">
                </div>

                <div class="col-md-6">
                    <p><h1>R$ <?php echo number_format($preco, 2, ",", "."); ?></h1></p>
                    <p>

                        <a href="login_cliente.php?cod_prod=<?php echo $cod_prod; ?>" class="btn btn-info">Comprar</a>

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5">
                <h4>
                    Nome: <?php echo $nome; ?> <br>
                    Marca: <?php echo $marca; ?> <br>
                    Modelo: <?php echo $modelo; ?> <br>
                    Cor: <?php echo $cor ?> <br>
                    Tamanho: <?php echo $tamanho ?> <br>
                    Quantidade: <?php echo $quantidade ?> <p>
                </h4>

                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>
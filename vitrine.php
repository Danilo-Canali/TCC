<?php
include_once("conexao.php");
$cod_produ = filter_input(INPUT_GET, "cod_produ", FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--conferir-->
        <link rel="shortcut icon" href="C:\wamp64\www\hoje\29-05\imagens" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <style> 

        img.card-img-top{
        height: 315px;
        }

        .card 
        {
            width: 300px;
        }
        </style>

        <title>Produtos</title>
    </head>
    <body>
        <?php

       // include_once './menu_vitrine.php';
        ?>
        <div class="container"> 
            <center>
            <h3 class="display-4 mt-5 mb-5">Produtos</h3>
            <a href="BAD.php" > <button class="btn btn-info"> Voltar</button> </a>
            <p>
    </center>
            <?php
            $query_products = "SELECT id_produ, nm_produ, estoque, preco, descricao, img FROM produto ORDER BY id_produ ASC";
            $result_products = $conn2->prepare($query_products);
            $result_products->execute();
            ?>
            <div class="row row-cols-1 row-cols-md-3">
                <?php
                while ($row_product = $result_products->fetch(PDO::FETCH_ASSOC)) {
                    extract($row_product);
                    ?>
                    <div class="col mb-4 text-center">
                        <div class="card">
                            <img src='<?php echo "vitrine/img/$img"; ?>' class="card-img-top" alt="..." width="">

                            

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nm_produ; ?></h5>
             
                                

                                <p class="card-text">Estoque: <?php echo $estoque; ?></p>
                                <p class="card-text">Descricao: <?php echo $descricao; ?></p>
                                
                                
                                <p class="card-text">R$ <?php echo number_format($preco, 2, ",", "."); ?></p>

                            <!-- pra onde vai o botão -->
                                <a href="ver_produto.php?id_produ=<?php echo $id_produ; ?>" class="btn btn-info">Detalhes</a>


                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <script src="func.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    </head>
    <body>
         <!--Menu-->
         
        <?php
            include('menu.html');
        ?>
        <div class="container-fluid">
        <header>
            <h2>Produtos</h2>    
        </header>
        </div>
        <hr>
        <br><br>
        
        <section class="categorias">
            <div class="container">
                <ol class="list-group">
                    <li class="list-group-item bg-danger text-white"><h3>Categorias</h3></li>
                    <li class="list-group-item" onclick="exibir_todos()">Todos (12)</li>
                    <li class="list-group-item" onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                    <li class="list-group-item" onclick="exibir_categoria('fogao')">Fogões (2)</li>
                    <li class="list-group-item" onclick="exibir_categoria('microondas')">Microondas (3)</li>
                    <li class="list-group-item" onclick="exibir_categoria('lavaroupa')">Lavadoura de roupas (2)</li>
                    <li class="list-group-item" onclick="exibir_categoria('lavalouca')">Lava-louças (2)</li>
                    <li class="list-group-item"><a href="pedido.php" style="text-decoration: none; color: black;">Faça seu pedido</a></li>
                </ol>
            </div>
        </section>
                
            <?php
                $dados_json = file_get_contents("http://localhost/fullstackeletro/getContent.php?table=produtos");

                $dados = json_decode($dados_json, true);
                    
                foreach($dados as $key => $rows){
            ?>
            <div class="box_produtos" id="<?php echo $rows["categorias"]; ?>" style="display:block;">
                    <img src="<?php echo $rows["imagens"]; ?> " width="120px" onmousemove="destaque(this)">
                   <br>
                   <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                   <hr>
                   <p class="descricao"><strike><?php echo $rows["preco"]; ?></strike></p>
                   <p class="preco"><?php echo $rows["precofinal"]; ?></p>
                </div>
            <?php
                }
            ?>
                 
            

                

        <br><br><br><br><br>
        <br><br><br><br><br>

        <footer id="rodape">
            <p id="formas_pagamento">Formas de pagamento:</p>
            <img  class="img_rodape" src="./imagens/WhatsApp Image 2020-09-22 at 21.19.58 (1).jpeg">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>
</html>
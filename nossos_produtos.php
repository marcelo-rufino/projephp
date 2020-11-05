<?php    
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'influenciadosgames';

    $conn = mysqli_connect($servername, $username, $password, $database, 3306);

    if (!$conn) {
        die("A conexão ao BD falhou: ".mysqli_connect_error());
    }
?>


<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8"/>
        <title>Produtos - Influência dos Games</title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="js/index.js"></script>
    </head>

        <body>
        <!--Início do menu-->
    <?php
    include('menu.html');
    ?>
    <!--Fim do menu-->

        <p class="texto_inicial">Nossos Produtos</p>

        <hr>

    
    <div class="bloco_categoria">        
    <h3 style="font-weight: bold;">Categorias</h3>
    <ul>
        <li onclick="exibir_todos()" onmouseover="mouseSelection(this)">Todos (12)</li>
        <li onclick="exibir_categoria('videogames')" onmouseover="mouseSelection(this)">Videogames (3)</li>
        <li onclick="exibir_categoria('controles')" onmouseover="mouseSelection(this)">Controles (2)</li>
        <li onclick="exibir_categoria('jogos')" onmouseover="mouseSelection(this)">Jogos (3)</li>
        <li onclick="exibir_categoria('fone')" onmouseover="mouseSelection(this)">Fone (1)</li>
        <li onclick="exibir_categoria('teclado')" onmouseover="mouseSelection(this)">Teclado (1)</li>
        <li onclick="exibir_categoria('mouse')" onmouseover="mouseSelection(this)">Mouse (1)</li>
        <li onclick="exibir_categoria('monitor')" onmouseover="mouseSelection(this)">Monitor (1)</li>
    </ul>
    </div>   

    <?php
    $sql = "select * from tabela_de_produtos";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($rows = $result->fetch_assoc()){
    ?>
    
    <div class="bloco_produtos" id="<?php echo $rows["categorias"]; ?>" style="display:inline-block;">
    <img src=<?php echo $rows["Imagem"]; ?> alt="Console NSwitch" width="130px" onclick="destaque(this)" onmouseover="mouseSelection(this)">
        <br>
        <font face="Arial size="2><?php echo $rows["Descrição"]; ?></font>
        <hr>
        <font face="Arial" size="2"><strike>R$ 3.700,00</strike></font>
        <br>
        <font face="Arial" size="4" color="red">R$<?php echo $rows["Preço"]; ?></font>
        <br>
    </div>
    
    <?php
        }
    }
    else {
        echo "Nenhum produto cadastrado!";
    }
    ?>

        

            <br><br><br><br><br>

            <footer id="rodape">
                <p id="formas_pagamento"><b>Formas de pagamento</b></p>
                <img src="./imagens/formas de pagamento.png" width="400px">
                <p>&copy; Influência dos Games</p>
                </footer>
    
</body>
</html>
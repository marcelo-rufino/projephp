<?php    
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'influenciadosgames';

    $conn = mysqli_connect($servername, $username, $password, $database, 3306);

    if (!$conn) {
        die("A conexão ao BD falhou: ".mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['produto']) && isset($_POST['valorunit']) && isset($_POST['quantidade']) && isset($_POST['valortot'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $produto = $_POST['produto'];
        $valorunit = $_POST['valorunit'];
        $quantidade = $_POST['quantidade'];
        $valortot = $_POST['valortot'];

        $sql = "insert into tabela_de_pedidos (nome, endereco, telefone, produto, valorunit, quantidade, valortot) 
        values ('$nome', '$endereco', '$telefone', '$produto', '$valorunit', '$quantidade', '$valortot')";
        $result = $conn->query($sql);    
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title>Pedidos/Fale Conosco - Influência dos Games</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
    <body>
        <!--Início do menu-->
    <?php
    include('menu.html');
    ?>
    <!--Fim do menu-->

    <p class="texto_inicial">Pedidos<p/>
        <hr>
       
        <form method="post" action="">
            Nome:<br>
            <input type="text" name="nome" style="width:500px"><br>
            Endereço:<br>
            <input type="text" name="endereco" style="width:500px"><br>
            Telefone:<br>
            <input type="number" name="telefone" style="width:500px"><br>
            Produto:<br>
            <input type="text" name="produto" style="width:500px"><br>
            Valor Unitário:<br>
            <input type="number" name="valorunit" style="width:500px"><br>
            Quantidade:<br>
            <input type="text" name="quantidade" style="width:500px"><br>
            Valor Total:<br>
            <input type="number" name="valortot" style="width:500px"><br>
            <input type="submit" name="submit" value="Enviar">
        </form>
        
        <p class="texto_inicial">Fale Conosco<p/>
        <hr>
        <table class="tabela_fale_conosco">
            <tr>
            <td>
                <img src="./imagens/email.png" alt="email" width="40px">contato@influenciadosgames.com
            </td>
            <td>
                <img src="./imagens/whatsapp.png" alt="whatsapp" width="60px">(21) 2222-3333
            </td>
            </tr>
        </table>  
        
        
        <br><br><br><br>
                        
        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento</b></p>
            <img src="./imagens/formas de pagamento.png" width="400px">
            <p>&copy; Influência dos Games</p>
        </footer>

    </body>
</html>


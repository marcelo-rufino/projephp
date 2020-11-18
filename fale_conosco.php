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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
        crossorigin="anonymous">
</head>
    <body>
        <!--Início do menu-->
    <?php
    include('menu.html');
    ?>
    <!--Fim do menu-->

    <p class="texto_inicial">Pedidos</p>
        <hr>

        <form method="post" action="">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="nome">Nome completo</label>
                    <input type="text" class="form-control" name="nome" placeholder="Seu nome completo">
                </div>
                <div class="form-group col-md-5">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" placeholder="Seu endereço">
                </div>
                <div class="form-group col-md-5">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="Seu telefone com ddd">
                </div>
                <div class="form-group col-md-5">
                    <label for="produto">Produto</label>
                    <input type="text" class="form-control" name="produto" placeholder="Produto de sua escolha">
                </div>
                <div class="form-group col-md-5">
                    <label for="valorunit">Valor Unitário</label>
                    <input type="text" class="form-control" name="valorunit" placeholder="Valor unitário">
                </div>
                <div class="form-group col-md-5">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade" placeholder="Quantidade">
                </div>
                <div class="form-group col-md-5">
                    <label for="valortot">Valor Total</label>
                    <input type="text" class="form-control" name="valortot" placeholder="Valor total">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>       
        </form>

        <br><br>
         
        <p class="texto_inicial">Fale Conosco<p/>
        <hr>
        <table class="tabela_fale_conosco">
            <tr>
            <td>
                <img src="./imagens/email.png" alt="email" width="30px">contato@influenciadosgames.com
            </td>
            <td>
                <img src="./imagens/whatsapp.png" alt="whatsapp" width="40px">(21) 2222-3333
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


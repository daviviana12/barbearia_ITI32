<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formServico" action="" method="post">
            <div id="body">
               
            <?php
                //1° Passo: Incluir as configurações de BDA 
            include "conexao_bd.php";           
                //2° Passo: Capturar os valores informados pelo usuário 
            $descricao = $_POST["txtDescricao"];
            $valor = $_POST["txtPreco"];
                //3º Passo: Montar o comando SQL de inserção
            $sql = "INSERT INTO servico(descricao,valor) VALUES ('$descricao','$valor')";
            //4° Passo: Executar o comando SQL
            if(executarComando($sql)){
                echo "<h2>Operação realizada com sucesso!</h2>";
            }
            else
            {
                echo "<h2>Não foi possível adicionar o serviço</h2>";
            }

            ?>
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>

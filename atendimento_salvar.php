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
                    //1° Passo: Incluir as configurações de acesso aos dados
                    include "conexao_bd.php";
                    //2° Passo: Capturar os valores informados pelo usuário
                    $nome_cliente = $_POST["txtNome"];
                    $id_servico = $_POST["selectServico"];
                    $data_agendamento = $_POST["txtData"];
                    $horario_agendamento = $_POST["selectHorario"];
                    //3° Passo: Montar o sql para inserir o agendamento 
                    $sql = "INSERT INTO agendamento (nome_cliente,id_servico,data_agendamento,horario_agendamento)";
                    $sql.=" VALUES('$nome_cliente','$id_servico','$data_agendamento','$horario_agendamento')";
                    //4° Passo: Executar o comando sql
                    if(executarComando($sql))
                    {
                        echo "<h3>Serviço agendado</h3>";
                    }
                    else
                    {
                        echo "<h3>Não foi possível agendar!</h3>";
                    }
                
                ?>

                
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>

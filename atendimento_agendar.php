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

        <form name="formAtendimento" action="" method="post">
            <div id="body">

                <h1><span>Agendar atendimento</span></h1>

                <ol>

                    <li><input type="text" name="txtNome" placeholder="NomeCompleto" class="input"/>
                    </li>


                    <li>Selecione o seu serviço <br />
                        <select name="selectServico" class="input">
                            <option></option>
                        </select>
                    </li>

                    <li>Data do agendamento<br />
                        <input type="date" name="txtData" class="input"/>
                    </li>

                    <li>
                        Selecione o seu horário<br />
                        <select name="selectHorario" class="input">
                            <option value="09">09:00 as 10:00</option>
                            <option value="09">10:00 as 11:00</option>
                            <option value="09">11:00 as 12:00</option>
                            <option value="09">12:00 as 13:00</option>
                            <option value="09">13:00 as 14:00</option>
                            <option value="09">14:00 as 15:00</option>
                            <option value="09">15:00 as 16:00</option>
                            <option value="09">16:00 as 17:00</option>
                            <option value="09">17:00 as 18:00</option>

                        </select>
                    </li>

                    <li><input type="submit" value="Cadastrar" class="botao" />
                    </li>

                </ol>
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>

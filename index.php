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


        <div id="body">
            <div id="featured">
                <img src="images/the-beacon.jpg" alt=""/>
                <div>
                    <h2>Olá, seja bem vindo</h2>
                    <span>Barba, cabelo e bem estar...</span>
                    <span>Muito mais que uma barbearia, surpreenda-se!</span>
                    <span>Satisfação garantida para o homem moderno.</span>
                    <a href="index.php" class="more">Conheça mais</a>
                </div>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <img src="images/the-father.jpg" alt=""/>
                        <span>O paizão</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/the-actor.jpg" alt=""/>
                        <span>O ator</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/the-nerd.jpg" alt=""/>
                        <span>O nerd</span>
                    </a>
                </li>
            </ul>
        </div>
        
          <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>


    </body>
</html>

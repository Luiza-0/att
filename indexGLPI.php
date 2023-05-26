<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentação - Bomix</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="styles/style.css">

    <script src="https://unpkg.com/vue-multiselect@2.1.6"></script>
    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.6/dist/vue-multiselect.min.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700&display=swap" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row h-100">
            <!-- ---------------------------------------------------------------------- 
                MENU DE NAVEGAÇÃO
            ---------------------------------------------------------------------- -->
            <?php
            include("template_menu/templateMenuGLPI.php");
            ?>
            <!-- ---------------------------------------------------------------------- 
                MENU DE NAVEGAÇÃO
            ---------------------------------------------------------------------- -->
            <main>
                <article id="article1">
                    <div>
                        <div class="col-sm-12">
                            <h1 class="text-center titulo_pag titulo_index">Documentação GLPI</h1>
                            <p class="text-center mb-4">Documentação para melhor compreensão dos usos do GLPI</p>
                            <div class="row d-flex justify-content-center">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <p class="text-center mt-4 mb-4">
                                            O <span class="negrito">GLPI</span> ou <span class="negrito">Sistema de
                                                Gerenciamento de Incidentes e Service Desk</span> é um sistema de gestão de chamados, gerenciado pela TI, onde os usuários registram as
                                            suas demandas e ocorrências.
                                        </p>

                                        <p class="text-center mt-4 mb-4">Essa é a página inicial da documentação do
                                            GLPI. Na lateral esquerda você
                                            encontrará um botão que ao ser clicado irá abrir
                                            uma aba com todos os links da página além disso na lateral superior direita
                                            encontra-se uma barra de busca para te ajudar na sua navegação. Existem
                                            dentro dos tópicos os
                                            sub-tópicos que englobam processos mais complexos, os mesmos também podem
                                            ser
                                            acessados diretamente pela aba de pesquisa. As documentações podem estar mais ao fundo do menu por isso caso a
                                            documentação procurada não esteja visível tente sempre descer o menu ou digite
                                            na barra de pesquisa o nome da seção que deseja encontrar.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
        <span class="espaco_final"></span>
    </div>
    <script src="scripts/script.js"></script>
    <script src="scripts/sugestoes.js"></script>
    <script src="scripts/search_scripts.js"></script>
</body>

</html>
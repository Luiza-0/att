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
                            <h1 class="text-center titulo_pag">Observações GLPI</h1>
                            <div class="row d-flex justify-content-center">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                    <h4>Procedimento</h4>
                                        <p>Tipos de serviços atendidos pelo GLPI</p>
                                        <ul>
                                            <li>Criação de usuários e manutenção de contas de rede e sistemas (Protheus, RM, BomxBI, W-Access e Fluig);</li>
                                            <li>Incidente ocorrido com hardware ou software;</li>
                                            <li>Suporte a rotinas dos sistemas Protheus, RM, BomxBI, W-Access e Fluig;</li>
                                            <li>Problemas de conectividade;</li>
                                            <li>Manutenções preventivas e corretivas;</li>
                                            <li>Solicitação de Arte (Restrito à Computação Gráfica e Comercial).</li>
                                        </ul>

                                        <p><span class="negrito">Obs.:</span> Demandas relacionadas a melhorias ou projetos deverão seguir o procedimento deabertura de TAD e TAP, conforme o documento P-COTI-04 - Procedimento Abertura deProjetos de Desenvolvimento e ou Demandas TI.</p>
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
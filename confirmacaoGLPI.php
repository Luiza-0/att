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
                            <h1 class="text-center titulo_pag">Tela de confirmação de chamados</h1>
                            <p class="text-center mb-4">Documentação para melhor compreensão das telas de confirmação de chamados pelas entidades <br> <span class="negrito">(BOMIX MATRIZ, COMPUTAÇÃO GRÁFICA e INFRAESTRUTURA)</span></p>
                            <div class="row d-flex justify-content-center">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">

                                        <!--CONFIRMAÇÃO DE CHAMADOS ENTIDADE MATRIZ E COMPUTAÇÃO GRÁFICA-->
                                        <div>
                                            <h4 class="fw-bolder mt-5 text-center">BOMIX MATRIZ e COMPUTAÇÃO GRÁFICA</h4>
                                            <p class="mt-3 text-center">
                                                O requerente receberá um email com a informação “Pendência de validação no chamado solucionado”, ou seja, o chamado foi solucionado e está pendente de aprovação.
                                            </p>
                                            <p class="mb-3 text-center">
                                                Para realizar a aprovação, o requerente deverá consultar o chamado e acessar a opção “Processando Chamado” para visualizar as opções “Recusar a solução” e “Aprovar a solução”, conforme imagem abaixo.
                                            </p>

                                            <div>
                                                <img src="img/MatrizGLPI_FormConfirmacao.png" class="img-fluid" alt="Confirmacao Chamado Matriz">
                                            </div>

                                            <p class="mt-4 text-center"><span class="negrito">Campos do formulário</span></p>

                                            <ul class="list-group list-group-flush mt-4">
                                                <li class="list-group-item"><span class="negrito">Comentários:</span> Campo opcional para o requerente registrar os seus comentários;</li>
                                                <li class="list-group-item"><span class="negrito">Recusar a solução:</span> Ao escolher esta opção, o chamado continuará em aberto para as devidas tratativas;</li>
                                                <li class="list-group-item"><span class="negrito">Aprovar a solução:</span> A escolha desta opção mudará o status do chamado de solucionado para fechado.</li>
                                            </ul>
                                        </div>

                                        <!--CONFIRMAÇÃO DE CHAMADOS ENTIDADE INFRAESTRUTURA-->
                                        <div>
                                            <h4 class="fw-bolder mt-5 text-center">INFRAESTRUTURA</h4>

                                            <p class="negrito mt-5 text-center">Tela de aprovação do chamado</p>

                                            <p class="text-center">O usuário deverá acessar essa tela após chamado solucionado pelo técnico para aprovar/recusar a finalização do atendimento.</p>

                                            <p class="negrito text-center">Tela de avaliação do chamado (Pesquisa de Satisfação)</p>

                                            <p class="text-center">Após aprovação do chamado, o usuário deverá responder a pesquisa de satisfação para que possa abrir novos chamados para área de Infraestrutura.</p>

                                            <div>
                                                <img src="img/INFRA_FormConfirmacao.png" class="img-fluid" alt="Confirmacao Chamado Infra">
                                            </div>

                                            <p class="mt-4 negrito">Campos</p>

                                            <ul class="list-group list-group-flush mt-4">
                                                <li class="list-group-item">Prazo de Solução</li>
                                                <li class="list-group-item">Qualidade de Serviço</li>
                                                <li class="list-group-item">Limpeza<span class="negrito"></li>
                                                <li class="list-group-item">Qualidade de Atendimento<span class="negrito"></li>
                                                <li class="list-group-item">Comentários<span class="negrito"></li>
                                            </ul>
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
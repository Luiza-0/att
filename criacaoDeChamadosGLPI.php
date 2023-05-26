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
                            <h1 class="text-center titulo_pag">Tela de criação de chamados <br>(Requisição ou Incidentes)</h1>
                            <p class="text-center mb-4">Documentação para melhor compreensão das telas de criação de chamado pelas entidades <br> <span class="negrito">(BOMIX MATRIZ, COMPUTAÇÃO GRÁFICA e INFRAESTRUTURA)</span></p>
                            <div class="row d-flex justify-content-center">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">

                                        <!--CRIAÇÃO DE CHAMADOS ENTIDADE BOMIX MATRIZ-->
                                        <div>
                                            <h4 class="fw-bolder mt-5 text-center">BOMIX MATRIZ</h4>
                                            <P class="text-center"><span class=" negrito">Obs:</span> todos os campos contendo <span class="negrito">"*"</span> são indicados como obrigatório.</P>

                                            <div>
                                                <img src="img/MatrizGLPI_FormCriacao.png" class="img-fluid" alt="Criação Chamado Matriz">
                                            </div>

                                            <p class="mt-4 mb-4 text-center"><span class="negrito">Campos do formulário</span></p>

                                            <div>
                                                <ul class="bg-none list-group list-group-flush">
                                                    <li class="list-group-item"><span class="negrito">Tipo:</span> Incidente ou Requisição</li>
                                                    <ul class="list-group-item">
                                                        <li class="list-group-item"><span class="negrito">Incidente –</span> Indicar esta opção quando houver alguma ocorrência, ligada a um serviço já prestado. Exemplos:Internet lenta, indisponibilidade para acessar uma pasta na rede, e-mail não enviando mensagens, impressora com problema para imprimir e outros.</li>

                                                        <li class="list-group-item"><span class="negrito">Requisição -</span> Indicar esta opção quando algum serviço for solicitado para a TI. Exemplos: Liberação de pastas, acessos com erro de sistemas, desenvolvimento de um novo relatório no sistema e outros.
                                                        </li>
                                                    </ul>
                                                    <li class="list-group-item"><span class="negrito">Categoria:</span> Selecionar a categoria que está relacionada com o chamado, podendo ser infraestrutura com opção para suporte técnico ou sistemas contendo as opções para os sistemas utilizados na Bomix;
                                                    </li>
                                                    <li class="list-group-item"><span class="negrito">Localização:</span> Informar o setor em que o problema ocorreu;
                                                    </li>
                                                    <li class="list-group-item"><span class="negrito">Observadores:</span> Poderá ser indicada uma pessoa para acompanhamento do chamado;
                                                    </li>
                                                    <li class="list-group-item"><span class="negrito">Titulo:</span> Informar um título para o chamado;</li>
                                                    <li class="list-group-item"><span class="negrito">Descrição:</span> Descrever o problema ocorrido</li>
                                                </ul>

                                                <p class="mt-4 mb-4 text-center ">
                                                    O requerente, também, poderá anexar arquivos que sejam relacionados ao seu atendimento. Para isso, deverá clicar em <span class="negrito">“Escolher arquivos”</span> para selecionar o arquivo.
                                                </p>
                                                <p class="mt-4 mb-4 text-center ">
                                                    Para concluir a criação do chamado, o requerente deverá clicar no botão “Enviar mensagem”. Após o envio, este receberá uma comunicação de abertura de chamado, via e-mail, para acompanhamento. A equipe de atendimento, também, receberá uma comunicação para realizar a tratativa do chamado.
                                                </p>
                                            </div>
                                        </div>

                                        <!--CRIAÇÃO DE CHAMADOS ENTIDADE COMPUTAÇÃO GRÁFICA-->
                                        <div>
                                            <h4 class="fw-bolder mt-4 mb-4 text-center ">COMPUTAÇÃO GRÁFICA</h4>
                                            <p class="mt-4 mb-4 text-center "><span class="negrito">Obs:</span> todos os campos contendo <span class="negrito">"*"</span> são indicados como obrigatório.</p>

                                            <div>
                                                <img src="img/CPG_FormCriacao.png" class="img-fluid" alt="Criação Chamado Matriz">
                                            </div>

                                            <div class="mb-4">
                                                <img src="img/CPG2_FormCriacao.png" class="img-fluid mt-3" alt="Criação Chamado Matriz">
                                            </div>

                                            <p class="mt-4 mb-4 text-center "><span class="negrito">Campos do formulário</span></p>

                                            <div class="mb-4">
                                                <ul class="bg-none list-group list-group-flush">
                                                    <li class="list-group-item"><span class="negrito">Tipo:</span> Requisição</li>
                                                    <li class="list-group-item"><span class="negrito">Categoria:</span> arte nova OFF, arte nova IML, solicitação de fotolito, revelação de chapa, alteração de arte IML, alteração de arte OFF;
                                                    </li>
                                                    <li class="list-group-item"><span class="negrito">Localização:</span> CPG – interno, Norte/NE, regional Centro Oeste, regional exportação, regional grandes contas, regional Nordeste Bahia, regional Sudeste, regional Sul, SP Capital 1, SP Capital 2, SP GC 1, SP GC 2, SP interior;
                                                    </li>
                                                    <li class="list-group-item"><span class="negrito">Observadores:</span> poderá ser indicada uma pessoa para acompanhamento do chamado.
                                                    </li>
                                                    <li class="list-group-item"><span class="negrito">Titulo:</span> Adicionar um título relacionado ao chamado;</li>
                                                    <li class="list-group-item"><span class="negrito">Descrição:</span> Informar uma breve descrição da solicitação.</li>
                                                </ul>
                                            </div>

                                            <div>
                                                <ul class="bg-none list-group list-group-flush">
                                                    <li class="list-group-item"><span class="negrito">Titulo:</span> Campo predefinido e preenchido automaticamente, após o preenchimento dos campos abaixo:</li>
                                                    <li class="list-group-item"><span class="negrito">Nome da arte:</span> Campo obrigatório;</li>
                                                    <li class="list-group-item"><span class="negrito">Descrição:</span> Adicionar o caminho da pasta de rede onde está localizada a arte.</li>
                                                    <li class="list-group-item"><span class="negrito">Código da arte:</span> Campo obrigatório;</li>
                                                    <li class="list-group-item"><span class="negrito">Litragem:</span> Campo obrigatório;</li>
                                                    <li class="list-group-item"><span class="negrito">Cliente:</span> Campo obrigatório;</li>
                                                    <li class="list-group-item"><span class="negrito">Revisão:</span> Campo obrigatório;</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!--CRIAÇÃO DE CHAMADOS ENTIDADE INFRAESTRUTURA-->
                                        <div>
                                            <h4 class="fw-bolder mt-4 mb-4 text-center ">INFRAESTRUTURA</h4>
                                            <p class="text-center"><span class="negrito">Obs:</span> todos os campos contendo <span class="negrito">"*"</span> são indicados como obrigatório.<p>

                                            <div>
                                                <img src="img/INFRA_FormCriacao.png" class="img-fluid" alt="Criação Chamado Matriz">
                                            </div>

                                            <div>
                                                <p class="mt-4 mb-4 text-center"><span class="negrito">Campos do formulário</span></p>

                                                <div>
                                                    <ul class="bg-none list-group list-group-flush">
                                                        <li class="list-group-item"><span class="negrito">Tipo:</span> Requisição</li>
                                                        <li class="list-group-item"><span class="negrito">Categoria:</span> Categoria que está relacionado ao chamado;
                                                        </li>
                                                        <li class="list-group-item"><span class="negrito">Localização:</span> Localização que está relacionado ao chamado;
                                                        </li>
                                                        <li class="list-group-item"><span class="negrito">Observadores:</span> Poderá ser indicada uma pessoa para acompanhamento do chamado;
                                                        </li>
                                                        <li class="list-group-item"><span class="negrito">Titulo:</span> Adicionar um título relacionado ao chamado;</li>
                                                        <li class="list-group-item"><span class="negrito">Descrição:</span> Informar uma breve descrição da solicitação.</li>
                                                    </ul>
                                                </div>
                                            </div>
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
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
                CONTEÚDO PRINCIPAL
            ---------------------------------------------------------------------- -->
            <div class="col-sm-12 bg-light">
                <h1 class="text-center titulo_pag">Instruções iniciais</h1>
                <p class="text-center">Intruções iniciais para o uso do GLPI</p>
                <main>
                    <article id="article1">
                        <h2 class="text-center  titulo_article">Função</h2>
                        <div class="row justify-content-center">
                            <div class="coluna_doc col-sm-6">
                                <p class="text-center mb-4">Orientar os colaboradores da Bomix a
                                    registrar um chamado no portal GLPI (sistema de gerenciamento de incidentes e service desk).
                                    configurações do sistema e ativação do modo escuro.
                                </p>

                                <h4 class="text-center mt-5">Autoridades e Responsabilidades</h4>
                                <table class="table mt-5 mb-5">
                                    <thead class="text-center">
                                        <tr class="table-active">
                                            <th scope="col">Autoridade</th>
                                            <th scope="col">Responsabilidades</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>Colaboradores Bomix</td>
                                            <td>Realizar abertura de chamados no GLPI</td>
                                        </tr>
                                        <tr>
                                            <td>Área da computação gráfica</td>
                                            <td>Receber e dar a tratativa as solicitações de arte</td>
                                        </tr>
                                        <tr>
                                            <td>Área comercial</td>
                                            <td>Realizar abertura de chamados para solicitação de arte</td>
                                        </tr>
                                        <tr>
                                            <td>Área de infraestrutura</td>
                                            <td>Receber e dar tratativa às ordens de serviço recebidas pela Bomix</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4 class="text-center mt-4">Abreviações e siglas</h4>
                                <ul class="mt-4 mb-4 p-2 list-group list-group-flush ">
                                    <li class="list-group-item"><span class="negrito">GLPI - Portal GLPI (Sigla em francês: Gestionnaire Libre de Parc Informatique):</span> sistema de 
                                        gerenciamento de incidentes e service desk;
                                    </li>
                                    <li class="list-group-item"><span>Chamado:</span> todas as solicitações de atendimento realizadas pelos usuários para a equipe de TI;
                                    </li>
                                    <li class="list-group-item"><span class="negrito">TI:</span> tecnologia da informação;
                                    </li>
                                    <li class="list-group-item"><span class="negrito">Usuários:</span> colaboradores e prestadores de serviços que utilizam e/ou manipulam informações da
                                        BOMIX;
                                    </li>
                                    <li class="list-group-item"><span class="negrito">Requerente:</span> usuário responsável pela abertura do Incidente:  é qualquer acontecimento que ocorre com 
                                        algum componente que tenha alguma ligação com um serviço já prestado pelo departamento de TI;
                                    </li>
                                    <li class="list-group-item"><span class="negrito">Requisição:</span> é quando tudo está funcionando perfeitamente nos serviços de TI, porém o usuário 
                                        precisa da mão de obra do departamento de tecnologia para a criação de um recurso ou 
                                        desenvolvimento de uma nova ferramenta de trabalho;
                                    </li>
                                    <li class="list-group-item"><span class="negrito">Conectividade:</span> capacidade ou possibilidade (que tem um computador, dispositivo, sistema operacional, programa etc.)
                                        de operar em um ambiente de rede.
                                    </li>    
                                </ul>
                                <h4 class="text-center mt-5">Abrangência</h4>
                                <p class="text-center mt-5 mb-5">O GLPI é um sistema de gestão de chamados, gerenciado pela TI, 
                                    onde os usuários registram as suas demandas e ocorrências.
                                </p>

                                <h4 class="mt-4 mb-4 text-center ">Acesso ao GLPI</h4>
                                        <p>Endereços de acesso ao portal do GLPI:</p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><span class="negrito">Bomix:</span> http://192.168.254.70/glpi;</li>
                                            <li class="list-group-item"><span class="negrito">Bomix Sopro:</span> glpi.bomix.com.br:8082/glpi.</li>
                                        </ul>
                                        
                                        <p class="mt-4">Tela de Login do GLPI: </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><span class="negrito">Usuário:</span> login padrão da empresa (nome.sobrenome)</li>
                                            <li class="list-group-item"><span class="negrito">Senha:</span> definido pelo administrador.</p></li>
                                        </ul>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
            <!-- ---------------------------------------------------------------------- 
                CONTEÚDO PRINCIPAL
            ---------------------------------------------------------------------- -->
        </div>
        <span class="espaco_final"></span>
    </div>
    <script src="scripts/script.js"></script>
    <script src="scripts/sugestoes.js"></script>
    <script src="scripts/search_scripts.js"></script>
</body>

</html>
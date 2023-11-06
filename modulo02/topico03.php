<!DOCTYPE html>
<html lang="pt-br">

<!-- HEADER  -->
<?php
include('layout/header.php');
?>
<!-- FIM DO HEADER  -->

<body>
    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- menu lateral  -->
    <?php
    include('layout/menu.php');
    ?>
    <!-- FIM do menu lateral   -->

    <!-- CONTEUDO INICIO -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!--  Título Pricipal -->
                        <h2 class="Titulo fw-bolder">Mudança de Hábitos</h2><br>
                        <!--  Título Principal -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 3:</strong>
                                Representação de hábitos saudáveis</p>
                            <div class="zoom">
                                <a href="imgs02/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                                    <img src="imgs02/Figura03.png" alt="Imagem que remete a organização" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>banco de imagens
                                gratuitas do canvas, 2021.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs02/Figura03.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>banco de imagens gratuitas do
                                        canvas, 2021.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">A realização de um objetivo futuro é o resultado de suas ações no presente. Se
                            seus hábitos te levam à direção oposta de tudo que deseja atingir, será necessário que uma
                            mudança seja realizada, pois continuar fazendo as mesmas coisas vai te levar a obter o
                            <strong> mesmo resultado </strong>. Isso é muitas vezes entendido como sair da zona de
                            conforto. Eu pessoalmente não gosto dessa expressão porque nossa mente é muito astuta e,
                            como eu disse na primeira parte, nossa vida é em grande medida condicionada pelo nosso
                            inconsciente. Você pode dizer à sua mente, vamos sair da zona de conforto e acreditar
                            piamente nisso e seu inconsciente simplesmente sabotar todas as suas ações.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloCuriosidade">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="Curiosidade">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">Uma das funções primordiais de nosso cérebro é a
                                            autopreservação. Logo, a tendência a se manter como se sente confortável é
                                            prioridade para ele. Por esta razão, quando pensamos em mudar de hábitos já
                                            perpetuados, nossos cérebros recebem os sinais de que algo está errado e
                                            ativa a função de preservação. “Isso coloca a mente subconsciente no modo de
                                            luta ou fuga para tentar preservar o corpo através da inação, na tentativa
                                            de evitar que aconteçam perigos. Isso resulta em um sentimento cada vez mais
                                            lento, levando-nos a procrastinar” (JONES, 2020, p.7).
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->


                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- FIM DO CONTEUDO INICIO  -->



    <!-- INÍCIO DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP -->

    <!-- BOTÃO BACK TO TOP COM UMA BARRA DE PROGRESSO -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>
    <!-- FIM DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP-->

    <!-- Botões de navegação -->
    <div class="text-center">
        <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">
            <i class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                class="fa-solid fa-chevron-right"></i></a>
    </div>

    <!-- FOOTER  -->
    <?php
    include('layout/footer.php');
    ?>
    <!-- FIM DO FOOTER  -->

</body>

</html>
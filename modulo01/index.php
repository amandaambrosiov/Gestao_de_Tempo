<!DOCTYPE html>
<html lang="pt-br">

<?php
include('layout/header.php');
?>

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
                        <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s"><span class="icon"><i
                                    class="bi bi-person-workspace"></i>
                            </span> Apresentação</h2><br>
                        <!--  Título Pricipal End-->

                        <!-- Imagem de apresentação com texto introdutório -->
                        <div class="apresentacao">

                            <div class="img_apresentacao wow animate__zoomIn" data-wow-delay="0.3s">
                                <img src="imgs/Group 10.png" alt="">
                                <strong class="FonteFigura FonteMenor text-secondary font">Fonte: <a href="https://br.freepik.com" target="_blank" rel="noopener noreferrer"> Freepik</a></strong>
                            </div>
                            <div>
                                <!-- Parágrafo com a biblioteca de animação  -->
                                <p class="wow fadeIn texto_apresentacao wow animate__zoomIn" data-wow-delay="0.3s">

                                    <strong>Olá, Nome_Completo bem-vindo ao módulo 01 do curso Gestão do tempo.
                                    </strong><br>Se você tem a percepção de
                                    que
                                    todas as
                                    suas horas passam voando e você nunca realiza todos os planos ou nem consegue
                                    planejar nada
                                    e apenas lida com as coisas de acordo com a ordem em que aparecem, este curso
                                    vai te
                                    ajudar
                                    a tornar-se um <strong> realizador muito mais eficiente.</strong>
                                </p><br><br><br>


                                <p class="wow fadeIn" data-wow-delay="0.3s">Embora não
                                    exista
                                    uma
                                    única forma correta de lidar com o tempo, você aprenderá boas práticas para
                                    utilização do
                                    seu próprio tempo e talvez passe a percebê-lo de forma diferente. O que importa
                                    é
                                    que ao
                                    final dessa breve jornada espera-se que você possa estar completamente
                                    consciente da
                                    importância do tempo e possa decidir, de acordo com suas próprias necessidades,
                                    se
                                    vale a
                                    pena mudar sua gestão pessoal do tempo.</p>
                                <!--  Fim do Parágrafo com a biblioteca de animação -->

                            </div>
                        </div><br><br>
                        <!-- Imagem de apresentação com texto introdutório end-->


                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloimportante">
                                        <div class="div_teste">
                                            <div><i class="bi bi-exclamation-circle"></i> IMPORTANTE </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="importante">
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima
                                            </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">Durante os próximos dias, eu, Kamila
                                            Nascimento ,
                                            te conduzirei em uma jornada que lhe permitirá organizar sua
                                            vida e
                                            realizar
                                            seus objetivos de curto, médio e longo prazo. Eu vou repassar
                                            todos
                                            os
                                            conhecimentos e técnicas que eu utilizei para concluir o
                                            doutorado
                                            em três
                                            anos, mesmo sendo professora, pesquisadora do Banco Mundial e
                                            tendo
                                            me
                                            mudado de casa, cidade e país nesse período.</p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA IMPORTANTE -->


                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Note que cada ser humano possui exatamente a mesma
                            quantidade de horas
                            diárias
                            para realizar suas atividades, mas a nossa percepção sobre o tempo pode ser
                            completamente
                            diferente. Já perceberam que o minuto do microondas é diferente do minuto que
                            passamos com
                            alguém que amamos? É essa mudança de percepção sobre o tempo que vai mudar
                            completamente a
                            sua vida e eu vou te ajudar nessa caminhada.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->
                        <br>

                        <!-- ACCORDION -->
                        <div class="container wow animate__fadeInLeftBig" data-wow-delay="0.3s">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item" id="accordion-item-apresentacao">
                                    <div class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" id="accordion-botao-apresentacao"
                                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseTwo">
                                            <h5>O que você verá agora? <span class="fw-lighter"><br>(Clique aqui
                                                    para saber mais)</span></h5>
                                        </button>
                                    </div>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body01">
                                            Tendo tudo isso como base, nas próximas seções deste
                                            curso você
                                            perceberá os benefícios da gestão do tempo, como visualizar uma nova vida
                                            para si
                                            mesmo e planejar a sua realização através de objetivos e hábitos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ACCORDION END-->


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
        <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"> Próximo
            <i class="fa-solid fa-chevron-right"></i></a>

        <!-- BARRA DE PROGRESSO -->
        <div id="progress-bar"></div>
        <!-- FIM DA BARRA DE PROGRESSO  -->

        <?php
        include('layout/footer.php');
        ?>



</body>

</html>
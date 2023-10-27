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
                        <h2 class="Titulo fw-bolder">Apresentação</h2><br>
                        <!--  Título Principal -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Bem-vindo ao curso de Gestão do Tempo. Se você tem a percepção de que todas as
                            suas horas passam voando e você nunca realiza todos os planos ou nem consegue planejar nada
                            e apenas lida com as coisas de acordo com a ordem em que aparecem, este curso vai te ajudar
                            a tornar-se um <strong> realizador muito mais eficiente </strong>. Embora não exista uma
                            única forma correta de lidar com o tempo, você aprenderá boas práticas para utilização do
                            seu próprio tempo e talvez passe a percebê-lo de forma diferente. O que importa é que ao
                            final dessa breve jornada espera-se que você possa estar completamente consciente da
                            importância do tempo e possa decidir, de acordo com suas próprias necessidades, se vale a
                            pena mudar sua gestão pessoal do tempo.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <section class="container">
                            <div class="accordion">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloimportante">
                                        <div class="div_teste">
                                            <div><i class="bi bi-exclamation-circle"></i> IMPORTANTE </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="importante">
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">Durante os próximos dias, eu, Kamila Nascimento ,
                                            te conduzirei em uma jornada que lhe permitirá organizar sua vida e realizar
                                            seus objetivos de curto, médio e longo prazo. Eu vou repassar todos os
                                            conhecimentos e técnicas que eu utilizei para concluir o doutorado em três
                                            anos, mesmo sendo professora, pesquisadora do Banco Mundial e tendo me
                                            mudado de casa, cidade e país nesse período.</p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA IMPORTANTE -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Note que cada ser humano possui exatamente a mesma quantidade de horas diárias
                            para realizar suas atividades, mas a nossa percepção sobre o tempo pode ser completamente
                            diferente. Já perceberam que o minuto do microondas é diferente do minuto que passamos com
                            alguém que amamos? É essa mudança de percepção sobre o tempo que vai mudar completamente a
                            sua vida e eu vou te ajudar nessa caminhada.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Tendo tudo isso como base, nas próximas seções deste curso você perceberá os benefícios da gestão do tempo, como visualizar uma nova vida para si mesmo e planejar a sua realização através de objetivos e hábitos.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <ul class="none ">
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i ></i><h4>
                        Olá, Nome_Completo bem-vindo ao módulo 01 do curso de Gestão do tempo. Bons estudos!
                        </h4> 
                        </li>
                    </ul>


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
      <i class="fa-solid fa-chevron-right"></i> Próximo </a>

    <?php
include('layout/footer.php');
    ?>



</body>

</html>
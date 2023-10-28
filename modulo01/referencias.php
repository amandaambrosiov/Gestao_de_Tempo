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

    <!-- comecar assim  -->

    <!-- CONTEUDO INICIO -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!-- COMEÇO REFERÊNCIAS  -->

                        <h2 class="Titulo">REFERÊNCIAS</h2>

                        <br>

                        <p class="Texto"> <i class="bi bi-book me-2"></i>ALLEN, Steve. <strong> Aprenda como Einstein</strong>. 2017.
                        </p>

                        <p class="Texto"> <i class="bi bi-book me-2"></i>JONES, Ryan. <strong> Produtividade para Procrastinadores </strong>. Editora Amazon, 2020.
                        </p>

                        <p class="Texto"> <i class="bi bi-book me-2"></i>JLAWRENCE, Steven. <strong> O poder da execução de metas</strong> . 2019.
                        </p>

                        <p class="Texto"> <i class="bi bi-book me-2"></i>MOURA, Jaqueline. <strong>  O poder do Não. </strong>Editora Ristretto, 2021.
                        </p>

                        <p class="Texto"> <i class="bi bi-book me-2"></i>RIBEIRO, Haroldo. <strong> A Bíblia do 5S, da implantação à excelência: conheça a metodologia que levou empresas no Brasil a serem benchmarking mundiais em 5S </strong>. Casa da Qualidade, 2006.
                        </p>

                        <!-- FIM DAS REFERENCIAS  -->

                        <div class="border border-success m-4 p-4 text-rounded rounded rounded-lg">
                                <h5>Pronto, <strong>Nome_Completo</strong> agora você já pode fazer a avaliação do curso <strong>Gestão do Tempo</strong> Módulo 01 abaixo, Boa Sorte!</h5>
                            </div>
                            <br><br>

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
        <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">
            <i class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=" class="btn btn-outline-success" role="button" aria-pressed="true">Realizar atividade avaliativa <i class="fa-solid fa-chevron-right"></i></a>
    </div>

    <!-- FOOTER  -->
    <?php
    include('layout/footer.php');
    ?>
    <!-- FIM DO FOOTER  -->

</body>

</html>
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

            <!-- COMEÇO REFERÊNCIAS  -->

            <h2 class="Titulo wow fadeIn" data-wow-delay="0.3s"><span class="iconTitulo"><i
                  class="bi bi-book-half"></i></span>REFERÊNCIAS</h2>

            <br>

            <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>ALLEN, Steve. <strong>
                Aprenda como
                Einstein</strong>. 2017. Técnica de Aprendizagem.
            </p>

            <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>JONES, Ryan. <strong>
                Produtividade para
                Procrastinadores </strong>.
            </p>

            <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>JLAWRENCE, Steven.
              <strong> O Poder da Execução
                de Metas</strong>
            </p>

            <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>MOURA, Jaqueline. <strong>
                O poder do Não.
              </strong>Poque dizemos sim quando queremos dizer não? Editora Ristretto. 1 ed.
            </p>

            <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>RIBEIRO, Haroldo. <strong>
                A Bíblia do 5S, da
                implantação à excelência: conheça a metodologia que levou empresas no Brasil a serem
                benchmarking mundiais em 5S </strong>. Ed. Casa da Qualidade, 2006.
            </p>

            <!-- FIM DAS REFERENCIAS  -->

            <div class="p-2 rounded wow animate__fadeInLeftBig" data-wow-delay="0.1s" style="background-color: #f18519;">
              <!-- Interação com aluno-->
              <ul class="none" style="padding-left:0">
                <li class="img-fluid"><i></i>
                  <p>
                    Parabéns, Nome_Completo, você concluiu o Módulo 02! Para continuar nos estudos,
                    sugerimos o livro: Estratégias práticas para ganhar mais tempo, Christian Barbosa, Editora Sextante.
                  </p>
                </li>
              </ul>
            </div>
            <br><br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s">Chegamos ao final do curso, agora você deve clicar em <strong>
                Realizar Atividade
                Avaliativa </strong> do
              Modulo 02, para finalizar.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

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
    <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=" class="btn btn-outline-success" role="button"
      aria-pressed="true"> Realizar Atividade Avaliativa <i class="fa-solid fa-chevron-right"></i></a>
  </div>

    <!-- BARRA DE PROGRESSO -->
    <div id="progress-bar"></div>
  <!-- FIM DA BARRA DE PROGRESSO  -->

  <!-- FOOTER  -->
  <?php
  include('layout/footer.php');
  ?>
  <!-- FIM DO FOOTER  -->

</body>

</html>
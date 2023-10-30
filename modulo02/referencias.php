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

            <h2 class="Titulo">REFERÊNCIAS</h2>

            <br>

            <p class="Texto"> <i class="bi bi-book "></i>ALLEN, Steve. <strong> Aprenda como Einstein.</strong> 2017.
            </p>

            <p class="Texto"> <i class="bi bi-book "></i>JONES, Ryan. <strong> Produtividade para Procrastinadores.</strong> Editora
              Amazon, 2020.
            </p>

            <p class="Texto"> <i class="bi bi-book "></i>LAWRENCE, Steven. <strong> O poder da execução de metas. </strong></strong>2019.
            </p>

            <p class="Texto"> <i class="bi bi-book "></i>MOURA, Jaqueline. <strong> O poder do Não. </strong> Editora Ristretto, 2021.
            </p>

            <p class="Texto"> <i class="bi bi-book "></i>RIBEIRO, Haroldo. <strong> Bíblia do 5S, da implantação à excelência:
              conheça a metodologia que levou empresas no Brasil a serem benchmarking mundiais em 5S.</strong> Casa da Qualidade,
              2006.
            </p>

            <!-- FIM DAS REFERENCIAS  -->

            <div class="p-2 rounded" style="background-color: #f18519;">
              <!-- Interação com aluno-->
              <ul class="none">
                <li class="img-fluid wow fadeIn text-light" data-wow-delay="0.3s"><i></i>
                  <p>
                    Parabéns, Nome_Completo, você concluiu o Módulo 02! Para continuar nos estudos,
                    sugerimos o livro: Estratégias práticas para ganhar mais tempo, Christian Barbosa, Editora Sextante.
                  </p>
                </li>
              </ul>
            </div>
            <br><br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Chegamos ao final do curso, agora você vai clicar em <strong> Realizar Atividade Avaliativa </strong> do
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

  <!-- FOOTER  -->
  <?php
  include('layout/footer.php');
  ?>
  <!-- FIM DO FOOTER  -->

</body>

</html>
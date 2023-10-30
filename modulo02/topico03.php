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
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>banco de imagens gratuitas do canvas, 2021.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem1" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura03.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong>banco de imagens gratuitas do canvas, 2021.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

            <!-- FIM DA IMAGEM NO SITE  -->

            

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
    <a href="topico03.html" class="btn btn-outline-success" role="button" aria-pressed="true">
      <i class="fa-solid fa-chevron-left"></i> Voltar </a>
    <a href="topico01.html" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
        class="fa-solid fa-chevron-right"></i></a>
  </div>

  <!-- FOOTER  -->
  <?php
  include('layout/footer.php');
  ?>
  <!-- FIM DO FOOTER  -->

</body>

</html>
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

            <!-- ... -->

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
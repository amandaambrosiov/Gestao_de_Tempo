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

            <!--  Título Pricipal -->
            <h2 class="Titulo fw-bolder">O Poder da decisão</h2><br>
            <!--  Título Principal -->

            <!-- IMAGEM NO SITE  -->

            <div class="text-center img-01">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 2:</strong>
                Representação da direção</p>
              <div class="zoom">
                <a href="imgs01/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem2">
                  <img src="imgs01/Figura02.png" alt="Imagem que remete a organização" id="img-2">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>banco de imagens gratuitas do canvas, 2021.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura02.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong>banco de imagens gratuitas do canvas, 2021.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

            <!-- FIM DA IMAGEM NO SITE  -->

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
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">A visão sobre a própria vida é um aspecto fundamental para que possamos aproveitar este recurso não renovável que é o tempo. Visão não significa necessariamente ter mais tempo para trabalhar e ter sucesso profissional. O sucesso é subjetivo e seu objetivo pode estar relacionado a fatores diversos do seu trabalho. Conforme salienta Jones (2020, p.11), você pode ter a intenção de passar mais tempo com sua família e amigos, mas é importante que sua motivação não seja simplesmente cumprir uma meta por pressão familiar, pois “passar algum tempo com eles de má vontade, não trará a felicidade duradoura”.</p> <!--caixa secundaria-->
                  </div>
                </section>
              </div>
            </section>
            <!-- FIM DA CAIXA IMPORTANTE -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Ter uma visão sobre si mesmo e sobre o que espera no futuro é o que garante que você direcione corretamente a sua gestão do tempo para maximizar oportunidades e a sua qualidade de vida. Além do mais, a gestão não impacta apenas o modo como organizamos as atividades, mas também nossa produtividade, ou seja, <strong> a qualidade da execução de nossas tarefas </strong>, que também é afetada pela nossa visão de mundo. Como bem salienta Jones (2020, p.4),
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Citação com borda verde (esquerda) -->
            <div class="bd-callout bd-callout-success m-3">

              <!-- blockquote do bootstrap -->
              <figure>
                <blockquote class="blockquote">
                  <p>Negociação de conflitos é uma técnica utilizada na gestão de pessoas que visa levar dois ou mais colaboradores da organização a alinhar seus objetivos, expectativas e atitudes para que voltem a trabalhar de forma harmoniosa e colaborativa, depois das discussões, radicalmente sobre algum aspecto do negócio.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  <cite title="Source Title">(Jones (2020, p.4))</cite>
                </figcaption>
              </figure>
            </div>
            <!-- Citação com borda verde (esquerda) -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Novamente, a questão da visão é importante para motivar a gestão do tempo e a execução das metas estabelecidas. Se suas razões para querer ser mais produtivo são superficiais e não atendem a um propósito maior em sua vida, são grandes as chances de sua motivação não permanecer no futuro.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Como a <strong> visão de futuro pessoal</strong> pode ser algo extremamente subjetivo eu gostaria de sugerir uma técnica que pode parecer bastante simples, mas é altamente eficaz. Trata-se de um exercício em que você escreve para si mesmo uma carta do futuro. Ao criar uma visualização da sua identidade por vir, você pode ter a clara percepção das metas que precisa atingir e até mesmo do tipo de pessoa que você precisa se transformar para que possa realizar tal imagem. Abaixo, eu te ofereço um exemplo de como este exercício pode ser executado.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!--CAIXA DE TEXTO EXEMPLO-->
            <section class="container">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="tituloexemplo">
                    <div class="div_teste">
                      <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">Estava olhando suas fotos nas redes sociais, você está maravilhoso(a)!! Vi as fotos de suas palestras ao redor do mundo, você inspira muita confiança e profissionalismo. Li seus livros e eles foram fundamentais no meu desenvolvimento pessoal. Como foi importante as decisões que tomamos naquele curso de gestão do tempo! De lá para cá sinto que a vida está em constante evolução e que meu nível de felicidade só aumenta. Por falar em felicidade, que fotos lindas das suas viagens! Vejo que mesmo tendo criado uma vida profissional abundante você não deixou de se divertir e de experienciar as vantagens de um bom descanso. Seu sorriso transparece perfeitamente como você está presente nesses momentos com a sua família e amigos. Olho para você e vejo muito equilíbrio.
                    <p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA EXEMPLO-->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Perceba que, no texto acima, existe a <strong> conexão </strong> entre objetivos futuros (que na carta já estão realizados) e decisões no presente momento deste curso (que na carta está no momento passado). O motivo pelo qual essa carta é tão importante é que nossa mente é obcecada por <strong> alinhar expectativas com a realidade </strong> e ela acabará regulando todas as nossas ações e emoções com esta finalidade. Por esta razão, o que você focaliza em sua mente consciente geralmente determina, em grande medida, como sua mente subconsciente será programada (JONES, 2020).
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Ao determinar sua vida no futuro o seu cérebro perceberá que o que foi escrito não condiz com a realidade presente e ele terá dois caminhos a seguir: poderá lhe redirecionar para o presente fazendo-o acreditar que tudo o que está escrito é uma grande bobagem e que não tende a se realizar ou ajustar todas as suas ações para realizar o que foi escrito.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool ms-4">Perceba que, “todas as ações que requerem pensamento ou percepção consciente, como resolver um problema de matemática, escrever e comer, são todas controladas por sua mente consciente” (JONES, 2020, p.7). No entanto, os hábitos que levam à procrastinação e a não realização de metas são inconscientes. Sua carta foi escrita pela sua mente consciente, mas é o seu <strong> inconsciente </strong> que determina se aquele plano será realizado. Para tanto, você precisará rejeitar qualquer tipo de <strong> autossabotagem </strong>que lhe indique que aquele caminho foi fabricado neste curso e persista com o plano consciente até que sua mente se torne teimosa para realizar o que ela acredita ser o alinhamento correto.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Citação com borda verde (esquerda) -->
            <div class="bd-callout bd-callout-success m-3">

              <!-- blockquote do bootstrap -->
              <figure>
                <blockquote class="blockquote">
                  <p>Sua mente subconsciente é como um míssil guiado. Você pode fazê-lo ir para onde quiser e alcançar o que deseja, simplesmente programando-o para adquirir certas metas ou hábitos, como alimentação saudável, exercício e término da procrastinação. Você pode fazer isso usando sua mente consciente através da visualização e afirmações ou através de declarações e conversas positivas</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  <cite title="Source Title">(Jones (2020, p7))</cite>
                </figcaption>
              </figure>
            </div>
            <!-- Citação com borda verde (esquerda) -->

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
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">O que determina a direção da sua mente, se ela irá trabalhar para realizar o que está escrito na carta ou mantê-lo na estagnação são as emoções envolvidas. Se você não sentir bem estar e verdade ao escrever a carta seu fracasso será iminente. Eu aconselho que você releia várias vezes e busque visualizar na sua mente tudo que foi escrito com o sentimento de orgulho e realização. Esse sentimento será buscado pelo seu cérebro como uma droga.</p> <!--caixa secundaria-->
                  </div>
                </section>
              </div>
            </section>
            <!-- FIM DA CAIXA IMPORTANTE -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool ms-4">Também quero que você perceba que eu ressaltei algumas palavras. Elas estão conectadas com uma determinada identidade que você constrói para si mesmo no intuito de que o seu inconsciente trabalhe para realizar o que você conscientemente escolhe. Você pode escolher as palavras que você quiser. No exemplo anterior, a minha identidade profissional está relacionada com confiança e inspiração. Eu preciso ter confiança e transmitir essa confiança para as pessoas a quem eu sirvo para que elas possam se sentirem inspiradas e confiantes, já que na minha profissão, como professora e pesquisadora, sou constantemente representada como exemplo.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Já para a minha <strong> segunda identidade </strong>, que está relacionada com a minha vida pessoal e familiar, eu destaquei as palavras <strong> felicidade e o estado de presença </strong>. Obviamente isso não significa que eu não preciso também ser uma pessoa confiante e inspiradora em minha vida pessoal, especialmente para os meus filhos. Também não quer dizer que eu não espero ser feliz com meu trabalho. No entanto, os diferentes papéis que exercemos em diferentes momentos do nosso dia podem requerer que alguns tipos de emoções sejam mais destacadas.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Eu posso, por exemplo, aceitar que em alguns dias o meu trabalho pode ser exaustivo e eu não me sinta a pessoa mais feliz do mundo enquanto estou ali, mas tenho como <strong> meta estar feliz </strong> e presente sempre que estiver com a minha família. Essa separação que nem sempre é muito fácil de realizar ajuda também a compreender que os diferentes ambientes exigem comportamentos diversos. O trabalho, por exemplo, está diretamente relacionado a um senso de precisão, preciosismo e responsabilidade, enquanto o ambiente familiar está mais relacionado ao <strong> afeto e ao senso de participação </strong>.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Citação com borda verde (esquerda) -->
            <div class="bd-callout bd-callout-success m-3">

              <!-- blockquote do bootstrap -->
              <figure>
                <blockquote class="blockquote">
                  <p>No ambiente profissional, embora seja muito desejável os <strong> bons relacionamentos </strong>, as atividades recreativas não podem atrapalhar os resultados a serem entregues. Do mesmo modo, nos relacionamentos pessoais, embora um bom senso de compromisso e responsabilidade sejam desejáveis, o <strong> afeto </strong> é absolutamente indispensável.</p>
                </blockquote>
              </figure>
            </div>
            <!-- Citação com borda verde (esquerda) -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Desse modo, espera-se que ao elaborar a sua carta de seu futuro você considere tudo aquilo que deseja ser, as emoções que pretende vivenciar e irá perceber que diferentes versões de você podem estar relacionadas a diferentes partes dessa visão. Você também pode adicionar questões materiais como, por exemplo, em que tipo de casa espera estar morando, em qual local de moradia e até o veículo que pretende utilizar para se locomover.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Apenas lembre que a carta é apenas um direcionamento que irá colaborar com o seu planejamento e alimentar o cérebro de motivação. Porém, como será mostrado adiante, os detalhes do seu plano de vida precisam considerar várias questões como número de pontos focais e a definição de prazos.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Escreva sua carta:
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
    <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">
      <i class="fa-solid fa-chevron-left"></i> Voltar </a>
    <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
  </div>

  <!-- FOOTER  -->
  <?php
  include('layout/footer.php');
  ?>
  <!-- FIM DO FOOTER  -->

</body>

</html>
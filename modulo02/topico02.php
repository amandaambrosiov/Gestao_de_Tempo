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
            <h2 class="Titulo fw-bolder">Sistema 5s aplicado à gestão do tempo</h2><br>
            <!--  Título Principal -->

            <!-- IMAGEM NO SITE  -->

            <div class="text-center img-01">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 2:</strong>
                Representação de organização</p>
              <div class="zoom">
                <a href="imgs02/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                  <img src="imgs02/Figura02.png" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>banco de imagens gratuitas do
                canvas, 2021.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem1" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura02.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong>banco de imagens gratuitas do canvas, 2021.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

            <!-- FIM DA IMAGEM NO SITE  -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Para colaborar com o processo de limpeza e priorização, eu gostaria de lhe apresentar o
              <strong> sistema 5S </strong>. Trata-se de um programa de gestão de qualidade desenvolvido no Japão, que
              visa aperfeiçoar
              aspectos dentro das organizações que estão relacionados à organização, limpeza e padronização.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">O sistema 5S não foi idealizado para tratar especificamente da Gestão do Tempo pessoal,
              entretanto, esta ferramenta pode ser bastante útil, afinal, ela é utilizada nas maiores indústrias e está
              diretamente relacionada à cultura da <strong> disciplina </strong> e ajuda a <strong> economizar tempo,
                reduzir desperdícios e manter
                a organização.</strong>
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
                    <p class="txt-caixasecundaria">A palavra <strong> cultura da disciplina </strong> é uma grande
                      chave, pois para a maioria das pessoas a disciplina não é algo natural e muitas vezes está
                      relacionada com um ambiente <strong> chato e repetitivo </strong>. Pessoas com mente flexível,
                      como é o meu caso, resistem à disciplina quando esta leva ao tédio ou a preocupações. Em
                      contraste, a cultura da disciplina está relacionada com uma determinada mentalidade que não visa
                      programar completamente a vida e se ocupar com inúmeras atividades o dia todo, mas sim administrar
                      as atividades que precisam ser feitas por ordem de prioridade e a quantidade de energia necessária
                      para que elas sejam efetivamente concluídas.
                    </p><!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">O sistema 5S busca um <strong> aumento da produtividade e melhoria das atividades
              </strong>através da
              organização e do combate a qualquer tipo de dispersão. Quando falamos na palavra cultura subentende-se que
              esta nova mentalidade seja absorvida de forma suave como uma reprogramação mental e não simplesmente como
              uma obrigação de agenda. São cinco os aspectos que abrangem o sistema mencionado:
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- lista ordenada  -->
            <ol class="scrool" id="txt_final">
              <li>Senso de utilização;</li>
              <li>Senso de organização;</li>
              <li>Senso de limpeza;</li>
              <li>Senso de padronização;</li>
              <li>Senso de disciplina.</li>
            </ol>
            <!-- fim da lista ordenada  -->

            <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
            <section class="container">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="titulofiqueatento">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">O primeiro aspecto trata da <strong> seleção, utilização e descarte
                      </strong>. Implica em livrar-nos de tudo que atrapalha. Para que você perceba a importância desse
                      aspecto basta você imaginar dois ambientes: um deles é um espaço vazio e o outro um espaço com
                      muitos móveis e objetos. Qual desses ambientes você acredita ser mais rápido e fácil de limpar e
                      organizar? Nas empresas este senso está direcionado principalmente aos setores de compra e
                      logística, mas podemos perfeitamente adaptar para nossa vida.</p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA FIQUE ATENTO -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool ms-3">Se você faz compras compulsivamente, por exemplo, pode acabar com um ambiente
              completamente <strong> obstruído de objetos sem utilização </strong> e, muitas vezes, com dívidas. Como
              consequência, seu
              ambiente de moradia e de trabalho podem tornar-se desorganizados ou você poderá necessitar dedicar muito
              mais tempo para conseguir manter a organização.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Em contraste, se você se guia pelo senso de utilização e seleciona apenas os <strong>
                objetos
                necessários </strong> descartando o que não é utilizado você poderá reduzir o consumo e economizar
              recursos. Esta
              mentalidade lhe ajudará a adquirir somente o necessário. A longo prazo esta atitude poderá resultar não
              apenas na redução do tempo de manutenção dos espaços como também na redução das despesas.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
            <section class="container">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="titulofiqueatento">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">O senso de utilização não é útil apenas para pensar objetos e espaços
                      físicos. Se aplicarmos do ponto de vista das relações sociais, falaremos no estabelecimento de
                      limites e no equilíbrio entre as nossas atividades, ou seja, uma avaliação do modo como utilizamos
                      o nosso tempo. Da mesma forma que ocorre nos espaços físicos, a <strong> compulsão social
                      </strong> leva à obstrução nas relações sociais e a ausência de limites pode resultar em problemas
                      como burnout e desequilíbrio entre o âmbito pessoal e profissional.</p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA FIQUE ATENTO -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">De acordo com Allen (2017, p.53), “o "burnout" é um termo muito comum hoje e se refere ao
              estado em que caímos quando esprememos até a última gota de gozo de nossas vidas devido ao estresse e a
              auto exigência excessiva para cumprir com tudo o que é necessário”. O excesso de disposição para o
              trabalho é muitas vezes percebido como algo positivo e que é socialmente adjetivado com bons nomes tais
              como, trabalhador, esforçado, guerreiro, dedicado. Porém, do ponto de vista da saúde mental é preciso
              perceber até que ponto pode ser considerado saudável e sustentável.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Pode ser relativamente fácil conseguir manter uma grande carga de trabalho por um pequeno
              período de tempo e sustentar uma rotina com longas horas de trabalho. No entanto, como afirma Allen (2017,
              p.53), “ironicamente, este excesso de compromisso rapidamente se torna contraproducente porque poucas
              pessoas têm uma bateria física e mental para trabalhar dessa forma”.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- CAIXA DE TEXTO SAIBA-MAIS -->
            <section class="container">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="tituloSaibaMais">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="saibamais">
                    <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75"> Passe o mouse acima
                        </strong></strong></p>
                    <p class="txt-caixasecundaria">Uma das razões para que o burnout se torne cada vez mais comum nos
                      dias de hoje é a questão da autocobrança e da dificuldade em estabelecer limites aos nossos
                      compromissos. Quanto a esse fato é preciso lembrar que muitas vezes dizer não a algo ou alguém
                      simplesmente implica em dizer sim a si mesmo. “Dizer não pode ser um dos atos mais sublimes de
                      amor próprio e valorização. Quando uma pessoa diz não a um amigo, em função de seu bem-estar,
                      está, sem sombra de dúvidas, demonstrando amor próprio” (MOURA, 2021, p.11).</p>
                    <!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA SAIBA MAIS  -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">O <strong> senso de organização </strong> é utilizado, em geral, para manter os objetos
              ordenados e corretamente identificados nas fábricas. Ele também é passível de ser aplicado no nosso
              ambiente profissional e em casa, porém, para a gestão do tempo, o senso de ordenação poderia ser mais bem
              aplicado na priorização de suas atividades.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">A falta de prioridade é outro claro motivo pelo qual as pessoas têm dificuldade de dizer
              não, pois sem a priorização qualquer atividade pode parecer muito importante ou nenhuma das atividades
              será realmente importante. Como resultado, ou você poderá ter um <strong> excesso de atividades </strong>
              e tentar fazer
              malabarismos com o tempo para executá-las ou você pode simplesmente <strong> procrastinar </strong> e não
              fazer nada.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Para Jones (2020, p.17),
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <div class="bd-callout bd-callout-success m-4">
              <p>
                “Ser produtivo vem de um estado mental focado. Isso inclui apenas o foco no presente e a
                concentração nas etapas necessárias para alcançar seus objetivos. Para fazer isso, você precisa
                aprender a eliminar as distrações ao seu redor”. Por sua vez, a identificação das distrações é
                possível depois que você determina suas prioridades. “Se você não prioriza, pode acabar tendo muitos
                objetivos, deixando muito pouco tempo para se dedicar a cada um deles”
              <p class="text-end">LAWRENCE,
                2019, p.25</p>
              </p>
            </div>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">A organização, portanto, está claramente relacionada ao planejamento do qual falamos na
              primeira parte desse curso. Se você já tem uma visão sobre os objetivos que você deseja atingir e sabe
              qual foco deve determinar as suas atividades, não faz sentido ficar se comprometendo com qualquer outra
              eventualidade que possa ser evitada. “Quando você não planeja, você também <strong> planeja falhar
              </strong>. Um bom plano é essencial para atingir os objetivos e preencher a lacuna de execução, uma vez
              que lhe dá direção e ajuda você a permanecer no caminho certo” (LAWRENCE, 2019, p.36).
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">O <strong> senso de limpeza </strong>, como o próprio nome indica, está relacionado com a
              desobstrução e a manutenção satisfatória dos espaços. Quando aplicamos este senso para nossa vida pessoal
              e profissional podemos pensar tanto na limpeza de espaços físicos, mas também no nosso moderno espaço
              virtual. Os arquivos de seu computador estão organizados? Sua caixa de entrada está completamente vazia?
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
            <section class="container">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="titulofiqueatento">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">Nos dias atuais, o espaço virtual é tão importante quanto o espaço
                      físico. Quando ele está obstruído, desorganizado e cheio de entulhos poderá dificultar a fluidez
                      das atividades e até gerar problemas maiores como a perda de arquivos ou a não resolução de algo
                      importante que você acabou deixando para responder depois e acabou por esquecer.</p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA FIQUE ATENTO -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Para que você possa ter uma boa gestão de seu <strong> espaço virtual </strong> e,
              consequentemente, utilizar melhor seu tempo, considere, por exemplo, não deixar as mensagens na caixa de
              entrada eternamente e marcar os emails indesejados como SPAM, além de cancelar o seu cadastro. Também é
              muito importante que não fique obcecado em responder todos os e-mails o tempo todo se dispersando de
              outras atividades. Se possível, é melhor definir um horário, ou alguns horários específicos para esta
              finalidade.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Os sensos de <strong> padronização e disciplina </strong> estão vinculados à manutenção
              dos níveis de qualidade a longo prazo. Tem a ver com uma mudança permanente de hábitos e o compromisso com
              as mudanças programadas. Tomando o exemplo anterior do espaço virtual, a padronização poderia ser aplicada
              à organização de pastas para guardar arquivos ou até mesmo modelos de e-mail pré-preenchidos que tornem
              mais rápido as respostas, além da própria padronização de horários para leitura.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">Manter a padronização requer um grande senso de disciplina. “O compromisso é a chave para
              a execução e, sem ele, você continuará sendo prejudicado ao perseguir seus objetivos” (LAWRENCE, 2019,
              p.35). Perceba que o compromisso não está relacionado com a atividade, mas com você e com o que você
              estabelece como objetivo futuro. Cada vez que você não cumpre aquilo que se comprometeu consigo mesmo,
              está agindo contra seus próprios interesses.
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
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">É importante destacar que, assim como ocorre nas organizações, a
                      aplicação dessas premissas em sua vida muitas vezes depende do <strong> envolvimento de outras
                        pessoas </strong>. Nesse caso, será necessário que você envolva todos os participantes de modo
                      que possam também compreender a importância das mudanças e os impactos positivos que podem trazer.
                    </p> <!--caixa secundaria-->
                  </div>
                </section>
              </div>
            </section>
            <!-- FIM DA CAIXA IMPORTANTE -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="scrool">É preciso também ressaltar que, objetivos requerem ação. Para que o planejado possa se realizar, você tem que tomar medidas diárias que o aproximem do que você tem em mente. “As metas têm um preço - não necessariamente monetário, mas as metas precisarão que você invista tempo e esforço e outras coisas em que possa pensar” (LAWRENCE, 2019, p.25).
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
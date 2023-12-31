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
                        <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s">
                            01 - A Gestão do Tempo</h2><br>
                        <!--  Título Principal -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center wow animate__zoomIn" data-wow-delay="0.3s" id="img-left">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                Representação do tempo na mente humana</p>
                            <div class="zoom">
                                <a href="imgs01/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                                    <img src="imgs01/Figura01.png" alt="Imagem que remete a organização" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>banco de
                                imagens
                                gratuitas do canvas, 2020</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs01/Figura01.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 1:</strong>Representação do tempo na mente
                                        humana</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" id="text-left">Nossos dias e horas são basicamente
                            definidos
                            pela duração do sol, da
                            lua e
                            das estações. Os egípcios resolveram organizar o tempo em calendários com a duração
                            do ano e
                            das horas do dia e, desde então, utilizamos essa referência para organizar nossas
                            vidas.
                            Isso não significa que a nossa <strong> relação com o tempo </strong>tenha sido
                            sempre a
                            mesma. Todos nós, mas em especial aqueles com mais de trinta anos, percebemos
                            claramente que
                            desde a chegada das novas tecnologias a nossa relação com o tempo mudou
                            drasticamente.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">A tecnologia diminuiu o tempo
                            necessário para
                            executar a maioria das
                            nossas
                            tarefas e, além disso, contribuiu para aumentar nossa expectativa de vida. No
                            entanto, nossa
                            percepção sobre o tempo muito frequentemente tem sido de encurtamento e não de
                            alargamento.
                            Cada vez mais estamos vivendo de forma <strong>imediatista</strong> e os problemas
                            de
                            <strong>estresse e ansiedade</strong> se tornaram mais evidentes. Mas, percebam que
                            a
                            <strong> duração do tempo não mudou </strong>, apenas a nossa relação com o tempo se
                            modifica.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <br><br>
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
                                        <p class="txt-caixasecundaria">O principal objetivo da gestão do tempo é
                                            tornar
                                            mais eficaz a sua relação com tarefas, compromissos, metas e
                                            planejamento de
                                            curto, médio e longo prazo. Quando aliamos a gestão do tempo com os
                                            benefícios tecnológicos isso nos possibilita viver e produzir melhor do
                                            que
                                            há tempos atrás planejando a vida com autonomia e liberdade o que pode
                                            gerar
                                            resultados a longo prazo que seriam mais bem traduzidos como qualidade
                                            de
                                            vida.</p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA IMPORTANTE -->


                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout bd-callout-success m-3 wow fadeIn" data-wow-delay="0.3s">

                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class="blockquote">
                                    <p>Provavelmente você conhece alguém <strong> extremamente ativo </strong> que
                                        parece fazer o dia durar 50 horas e alguém para a qual o dia parece ter
                                        somente
                                        12 horas. Obviamente, elas não conseguem esticar ou encurtar as horas do
                                        dia,
                                        mas o modo como se relacionam com seu tempo é completamente diferente.
                                        Assim, a
                                        relação com o tempo é ao mesmo tempo <strong> prática e material </strong>,
                                        mas
                                        também <strong> emocional </strong>.</p>
                                </blockquote>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">A consequência imediata no fato de alguém
                            conseguir o melhor aproveitamento do
                            seu dia é que essas pessoas geralmente conseguem obter melhores resultados em relação à
                            execução das suas tarefas e atividades diárias. Mas, é também bastante comum que essas
                            pessoas tenham uma atitude mais empoderada em relação à sua vida e muitas vezes mais
                            positivas.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Pessoas que se relacionam mal com o tempo, por
                            outro lado, podem viver
                            constantemente em estado de reclamação e apegadas ao tempo perdido ou desestimuladas com
                            o
                            seu planejamento futuro.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="titulofiqueatento">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO
                                            </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima
                                            </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">A gestão está diretamente relacionada com o
                                            planejamento, logo, no caso da gestão do tempo, com a nossa capacidade
                                            de
                                            planejar rotinas e objetivos futuros ao invés de apenas reagir aos
                                            acontecimentos correntes. Em outras palavras, você pode escolher entre
                                            planejar o futuro e responder conscientemente ao presente ou reagir
                                            compulsivamente a ele. Certamente não podemos controlar tudo que pode
                                            acontecer no nosso dia a dia a partir de uma agenda. A vida tem o seu
                                            próprio curso e imprevistos são normais, mas está a nosso alcance
                                            planejar o
                                            tipo de atitude que teremos em relação aos acontecimentos e utilizar o
                                            planejamento sempre como um norte para nossas ações.</p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Planejar a utilização do tempo também implica
                            fazer escolhas de objetivos, de
                            prioridades e até mesmo do tipo de emoções que desejamos deixar para trás e aquelas que
                            gostaríamos de adicionar em um novo plano. A culpa, por exemplo, pode ser substituída
                            pela
                            responsabilidade, de modo que você possa apenas olhar para todo o seu processo anterior
                            como
                            um olhar apenas analítico e não crítico.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!--CAIXA DE TEXTO REFLITA -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion ">
                                <section id="content">
                                    <section id="content">
                                        <div class="caixaprincipal" id="tituloreflita">
                                            <div class="div_teste">
                                                <div> <i class="fa-solid fa-head-side-virus fa-xl me-2"></i>REFLITA
                                                </div>
                                                <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                            </div>
                                        </div> <!--caixa Principal-->
                                        <div class="accordion-content" id="reflita">
                                            <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima
                                                </strong></p>
                                            <p class="txt-caixasecundaria">Esse novo olhar permite que você possa
                                                ajustar tudo o que for necessário e construir uma nova realidade sem
                                                cair em um estado emocional de <strong>autoflagelo</strong> .</p>
                                        </div>
                                    </section><!--caixa secundaria-->
                            </div>
                        </section>
                        <!-- FIM DA CAIXA REFLITA-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Você já deve ter alguma vez na sua vida escutado
                            a frase “tempo é dinheiro”.
                            Alguém que trabalhe 50 horas por semana e <strong> mal consiga ter dinheiro para
                                sobreviver
                            </strong> vai discordar imediatamente dela, mas, a rigor, o tempo pode mesmo ser
                            traduzido
                            como prosperidade. Para que você perceba o quão essa máxima é verdadeira basta você
                            pensar
                            que as pessoas mais ricas do mundo possuem investimentos que permitem que seu dinheiro
                            seja
                            multiplicado com o tempo. Na verdade, todos nós nos beneficiamos da relação tempo x
                            dinheiro
                            quando colocamos nossas economias <strong> na poupança</strong>.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="titulofiqueatento">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO
                                            </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima
                                            </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">Não cabe aqui entrar no mérito de todas as
                                            vantagens que uma pessoa que tornou-se milionária pode ter tido em
                                            relação
                                            ao trabalhador que mal consegue sobreviver. O que nos interessa aqui é
                                            avaliar se você na situação em que se encontra hoje está agindo como um
                                            milionário que <strong> multiplica o tempo </strong> ou como um
                                            sobrevivente
                                            que trabalha demais, mas não alcança os melhores resultados.</p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Um dos aspectos mais importantes que separam
                            pessoas extremamente realizadores
                            das pessoas que mal conseguem fazer minimamente suas tarefas é a definição de
                            prioridades
                            que, por sua vez, está ligada à sua visão futura. Se você pudesse duplicar as horas do
                            seu
                            dia, como utilizaria esse excedente?
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">A gestão do tempo possibilita uma percepção mais
                            ampla do planejamento de
                            metas futuras que consequentemente levará a uma definição clara de prioridades e o
                            estabelecimento de metas. Para tanto, a autoavaliação do presente é fundamental. Como
                            você
                            tem priorizado as suas atividades?
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
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
                                        <p class="txt-caixasecundaria">Para muitas pessoas a gestão do tempo é
                                            completamente inexistente em sua rotina. Elas geralmente possuem um
                                            horário
                                            de trabalho e fazem todas as outras coisas no tempo de sobra e como
                                            podem.
                                            Alguns atentam para o planejamento do tempo, mas raramente executam as
                                            atividades planejadas. Poucos são aqueles completamente disciplinados
                                            que
                                            não apenas planejam, mas executam todas as atividades conforme
                                            programado.
                                            Quem está correto? Depende de suas necessidades.
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn d-flex justify-content-center" data-wow-delay="0.3s"><strong>A disciplina
                                para cumprir todas as atividades
                                está relacionada principalmente
                                com três aspectos:</strong>
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->
                        <div class="container">
                            <div class="row">
                                <div class="col d-flex justify-content-center gap-3">
                                    <a class="li_interativo wow fadeInDown" data-wow-delay="0.3s">
                                        A disposição natural do indivíduo
                                    </a>
                                    <a class="li_interativo wow fadeInDown" data-wow-delay="0.4s">
                                        A definição clara de atividades e
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-center gap-3">
                                        <a class="li_interativo wow fadeInDown" data-wow-delay="0.5s">
                                            A motivação pessoal.
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Desse modo, algumas pessoas conseguem seguir a
                            disciplina de modo natural e
                            até sentem prazer em executar as atividades programadas. No entanto, não fique chateado
                            se
                            você não for uma dessas pessoas porque elas são uma pequena minoria. Para todas as
                            outras
                            pessoas, a disciplina é o resultado de um bom planejamento e ótima organização das
                            tarefas.
                            Já a manutenção da disciplina no decorrer do tempo exige para todas as pessoas (mesmo
                            aquelas que são altamente disciplinadas) uma motivação permanente que pode ser traduzida
                            como uma visão de mundo que conduz o indivíduo aos seus objetivos.
                        </p><br>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn d-flex justify-content-center" data-wow-delay="0.3s"> <strong>
                                Por essa razão, destacamos entre as vantagens da
                                gestão do tempo:
                            </strong>
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM COM CAIXAS DE TEXTO -->
                        <div class="apresentacao">
                            <div class="img_apresentacao wow animate__zoomIn">
                                <img src="imgs/pessoa.png" alt="">
                                <strong class="FonteFigura FonteMenor text-secondary font">Fonte: <a
                                        href="https://br.freepik.com" target="_blank" rel="noopener noreferrer">
                                        Freepik</a></strong>
                            </div>
                            <div>
                                <!-- lista ordenada  -->
                                <ul class="wow fadeIn" data-wow-delay="0.3s" id="txt_final">
                                    <li class="wow animate__zoomIn texto_apresentacao_lista" data-wow-delay="0.3s"><i
                                            class="bi bi-1-circle"></i> Planejamento para atingir metas e aumentar
                                        a produtividade e eficiência do tempo;
                                    </li>
                                    <li class="wow animate__zoomIn texto_apresentacao_lista" data-wow-delay="0.5s"><i
                                            class="bi bi-2-circle"></i> A mudança de hábitos e da mentalidade sobre
                                        o tempo. A combinação dessas vantagens,
                                        por
                                        sua vez, pode trazer felicidade e satisfação pessoal.</li>
                                </ul>
                                <!-- fim da lista ordenada  -->
                            </div>
                            <!-- IMAGEM COM CAIXAS DE TEXTO END-->
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
        <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true">
            <i class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                class="fa-solid fa-chevron-right"></i></a>
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
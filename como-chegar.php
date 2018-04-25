<?php include("head.php"); ?>
<?php $page = 'como-chegar'; ?>
<body  class="<?php if(!isset($page)) { echo "pg-home"; } else { echo "pg-interna pg-".$page; } ?>">
    <?php include('header.php'); ?>
        <main>
            <h1 id="page--title" class="container text-center">Como Chegar</h1>
            <section id="content">
                <div class="container">
                    <!--conteúdo-->
                    <div class="banner--interno text-center" style="background-image:url(./assets/css/img/banner--interno_historia.jpg)">
                        <h1>Como Chegar</h1>
                    </div>
                    <p>
                        <strong>Veja o Melhor Caminho</strong><br/>
                    </p>
                    <div id="mapa" class="intrinsic-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5447453944666!2d-43.294501484492415!3d-22.893269943145608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997d070e398159%3A0x9e05df3c77e2e376!2sEst%C3%A1dio+Nilton+Santos!5e0!3m2!1spt-BR!2sbr!4v1494510168723" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <p class="alerta aviso">
                        <strong>Ônibus SOU BOTAFOGO <i>&#9733;</i></strong><br/>
                        Buscando facilitar o acesso do torcedor alvinegro ao estádio, o Programa Sou Botafogo oferece traslado de ida e volta por R$30 (preço-base, podendo sofrer variação) para o Estádio Nilton Santos, com pontos de saída de General Severiano e Caio Martins. A saída limite do Transporte varia a cada jogo, com saída conforme lotação. A aquisição pode ser realizada de forma exclusiva pelo site do Sou Botafogo somente por cartão de crédito. Garanta seu transporte com antecedência, os lugares são limitados e estarão à venda enquanto houver disponibilidade. 
                        <a href="htt://www.botafogo.com.br/soubotafogo" class="btn btn--3" title="Comprar Passagem">Comprar Passagem</a>
                    </p>
                    <p>
                        <strong>Outros acessos</strong>
                        <br>
                        <b>COMO CHEGAR DE METRÔ:</b>
                        <br><br>
                        Não há uma estação exclusiva no estádio. Uma das opções é ir de metrô até a estação Central e fazer a integração com a Supervia. O Metrô-Rio costuma estender o horário de funcionamento e fazer operação especial para os jogos noturnos. Outra alternativa é descer do metrô em Del Castilho, Maria da Graça ou Inhaúma e pegar ônibus ou táxi.
                        <br><br>
                        <b>COMO CHEGAR DE TREM:</b>
                        <br><br>
                        Pelos trens da SuperVia: saltar na estação Engenho de Dentro. A estação tem grande cobertura, diversas plataformas e é próxima ao Setor Sul do estádio. A Supervia costuma fazer operação especial e oferecer trens extras após os jogos noturnos.
                        <br><br>
                        <b>COMO CHEGAR DE CARRO:</b>
                        <br><br>
                        O Estádio Nilton Santos tem fácil acesso, com opções como Linha Amarela, Rua Piauí e Avenida Dom Hélder Camara. É próximo o Norte Shopping e ao Shopping Nova América. A casa do Botafogo dispõe de um grande estacionamento (Norte 1, localizado na Rua das Oficinas), com preço que varia de acordo com o jogo. Sócios do clube podem adquirir também Estacionamento Norte 2 ou Estacionamento Oeste.
                        <br><br>
                        <b>COMO CHEGAR DE ÔNIBUS:</b>
                        <br><br>
                        Há diversas linhas que atendem ao entorno do Estádio Nilton Santos, originadas em vários pontos da cidade. A RioÔnibus indica: 238, 254, 277, 346, 353, 383, 543L, 606, 636, 638, 639, 652, 669, 676, 680 e 692. Há ainda outras alternativas, que deixam em vias próximas, como Avenida Dom Hélder Camara, Avenida Amaro Cavalcanti e Rua Piauí.
                    </p>
                    <div class="mask hidden-xs" style="background-image:url(./assets/css/img/onibusbfr.jpg)">
                        <div class="container">
                            <h1>Vem Torcer</h1>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php include("footer.php"); ?>

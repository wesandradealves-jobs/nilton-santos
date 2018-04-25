<?php include("head.php"); ?>
<?php $page = 'camarotes'; ?>
<body  class="<?php if(!isset($page)) { echo "pg-home"; } else { echo "pg-interna pg-".$page; } ?>">
    <?php include('header.php'); ?>
        <main>
            <h1 id="page--title" class="container text-center">Camarotes</h1>
            <section id="content">
                <div class="container">
                    <!--conteúdo-->
                    <div class="banner--interno text-center" style="background-image:url(./assets/css/img/banner--interno_historia.jpg)">
                        <h1>Camarotes</h1>
                    </div>
                    <div id="camarotes-disponiveis">
                        <p>
                            O Botafogo comercializa camarotes exclusivos para grandes jogos. Com todo conforto, buffet, vagas de estacionamento e vista privilegiada, o setor fica acessível aos torcedores do Fogão. A novidade é a venda online pelo site:<br/><br/><a target="_blank" href="http://www.guicheweb.com.br/botafogo" title="A novidade é a venda online pelo site Guiche Web">www.guicheweb.com.br/botafogo</a>
                            <br/><br/>
                            Há também venda de cadeira avulsa no Camarote Leste, por R$ 200 (sem buffet e estacionamento inclusos).
                            <br/><br/>
                            Apesar de a venda de camarotes ser por temporada, o Botafogo abre exceção para determinadas partidas, proporcionando a mais torcedores esta experiência no estádio. Há camarotes inteiros no setor Leste.
                            <br/><br/>
                            <strong>PREÇO-BASE</strong> (valores podem variar jogo a jogo):
                            <br/><br/>
                            - Cadeira avulsa em camarote Leste. Valor: R$ 200;<br/><br/>
                            - Camarote Leste de 16 lugares. Valor: R$ 4.000 (Com direito a buffet para todos os convidados e 3 vagas no Estacionamento Norte 1);<br/><br/>
                            - Camarote Leste de 20 lugares. Valor: R$ 5.000 (Com direito a buffet para todos os convidados e 4 vagas no Estacionamento Norte 1);<br/><br/>
                            - Camarote Oeste de 20 lugares. Valor: R$ 6.800 (Com direito a buffet para todos os convidados e 5 vagas no Estacionamento Norte 2).   
                        </p>
                    </div>
                    <p>
                        <strong>Temporada</strong>
                        <br/>
                        Para adquirir camarotes para toda a temporada, entre em contato:
                        <br/><br/>
                        <a href="mailto:camarotes@botafogo.com.br" title="camarotes@botafogo.com.br">camarotes@botafogo.com.br</a> - (21) 2546-1953 (horário comercial)     
                    </p>
                    <img src="./assets/css/img/rodape_cadeiras.png" alt="Mais de 10 mil cadeiras já foram adotadas pelos torcedores alvinegros" width="100%" />
                </div>
            </section>
        </main>
<?php include("footer.php"); ?>
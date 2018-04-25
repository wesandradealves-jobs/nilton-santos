<?php include("head.php"); ?>
<?php $page = 'historia'; ?>
<body  class="<?php if(!isset($page)) { echo "pg-home"; } else { echo "pg-interna pg-".$page; } ?>">
    <?php include('header.php'); ?>
        <main>
            <h1 id="page--title" class="container text-center">História</h1>
            <section id="content">
                <div class="container">
                    <!--conteúdo-->
                    <div class="banner--interno text-center" style="background-image:url(./assets/css/img/banner--interno_historia.jpg)">
                        <h2>Conheça nossa casa</h2>
                    </div>
                    <p>
                        Construído para os Jogos Pan-Americanos de 2007, o Estádio Nilton Santos foi erguido pela prefeitura no antigo terreno da Rede Ferroviária Federal, na Rua José dos Reis, no bairro do Engenho de Dentro, Zona Norte do Rio de Janeiro. Inaugurado no dia 30 de junho de 2007, com a vitória do Botafogo por 2 a 1 sobre o Fluminense, o estádio é considerado o mais moderno da América Latina e o quinto mais moderno do mundo. 
                        <br><br>
                        O sonho do Botafogo de ter seu próprio estádio virou realidade em agosto de 2007, quando o clube venceu a licitação realizada pela prefeitura. O clube, então, passou a mandar seus jogos no local, além de administrá-lo e explorá-lo comercialmente. Em 2015, a pedido do Botafogo, o nome foi alterado para Estádio Nilton Santos, em homenagem ao ídolo conhecido como Enciclopédia do Futebol.
                        <br><br>
                        Além do campo de futebol com grama natural, de dimensões de 105 x 68m, o estádio conta com uma pista de atletismo, com nove raias no padrão standard da IAAF, dois setores para salto triplo e em distância, um para salto com vara, outro para salto em altura e uma pista de dardo. Há ainda um campo anexo destinado a treinamentos e uma pista de atletismo interna para aquecimento. O Estádio Nilton Santos atualmente tem capacidade para 46 mil pessoas e foi o principal equipamento dos Jogos Olímpicos de 2016.
                        <br><br>
                        Em 2017, nossa casa ganha as cores alvinegras, fortalecendo o vínculo com a torcida e aumentando o orgulho dos botafoguenses.                        
                    </p>
                    <div id="galeria">
                        <!-- Place somewhere in the <body > of your page -->
                        <div class="flexslider slide">
                            <ul class="slides">
                                
                                
                                  <?php
									for ($x=1; $x<=18; $x++) {
									  echo " <li>
											<img src='assets/css/img/$x.jpg'/>
										  </li>";
									}
									?>
	
                                
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                        <div class="flexslider visible-lg carousel">
                            <ul class="slides">
                                 <?php
									for ($x=1; $x<=18; $x++) {
									  echo " <li>
											<img src='assets/css/img/$x.jpg'/>
										  </li>";
									}
									?>
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>   
                        <div class="lettering text-uppercase text-center visible-lg">Galeria</div>
                    </div>
                    <!--conteúdo-->
                </div>
            </section>
        </main>
       <?php include("footer.php"); ?>
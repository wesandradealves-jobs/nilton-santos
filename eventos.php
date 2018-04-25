<?php require_once('Connections/con1.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_con1, $con1);
$query_todos_eventos = "SELECT * FROM bt_nsatracoes WHERE status = 'ativo' ORDER BY id_atracao DESC";
$todos_eventos = mysql_query($query_todos_eventos, $con1) or die(mysql_error());
$row_todos_eventos = mysql_fetch_assoc($todos_eventos);
$totalRows_todos_eventos = mysql_num_rows($todos_eventos);
?>

<?php include("head.php"); ?>
<?php $page = 'eventos'; ?>
<body  class="<?php if(!isset($page)) { echo "pg-home"; } else { echo "pg-interna pg-".$page; } ?>">
    <?php include('header.php'); ?>
        <main>
            <h1 id="page--title" class="container text-center">Eventos</h1>
            <section id="content">
                <div class="container">
                    <!--conteúdo-->
                    <div class="banner--interno text-center" style="background-image:url(./assets/css/img/banner--interno_historia.jpg)">
                        <h1>Eventos</h1>
                    </div>
                    <h4 class="text-center">Próximas atrações no estádio Nilton Santos</h4>
                    <div class="flexslider produtos">
                        <ul id="agenda" class="slides">
                            <?php do { ?>
                                <li class="agenda">
                                <div>
                                    <div class="agenda--thumbnail">
                                    <div style="background-image:url(./assets/images/<?php echo $row_todos_eventos['imagem']; ?>)">
                                        <!---->
                                    </div>
                                    </div>
                                    <div class="agenda--content">
                                    <h5><?php echo $row_todos_eventos['data']; ?></h5>
                                    <h6><?php echo $row_todos_eventos['titulo']; ?></h6>
                                    <a class="btn btn--2 waves-effect waves-light" href="<?php echo $row_todos_eventos['link']; ?>" title="Comprar Ingressos">Comprar</a>
                                    </div>
                                </div>
                                </li>
                                <?php } while ($row_todos_eventos = mysql_fetch_assoc($todos_eventos)); ?>
                        </ul>
                    </div>
                    <p>
                    <strong>Seu evento mais Alvinegro!</strong><br/>
                    Já imaginou seu evento dentro do estádio do Botafogo? Podem ser casamentos, festas de aniversário, 
                    formaturas e 15 anos, entre outros. Agora, o Estádio Nilton Santos tem os espaços ideais para 
                    todo tipo de comemoração. Para mais informações, entre em contato pelo e-mail <a href="mailto:jota@gbme.io" title="jota@gbme.io">jota@gbme.io</a> ou pelo 
                    telefone (21) 96887-4042 e surpreenda os seus convidados. Conheça os setores do Estádio Nilton Santos:    
                    </p>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Centro de Convenções (Prédio Anexo)</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/33036536105/in/dateposted-public/" title="2016-12-22 12.07.24"><img alt="2016-12-22 12.07.24" src="https://c1.staticflickr.com/3/2256/33036536105_e2cbf11e96.jpg" width="100%" /></a>
                        </div>
                        <div class="tags">
                            <span>Palestras</span>
                            <span>Premiações</span>
                            <span>Workshops</span>
                            <span>Almoços/Jantares Executivos</span>
                            <span>Ações Corporativas</span>
                        </div>
                    </article>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Arena Lounge (Ala Oeste)</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/32994856036/in/dateposted-public/" title="Arena Lounge - Nilton Santos 2"><img alt="Arena Lounge - Nilton Santos 2" src="https://c1.staticflickr.com/4/3931/32994856036_b66caafae0.jpg" width="100%" /></a>
                        </div>
                        <div class="tags">
                            <span>Festas para até 1.300 pessoas</span>
                            <span>Casamentos</span>
                            <span>Formaturas</span>
                            <span>Aniversários</span>
                            <span>Corporativos</span>
                            <span>Eventos em geral</span>
                        </div>
                    </article>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Espaço Manequinho/Arena Kids (Camarote panorâmico)</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/32191210974/in/dateposted-public/" title="Arena Kids"><img alt="Arena Kids" src="https://c1.staticflickr.com/3/2249/32191210974_49b6c7c3cc.jpg" width="100%" /></a>
                        </div>
                        <div class="tags">
                            <span>Espaço de festas infantis</span>
                            <span>Eventos Corporativos</span>
                        </div>
                    </article>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Espaço Premium (Tribuna)</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/32191157554/in/dateposted-public/" title="Espaço Premium"><img alt="Espaço Premium" src="https://c1.staticflickr.com/1/592/32191157554_7f9b15a27c.jpg" width="100%" /></a>
                        </div>
                        <div class="tags">
                            <span>Eventos Corporativos</span>
                            <span>Aniversários</span>
                            <span>Sociais</span>
                        </div>
                    </article>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Platô: (setores Sul e Norte)</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/32191250424/in/dateposted-public/" title="Platô2"><img alt="Platô2" src="https://c1.staticflickr.com/3/2097/32191250424_6ca8d00f83.jpg" width="100%" /></a></a>
                        </div>
                        <div class="tags">
                            <span>Festas para até 4 mil pessoas</span>
                            <span>Shows de médio porte</span>
                            <span>Feijoadas</span>
                            <span>Eventos em geral</span>
                        </div>
                    </article>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Espaço Botafogo (Entrada Ala Leste)</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/32654442230/in/dateposted-public/" title="Espaço Botafogo 1"><img alt="Espaço Botafogo 1" src="https://c1.staticflickr.com/3/2602/32654442230_ab5277b96c.jpg" width="100%" /></a>
                        </div>
                        <div class="tags">
                            <span>Área para shows e festivais de médio porte</span>
                            <span>Festas para até 6 mil pessoas</span>
                            <span>Feiras Gastronômicas</span>
                            <span>Feiras Variadas</span>
                            <span>Eventos em geral</span>
                        </div>
                    </article>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Botafogo Park (Estacionamento)</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/32191182374/in/dateposted-public/" title="Botafogo Park3"><img alt="Botafogo Park3" src="https://c1.staticflickr.com/3/2399/32191182374_6232188b47.jpg" width="100%" /></a>
                        </div>
                        <div class="tags">
                            <span>Área para shows e festivais de médio porte</span>
                            <span>Festas para até 12 mil pessoas</span>
                            <span>Feiras Gastronômicas</span>
                            <span>Feiras Variadas</span>
                            <span>Eventos em geral</span>
                        </div>
                    </article>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Estádio</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/32191143104/in/dateposted-public/" title="Show"><img alt="Show" src="https://c1.staticflickr.com/1/265/32191143104_d32ec5acd9.jpg" width="100%" /></a>
                        </div>
                        <div class="tags">
                            <span>Shows e festivais de grande porte</span>
                            <span>Para até 50 mil pessoas</span>
                        </div>
                    </article>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Campo Anexo</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/33036552735/in/dateposted-public/" title="Campo Anexo"><img alt="Campo Anexo" src="https://c1.staticflickr.com/1/456/33036552735_96eba864d4.jpg" width="100%" /></a>
                        </div>
                        <div class="tags">
                            <span>Shows e festivais de grande porte</span>
                            <span>Para até 30 mil pessoas</span>
                        </div>
                    </article>
                    <article class="evento col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <p><strong>- Nilton Santos Corporate</strong></p><br/>
                        <div class="galeria"><a data-flickr-embed="true" href="https://www.flickr.com/photos/botafogooficial/32654426150/in/dateposted-public/" title="Nilton Santos Corporate"><img alt="Nilton Santos Corporate" src="https://c1.staticflickr.com/3/2806/32654426150_dfef415e9d.jpg" width="100%" /></a>
                        </div>
                        <div class="tags">
                            <span>Clínicas</span>
                            <span>Laboratórios</span>
                            <span>Academia</span>
                            <span>Lanchonetes</span>
                            <span>Autoescola</span>
                            <span>Escritórios</span>
                        </div>
                    </article>
                </div>
            </section>
            <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
        </main>
        <?php include("footer.php"); ?>
		<?php
mysql_free_result($todos_eventos);
?>

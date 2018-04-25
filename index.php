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
$query_list_banner = "SELECT * FROM bt_nsbanner WHERE status = 'ativo' ORDER BY posicao ASC";
$list_banner = mysql_query($query_list_banner, $con1) or die(mysql_error());
$row_list_banner = mysql_fetch_assoc($list_banner);
$totalRows_list_banner = mysql_num_rows($list_banner);

$maxRows_list_atracoes = 4;
$pageNum_list_atracoes = 0;
if (isset($_GET['pageNum_list_atracoes'])) {
  $pageNum_list_atracoes = $_GET['pageNum_list_atracoes'];
}
$startRow_list_atracoes = $pageNum_list_atracoes * $maxRows_list_atracoes;

mysql_select_db($database_con1, $con1);
$query_list_atracoes = "SELECT * FROM bt_nsatracoes WHERE status = 'ativo' ORDER BY id_atracao DESC";
$query_limit_list_atracoes = sprintf("%s LIMIT %d, %d", $query_list_atracoes, $startRow_list_atracoes, $maxRows_list_atracoes);
$list_atracoes = mysql_query($query_limit_list_atracoes, $con1) or die(mysql_error());
$row_list_atracoes = mysql_fetch_assoc($list_atracoes);

if (isset($_GET['totalRows_list_atracoes'])) {
  $totalRows_list_atracoes = $_GET['totalRows_list_atracoes'];
} else {
  $all_list_atracoes = mysql_query($query_list_atracoes);
  $totalRows_list_atracoes = mysql_num_rows($all_list_atracoes);
}
$totalPages_list_atracoes = ceil($totalRows_list_atracoes/$maxRows_list_atracoes)-1;
?>
<?php include("head.php"); ?>
<body  class="<?php if(!isset($page)) { echo "pg-home"; } else { echo "pg-interna pg-".$page; } ?>">
    <?php include('header.php'); ?>
        <main>
            <section id="webdoor">
                <div class="container">
                    <div class="flexslider webdoor">
                        <ul class="slides">
                            <?php do { ?>
                                <li>
                                    <a href="<?php echo $row_list_banner['link_botao']; ?>" target="<?php echo $row_list_banner['janela']; ?>">
                                        <img src="./assets/images/<?php echo $row_list_banner['imagem']; ?>" width="100%" />
                                    </a>
                                </li>
                            <?php } while ($row_list_banner = mysql_fetch_assoc($list_banner)); ?>
                        </ul>
                    </div>
                </div>
            </section>
            <div id="content">
                <section>
                    <div class="container">
                        <h4 class="text-center">Próximas atrações no estádio Nilton Santos</h4>
                        <ul id="agenda" class="clearfix">
                            
                           <?php do { ?> <li class="agenda col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div>
                                    <div class="agenda--thumbnail">
                                        <div style="background-image:url(./assets/images/<?php echo $row_list_atracoes['imagem']; ?>)">
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="agenda--content">
                                        <h5><?php echo $row_list_atracoes['data']; ?></h5>
                                        <h6><?php echo $row_list_atracoes['titulo']; ?></h6>
                                        
                                        <a class="btn btn--2 waves-effect waves-light" target="_blank" href="<?php echo $row_list_atracoes['link']; ?>" title="Comprar Ingressos">Comprar</a>
                                          
                                    </div>
                                </div>
                            </li>
                            <?php } while ($row_list_atracoes = mysql_fetch_assoc($list_atracoes)); ?>
                            
                        </ul>
                        <h4 class="clearfix text-center"><a href="eventos.php" title="Ver todas as atrações">Ver todas as atrações <i class="typicons-right"><!----></i></a></h4>
                        <p class="lettering text-uppercase text-center visible-lg">NILTON SANTOS</p>
                    </div>
                </section>
                <section id="loja" class="mask">
                    <div class="container text-center">
                        <div>
                            <h1>Loja Oficial do Estádio</h1>
                            <a href="loja_oficial.php" title="Saiba Mais" class="btn btn--3">Saiba Mais</a>
                        </div>
                        <div id="loja--bg">
                            <!---->
                        </div>
                    </div>
                </section>
                <section id="como-chegar">
                    <div class="container">
                        <h4 class="text-center">Como chegar?</h4>
                        <div id="como-chegar--mapa" class="clearfix">
                            <div id="map">
                                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5288002387283!2d-43.2924300762311!3d-22.89385855068021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997d06be6fde3b%3A0x634fa25154126205!2sR.+Jos%C3%A9+dos+Reis%2C+425+-+Engenho+de+Dentro%2C+Rio+de+Janeiro+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1497032829701" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                                <div id='gmap_canvas'></div>
                            </div>
                            <div class="pull-right col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                <img src="./assets/css/img/logo.png" alt="">
                                <h7>No coração da Zona Norte</h7>
                                <h2>Conheça as Rotas e Conduções</h2>
                                <a href="como-chegar.php" title="Veja como chegar" class="btn btn--4">Veja como chegar</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <?php include("footer.php"); ?>
		<?php
		mysql_free_result($list_banner);
		
		mysql_free_result($list_atracoes);
		?>

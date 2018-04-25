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
$query_destaque_news = "SELECT * FROM bt_nsnoticias INNER JOIN bt_noticias ON bt_noticias.id_noticia=bt_nsnoticias.codigo_noticia WHERE bt_nsnoticias.posicao_destaque=1";
$destaque_news = mysql_query($query_destaque_news, $con1) or die(mysql_error());
$row_destaque_news = mysql_fetch_assoc($destaque_news);
$totalRows_destaque_news = mysql_num_rows($destaque_news);

mysql_select_db($database_con1, $con1);
$query_rs_outras = "SELECT * FROM bt_nsnoticias INNER JOIN bt_noticias ON bt_noticias.id_noticia=bt_nsnoticias.codigo_noticia WHERE bt_nsnoticias.posicao_destaque>1";
$rs_outras = mysql_query($query_rs_outras, $con1) or die(mysql_error());
$row_rs_outras = mysql_fetch_assoc($rs_outras);
$totalRows_rs_outras = mysql_num_rows($rs_outras);
?>

<?php include("head.php"); ?>
<?php $page = 'noticias'; ?>
<body  class="<?php if(!isset($page)) { echo "pg-home"; } else { echo "pg-interna pg-".$page; } ?>">
    <?php include('header.php'); ?>
        <main>
            <h1 id="page--title" class="container text-center">Notícias</h1>
            
            <section id="content">
                <div class="container">
                    <!--conteúdo-->
                    <article style="background-image:url(../images/noticias/<?php echo $row_destaque_news['imagem_destaque']; ?>)" id="noticia-principal" class="noticia">
                        <div>
                            <div>
                                <h4><a href="single.php?session=<?php echo $row_destaque_news['id_noticia']; ?>" title="<?php echo $row_destaque_news['titulo_noticia']; ?>"><?php echo $row_destaque_news['titulo_noticia']; ?></a></h4>
                                <p><a href="single.php?session=<?php echo $row_destaque_news['id_noticia']; ?>" title="<?php echo $row_destaque_news['titulo_noticia']; ?>"><?php echo $row_destaque_news['teaser_noticia']; ?></a></p>                                
                            </div>
                        </div>
                    </article>
                    
                    
                    
                    <div class="noticias clearfix">
                        
                        
                        
                        <?php do { ?>
                        <article class="noticia col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <img src="../images/noticias/<?php echo $row_rs_outras['imagem_destaque']; ?>" width="100%" alt="<?php echo $row_rs_outras['titulo_noticia']; ?>">
                            <h5>
                              <a href="single.php?session=<?php echo $row_rs_outras['id_noticia']; ?>" title="<?php echo $row_rs_outras['titulo_noticia']; ?>"><?php echo $row_rs_outras['titulo_noticia']; ?></a>
                              </h5>
                            <p>
                              <a href="single.php" title="<?php echo $row_rs_outras['teaser_noticia']; ?>"><?php echo $row_rs_outras['teaser_noticia']; ?></a>
                              </p>
                          </article>
                          <?php } while ($row_rs_outras = mysql_fetch_assoc($rs_outras)); ?>
                  </div>
                    <!--<div class="paginacao">
                        <a href="#" title="Página 1" class="active">1</a>
                        <a href="#" title="Página 2">2</a>
                        <a href="#" title="Página 3">3</a>
                        <a href="#" title="Página 4">4</a>
                        <a href="#" title="Página 5">5</a>
                        <a href="#" title="Página 6">6</a>
                        <a href="#" title="Próxima">>></a>
                    </div>-->
                </div>
            </section>
            
        </main>
        <?php include("footer.php"); ?>
		<?php
mysql_free_result($destaque_news);

mysql_free_result($rs_outras);
?>
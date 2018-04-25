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

$colname_ver_noticia = "-1";
if (isset($_GET['session'])) {
  $colname_ver_noticia = $_GET['session'];
}
mysql_select_db($database_con1, $con1);
$query_ver_noticia = sprintf("SELECT * FROM bt_noticias WHERE id_noticia = %s", GetSQLValueString($colname_ver_noticia, "int"));
$ver_noticia = mysql_query($query_ver_noticia, $con1) or die(mysql_error());
$row_ver_noticia = mysql_fetch_assoc($ver_noticia);
$totalRows_ver_noticia = mysql_num_rows($ver_noticia);

$colname_Recordset1 = "-1";
if (isset($_GET['session'])) {
  $colname_Recordset1 = $_GET['session'];
}
mysql_select_db($database_con1, $con1);
$query_Recordset1 = sprintf("SELECT * FROM bt_nsnoticias INNER JOIN bt_noticias ON bt_noticias.id_noticia=bt_nsnoticias.codigo_noticia WHERE bt_nsnoticias.codigo_noticia <> %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $con1) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php include("head.php"); ?>
<?php $page = 'single'; ?>
<body  class="<?php if(!isset($page)) { echo "pg-home"; } else { echo "pg-interna pg-".$page; } ?>">
    <?php include('header.php'); ?>
        <main>
            <h1 id="page--title" class="container text-center">Notícias</h1>
            <section id="content">
                <div class="container">
                    <!--conteúdo-->
                    <article id="post_00" class="post">
                        <img id="noticia--destaque" width="100%" src="../images/noticias/<?php echo $row_ver_noticia['imagem_destaque']; ?>" alt="<?php echo $row_ver_noticia['titulo_noticia']; ?>">
                        <h4><?php echo $row_ver_noticia['titulo_noticia']; ?></h4>
                        <h5><?php echo $row_ver_noticia['teaser_noticia']; ?></h5>
                        <small>Postado em <?php echo $row_ver_noticia['data']; ?> - às <?php echo $row_ver_noticia['hora_noticia']; ?></small>
                                          
                        <?php 
						$conteudo_noticia =  $row_ver_noticia['texto_noticia'];
				  		$noticia_final = str_replace("strong", "b", $conteudo_noticia);
						echo $noticia_final;
				  		?>
                        
                        <ul class="post--tags">
                            <li><p><b>Tags:</b></p></li>
                            <li><?php echo $row_ver_noticia['tags_noticia']; ?></li>
                    </article>
<div class="noticias clearfix">
  <h4 class="col-lg-12 col-md-12 col-sm12 col-xs-12">Mais Notícias</h4>
                        
    <?php do { ?>
<article class="noticia col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <img src="../images/noticias/<?php echo $row_Recordset1['imagem_destaque']; ?>" width="100%" alt="<?php echo $row_Recordset1['titulo_noticia']; ?>">
                            <h5>
                              <a href="single.php?session=<?php echo $row_Recordset1['id_noticia']; ?>" title="<?php echo $row_Recordset1['titulo_noticia']; ?>"><?php echo $row_Recordset1['titulo_noticia']; ?></a>
                              </h5>
                            <p>
                              <a href="single.php?session=<?php echo $row_Recordset1['id_noticia']; ?>" title="<?php echo $row_Recordset1['teaser_noticia']; ?>"><?php echo $row_Recordset1['teaser_noticia']; ?></a>
                              </p>
                          </article>
                          <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</div>
                </div>
            </section>
        </main>
       <?php include("footer.php"); ?>
	   <?php
mysql_free_result($ver_noticia);

mysql_free_result($Recordset1);
?>
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
$query_prox_atracao = "SELECT * FROM bt_nsingressos WHERE condicao = 'proximo' AND status ='ativo' ORDER BY id_ingresso DESC";
$prox_atracao = mysql_query($query_prox_atracao, $con1) or die(mysql_error());
$row_prox_atracao = mysql_fetch_assoc($prox_atracao);
$totalRows_prox_atracao = mysql_num_rows($prox_atracao);

mysql_select_db($database_con1, $con1);
$query_prog_atracao = "SELECT * FROM bt_nsingressos WHERE condicao = 'programacao' AND status ='ativo' ORDER BY id_ingresso DESC";
$prog_atracao = mysql_query($query_prog_atracao, $con1) or die(mysql_error());
$row_prog_atracao = mysql_fetch_assoc($prog_atracao);
$totalRows_prog_atracao = mysql_num_rows($prog_atracao);
?>

<?php include("head.php"); ?>
<?php $page = 'ingressos'; ?>
<body  class="<?php if(!isset($page)) { echo "pg-home"; } else { echo "pg-interna pg-".$page; } ?>">
    <?php include('header.php'); ?>
<main>
    <h1 id="page--title" class="container text-center">Ingressos</h1>
    <section id="content">
        <div class="container">
            <!--conteúdo-->
            <div class="banner--interno text-center" style="background-image:url(./assets/css/img/banner--interno_historia.jpg)">
                <h1>Ingressos</h1>
            </div>
            <p><strong>Próximo Jogo</strong></p>
            
            
            <article class="ingresso col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div>
                    <p class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
                       <span><b><?php echo $row_prox_atracao['dia']; ?></b> de <?php echo $row_prox_atracao['mes']; ?></span>
                    </p>
                    <p class="col-lg-9 col-sm-9 col-md-9 col-xs-9">
                       <img src="./assets/images/<?php echo $row_prox_atracao['imagem']; ?>" width="100%" height="100%"  alt="<?php echo $row_prox_atracao['titulo']; ?>" />
                    </p>                            
                </div>
                <h4><?php echo $row_prox_atracao['titulo']; ?><br/><?php echo $row_prox_atracao['local']; ?></h4>
                <p><?php echo $row_prox_atracao['texto']; ?></p>
                <div class="clearfix">
                    <?php
						// comprar
						$ver_compra_prox = $row_prox_atracao['link_botao'];
							if ($ver_compra_prox !="não")
								{echo "<a target=\"_blank\" href=\"$ver_compra_prox\" class=\"btn btn--5\" title=\"Comprar Ingresso\">Comprar Ingresso</a>&nbsp;";}
						
						$ver_checkin_prox = $row_prox_atracao['link_checkin'];
							if ($ver_checkin_prox !="não")
								{echo "<a target=\"_blank\" href=\"$ver_checkin_prox\" class=\"btn btn--5\" title=\"Check In\">Check In</a>";}
								
						$ver_det_prox = $row_prox_atracao['link_detalhes'];
							if ($ver_det_prox !="não")
								{echo "<a target=\"_blank\" href=\"$ver_det_prox\" class=\"mais\" title=\"Mais Detalhes\">Mais Detalhes</a>";}		
					
					?>
                    
                    
                </div>
            </article>
            
            
            
            <p class="clearfix"><strong>Programação</strong></p>
            
            
            <?php do { ?>
            
            <article class="ingresso col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div>
                  <p class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
                    <span><b><?php echo $row_prog_atracao['dia']; ?></b> de <?php echo $row_prog_atracao['mes']; ?></span>
                    </p>
                  <p class="col-lg-9 col-sm-9 col-md-9 col-xs-9">
                    <img src="./assets/images/<?php echo $row_prog_atracao['imagem']; ?>" width="100%" height="100%"  alt="<?php echo $row_prog_atracao['titulo']; ?>" />
                    </p>                            
                  </div>
                <h4><?php echo $row_prog_atracao['titulo']; ?><br/><?php echo $row_prog_atracao['local']; ?></h4>
                <p><?php echo $row_prog_atracao['texto']; ?></p>
                <div class="clearfix">
                  
                   <?php
						// comprar
						$ver_compra = $row_prog_atracao['link_botao'];
							if ($ver_compra !="não")
								{echo "<a target=\"_blank\" href=\"$ver_compra\" class=\"btn btn--5\" title=\"Comprar Ingresso\">Comprar Ingresso</a>&nbsp;";}
						
						$ver_checkin = $row_prog_atracao['link_checkin'];
							if ($ver_checkin !="não")
								{echo "<a target=\"_blank\" href=\"$ver_checkin\" class=\"btn btn--5\" title=\"Check In\">Check In</a>";}
								
						$ver_det = $row_prog_atracao['link_detalhes'];
							if ($ver_det !="não")
								{echo "<a target=\"_blank\" href=\"$ver_det\" class=\"mais\" title=\"Mais Detalhes\">Mais Detalhes</a>";}		
					
					?>
                  
                  </div> 
              </article>
              <?php } while ($row_prog_atracao = mysql_fetch_assoc($prog_atracao)); ?>
            
            
            
        </div>
    </section>
</main>
<?php include("footer.php"); ?>
<?php
mysql_free_result($prox_atracao);

mysql_free_result($prog_atracao);
?>

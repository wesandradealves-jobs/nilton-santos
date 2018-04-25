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
$query_list_estatistica = "SELECT * FROM bt_estat";
$list_estatistica = mysql_query($query_list_estatistica, $con1) or die(mysql_error());
$row_list_estatistica = mysql_fetch_assoc($list_estatistica);
$totalRows_list_estatistica = mysql_num_rows($list_estatistica);
?>


<?php include("head.php"); ?>
<?php $page = 'estatisticas'; ?>
<body  class="<?php if(!isset($page)) { echo "pg-home"; } else { echo "pg-interna pg-".$page; } ?>">
    <?php include('header.php'); ?>
        <main>
            <h1 id="page--title" class="container text-center">Estatísticas</h1>
            <section id="content">
                <div class="container">
                    <!--conteúdo-->
                    <div class="banner--interno text-center" style="background-image:url(./assets/css/img/banner--interno_historia.jpg)">
                        <h1>Estatísticas</h1>
                    </div>
                    <!--<p>
                        <strong>Primeiro Jogo</strong>
                        <br/>
                        Data-Hora: 30/06/2007 – 18h10min (de Brasília)<br/>
                        Local: Estádio Nilton Santos, Rio de Janeiro (RJ)<br/>
                        Competição: Campeonato Brasileiro<br/>
                        Árbitro: Evandro Rogério Roman (PR)<br/>
                        Assistentes: Gílson Bento Coutinho (PR) e José Amílson Pontarolo (PR)<br/>
                        Renda e público: R$ 600.000,00 / 40.000 pagantes / 43.810 presentes<br/>
                        Cartões amarelos: Renato Silva, Luciano Almeida e Lucio Flavio (BOT); Arouca, Carlinhos e Carlos Alberto (FLU)<br/>
                        Cartões vermelhos: Joílson 38'/2ºT (BOT) e Cícero 29'/2ºT (FLU)<br/>
                        Gols: Alex Dias 27'/1ºT (0-1) e Dodô 6'/2ºT (1-1) e 33'/2ºT (2-1)<br/><br/>

                        BOTAFOGO: Julio César, Joílson, Alex, Juninho e Luciano Almeida (Renato Silva); Leandro Guerreiro, Túlio (Diguinho), Lucio Flavio e Ricardinho (André Lima); Zé Roberto e Dodô - Técnico: Cuca.
                        <br/><br/>
                        FLUMINENSE: Fernando Henrique, Carlinhos, Thiago Silva, Roger e Júnior César; Romeu, Arouca (Cícero), Maurício e Carlos Alberto; Alex Dias (Rodrigo Tiuí) e Adriano Magrão (Somália) - Técnico: Renato Gaúcho.                         
                        <br/><br/>
                        <strong  class="hr">Maior Goleada do Botafogo </strong>
                        <br/>
                        BOTAFOGO 7 X 0 MACAÉ
                        <br/><br/>
                        Data-Hora: 23/03/2008 - 16h (de Brasília)<br/>
                        Local: Estádio Nilton Santos, Rio de Janeiro (RJ)<br/>
                        Competição: Campeonato Carioca<br/>
                        Cartão vermelho: Wallace (MAC)<br/>
                        Gols: Wellington Paulista (4), Lucio Flavio, Fábio e Triguinho<br/><br/>
                        BOTAFOGO: Castillo, Alessandro (Túlio Souza), Renato Silva, Ferrero (Andre Luis) e Triguinho; Túlio, Diguinho (Abedi), Lucio Flavio e Adriano Felício; Fábio e Wellington Paulista - Técnico: Cuca.
                        <br/><br/>
                        MACAÉ: Cássio, Otávio, André e Wallace; Mário César, Steve, Zada (Marcinho), Wallacer, Geraldo (Índio) e Bill (Dos Santos); Jones - Técnico: Tita. 
                        <br/><br/>
                        <strong class="hr">Estatísticas do Botafogo</strong>
                        <br/>
                        Jogos realizados: 227 jogos / 129 vitórias, 56 empates e 42 derrotas<br/>
                        Gols: 441 gols feitos (230 sofridos)<br/><br/>

                        <strong  class="hr">Artilheiros: </strong>
                        <br/>
                        Loco Abreu - 41 gols<br/>
                        Herrera - 36 gols<br/>
                        Lucio Flavio – 23 gols <br/><br/>

                        <strong  class="hr">Quem mais jogou:</strong> 
                        <br/>
                        Jefferson - 136 jogos<br/>
                        Alessandro - 107 jogos<br/>
                        Lucio Flavio – 81 jogos <br/><br/>

                        <strong  class="hr">Maiores goleadas: </strong>
                        <br/>
                        23/03/2008 - Botafogo 7 x 0 Macaé - Wellington Paulista (4), Lucio Flavio, Fabio e Triguinho - Campeonato Carioca<br/>
                        30/01/2008 - Botafogo 6 x 2 Mesquita - Wellington Paulista, Lucio Flavio, Zé Carlos (2), Alessandro e Abedi - Campeonato Carioca<br/>
                        08/02/2012 - Botafogo 5 x 0 Olaria - Loco Abreu (2), Elkeson (2) e Maicosuel - Campeonato Carioca<br/>
                        03/07/2015 - Botafogo 5 x 0 Sampaio Corrêa - Luis Henrique (2), Rodrigo Pimpão (2) e Thiago Carleto - Campeonato Brasileiro Série B<br/><br/>
                    
                        <strong  class="hr">Maiores Públicos</strong>
                        <br/>
                        1) Fluminense 1×2 Botafogo – 40.000 pagantes (Brasileirão-2007)<br/>
                        2) Botafogo 2×1 Portuguesa – 40.000 (Copa do Brasil-2008)<br/>
                        3) Botafogo 1×0 River Plate – 39.500 (Copa Sul-Americana-2007)<br/>
                        4) Botafogo 2×1 Palmeiras – 38.717 (Brasileirão-2009)<br/>
                        5) Botafogo 4×0 Ceará – 36.995 (Brasileirão-2011)<br/>
                        6) Botafogo 3x1 Vasco - 35.321 (Taça Rio-2010)<br/>
                        7) Botafogo 2x1 Colo Colo - 34.424 pagantes (Libertadores-2017)<br/>
                        8) Botafogo 2×2 Avaí – 33.641 (Brasileirão-2009)<br/>
                        9) Vasco 0x1 Botafogo - 32.770 (Taça Rio-2013)<br/>
                        10) Botafogo 2×1 Corinthians – 30.735 (Copa do Brasil-2008)
                    </p>-->
                    
                     <?php 
					
					$conteudo_estat = $row_list_estatistica['conteudo']; 
					
					$alvo = "images/divisor-estrela.jpg";
					
					$novo_conteudo_estat = str_replace($alvo, "", $conteudo_estat);
					
					echo $novo_conteudo_estat;
					
					?>
                    
                    <!--conteúdo-->
                </div>
            </section>
        </main>
        <?php include("footer.php"); ?>
		<?php
mysql_free_result($list_estatistica);
?>

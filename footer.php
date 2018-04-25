    <footer>
        <div class="container">
            <nav>
                <a href="index.php" title="Home">Home</a>
                <a href="historia.php" title="História">História</a>
                <a href="informacoes.php" title="Informações Técnicas">Informações Técnicas</a>
                <a href="https://soubotafogo.bfr.com.br/" title="Sou Botafogo" target="_blank">Sou Botafogo</a>
                <a href="https://soubotafogo.bfr.com.br/#/cadeira/home​" target="_blank" title="Cadeiras Personalizadas">Cadeiras Personalizadas</a>
                <a href="estatisticas.php" title="Estatísticas">Estatísticas</a>
                <a href="eventos.php" title="Eventos">Eventos</a>
                <a href="ingressos.php" title="Ingressos">Ingressos</a>
                <a href="loja_oficial.php" title="Loja Oficial">Loja Oficial</a>
                <a href="camarotes.php" title="Camarotes" target="_blank">Camarotes</a>
                <a href="como-chegar.php" title="Como Chegar">Como Chegar</a>
                <a href="noticias.php" title="Notícias">Notícias</a>
                <a href="tour.php" title="Tour">Tour</a>
            </nav>
            <div id="sponsors">
                <a href="http://topper.com" title="Topper" target="_blank"><img src="https://seeklogo.com/images/T/topper-2016-logo-7CB5B93D28-seeklogo.com.png" alt="Topper"></a>
                <a href="http://www.caixa.gov.br/Paginas/home-caixa.aspx" title="Caixa" target="_blank"><img src="http://www.botafogo.com.br/images/caixa_logo.png" alt="Caixa"></a>
                <a href="http://www.brasil.gov.brg" title="Governo do Basil" target="_blank"><img src="http://www.botafogo.com.br/images/logo_brasil.png" alt="Governo do Brasil"></a>
                <a href="http://www.tim.com.br" title="TIM" target="_blank"><img src="http://www.botafogo.com.br/images/tim_logo.png" alt="Tim"></a>
                <a href="http://www.cercred.com.br/index.php" title="CERCRED" target="_blank"><img src="./assets/css/img/logo_cercred.png" alt="Grupo Cercred"></a>
                <a href="http://www.accorhotels.com/pt-br/promotions-offers/hot-deals-offers/owm005947-001-botafogo.shtml" title="Novotel" target="_blank"><img src="http://www.botafogo.com.br/images/novotel_rj.png" alt="Novotel"></a>
                <a href="https://www.mercedes-benz.com.br" title="Mecedez Bens" target="_blank"><img src="./assets/css/img/Mercedes_benz_logo1989.png" alt="Mercedez Benz"></a>
                <a href="https://www.brahma.com.br" title="Brahma" target="_blank"><img src="http://www.botafogo.com.br/images/MarcaBrahmaPilsen2016.png" alt="Brahma"></a>
            </div>
            <p>&#169; 2017 Botafogo de Futebol e Regatas | General Severiano: Av. Venceslau Brás, 72 - Botafogo - (21) 2546-1988
                | Estádio Nilton Santos: Rua José dos Reis, 425 - Engenho de Dentro</p>
        </div>
    </footer>
</div>
<script src="./node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="./node_modules/materialize-css/dist/js/materialize.min.js" type="text/javascript"></script>
<script src="./node_modules/flexslider/jquery.flexslider.js"></script>
<script src="./assets/js/functions.js" type="text/javascript"></script>
<script src="./assets/js/transformicons.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css" type="text/css" media="all" />
<link rel="stylesheet" href="./node_modules/materialize-css/dist/css/materialize.css" type="text/css" media="all" />
<link rel="stylesheet" href="./node_modules/css-reset/reset.css" type="text/css" media="all" />
<link rel="stylesheet" href="./style.css" type="text/css" media="all" />
<script>
transformicons.add('.tcon')
</script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<script type='text/javascript'>
function init_map(){
    var myOptions = {zoom:15,center:new google.maps.LatLng(39.7222524,-10.139336599999979), mapTypeId: google.maps.MapTypeId.ROADMAP};
    
    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
    marker = new google.maps.Marker({
        map: map,position: new google.maps.LatLng(38.7222524,-9.139336599999979)
    });
    infowindow = new google.maps.InfoWindow({
        content:'<strong>Estádio Nilton santos</strong><br>R. José dos Reis, 425 - Engenho de Dentro, Rio de Janeiro - RJ, 20770-001<br>'
    });
    google.maps.event.addListener(marker, 'click', function(){
        infowindow.open(map,marker);
    });
    infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', init_map);
</script>


</body>

</html>
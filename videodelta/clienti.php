<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>VIDEODELTA - ...</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/styleVideodelta.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="js/jquery.lazyload.js"></script>

		<script>
			$(document).ready( function(){
					$("img.lazy").lazyload({
						 effect : "fadeIn",
						 effect_speed:1000
					});
				});
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 
//$(document).ready(function(){
 //   $("#flip").click(function(){
  //      $("#panel").slideToggle("slow");
  //  });
//});
$(function() {
	
	$('.panel-button').on('click', function(){
		var panelId = $(this).attr('data-panelId');
		$('#'+panelId).toggle();
		
	});
});
</script>


 
	</head>
<body>
  
<?php include_once ("connessione_db.php"); ?>
  
<div class="container-fluid" style="background:url('images/pexels-photo-315072.jpeg'); background-size: cover; background-attachment: fixed;">
	
		<?php include_once ("header.php"); ?>
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="images/loghi/videodelta1_150x18.png"></a>
			</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Chi siamo</a></li>
				<li><a href="voci.php">Le voci</a></li>
				<li><a href="studi.php">Gli studi</a></li>
				<li class="active"><a href="javascript:void(0)">I clienti<span class="sr-only">(current)</span></a></li>
				<li><a href="dove_siamo.php">Dove siamo</a></li>
				<li><a href="contatti.php">Contatti</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Crediti<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="cartoni_animati.php">Cartoni animati</a></li>
						<li><a href="film.php">Film</a></li>
						<li><a href="serie_tv.php">Serie tv</a></li>
						<li><a href="soap_opera_telenovela.php">Soap opera/Telenovela</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="tmp.php">tmp</a></li>
						<!--<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>-->
					</ul>
				</li>
				<li class="dropdown hidden-md hidden-lg"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lingua<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="active"><a href="#">Italiano<span class="sr-only">(current)</span></a></li>
						<li><a href="#">Inglese</a></li>
						<li><a href="#">Cinese</a></li>
						<li><a href="#">Russo</a></li>
						<!--<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>-->
					</ul>
				</li>
			</ul>
      
     <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
			</ul>
			<form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
				<div class="input-group">
					<input name ="ricerca" type="text" class="form-control" placeholder="Cerca">
					<span class="input-group-btn"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
				</div>
			</form>
		</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">I nostri clienti</h1>
			</div>
			<div class="col-md-8">
				<div class="container-fluid">
      				<div class="row">
       					<div class="col-md-6">
					        <a href="#"><img class="img-thumbnail lazy" src="images/loghi/media.jpg" alt=""></a>
							<button class="panel-button" data-panelId="panel1">More info</button>
							<div id="panel1" style="display:none" class="panel panel-primary">
							  
                              <div class="panel-body">Mediaset S.p.A. è un'azienda privata italiana attiva nell'ambito dei media e della comunicazione. È specializzata primariamente in produzione e distribuzione televisiva in libera visione (free to air, FTA) e a pagamento (pay-tv e pay per view) su più piattaforme, oltre che in produzione e distribuzione cinematografica, multimediale e in raccolta pubblicitaria.

È un conglomerato mediatico controllato dalla holding Fininvest, di proprietà della famiglia Berlusconi. È il secondo gruppo televisivo privato d'Europa[1] dopo la società lussemburghese RTL Group ed il primo in Italia; in termini di fatturato, è tra i più rilevanti a livello mondiale nel mercato globale dei media[2]. Nel 2010 è risultato miglior gruppo media italiano e quinto europeo nella classifica stilata da Thomson Reuters Extel[3]. Nel 2013, è stato classificato il 34º gruppo media al mondo, dopo la Sudafricana Naspers[4].

La sede legale è nel centro di Milano, in via Paleocapa 3, mentre la direzione, la sede operativa e amministrativa sono a Cologno Monzese (Milano), in viale Europa 44/46/48. Dal 1994 il presidente del Gruppo Mediaset è Fedele Confalonieri.

La società è quotata nell'indice FTSE MIB della Borsa di Milano dal 1996 (codice isin: IT0001063210, codice alfanumerico: MS) con una capitalizzazione di mercato al 31 marzo 2016 di 4,273 miliardi di euro e un fatturato annuale nel 2014 di 3,4 miliardi. È un'impresa multinazionale, le cui filiali principali si trovano in Spagna con il gruppo Mediaset España Comunicación quotato nell'indice IBEX-35 della Borsa di Madrid</div>
		       				  </div>
							 </div>
						
						
							
	      				<div class="col-md-6">
         					<a href="#"><img class="img-thumbnail lazy" src="images/loghi/disney1.jpg" alt=""></a>
							<button class="panel-button" data-panelId="panel2">More info</button>
							<div id="panel2" style="display:none" class="panel panel-primary">
                            <div class="panel-body">La Walt Disney Company, comunemente conosciuta come Disney, è una multinazionale statunitense attiva nel settore mediatico e dell'intrattenimento con sede a Burbank, nello Stato della California.

Fondato come studio cinematografico il 16 ottobre 1923 da Walter Disney e suo fratello Roy Oliver Disney col nome di Disney Brothers Cartoon Studio, è oggi il secondo conglomerato mediatico mondiale per ricavi, preceduto solo da Comcast. Nel 1986 l'azienda assume il nome attuale ed espande progressivamente le operazioni, concentrandosi in ulteriori settori come l'industria musicale, l'editoria e i media digitali.

Disney possiede inoltre il network televisivo ABC, network via cavo come Disney Channel, ESPN e ABC Family, divisioni attive nel settore musicale e teatrale e nel merchandising, oltre che 14 parchi a tema gestiti dalla divisione Walt Disney Parks and Resorts.

L'azienda è dal 6 maggio 1991 un componente dell'indice azionario Dow Jones[3].</div>
        				</div>
						
       					<div class="col-md-6">
         					<a href="#">
      						<img class="img-thumbnail lazy" src="images/loghi/netflix.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">Netflix è un'azienda operante nella distribuzione via internet di film, serie televisive e altri contenuti d'intrattenimento.

Nata nel 1997, inizialmente l'attività principale consisteva nell'offrire il noleggio di DVD e videogiochi. Gli utenti potevano prenotare i dischi via internet, ricevendoli direttamente a casa tramite il servizio postale. Dal 2008 l'azienda ha attivato un servizio di streaming online on demand, accessibile tramite un apposito abbonamento, che è divenuto presto il suo campo d'attività principale, mentre dal 2011 il servizio di noleggio di dischi è stato scorporato, venendo offerto dalla sussidiaria Qwikster.

Dal 2010, con l'espansione dell'offerta in altri paesi, in particolare nel Sudamerica e in Europa, e l'avvio di produzioni originali, Netflix ha registrato un rapido incremento di popolarità, superando nel 2014 i 50 milioni di abbonati, più di 35 dei quali negli Stati Uniti.[1] Dal gennaio 2016 Netflix ha reso accessibile il servizio di streaming in oltre 190 paesi[2][3], raggiungendo nello stesso mese quota 74 milioni di clienti, di cui 44 negli Stati Uniti.[4]

Alla fine del 2016 Netflix si afferma come leader del settore on Demand avendo: 93,8 milioni di abbonati (con 19,0 milioni di nuove attivazioni nette contro le 17,4 milioni nel 2015), 8.3 miliardi di ricavi (+35% annuo) e con utili pari a 188 milioni (+54%).</div>
        				</div>
						
       					<div class="col-md-6">
         					<a href="#">
            			    <img class="img-thumbnail lazy" src="images/loghi/rai.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">La Rai − Radiotelevisione Italiana S.p.A., denominazione spesso abbreviata in italiano in Rai o RAI[2], è la società concessionaria in esclusiva del servizio pubblico radiotelevisivo in Italia. È una delle più grandi aziende di comunicazione d'Europa, il quinto gruppo televisivo del continente.</div>
        				</div>
						
        				<div class="col-md-6">
         					<a href="#">
            			    <img class="img-thumbnail lazy" src="images/loghi/vodafone.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">Vodafone Sky TV è stata una piattaforma televisiva commerciale per la televisione mobile offerta a pagamento da Vodafone Italia. La piattaforma era disponibile esclusivamente in Italia e riservata ai clienti Vodafone.</div>
        				</div>
						
       					<div class="col-md-6">
         					<a href="#">
            				<img class="img-thumbnail lazy" src="images/loghi/sonar.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">Sonar Film is exclusively based in the LT1 lecture theatre of Southampton Solent University. Unlike a regular lecture theatre, LT1 is kitted out with Dolby’s cutting edge ‘Atmos’ sound system. Whereas most cinemas might feel pretty good about their 7.1 surround systems, the Dolby Atmos system boasts a breathtaking 17.1.8 speaker layout.</div>
        				</div>
						
       					<div class="col-md-6">
         					<a href="#">
            				<img class="img-thumbnail lazy" src="images/loghi/paramount.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">La Paramount Pictures Corporation è una delle più importanti case cinematografiche degli Stati Uniti d'America, una casa di produzione che fa risalire la propria fondazione nel 1912 quando l'ungherese Adolph Zukor l'8 maggio del 1912 creò la Famous Players Film Co., una compagnia che in seguito sarebbe confluita nella Famous Players-Lasky Corporation in società con la Paramount, una casa di distribuzione che avrebbe poi dato il suo nome alla futura Paramount Pictures.

Con 100 anni di storia e oltre tremila film prodotti, nel 2011 ha raggiunto il primato nel mercato cinematografico mondiale, superando la Warner Bros.</div>
        				</div>
						
       					<div class="col-md-6">
         					<a href="#">
            				<img class="img-thumbnail lazy" src="images/loghi/la7c.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">LA7 è un canale televisivo del gruppo Cairo Communication.[1][2]

LA7, la cui sede legale si trova a Roma, è visibile in digitale terrestre e via satellite su Sky Italia e Tivùsat. La programmazione è di tipo generalista, caratterizzata dalla presenza di programmi di approfondimento e di intrattenimento. L'annunciatore ufficiale della rete è il doppiatore Francesco Prando[3] e la raccolta pubblicitaria è affidata alla concessionaria Cairo Pubblicità.</div>
        				</div>
						
       					<div class="col-md-6">
         					<a href="#">
            				<img class="img-thumbnail lazy" src="images/loghi/sky2.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">Sky è un marchio internazionale utilizzato dalle società controllate dalla News Corporation di Rupert Murdoch per le loro piattaforme televisive satellitari.Il marchio Sky nasce nel 1989 con la nascita della piattaforma britannica Sky Television che consisteva in pacchetto di quattro canali.

A causa della crisi finanziaria Sky Television e British Satellite Broadcasting, la piattaforma rivale decisero di fondersi fondando così la British Sky Broadcasting che oggi serve il Regno Unito e l'Irlanda. il 22 novembre 2014 cambia nome in Sky plc.</div>
        				</div>
						
       					<div class="col-md-6">
         					<a href="#">
            				<img class="img-thumbnail lazy" src="images/loghi/redeglobo.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">Rede Globo (o Rede Globo de Televisão, nota anche come TV Globo o semplicemente Globo) è una rete televisiva brasiliana le cui trasmissioni iniziarono a Rio de Janeiro, il 26 aprile 1965.

Venne fondata e guidata dall'imprenditore Roberto Marinho, fino alla sua morte, nel 2003, quando il controllo passò il controllo a suo figlio, Roberto Irineu Marinho. Attualmente, l'emittente televisiva è una delle più grandi dell'America e la quarta più grande del mondo, e vista da 120 milioni di persone al giorno. La società fa parte del gruppo Organizações Globo. La matrice della società è in Jardim Botânico, a Rio de Janeiro, così come il settore informativo. Gli studi di produzione si trovano in un complesso noto come Projac, nel quartiere di Jacarepaguá, nella zona ovest di Rio de Janeiro. Già nel 2007, la Globo decise di iniziare ad investire sulla televisione digitale.

Negli anni ottanta, il mercato televisivo italiano ha iniziato ad aprirsi ai capitali privati. Fu durante questo periodo che la Globo acquistò, per poi vendere nel 1993, la rete televisiva l'italo-monegasca Telemontecarlo, la quale ha adottato per alcuni anni il suo caratteristico logo e la sua programmazione, tra cui le novelas e il Carnevale di Rio. Il canale trasmette Globo Internacional, sua versione mondiale, criptata su Hot Bird 7A.</div>
        				</div>
						
       					<div class="col-md-6">
         					<a href="#">
            				<img class="img-thumbnail lazy" src="images/loghi/diagonal.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">Diagonal TV S.A. es una empresa de producción audiovisual española perteneciente al grupo Endemol Shine Iberia.1​ Fundada en Barcelona en 1997 se ha dedicado a producir principalmente series de televisión en catalán y en español. Es una de las principales productoras españolas contando en su haber con varias producciones de gran éxito.</div>
        				</div>
						
       					<div class="col-md-6">
         					<a href="#">
            				<img class="img-thumbnail lazy" src="images/loghi/amazon.jpg" alt="">
          					</a>
							<div id="flip">More info</div>
                            <div id="panel">Fire TV | Streaming Media Player
Amazon
4.3 out of 5 stars    35,192 customer reviews  | 1000+ answered questions
Currently unavailable. 
We don't know when or if this item will be back in stock.
Fire TV supports 4K Ultra HD for true-to-life picture quality. Watch high-definition 1080p streams on Amazon Video, Netflix, YouTube, Hulu and more, even without a 4K TV.
Enjoy over 15,000 apps, games, and Alexa skills including access to over 300,000 TV episodes and movies on Netflix, Amazon Video, HBO NOW, Hulu, and more.
Launch and control content with the included Alexa Voice Remote. Simply say, “Play Game of Thrones” or “Launch Netflix” and Alexa will respond instantly. Plus, play music, find movie show times, order a pizza, and more—just ask.
No cable or satellite? No problem. Watch the best of live TV and sports from AMC, HGTV, ESPN, FOX, and others with a subscription to DIRECTV NOW, or top-rated primetime shows with CBS All Access.
Find the best way to watch with universal search results from over 140 channels and apps including Netflix, Showtime, and Amazon Video
Includes 75% more processing power than the previous generation Amazon Fire TV, a dedicated graphics engine, better Wi-Fi support, 2 GB of memory, 8 GB of storage and expandable storage of up to 200 GB
Prime members get unlimited access to Prime Video, featuring thousands of movies and TV episodes at no additional cost. Plus, members can add over 100 premium and specialty channels like HBO and SHOWTIME—no cable or satellite subscription necessary.
Play current favorites or quickly discover what to watch next directly from the Home screen

</div>
        				</div>
        			</div>
        		</div>			
			</div>
			<div class="col-md-4">
			
				<?php include_once ("aside.php"); ?>
			
			</div>
		</div>
	</div>
	
	<?php include_once ("footer.php"); ?>
	
</div>
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
</body>
</html>
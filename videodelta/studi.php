<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>VIDEODELTA - Gli studi</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		
		<?php include_once ("script.php"); ?>
		
	</head>
<body>
  
<?php include_once ("connessione_db.php"); ?>
  
<div class="container-fluid" style="background:url('images/pexels-photo-315072.jpeg'); background-size: cover; background-attachment: fixed;font-family:'Times New Roman',Times,serif; font-size:16px;">
	
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
				<li class="active"><a href="#">Gli studi<span class="sr-only">(current)</span></a></li>
				<li><a href="clienti.php">I clienti</a></li>
				<li><a href="dove_siamo.php">Dove siamo</a></li>
				<li><a href="contatti.php">Contatti</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prodotti doppiati<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="cartoni_animati.php">Cartoni animati</a></li>
						<li><a href="film.php">Film</a></li>
						<li><a href="serie_tv.php">Serie tv</a></li>
						<li><a href="soap_opera_e_telenovele.php">Soap opera/Telenovela</a></li>
					</ul>
				</li>
				<li class="dropdown hidden-md hidden-lg"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lingua<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="active"><a href="#">Italiano<span class="sr-only">(current)</span></a></li>
						<li><a href="#">Inglese</a></li>
						<li><a href="#">Cinese</a></li>
						<li><a href="#">Russo</a></li>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-right" role="search" action="ricerca_prodotti.php" method="post">
				<div class="input-group">
					<input name ="ricerca" type="text" class="form-control" placeholder="Cerca Prodotti">
					<span class="input-group-btn"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
				</div>
			</form>
		</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Gli studi</li>
				</ol>
				<h1 class="page-header">Gli Studi:<button type="button" class="btn-btn-info" data-toggle="collapse" data-target="#demo3">dettagli</button></h1>
				<div id="demo3" class="collapse">Videodelta dispone di sale di doppiaggio (5), sale missaggio (2), sincronizzazione (3) ed effetti (1), montaggio video (2) e duplicazione, equipaggiate con ProTools HD, Avid Nitris, FinalCut e Adobe Première Pro.</div>	
				<h2 class="page-header">Schede tecniche:
				<button type="button" class="btn-btn-info" data-toggle="collapse" data-target="#demo1">Audio</button>
				<button type="button" class="btn-btn-info" data-toggle="collapse" data-target="#demo2">Video</button></h2>
							<div id="demo1" class="collapse">Tutti gli Studi sono in rete ed attrezzati con ProTools HD versione 10
                             – 5 Sale di Doppiaggio – 2 Sale di Missaggio (5.1 e Stereo) – 1 Studio per Rumori di Sala – Foley – 3 Regie di Sincronizzazione, Montaggio Effetti Speciali, Ingest e Codifica Dolby ProLogic II
                             Per collegamenti con altri studi, ricezione e consegna dei materiali: FTP, SmartJog, Aspera – Connessione dedicata in Fibra Ottica Colt da 100 Mbps</div>
							<div id="demo2" class="collapse">Due Sale di Editing Video con AVID Media Composer Nitris  – Sala di Editing Video con FinalCut Pro  e Adove Premiere Pro – Riaccoppiamento su Betacam SD ed SX, IMX, Digital Betacam, XDCAM</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4719.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4719_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4700.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4700_big.png');return false;">
						</a>							
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4751.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4751_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4726.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4726_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4749.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4749_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4758.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4758_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4753.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4753_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4712.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4712_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4696.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4696_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4784.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4784_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4766.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4766_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4767.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4767_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4794.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4794_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4774.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4774_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4647.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4647_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4655.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4655_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4813.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4813_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4816.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4816_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4819.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4819_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4658.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4658_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4751.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4751_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4726.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4726_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4784.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4784_big.png');return false;">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 foto">
						<a href="javascript:void(0)">
							<img class="img-thumbnail lazy" data-original="images/studi/4767.jpg" alt="" width="518" height="291" onclick="window.open('images/studi/4767_big.png');return false;">
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
			
				<?php include_once ("aside.php"); ?>
			
			</div>
		</div>
	</div>
	
	<?php include_once ("footer.php"); ?>
	
</div>
</body>
</html>
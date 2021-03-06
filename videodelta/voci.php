<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>VIDEODELTA - Le voci</title>

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
				<li class="active"><a href="#">Le voci<span class="sr-only">(current)</span></a></li>
				<li><a href="studi.php">Gli studi</a></li>
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
					<li class="active">Le voci</li>
				</ol>
				<h1 class="page-header">Le voci</h1>
			</div>
			<div class="col-md-9">
				<p>Ascolta alcune delle nostre voci maschili e femminili.</p>      
				<p>I codici associati a ciascuna voce potranno esserti utili per richiedere un preventivo.</p>
			
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6" style="background-color:DarkGrey;">
							<h3> Attore 101</h3>
							<audio controls>
								<source src="voci/101CORBETTA.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-md-6" style="background-color:LightGrey;">
							<h3> Attore 102</h3>
							<audio controls>
								<source src="voci/102ACCORNERO.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-md-6" style="background-color:DarkGrey;">
							<h3> Attore 103</h3>
							<audio controls>
								<source src="voci/103BIAGINI.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-md-6" style="background-color:LightGrey;">
							<h3> Attore 104</h3>
							<audio controls>
								<source src="voci/104DANDREA.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-sm-6" style="background-color:DarkGrey;">
							<h3> Attore 105</h3>
							<audio controls>
								<source src="voci/105DIBONO.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-sm-6" style="background-color:LightGrey;">
							<h3> Attore 106</h3>
							<audio controls>
								<source src="voci/106LOMBARDO.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6" style="background-color:DarkSalmon;">
							<h3> Attrice 201</h3>
							<audio controls>
								<source src="voci/201CAGGIULA.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-sm-6" style="background-color:AntiqueWhite  ;">
							<h3> Attrice 202</h3>
							<audio controls>
								<source src="voci/202MAZZA.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-sm-6" style="background-color:DarkSalmon  ;">
							<h3> Attrice 203</h3>
							<audio controls>
								<source src="voci/203GIOLITTI.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-sm-6" style="background-color:AntiqueWhite  ;">
							<h3> Attrice 204</h3>
							<audio controls>
								<source src="voci/204MOTTOLA.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-sm-6" style="background-color:DarkSalmon  ;">
							<h3> Attrice 205</h3>
							<audio controls>
								<source src="voci/205POLLANI.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
						<div class="col-sm-6" style="background-color:AntiqueWhite  ;">
							<h3> Attrice 206</h3>
							<audio controls>
								<source src="voci/206ZILIOTTO.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						</div>
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
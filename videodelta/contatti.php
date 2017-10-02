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
		
		<?php include_once ("script.php"); ?>
		
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
				<li><a href="clienti.php">I clienti</a></li>
				<li><a href="dove_siamo.php">Dove siamo</a></li>
				<li class="active"><a href="#">Contatti<span class="sr-only">(current)</span></a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Crediti<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="cartoni_animati.php">Cartoni animati</a></li>
						<li><a href="film.php">Film</a></li>
						<li><a href="serie_tv.php">Serie tv</a></li>
						<li><a href="soap_opera_e_telenovele.php">Soap opera/Telenovela</a></li>
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
					<li class="active">Contatti</li>
				</ol>
				<h1 class="page-header">VIDEODELTA</h1>
			</div>
			<div class="col-md-8">
				<h2>Via Vandalino, 49 - 10142 TORINO</h2>
				<p><h3>Centralino 011 772 31 35  dalle 9 alle 18 da lunedì a venerdì</p>
				<p>Oppure invia una mail a info@videodeltasrl.it</h3></p>
				
				<h4>Contatti diretti:</h4>
				<div class="media">
					<div class="media-left">
						<img src="images/thumb/mario2.png" class="media-object" style="width:45px">
					</div>
					<div class="media-body">
						<h3 class="media-heading">Mario Brusa <small><i><b>Direttore Artistico</b></i></small></h3>
						<p><h4>m.brusa@videodeltasrl.it</h4></p>
      
						<!-- Nested media object -->
						<div class="media">
							<div class="media-left">
								<img src="images/thumb/cristina.png" class="media-object" style="width:45px">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Cristina Cantello <small><i><b>Responsabile Commerciale</b></i></small></h3>
								<p><h4>c.cantello@videodeltasrl.it</h4></p>

								<!-- Nested media object -->
								<div class="media">
									<div class="media-left">
										<img src="images/thumb/andrea2.png" class="media-object" style="width:45px">
									</div>
									<div class="media-body">
										<h3 class="media-heading">Andrea Di Credico<small><i><b>Responsabile Tecnico e Project Manager</b></i></small></h3>
										<p><h4>a.dicredico@videodeltasrl.it</h4></p>
									</div>
								</div>
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
</body>
</html>
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
		<link href="css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
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
				<li class="active"><a href="#">Gli studi</a></li>
				<li><a href="clienti.php">I clienti<span class="sr-only">(current)</span></a></li>
				<li><a href="#">Dove siamo</a></li>
				<li><a href="#">Contatti</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Crediti<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Cartoni animati</a></li>
						<li><a href="#">Film</a></li>
						<li><a href="serie_tv.php">Serie tv</a></li>
						<li><a href="#">Soap opera/Telenovela</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="tmp2.php">tmp2</a></li>
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
				<h1 class="page-header">Gli studi</h1>
			</div>
			<div class="col-md-8">
				<div class="row text-center text-lg-left">
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4719.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4700.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4751.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4726.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4749.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4758.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4753.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4712.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4696.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4784.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4766.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4767.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="row text-center text-lg-left">
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4794.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4774.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4647.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4655.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4813.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4816.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4819.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4658.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4751.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4726.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4784.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="images/studi/4767.jpg" alt="">
						</a>
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
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

	

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato" />	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100" /> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700'" /> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>
<body>
		<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link  href="dist/jquery.fancybox.min.css" rel="stylesheet">
	<script src="dist/jquery.fancybox.min.js"></script>
	<header>
		<nav class="navbar navbar-expand-md fixed-top scrolling-navbar">
			<div class="container">
				<ul class="nav">
					<li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
					<li class="nav-item"><a class="nav-link" href="propos.php">À propos de Nous</a></li>
					<li class="nav-item"><a class="nav-link" href="produit.php">Produit</a></li>
					<li class="nav-item"><a class="nav-link" href="actualite.php">Actualités</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				</ul>
			</div>
		</nav>
		<div class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class=" img-fluid" src="images/1.png">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="images/3.png">
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid" src="images/4.png">
				</div>
			</div>
		</div>
	</header>
	<div class="act">
		<div class="container">
			<h1 id="titre1">Actualiés</h1>
		</div>
	</div>
	<div class="container">
		<div class="row pt-5">
			<div class="col-md-5">
				<a data-fancybox="gallery" href="images/tue.png"><img class="img-fluid float-sm-left" src="images/tue.png" /></a>
			</div>
			<div class="col-md-2">
				<div class="col-md-4 pt-5">
					<h1 id="jour">18</h1>
					<h1 id="mois">Juil.</h1>
				</div>
			</div>
			<div class="col-md-4 pt-4">
				<p id="qst">Que’est ce que le Lorem Ipsum?</p>
				<p id="rps">Le Lorem Ipsum est simplement du faux texte dans la composition et la mise en page avant impression…</p>
				<a id="dtl" href="#">Lire plus</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row pt-5">
			<div class="col-md-5">
				<a data-fancybox="gallery" href="images/flex.png"><img class="img-fluid float-sm-left" src="images/flex.png" /></a>
			</div>
			<div class="col-md-2">
				<div class="col-md-4 pt-5">
					<h1 id="jour">18</h1>
					<h1 id="mois">Juil.</h1>
				</div>
			</div>
			<div class="col-md-4 pt-4">
				<p id="qst">Que’est ce que le Lorem Ipsum?</p>
				<p id="rps">Le Lorem Ipsum est simplement du faux texte dans la composition et la mise en page avant impression…</p>
				<a id="dtl" href="#">Lire plus</a>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row pt-5">
			<div class="col-md-5">
				<a data-fancybox="gallery" href="images/flex1.png"><img class="img-fluid float-sm-left" src="images/flex1.png" /></a>
			</div>
			<div class="col-md-2">
				<div class="col-md-4 pt-5">
					<h1 id="jour">18</h1>
					<h1 id="mois">Juil.</h1>
				</div>
			</div>
			<div class="col-md-4 pt-4">
				<p id="qst">Que’est ce que le Lorem Ipsum?</p>
				<p id="rps">Le Lorem Ipsum est simplement du faux texte dans la composition et la mise en page avant impression…</p>
				<a id="dtl" href="#">Lire plus</a>
			</div>
		</div>
	</div>
	<footer>
		<div class="container footer">
			<div class="col-md-6">
				<h1 id="titre1" class="pb-5">Contact</h1>
				<div class="icon pb-5">
					<a href="https://www.faceook.com"><img src="images/fb.png"/></a>
					<a href="https://www.twitter.com"><img src="images/tweet.png"/></a>
					<a href="https://www.youtube.com"><img src="images/yout.png"/></a>
				</div>
				<div class="adr">
					<p id="adr">Z.I Elmghira 2 Rue de Nabeul Lot N°11 Fouchena, Ben Arous.</p> 
					<p>
						<label id="lab">BP:</label>
						101-CP 2082-Tunisia
					</p>
					<p>
						<label id="lab">Tél. / Fax:</label>
						+(216) 71.409.240
					</p>
					<p>+(216) 71.409.106</p>
					<p>
						<label id="lab">E-mail:</label>
						manager@rubber-hoses.tn
					</p>

				</div>
				<p class="ppg">
					Hight Stock ©  <img src="images/mtd.png">  2018

				</p>
			</div>
		</div>
	</footer>

</body>
</html>
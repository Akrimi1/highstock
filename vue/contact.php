<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/style.css">
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
		<div class="container p-5">
			<h1 id="titre1">Contact</h1>
		</div>
	</div>
	<div class="container">
		<img class="float-left img-fluid p-5" src="images/plan.png">
		<div class="p-5">
			<p id="qst">Adresse:</p>
			<div id="rps">
				<p>Centre Médical Les Jasmin-5é Etage-Centre</p>
				<p>Urbain Nord 100 TUNIS.</p>

				<p>Tél. : +(216) 71 949 999 / +(216) 71 949 100</p>
				<p>E-mail: maknimounirgyn@hotmail.com</p>
			</div>
		</div>
	</div>
	<div class="container pt-5">
		<div class="row justify-content-center">
			<form action="../Controlleurs/messages.php" method="post">
				<div class="form-inline pb-5">
					<input type="text" id="obligatoire" name="nom" class="form-control mb-sm-2 mr-sm-2 border-top-0 border-left-0 border-right-0" placeholder="Nom*" />
					<input type="text" id="obligatoire"  class="form-control mb-sm-2 mr-sm-2 border-top-0 border-left-0 border-right-0" name="prenom" placeholder="Prénom*" />
					<input type="text" id="obligatoire"  class="form-control mb-sm-2 mr-sm-2 border-top-0 border-left-0 border-right-0" name="tel" placeholder="Tél*" />
				</div>
				<div class="form-inline pb-5">
					<input type="text" id="obligatoire" class="form-control mb-sm-2 mr-sm-2 border-top-0 border-left-0 border-right-0" name="adresse" placeholder="Adresse*" />
					<input type="text" id="obligatoire"  class="form-control mb-sm-2 mr-sm-2 border-top-0 border-left-0 border-right-0" name="email" placeholder="Email*" />
				</div>
				<textarea id="obligatoire" name="message" class="form-control mb-2 mr-sm-2 mb-sm-2 border-top-0 border-left-0 border-right-0" placeholder="Message*"></textarea>
				<div  class="float-right">
					<p id="obligatoire">* Champs obligatoires</p>
					<button type="submit" class="btn btn-primary">Envoyer</button>
				</div>
			</div>
		</form>
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
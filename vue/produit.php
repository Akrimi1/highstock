<?php
include "../classes/produit.class.php";
$P=new Produit();
$res=$P->selectProduit();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato" />	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100" /> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700'" /> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
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
		<div class="container">
			<h1 id="titre1">Produits</h1>
		</div>
	</div>
	<div class="container pb-5">
		<div class="pro float-right">
			<p class="d-inline" id ="produit">Produits</p>
			<p class="d-inline" id ="rcb"> > Raccord,Coliers et Bouchons</p>
		</div>
	</div>
	<div class="container pt-5">
		<div class="row justify-content-center">
			<?php
			foreach ($res as $row) {
				echo "<div class='col-lg-3 m-3 p-4 produit'>";
				echo "<div class=card p-4 m-8'>";
				echo "<a href='details.php?id=$row[0]'><img class='col-lg-12'  src='images/produit/$row[0].png' /></a>";
				echo "<hr>";
				echo "<div class='caption'>$row[1]</div>";
				echo "<div class='caption1'>$row[2]</div>";
				echo "</div>";
				echo "</div>";
			}
			?>
		</div>
	</div>

	<nav aria-label="Page navigation example">
		<ul class="pagination">
			<li class="page-item"><a class="page-link" href="#">Previous</a></li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</nav>
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
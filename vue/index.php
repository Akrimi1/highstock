<?php
include "../classes/produit.class.php";
$P=new Produit();
$res=$P->listproduit();
?><!DOCTYPE html>
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


	<!-- javascript -->
	<script src="assets/owl.carousel.js"></script>
	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="style/owl.carousel.min.css">
	<link rel="stylesheet" href="style/owl.theme.default.min.css">

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
	<div class="container pt-5">
		<div class="row pt-5">
			<div class="col-md-4">
				<img class="img-fluid float-sm-left" src="images/propos.png" />
			</div>
			<div class="col-md-6">
				<h1  class="my-4" id="titre">Bienvenue</h1>

				<h2 id="sousTitre">À Propos de Nous</h2>
				<p  id="desc">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années quand un peintre anonyme assembla ensemple des morceaux de...</p>
				<a href="propos.php">> Lire plus</a>
			</div>
		</div>
	</div>
	<!--<div class="present">-->
		<div class="container">
			<div class="row pb-5 pt-5">
				<div class="col-md-4 pb-5">
					<h1 id="titre1" class="my-4">Produits</h1>
				</div>
			</div>
		</div>
		<div class="container">
			<section id="demo">
				<div class="owl-carousel owl-theme">
					<?php
					foreach ($res as $row) {
						echo "<div class='item'>";
						echo "<div class='title-carous'>";
						echo "<h1 id='titre'>0$row[0].<br/>$row[1]</h1>";			
						echo "<p id='desc'>$row[2]</p>";
						echo "<a href='produit.php'>>> Voir Toute La Gammes</a>";
						echo "</div>";
						echo "<figure class='img-product'>";
						echo "<img class='card-img' src='images/listproduit/$row[0].png' />";
						echo "</figure>";
						echo "</div>";
					}
					?>			
				</div>
			</div>
			<script>
				$(document).ready(function() {
					var owl = $('.owl-carousel');
					owl.owlCarousel({
						nav: true,
						navText: [ '<-', '->' ],
						loop: false,
						responsive: {
							0: {
								items: 1
							},	
						}
					})
				})
			</script>
			<div class="float-sm-right">
			</div>
		</section>
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
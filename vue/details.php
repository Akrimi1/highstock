<?php
include "../classes/produit.class.php";
$P=new Produit();
$res=$P->selectdetail($_GET['id']);
?>
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

	<div class="container p-5">
		<div class="float-right">
			<p class="d-inline" id="rcb">> Raccord,Coliers et Bouchons</p>
			<p class="d-inline" id="produit">Produits> Accessoire</p>
		</div>
	</div>

	<div class="container pt-5">
		<div class="row">
			<?php
			foreach ($res as $row) {
				# code...
			
				echo "<div class='col-md-4'>";
				echo "<a data-fancybox='gallery' href='images/produit/$row[0].png'><img class='img-thumbnail p-2 float-left' src='images/produit/$row[0].png' /></a>";
				echo "</div>";
				echo "<div class='col-md-6 detail'>";
				echo "<div class='pb-5'>";
				echo "<div class='bgtitre1'>";
				echo "<h3 id='titredtl'>$row[1]</h3>";
				echo "</div>";
				echo "</div>";
				echo "<div class='pb-4'>";
				echo "<p class='d-inline' id='prod'>Product Name:</p><p class='d-inline'> $row[1].</p>";
				echo "</div>";
				echo "<p class='d-inline' id='prod'>Specification :</p><p class='d-inline'> $row[3]</p>";
				echo"<div class ='p-4 float-right'>";
				echo "<a class ='btn btn-info'  href ='formcmd.php?nomprod=$row[1]'>Commander</a>";
                echo "</div>";
				echo "</div>";
			}
			?>		
		</div>
	</div>
	<div class="container">
		<div class="float-right">
			<h1 id="soustitre">Produits Similaires</h1>
		</div>
		<hr class="my-3">
	</div>

	<div class="container pt-5 text-center">
		<div class="row justify-content-center">

			<div class="col-lg-3 m-3 p-4">
				<div class="card p-4 m-8">
					<img class="col-lg-12" src="images/bouchon.png" />
					<hr class="my-2">
					<div class="caption">Bouchon</div><div class="caption1">A Verrou et Chaînette</div>
				</div>
			</div>
			<div class="col-lg-3 m-3 p-4">
				<div class="card p-4 m-8">
					<img class="col-lg-12"  src="images/poignee.png" />
					<hr>
					<div class="caption">Bouchon</div><div class="caption1">A Poingnée et Chaînette</div>
				</div>
			</div>
			<div class="col-lg-3 m-3 p-4">
				<div class="card p-4 m-8">
					<img class="col-lg-12" src="images/boitier.png" />
					<hr>
					<div class="caption">Demi-Boitier</div><div class="caption1">Camlock Femelle</div>
				</div>
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
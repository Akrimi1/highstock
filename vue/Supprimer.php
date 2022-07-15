<?php
include "../classes/produit.class.php";
$P=new Produit();
$res=$P->selectProduit();
?>

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
	<nav class="navbar navbar-expand-md scrolling-navbar">
		<div class="container">
			<ul class="nav">
				<li class="nav-item"><a class="nav-link" href="cpanel.php">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="propos.php">À propos de Nous</a></li>
				<li class="nav-item"><a class="nav-link" href="produit.php">Produit</a></li>
				<li class="nav-item"><a class="nav-link" href="actualite.php">Actualités</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="pt-5">
				<div class="pb-5">
					<a class="btn btn-success" href="ajout.php">Ajouter un article</a>
					<a class="btn btn-warning" href="Modifier.php">Modifier</a>
					<a class="btn btn-danger" href="Supprimer.php">Supprimer</a>
				</div>
			</div>
			<?php
			foreach ($res as $row) {
				echo "<table border='1'>";
				echo "<div class='row'";
				echo "<div class=' produit'>";
				echo "<tr>";
				echo "<td class='col-md-5'>";
				echo "<div class='caption'>$row[1]</div>";
				echo "<div class='caption1'>$row[2]</div>";
				echo "</td>";
				echo "<td>";
					echo "<a class='btn btn-danger' href='../Controlleurs/Supprimer.php?id=$row[0]'>Supprimer l'article</a>";
				echo "</td>";

				echo "</tr>";
				echo "</div>";

				echo "</table>";


			}
			?>
		</div>
	</div>
</div>
</body>
</html>
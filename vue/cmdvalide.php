<?php
include "../classes/commande.class.php";
$P=new Commandes();
$res=$P->selectcommande();
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
					
					<p id="titre1">Commandes Valider</p>
				</div>
			</div>
			<div class="p-4">
					
					<a class="btn btn-success" href="cpanel.php">Accueil</a>
			
				</div>
			<div class="pt-5">
				<div class="pb-5">
					<a class="btn btn-success" href="ajout.php">Ajouter un article</a>
					<a class="btn btn-warning" href="Modifier.php">Modifier</a>
					<a class="btn btn-danger" href="Supprimer.php">Supprimer</a>
					<a class="btn btn-success" href="commandes.php">Liste des Commandes</a>
				</div>
			</div>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

				<thead>
					<tr>
						<th>NumCommande</th>
						<th>Nom Produit</th>
						<th>Quantité</th>
						<th>num Tel</th>
						<th>Adresse</th>
						<th>Supprimer</th>

					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>NumCommande</th>
						<th>Nom Produit</th>
						<th>Quantité</th>
						<th>num Tel</th>
						<th>Adresse</th>
						<th>Supprimer</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					foreach ($res as $row) {
						
						echo "<div class='row'";
						echo "<div class='produit'>";
						echo "<tr>";

						echo "<td class='caption'>$row[1]</td>";
						
						echo "<td class='caption1'>$row[2]</div></td>";
						echo "<td class='caption1'>$row[3]</div></td>";
						echo "<td class='caption1'>$row[4]</div></td>";
						echo "<td class='caption1'>$row[5]</div></td>";
						echo "<td class='p-2'><a class='btn btn-danger' href='suppcmd.php'>Supprimer</a></td>";

						echo "</tr>";
						echo "</div>";

					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
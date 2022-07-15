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
<?php



?>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md pb-5 scrolling-navbar">
			<div class="container" >
				<ul class="nav">
					<li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
					<li class="nav-item"><a class="nav-link" href="propos.html">À propos de Nous</a></li>
					<li class="nav-item"><a class="nav-link" href="produit.html">Produit</a></li>
					<li class="nav-item"><a class="nav-link" href="actualite.html">Actualités</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
				</ul>
			</div>
		</nav>		
</header>
<div class="container">
    <form class="form-signin" method="post" action="../Controlleurs/insertcmd.php">
      <h2 class="form-signin-heading"></h2>
    
       <form class="form-signin" method="post" action="">
      <label class="sr-only"></label>
       <input type class="form-control" name="nomProd" value="<?php echo $_GET["nomprod"] ?>" placeholder="Nom du Produit:"/>
       <input type="hidden" name="numCom" value="<?php echo "001",rand(100,1000);?>">
       <input type="text" class="form-control" name="Quantite" placeholder="Quantité: "/>
	   <input type ="number_format" class="form-control" name="NumerodeTel" placeholder="Numero de Tel:" />
       <input type ="text" class="form-control" name="Adresse" placeholder="Adresse:" />
      <button class="btn btn-lg btn-primary btn-block" type="submit">Valider la commande </button>
    </form>







</body>
</html>
<?php  require_once('../classes/produit.class.php');
$P=new Produit();
$row=$P->affproduit($_GET['id']);  
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link href="./connexion/bootstrap.min.css" rel="stylesheet">
  <link href="./connexion/connexion.css" rel="stylesheet">
</head>
<body>
  <div class="container">
<form class="form-signin" method="post" action="../Controlleurs/Modifier.php">
		<input type="hidden" name="id" value="<?php echo $row[0] ?>">

	<h2 class="form-signin-heading">Modifier un produit</h2>
	<label class="sr-only">Nom Produit</label>
	<input type="text" name="nomProd" class="form-control" value="<?php echo $row[1] ?>">

	<label class="sr-only">Description Produit</label>
	<textarea class="form-control" name="desProd" value="<?php echo $row[2] ?>"></textarea>
		<textarea class="form-control" name="specification" value="<?php echo $row[3] ?>"></textarea>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
	</form>
</div>
</body>
</html>

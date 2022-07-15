<?php
include "../classes/produit.class.php";
$P=new Produit();
$row=$P->selectProduit();
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link href="./connexion/bootstrap.min.css" rel="stylesheet">
  <link href="./connexion/connexion.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<?php
			
				echo "<form class='form-signin' method='post' action='../Controlleurs/insertprod.php'>";
				echo "<h2 class='form-signin-heading'>Modifer un produit</h2>";
				echo "<label class='sr-only'>Nom Produit</label>";
				echo "<input type='text' name='nomProd' class='form-control' value='$row[1]''>";
				echo ' <label class="sr-only">Description Produit</label>';
				echo "<textarea class='form-control' name='desProd' value=$row[2]></textarea>";

			
		?>
	</div>
</body>
</html>
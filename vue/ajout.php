<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link href="./connexion/bootstrap.min.css" rel="stylesheet">
  <link href="./connexion/connexion.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <form class="form-signin" method="post" action="../Controlleurs/insertprod.php">
      <h2 class="form-signin-heading">Ajouter un produit</h2>
      <label class="sr-only">Nom Produit</label>
      <input type="text" name="nomProd" class="form-control" placeholder="nom Produit">
      <label class="sr-only">Description Produit</label>
      <textarea class="form-control" name="desProd" placeholder="Description de Produit"></textarea>
       <textarea class="form-control" name="specification" placeholder="Specification de Produit"></textarea>
       <input type="file" name="image" enctype= "multipart/form-data"/>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter</button>
    </form>
  </div> 
</body></html>
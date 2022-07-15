<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link href="./connexion/bootstrap.min.css" rel="stylesheet">
  <link href="./connexion/connexion.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <form class="form-signin" method="post" action="../Controlleurs/connexion.php">
      <h2 class="form-signin-heading">Connexion</h2>
      <label class="sr-only">Nom d'utilisateur</label>
      <input type="text" name="user" class="form-control" placeholder="Nom d'utilisateur" required="Entrer votre username" autofocus="">
      <label class="sr-only">Mot de passe</label>
      <input type="password" name="pass" class="form-control" placeholder="Mot de passe" required="Entrer votre mot de passe">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    </form>
  </div> 
</body></html>
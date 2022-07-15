<?php
include "../classes/produit.class.php";
$P=new Produit();
$P->nomProd=$_POST['nomProd'];
$P->desProd=$_POST['desProd'];
$P->specification=$_POST['specification'];
$P->image=$_POST['image'];
$P->insertproduit();
echo "Ajout Effectuée avec Succes";
header('location:../vue/cpanel.php');

?>
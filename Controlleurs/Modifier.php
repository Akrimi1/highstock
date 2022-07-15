<?php 
include "../classes/produit.class.php";
$P=new Produit();
$P->nomProd=$_POST['nomProd'];
$P->desProd=$_POST['desProd'];
$P->specification=$_POST['specification'];
$id=$_POST['id'];
$P->modifProduit($id);
header('location:../vue/Modifier.php');
?>
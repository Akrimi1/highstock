<?php 
include "../classes/produit.class.php";
$P=new Produit();
$P->suppProduit($_GET['id']);
header('location:../vue/cpanel.php');
?>

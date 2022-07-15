<?php
include "../classes/commande.class.php";
$P=new Commandes();
$P->numCom=$_POST['numCom'];
$P->nomProd=$_POST['nomProd'];
$P->qte=$_POST['Quantite'];
$P->numtel=$_POST['NumerodeTel'];
$P->adresse=$_POST['Adresse'];
$P->insertcommandes();
echo "<script>alert('Commande Effectuée avec Succes')</script>";
header('location:../vue/produit.php');
?>
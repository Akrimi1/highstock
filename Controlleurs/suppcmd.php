<?php 
include "../classes/commande.class.php";
$P=new commandes();
$P->suppCommande($_GET['id']);
header('location:../vue/commandes.php');
?>

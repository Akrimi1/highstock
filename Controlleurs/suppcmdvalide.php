<?php 
include "../classes/commande.class.php";
$P=new commandes();
$P->suppCmdvalide1($_GET['id']);
header('location:../vue/affcmdvalide.php');
?>

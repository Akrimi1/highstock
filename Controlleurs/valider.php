<?php 
include "../classes/commande.class.php";
$C=new Commandes();
$id=$_GET['id'];
$C->validerCmd($id);
$C->insertcomdValider($id);
$C->suppCmdvalide($id);
header('location: ../vue/affcmdvalide.php');
?>
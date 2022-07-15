<?php
include "../classes/contact.class.php";
$C=new Contact();
$C->nom=$_POST['nom'];
$C->prenom=$_POST['prenom'];
$C->tel=$_POST['tel'];
$C->adresse=$_POST['adresse'];
$C->email=$_POST['email'];
$C->message=$_POST['message'];
$C->insertMessage();
echo "Merci de nous Contacter Au Revoir..";
header('location:../vue/index.php');
?>
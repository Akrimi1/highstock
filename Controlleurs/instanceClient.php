<?php
include"../Classes/client.class.php";
$c=new client();
$c->prenom=$_POST['prenom'];
$c->nom=$_POST['nom'];
$c->adresse=$_POST['adresse'];
$c->tel=$_POST['tel'];
$c->email=$_POST['email'];
$c->message=$_POST['message'];
$c->insertion();
$res=$c->selection();
foreach($res as $l){
header("location:../Vue/myaccount.php?id=$l[0]");}
?>
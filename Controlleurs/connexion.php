<?php
require_once('../classes/session.class.php');
$sess=new Session();
$user=$_POST["user"];
$pass=$_POST["pass"];

$row=$sess->Rechsession($user, $pass);
$n=$row->fetchColumn(0);
if($n==0)
	header('location:../vue/admin.php');
else{
	$_SESSION['user']=$user;
	$_SESSION['pass']=$pass;
	header('location:../vue/cpanel.php');
}

?>
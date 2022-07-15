<?php 
class Session{
public $user;
public $pass;

	public function __construct(){
		session_start();
	}
	public function Rechsession($user, $pass){
		require_once('../config/config.php');
		$cnx = new connexion();
		$bdc = $cnx->cnxbase();
		$req="SELECT count(*) from admin where user='$user' and pass='$pass'";
		$res=$bdc->query($req) or print_r($bdc->errorInfo());
		return $res;
	}
}
?>


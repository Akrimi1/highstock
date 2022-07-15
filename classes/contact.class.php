<?php
class Contact {
	public $prenom;
	public $nom;
	public $adresse;
	public $tel;
	public $email;
	public $message;	

  public function __construct(){}

  public function insertMessage(){
    include"../config/config.php";
    $con=new connexion();
    $pdo=$con->CNXbase();
    $req="insert into contact values (NULL,'$this->nom','$this->prenom','$this->tel','$this->adresse','$this->email','$this->message')";
    $res=$pdo->exec($req)or print_r($pdo->errorInfo());
    return $res;
}
}

?>
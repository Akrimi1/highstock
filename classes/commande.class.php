<?php
class Commandes{
	
	public $numCom;
    public $nomProd;
    public $qte;
    public $numtel;
    public $adresse;
    public $valider;


    public function __construct(){}


    public function selectcommande(){
        include "../config/config.php";
        $con=new connexion();
        $pdo=$con->CNXbase();
        $req="select * from commandes";
        $res=$pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    public function insertcommandes(){
        require_once('../config/config.php');
        $cnx=new connexion();
        $bdc=$cnx->cnxbase();
        $req="insert into commandes values(NULL, '$this->numCom', '$this->nomProd', '$this->qte', '$this->numtel', '$this->adresse', 0)";
        $bdc->exec($req) or print_r($bdc->errorInfo());

    }
    public function suppCommande($id){
        include_once("../config/config.php");
        $c=new connexion;
        $pdc = $c->cnxbase();
        $req="delete from commandes where id=$id";
        $pdc->exec($req) or print_r($bdc->errorInfo());
    }
    public function validerCmd($id){
        require_once('../config/config.php');
        $cnx=new connexion();
        $bdc=$cnx->cnxbase();
        $req="update commandes set valider=1 where id='$id'";
        $bdc->exec($req) or print_r($bdc->errorInfo());
    }
    public function affcmdId($id){
        include_once("../config/config.php");
        $c=new connexion;
        $pdo = $c->cnxbase();
        $req="select * from commandes where id='$id' and valider=1";
        $res=$pdo->query($req);
        $row=$res->fetch();
        return $row;
    }
    public function insertcomdValider($id){
        require_once('../config/config.php');
        $cnx=new connexion();
        $bdc=$cnx->cnxbase();
        $req="insert into cmdvalide select * from commandes where id=$id ";
        $bdc->exec($req) or print_r($bdc->errorInfo());

    }
    public function suppCmdvalide($id){
        include_once("../config/config.php");
        $c=new connexion;
        $pdc = $c->cnxbase();
        $req="delete from commandes where valider=1 and id=$id";
        $pdc->exec($req) or print_r($bdc->errorInfo());
    }
    public function affcmdValid(){
     include "../config/config.php";
     $con=new connexion();
     $pdo=$con->CNXbase();
     $req="select * from cmdvalide";
     $res=$pdo->query($req)or print_r($pdo->errorInfo());
     return $res;
 }
 public function suppCmdvalide1($id){
    include_once("../config/config.php");
    $c=new connexion;
    $pdc = $c->cnxbase();
    $req="delete from cmdvalide where id=$id";
    $pdc->exec($req) or print_r($pdc->errorInfo());
}
}
?>
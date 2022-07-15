<?php
class Produit{
	
	public $nomProd;
	public $desProd;
	public $specification;
	public $image;

	
	public function __construct(){}

	public function __get($att){
        return $this->$att;
    }
    public function __set($att ,$val){
        $this->$att=$val;
    }
	
	public function selectproduit(){
        include "../config/config.php";
        $con=new connexion();
        $pdo=$con->CNXbase();
        $req="select * from produit";
        $res=$pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    public function listproduit(){
        include "../config/config.php";
        $con=new connexion();
        $pdo=$con->CNXbase();
        $req="select * from listproduits";
        $res=$pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    public function selectdetail($id){
    	include '../config/config.php';
    	$con=new connexion();
    	$pdo=$con->CNXbase();
        $req="select * from produit where id='$id'";
        $res=$pdo->query($req)or print_r($pdo->errorInfo());
        return $res;

    }
    public function insertproduit(){
		require_once('../config/config.php');
		$cnx=new connexion();
		$bdc=$cnx->cnxbase();
		$req="insert into produit values(NULL, '$this->nomProd', '$this->desProd', '$this->specification', '$this->image')";
		$bdc->exec($req) or print_r($bdc->errorInfo());

	}
	public function suppProduit($id){
		include_once("../config/config.php");
		$c=new connexion;
		$bdc = $c->cnxbase();
		$req="delete from produit where id='$id'";
		$bdc->exec($req) or print_r($bdc->errorInfo());
	}
    public function modifProduit($id){
        include_once("../config/config.php");
        $c=new connexion;
        $bdc = $c->cnxbase();
        $req="update produit set nomProd='$this->nomProd', desProd='$this->desProd', specification='$this->specification' where id='$id'";
        $bdc->exec($req) or print_r($bdc->errorInfo());
    }
    public function affproduit($id){
        include '../config/config.php';
        $con=new connexion();
        $pdo=$con->CNXbase();
        $req="select * from produit where id='$id'";
        $res=$pdo->query($req);
        $row=$res->fetch();
        return $row;
    }

}
?>
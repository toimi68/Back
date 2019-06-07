<?php
//MVC /produitsModel.php
class produitModel
{
    private $pdo;//contient notre objet pdo (connexion  à la bdd)
public function __construct()
{
    $this->pdo = new PDO ('mysql:host=localhost;dbname=site','root','',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING,));
}
//ce fichier interagit avec la table produits ds la BDD(requete,sql)
//recuperer ts les produitspar l'id
public function findAll()
{
    $resultat = $this -> pdo -> query('SELECT * FROM produit');
    $produits =$resultat->fetchAll();
    return $produits;
}


//Récupérer un produit par l'id
   public function find($id){
            $resultat = $this -> pdo -> query("SELECT * FROM produit WHERE id_produit = :id");
            $resultat = bindValue('id' $id, PDO::PARAM_INT);
            $resultat -> execute();
            $produit = $resultat -> fetch();
            return $produit;



/*-insert
  -update
  -delete */




}
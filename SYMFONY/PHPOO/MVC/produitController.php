<?php
require ('produitModel.php');
class produitController
{
    private $model;//contient l'objet produitModel;
    public function __construct()
    {
        $this->model= new produitModel;
    }
    //pr afficher ts les produits
    public function boutique(){

    //à pr missionafficher ts les produits
    //1 :recuperer tous les produits
    public function findAll(){
        $resultat =$this->pdo->query('SELECT* FROM produit');
        $produits=$resultat->fetchAll();
        return $categories;
       }

    $produit =$this->model->findAll();
    echo'<pre>';print_r($produits);echo'</pre>';
    $categories=this->model->finCat();
    //SELECT DISTINCT (categories)FROM produit
    //bis recuperer ttes les categories
    public function findCat(){
        $resultat =$this->pdo->query(SELECT DISTINCT(categorie)FROM produit)
        $categorie = $resultat->fetchAll();
        return $categories;
    }

    //2:afficher les produits
    require('produits.php');

    }
    //pr afficher un seul produit

    public function affichage($id){

    }
    public function categorie ($categorie){

    }
    //ajouter un produit
    public function ajouterProduit($data){

    }
    //modifie un produit
    public function modifierProduit($id,$data)
    {

    }
    //supprimer un produit
    public function supprimerProduit($id)
    {

    }
}
<?php
namespace general;
require_once('namespace_commerce.php');
USE commerce1,commerce2,commerce3;//permet de preciser quel namespace ,je veux importer du fichier namespace commerce php"
echo __NAMESPACE__.'<hr>';//constante magique qui permet d'afficher ds quel namespace on se trouve
$std = new \StdClass();//sans le anti-slash => erreur l'interpreteur va chercher si la methode StdClass()est declaré dans le namespace 'general'pour revenir dans l'espace global de php le te'mps de ligne ,on doit, un anti-slash devant la class 
var_dump($std);
$commande = new commerce1\commande;
//$commande = new nom_du_namespace \nom_de_la_class
echo "nombre de commande : ".$commande->$nbCommande.'<hr>';
var_dump($commande);
//EXO /creer un objet de chaque classes declarées et faire les affichage des proprietes
$produit =new Commerce2\produit;
echo "<hr>Nombre de produit:".$produit->nbProduit.'<hr>';
$panier= new Commerce3\Panier;
echo "<hr>Nombre de produitdans le panier:".$panier->nbProduit.'<hr>';
var_dump($produit);
$produit= new Commerce3\Produit;
echo "<hr>Nombre de produitdans le panier:".$produit->nbProduit.'<hr>';
<?php
//connexion-----
$bdd=new PDO('mysql:host=localhost;dbname=site','root','',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING,
PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));

//session
session_start();

//chemin

define("RACINE_SITE",$_SERVER['DOCUMENT_ROOT'].'/back/PHP/10-site-ecommerce/');
//ns aurons besoin du chemin physique complet pr enregistrer les photos
// echo RACINE_SITE;
define("URL","http://localhost/Back/PHP/10_site_ecommerce/");
// echo URL;
//cette cstte sert à enregistrer l'url d'une photo ds la BDD pas de photo trop lourd

//VARIABLES/--------------
$error = ''; //message d'erreur
$validate ='';//message de validation
$content ='';//permet de placer le contenu ou l'on veut

//-------------FAILLES XSS
foreach($_POST as $key=>$value)
{

    $_POST[$key]=strip_tags(trim($value));

}
 //-------------GET
foreach($_GET as $key =>$value)
{
$_GET[$key] = strip_tags(trim($value));

}

//strip_tags retire lesz balises
//trim supprime les espaces en debut et fin de chaine


//------INCLUSION
//on inclus directement les fonction.php ds init cela evite de l'appelmler sur chaque page
require_once("fonction.php");

?>
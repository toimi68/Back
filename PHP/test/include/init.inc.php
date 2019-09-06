<?php
//-------CONNEXION--------
$bdd = new PDO('mysql:host=localhost;dbname=site','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'
));
//----------SESSION----------------
session_start();
//-----------CHEMIN--------------
define("RACINE_SITE",$_SERVER['DOCUMENT_ROOT'].'/back/PHP/10-site-ecommerce/');
define("URL","http://localhost/Back/PHP/10-site-ecommerce/");
require_once 'fonction.inc.php';
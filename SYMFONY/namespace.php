<?php
//Sylvain :Inscription
namespace Membre;
//au lieu de faire le setteur on prefer passer par 'use'
use PDO;
use Commentaire;
class user
{
private $pdo;
public function setPdo() {
    $pdo = new PDO();
}
}
//aziz : commentaire
namespace commentaire;
class User 
{

}
$user = new Membre\User;
$user = new Commentaire\User;
//fichioer memo plein d'erreur potentiel comme le fait qu'il yai 2 namespace 
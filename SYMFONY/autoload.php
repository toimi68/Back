<?php
class Autoload 
{
public static function chargement($class){
require ('Controller/' . $class .'.php');
//require ('Controller/User.php');
//require ('Controller\User.php');
}
}
spl_autoload_register(array('Autoload','chargement'));
//s'execute des qu'il y a le mots clé "new"
//il va apporter en argument de notre fonction ce qui suit apres "new"
$a =new Autoload;
$a -> chargement();



new User;
require('User.php');
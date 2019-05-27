<?php
class Singleton 
{
    public $numero=20;
    private static $instance =null;
    private function_construct(){}//la classe n'est pas instancier
        private function_clone(){}//l'objet ne sera pas clonable
public function getInstance()
{
    if(is_null(self::$instance))//si $instance est null la 1ere fois c'est null,tt les autres fois je ne rentre pas ici car il y a un objet ds $instance
    {
        self::$instance = new Singleton;

    }
    return self::$instance;
}

            /*$s =new Singleton;   */         
}
//on a une erreu car il n'est pas possible d'instancier la classe puisque le constructeur est privé 
$objet1=Singleton::getInstance();
echo '<pre>';var_dump($objet1);echo'</pre>';
$objet2=Singleton::getInstance();
echo'<pre>';var_dump($objet2);echo'</pre>';
echo $objet1->numero.'<hr>';//objet 1 est la reference#1
echo $objet2->numero.'<hr>';//objet2 est la reference #1 donc c'est bien le ^m objet
$objet2->numero=22;//qd on change la valeur de la propriete 'n°' ça impacte sur les 2 variables
//$objet1 et objet2(c'est les ^m objet)
echo $objet1->numero.'<hr>';
echo $objet2->numero.'<hr>';
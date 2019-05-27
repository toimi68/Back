<?php
session_start();
if(isset($_GET['action'])&&$_GET['action']=='vider')
{
unset($_SESSION['panier']);

}
if(isset($_GET['action'])&&$_GET['action']=='(create'||isset ($_SESSION['panier']))
{
    $_SESSION['panier'] = array(26,27,28);
    echo "produit present dans le panier:" .implode($_SESSION['panier'],'-').'<hr>';
    echo '<a href="?action=vider">vider le panier</a> le panier"></a>';
}
else{
    echo '<a href="?action=create">créer le panier</a>';
}
//architecture MVC
//1-Modéle (echange avec la BDD)
//2-View(affiche et presentation des données -HTML/CSS)
//3-Controller(traitementPHP)
//le but du MVC est de separer les couches ,les langages 
//AVANTAGES
//clarté s'il faut changer des trucs on ne risque pas de decapiter une accolade ds le code
//c'est comme ça que fonctionne le CMS  de wordpress par exemple


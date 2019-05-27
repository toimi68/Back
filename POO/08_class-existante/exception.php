<?php
function  recherche($tab,$elem)
{
    if(!is_array($tab))
    throw new Exception('vous devez envoyer un ARRAY');
    if(sizeof($tab)<=0)
    throw new Exception('vous devez envoyer un ARRAY avec contenu');
    $position=array_search($elem,$tab);
    return $position;
}
//--------------------------------------
$liste1=array();
$liste2=array('mario','yoshi','toad','bowser');
//---------------------------------
try{
    echo"position de <strong>'mario'</strong>dans le tableau ARRAY:<strong>".recherche($liste2,'mario') .'</strong><hr>';
    
    echo "position de <strong>'toad'</strong>dans le tableau ARRAY:<strong>".recherche($liste2,'toad') .'</strong><hr>';
    echo "position de <strong>'bowser'</strong>dans le tableau ARRAY:<strong>".recherche($liste1,'bowser') .'</strong><hr>';
}
catch(Exception $e)//le bloc de capture on tombe ds le bloc catch  si un traitement à disfonctionait ds le bloc try cela permet d'attrapper les exceptions 
//et de personaliser le messagen d'erreur 
{
    echo '<pre>';print_r($e);echo'</pre>';
    echo '<pre>';print_r(get_class_methods($e));echo'</pre>';
    }
    //$e est un objet issu de la class exception il contient ces propres methodes comme getMessage  qui permet d'afficher le message d'erreur 
    // ms aussi getFile qui permet d'afficher lze fichier ds lequel a ete commis l'erreur
//EXO  afficher UNE PHRASE COMPORTANT LE MESSAGE D ERREUR  LE FICHIER DS LEQUEL ET La  LIGNE
echo "Message d'erreur :<strong>".$e->getMessage() ."</strong>a la ligne <strong>".$e->getLine()."</strong> ds le fichier: 
<strong>"$e->getFile()."</strong>a la ligne <strong>".$e->getLine()"</strong>"'<br>';
//il est possible de mettre plusieurs blocs try/catch à la suite  ça fonctionne ensemble 
echo'<hr>''</hr>';
//-----------conexion BDD
try 
{
    $bdd =new PDO('mysql:host=localhost;dbname=test2','root','');
    echo "connexion reussie!!";
}
catch(PDOException $e)
{
    //exo :personaliser le message d'erreur en cas de mauvaise connexion à la BDD
echo '<pre>';print_r($e);echo'</pre>';
    echo '<pre>';print_r(get_class_methods($e));echo'</pre>';
    echo "Message d'erreur :<strong>".$e->getMessage() ."</strong>a la ligne <strong>".$e->getLine()."</strong> ds le fichier: 
<strong>"$e->getFile()."</strong>a la ligne <strong>".$e->getLine()"</strong>"'<br>';
}
//qd on le traitement dysfonctionne ds le try on tombe ds  le catch et la class PDOException est instancié 
//$e represente un objet de la class PDOException cet objet contient des methodes avec le details de l'erreur
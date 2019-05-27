<?php
class Societe
{
    public $adresse;
    public $ville;
    public $cp;
public function_set($nom,$valeur)
{
    echo"la propriete <strong>$nom</strong>n'a pas été declaré,la valeur<strong>$valeur</strong>n'a pas été affecté!!<hr>";
    //_set est une methode magique qui se declenche  en cas de tentative d'affection sur une propriete qui n'existe pas
}
public function_get($nom)
{
    echo" la propriete<strong>$nom</strong>,n'a pas été déclarer on ne peut pas l'afficher!!<hr>";
}
//_get est une methode magique qui se declenche ds le cas ou l'on tente d'afficher une propriete qui n'a pas été déclaré
public function__call($nom,$argument)
{
    //$argument :tableau ARRAY qui reception les arguments de la methode executé
   // echo '<pre>';print_r($argument);echo'</pre>';
    echo "la methode <strong>$nom</strong>n'a pas été déclaré,les arguments étaient<strong>".implode("-",$argument)."</strong> !!<hr>";
}
//__call() est une methode magique qui s'execute automatiquement si tentative d'execution d'une methode qui n'a pas été déclarée
}
$societe=new societe;
$societe->villes="Paris";//tentative d'affection d'une propriete qui n'a pas été déclarée
echo'<pre>';print_r($societe);echo'</pre>';
echo $societe->titre;
echo $societe->sefzef(1,'test',true);//tentative d'execution d'une methode qui n'existe pas
echo'<pre>';print_r($societe);echo'</pre>';
//il y a trop d'erreur sales en PHP les methodes magiques permettent d'afficher des erreurs propres en français
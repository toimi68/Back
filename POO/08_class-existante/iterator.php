<?php
$perso=array("m"=>"Mario","l"=>"luigi","t"=>"toad","b"=>"bowser");
$it1=new ArrayIterator($perso);
echo '<pre>',var_dump($it1);echo'</pre>';
echo'<pre>';print_r(get_class_methods($it1));echo'</pre>';
$it1->rewind();
while($it1->valid())
{
    echo $it1->key().'-'.$it1->current().'<br>';
    $it1->next();
}
//rewind():permet de seplacer au debut du fichier /array/dossier
//valid():permet de verifier si il y a des infos à parcourrir
//key():permet de voir l'indice
//next():permet de passer à l'element suivant
//current():affiche la valeur
//-------------------------------------------------
$it2=new SimpleXmlIterator('liste','xml',null,true);
echo '<pre>';var_dump($it2);echo '</pre>';
echo '<pre>';print_r(get_class_methods($it2));echo '</pre>';
$it2->rewind();
while($it2->valid())
{
    echo $it2->key().'_'.$it2->current().'<br>';
    $it2->next();
}
//iterator est ce qu'on appelle un designe pattern qui permet de definir une situation pratiqueà un probleme frequent
//faire la même chose avec DirectoryIteratorecho '<pre>';var_dump($it2);echo '</pre>';
$it3=new DirectoryIterator('C://');
echo '<pre>';print_r(get_class_methods($it3));echo '</pre>';
$it3->rewind();
while($it3->valid())
{
 echo $it3->key().'_'.$it3->current().'<br>';
    $it3->next();   
}
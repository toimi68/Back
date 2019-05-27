<?php
echo'<pre>';print_r(get_declared_class());echo'</pre>';
$tab =array('mario','luigi','yoshi','bowser');
$objet =(object)$tab;//cast:transformation
echo'<pre>';var_dump($objet);echo'</pre>';
//un objet fait parti de la class stdclass qd il est orphelin et n'a pas été instancié par un 'new'
//l'objet n'est issu d'aucune class en particulier

//EXO afficher yoshi en passant par l'objet stdclass'$objet' 
echo $objet->{1}.'-'.$objet->{2}.'<hr>';//permet d'afficher les elements de l'objet
//la bouckle foreach permetb de parcourrir les données d'un tableau ARRAY mais aussi d'un objet!! 
foreach($objet as $key =>$value)
{
    echo "$key-$value<br>";
}
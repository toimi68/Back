<?php
function recherche($tab,$elem)
//liste
{
    if(!is_array($tab))
    {
        die('vous devez envoyer un ARRAY');//die permet de gere les erreur et d'afficher des erreurs propres en français
        //die s'execute tt les traitements ne sortent pas
    }
    $position =array_search($elem,$tab);//array_search est une fonction predefini qui permet de trouver
    //la position d'un element ds le tableau ARRAY la fonct° retourne l'indice auquel se trouve element
    return $position;
}
//--------------------
$liste =array('mario','yoshi','toad','bowser');
echo "Position de <strong>'mario'</strong>ds le tableau ARRAY:<strong>".recherche($liste,'mario').'</strong><hr>';
echo "Position de <strong>'toad'</strong>ds le tableau ARRAY:<strong>".recherche($liste,'toad').'</strong><hr>';
echo "Position de <strong>'bowser'</strong>ds le tableau ARRAY:<strong>".recherche('ghrre','toad').'</strong><hr>';
//à ce stade die s'execute le script s'arrete  et ts les traitementqs suivants ne sont pas executé
echo 'traitement...';//ne s'affiche pas car die s'execute
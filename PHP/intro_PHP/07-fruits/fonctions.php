<?php
function calcul($fruits,$poids)
{
    switch($fruits)
    {
        case'cerises':$prix_kg=5.76;break;
        case'bananes':$prix_kg=1.06;break;
        case'pommes':$prix_kg=1.61;break;
        case'peches':$prix_kg =3.23;break;
        default:return"fruits inexistant";break;

    }
    $resultat =round (($poids*$prix_kg/1000),2);//round est une fonction qui permet d'arrondir un chiffre 
    return "les $fruits coutent $resultat Euro pour $poids<br>";
}
// echo calcul ('bananes',500);
?>
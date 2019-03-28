<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
 crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>entrainement PHP</title>
</head>
<body>
<div class="container">
 <h2 class="display-4 text-center">Ecriture et affichage</h2><hr> 
 
 <!--ns pouvons ecrire du HTML ds 1 fichier ayant l'extension PHP 
 le contraire n'est pas possible-->  
<?php //ouverture de la balisePHP 
//on peut l'ouvrir autant qu'on veut

echo 'bonjour';//c'est 1 instruct°ns pouvons y mettre du HTML 
print'bonjour';
'<hr>
<h2>commentaire</h2><hr>';
?>
<?= "Allo" //le = remplace le echo ?> 
<strong>Bonjour</strong><!--on peut fermer puis rouvrir PHP pr mixer avec HTML-->
<?php
echo'texte';//plusieurs façon de mettre en commentaire(/,//,#)

'<hr>
<h2>variables:type, declaration, affectation</h2><hr>';
//on connait la variable qu'on declare comme ça
$a=127;//affectation de 127 ds la variable 'a'
echo gettype($a);//fonction prédefini permettant d'avoir le type d'1 variable
echo'<br>';
$b=1.5;
echo gettype($b);//nb à virgule DOUBLE
echo '<br>';
$c="une chaine ";
echo gettype($c);//
echo'<br>';
$d=127;
echo gettype($d);
echo '<br>';
$e = true;
echo gettype($e);
echo '<br>';
echo 
'<hr>
<h2>variables:type, declaration, affectation</h2><hr>';
$x = "bonjour";
$y = "tout le monde !!";
echo $x . $y.'<br>';//pt de concatenation qu'on peut traduire par "suivi de"
echo "$x $y. <br>"; // entre " les variables sont évaluées avec des simples quotes les variables ne sont pas evaluées
//c'est une chaine de caractére
echo 'aujourd\'hui<br>';// texte etv variables
echo "hey".$x . $y.'<br>';
echo "<br>","coucou","<br>";//virgule ou point concatenation similaire
$prenom1 ="bruno";
$prenom1 ="claire";
echo $prenom1 .'<br>';//ns affiche claire
$prenom2 ="nicolas";
$prenom2 .= "marie";
echo $prenom2 .'<br>';//ça rajoute ss remplacer la valeur precedente grace à l'operateur".=" on a nicolas marie
'<hr>
<h2>constantes et constantes magiques</h2>
<hr>';
//1 constante comme une variable permet de conserver un valeur ou la valeur est constante
//on ne pourra changer cette valeur durant l'execution du script
define("CAPITALE","Paris");//constante tjrs majuscule(nom de la constante et valeur de la constante)
echo CAPITALE .'<br>';
//constante magique
echo _FILE_ . '<br>' ;//chemin complet vers le fichier
echo _LINE_ . '<br>' ;//affiche le n° de la ligne(fonct°_class_methode)
//afficher vert-jaune-rouge (avec les tirets)en mettant chaque couleur ds une variable
/*$ROUGE="red";
$VERT="green";
$JAUNE="yellow";
define("ROUGE","red");
define("VERT","green");
define("JAUNE","yellow");

echo '<font-color="vert">VERT</fond><br>';
echo '<font-color='*/
$vert= '<span class="text-success">vert</span>';
$rouge='<span class="text-warning">rouge</span>';
$jaune='<span class="text-danger">jaune</span>';
echo"$vert-$jaune-$rouge<br>";
echo $vert.'-'.$jaune.'-'.$rouge.'<br>';
'<hr>
<h2>operateur arithmetique</h2>
<hr>';
$a = 10;$b=2;
echo $a+$b.'<br>';
echo $a-$b.'<br>';
echo $a*$b.'<br>';
echo $a/$b.'<br>';
//operation affectation
$a+=$b;//equivaut $a=$a+$b
echo $a.'<br>';
$a-=$b;
echo $a.'<br>';
$a*=$b;
echo $a.'<br>';
$a/=$b;
echo $a.'<br>';
//context:pratique pour le  calcul d'un panier

echo'<hr>
<h2>structure conditionnelle(if/else)operateur de comparaison</h2>
<hr>';
//Isset&empty
$var1=0;
$var2='';
if(empty($var1))
{echo "0, vide ou non defini<br>";
}
//empty test si une variable est vide ou à 0
//si la condition entre les parenthese est verifiée si ona true le code entre les acolade sera excecuté
if(isset($var2))
{
    echo"var2 existe et est defini par rien<br>";
}
//isset test l'existence d'une variable
//OPERATEUR COMPARAISON
/*= egal à
== comparaison de la valeur
=== comparaison de valeur ert du type
<strictement inferieurà
>   strictement supérieurà
<= inferieur ou égal à
>= superieur ou egal à
! n'est pas
!= different de 
|| or ou
&& AND et 
XOR condit° exclusive */
$a=10;$b=5;$c=2;
if($a>$b)
    {echo "A est bien supérieur à B<br>";

    }
else{//cas par defaut ds tt les autres cas si la condit°IF n'est pas verifiée c'est le code ds le else qui s'execute/else($b==5)=>/*\ erreur
    echo"non c'est B qui est supérieur à A<br>";
}
//if/elself/else
if($a>$b&&$b>$c)
{
    echo "ok pour les 2 conditions<br>";
}
elseif($a==9||$b>$c)
//elseif permet d'ajouter des cas supplémentaire à la condition if,il peut y avoir plusieurs et il bloque le script et toutes les conditionssuivantes ne seront pas evaluées.
{
echo "ok pour au moins une deqs 2 conditions<br>";
}
else{
    echo"tout le monde a faux!!<br>";
}
//condition exclusive
if($a==10 XOR$b==6)
{

    echo 'ok condition exclusive<br>';
    }
    //pour entrer ds les accolades il faut que une des 2 condition soient verifié
    //forme contractées:2 ém possibilité d'ecriture
    echo($a==10) ?"A est = 10<br>":"a n'est pas égal à 10<br>";
    //condit° ternaire: le ?remplace le if et les 2 pts':' remplace le else
    // comparaison
    $varA =1;
    $varb='1';
    if($varA==$varb)
    {
        echo "il s'agit de la même chose<br>";
    }
//Avec la presence du triple égal ,le test ne fonction pas car les types des variables sont differents
//INTEGRER n'est pas egal à string
//= affectation
//== comparaison de la valeur
//=== comparaison de la valeur et du type
//echo '<hr> <h2 class="display-4 text-center">Condition SWITCH </h2><hr>';
 $perso = 'Mario';  // la condition "switch" compare une valeur a différents cas,ici mario n'est pas dans les 3 cas,elle va dans le dernier
         switch($perso)            
         {
            case 'Luigi':
                echo "Vous avez choisi $perso<br>";
            break;
            case 'Toad':
                echo "Vous avez choisi $perso<br>";
            break;
            case 'Bowser':
                echo "Vous avez choisi $perso<br>";
            break;
            default:
                echo "Vous êtes fou !! c'est Mario le meilleur<br>";
            break;
         }
         // Si on a une grande comparaison de cas, la condition swith est à privilégié
         // 'case' représente les cas dans lesquels nous pouvons potentiellement tomber
         // 'break' permet de stopper le script si nous tombons dans un des cas 
         // Exo: Pouvez vous faire la même chose que le SWITCH avec des conditions if / elseif / else ? Si oui,faites le.
         $perso = 'mario';
         if($perso == 'Luigi')
         {
             echo "Vous avez choisi $perso<br>";
         }
         elseif ($perso == 'Toad')
         {
             echo " Vous avez choisi  $perso<br>";
         }
         elseif ($perso == 'Bowser')
         {
             echo "Vous avez choisi $perso<br>";
         }
         else
         {
             echo "Vous êtes fou!! C'est Mario le meilleur<br>";
         }
//echo '<hr><h2 class='display-4 text-center'>FONCTIONS PREDEFINI</h2><hr>';
//echo 'date:''.date("d/m/y") . '<br>;
/*qd on utilise un fonct° predefini on se demande ce qu'on  doit lui envoyer comme argumentet surtout ce qu'elle retourne*/
//echo '<hr><h2 class="display-4 text-center">Traitement des chaines (iconv_strlen,strpos,substr)</h2>></h2>'
/*strops() string posit°/ fonct° predefini qui permet de trouver la position d'un caractere ds une chaine d'arguments<mat-checkbox formControlName="formControlName" align="start"
             
    1- la chaine ds laquelle ns souhaitons chercher
    2-le caractére a trouvé contexte :utile pr verifier le format d'un email*/


    /*$email1="gregorylacroix78@gmail.com";
    echo strops($email1,"@")*/

/*$email2='bonjour';
echo strpos($email2,"@");
/*cette ligne ne sort rien pourtant il y a quelque chose dedans: FALSE!
var_dump(strpos($email2,"@"))/* c'est une instruct° d'affichage amelioré qu'on utilise en developpement*/
/*iconv_strlen()*/
/*$phrase ="mettez une phrase ici";
echo iconv_strlen($phrase).'<br>';
//iconv_strlen()est une fonct° predefini qui permet de calculer la taille d'une chaine decaractere
//contexte on peut utiliser pour savoir si le pseudo et le mdp ont la tailloe conforme pour une inscription
substr()
    $texte = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Quia pariatur est, quidem iure aliquid, itaque laboriosam 
    deserunt necessitatibus repudiandae corrupti laudantium quam consequatur?
     Quasi, dolor non quae culpa consectetur quisquam."

echo substr($texte,0,20) . "...<a
href="">Lire la suite </a>";
/*substr() est une fonct° predefinie qui permet le retour de la chaine argument
/* 1-la chaine à couper 
2- posit° du debut 
3- posit° de la fin
contexte substr est utilisé pour afficher des actualité avec des accroches*/
/*echo '<hr><h2 class="display-4
texte-center">Fonct° utilisateur</h2><hr>';
//les fonct° utilisateur permette d'éviter les copier/coller d'un code recurrant,on l'encapsule ds une fonct°
//on declare tjrs une fonction avec le mot-clé "function"suivi du nom que ns definissons
function separation()//tjrs des parentheses pour recevoir les arguments
{
    echo "<hr><hr><hr>";
}
separation();//execution de la fonct°*/

// FONCTION AVEC ARGUMENT
function bonjour($qui)
{
    return"Bonjour $qui <br>";
}
//là on quitte la fonct°
echo bonjour ('gregory');
//execut° de la fonct°
echo bonjour('etienne');
//qd il y a return ds la fonct°,il faut faire un echo 
$prenom='jacques';
echo bonjour ($prenom);//l'aergument peut-être une variable
//-----------------
function appliqueTva ($nombre)
{
    return $nombnre*1.2;
}
echo "500 euros avec tva 20% font :" .appliqueTva(500).'€<br>';
//----------------EXO
/*pourriez ameliorer cette fonct° afin que l'on puisse calculer un nombre avec les taux de notere choix (19.6%,5.5%,7% etc..)*/

function appliqueTva2($nombre,$taux=20)
{
    return $nombre*(1+$taux/100);
}

echo "500 euros avec tva 19.6%
 font :" .appliqueTva2(500,19.6).'€<br>';
echo "500 euros avec tva 7%
 font :" .appliqueTva2(500,7).'€<br>';
echo "500 euros avec tva 5.5%
 font :" .appliqueTva2(500,5.5).'€<br>';
echo "500 euros avec tva 20%
 font :" .appliqueTva2(500,20).'€<br>';
//-------------------
echo meteo("été",20);//il est possible d'executer une fonct° avt qu'elle soit declarée ds le code
function meteo($saison,$temperature)
{
    return "nous sommes en $saison et il fait $temperature degre(s<br>";
}

//---EXO-------------gérer le 's' de degres en fonction de la t°,pensez à gérer les articles 'en' ete ou 'au'     *printemps
/*$saison1="en été"
$saison1="en hivers"
$saison1="en automne"
$saison2="au printemps"*/
function exometeo($saison1,$saison2,$temperature)
if($temperature>1||$temperature<-1)
$degre="degrés";
else
$degre="degré";
{
    return "nous sommes en $saison et il fait $temperature $degre<br>";
}
echo exometeo('été',2);
echo exometeo('autonme',-2);
echo exometeo('hiver',0);
echo exometeo('printemps',1);
echo exometeo('printemps',-1);
if($saison=='printemps')
$art='au';
else $art='en';
return "nous sommes $art $saison et il fait $temperature $degres<br>";

//ESPACE GLOBAL ET LOCAL

function jourSemaine()
    {
        $jour="jeudi";
        return $jour;
        echo'allo!!';
    }
echo $jour;//!\\ ne fonct° pas car cette variable n'est connue qu'à l'interieur de la fonct°
//il n'est pas possible d'appeler une variable ds l'espace locale (ds une fonct°)vers l'espace global (espace par defaut de php)
$recup =jourSemaine();
echo $recup.'<br>';

//-----------a l'inverse
$pays='France';
function affichagePays()
    {
        global $pays;//global permet d'importer une variablede declaree ds l'espace global vers l'espace local 
        return $pays;
    }
echo affichagePays();




?>
<div>
</body>
</html>
<?php
final class Application
{
    public functionlancementApplication()
    {
        return "l'appli se lance comme cela!!<hr>";
    }
}
//--------------------
//final permet de verrouller une class ou une methodologie de travail
$app=new Application;
echo '<pre>';var_dump($app);echo'</pre>';
echo $app->lancementApplication();
//class Test extends Application{}-->/!\ erreur on ne peut pas heriter d'une classe finale
    class Application2
    {
        final public function lancementApplication()
        {
return "l'appli se lance comme cela!!<hr>";
        }
    }
    //-------------------------------
    class Extension extends Application2
    {
        public function lancementApplication()
        {
        //    /!\erreur!! en cas d'heritage il n'est pas possible de redeclarer une methode 
        //'final',elle est verrouillé,on ne peut plus la surcharger/ameliorer
        }
    }
    $ext=new Extension;
    echo $ext->lancementApplication();
    //l'interet de mettre le mot clé'final'sur une methode est de verrouillé afin d'empecher tout sous class de la definir
    //qd ns voulons que le comportementd'une methode soit presezrvé durant l'heritage
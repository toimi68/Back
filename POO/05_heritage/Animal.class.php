<?php
class Animal 
{
    protected function deplacement()
    {
        return"je me deplace";
    }
    public function manger()
    {
        return "je mange chaque jour";
    }
}
//---------------------------------------------
class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return"je suis un elephant et ".$this->deplacement().'<hr>';
    }
}
//-------------------------
class Chat extends Animal 
{
    public function quisuisje()
    {
      return "je suis un chat";  
    }
     public function manger()
     {
         return "je me goinfre comme un gros chat!!";
     }
}
//--------------------------
$elephant =new Elephant;
echo'<pre>';print_r(get_class_methods($elephant));echo'</pre>';
echo $elephant->quiSuisJe();
echo $elephant->manger();
//creer un objet issue de la classe 'chat' et afficher le resultat des 2 methodes déclarées à l'interieur
$chat =new Chat;
echo $chat->quisuisje() .'<hr>';
echo $chat->manger() . '<hr>';//affiche l'autre message que"manger" car la methode a été redéfinie ds la classe chat
//l'interpreteur cherche d'abord ds la classe 'chat' si la methode n'avait pas été trouvée,il aurait chercher ds la classe dont j'herite
//il n'est pas possible d'heriter de plusieurs classes en même temps-->classe chat extends Animal,Elephant-->/!\erreur!!
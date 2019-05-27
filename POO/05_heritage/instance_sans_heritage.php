<?php
class A 
{
    public function direBonjour()
    {
        return"bonjour";
    }
}
//-----------------------------------------------
class B//sans heritage de classe A
{
    public $objetA;
    //_construct() s'execute autoàmatiquempent qd ns instancions B
    public function_construct()
    {
        $this->objetA=new A;
    //je creer un objet issu de la classe A que je stock ds la propriete nommé $objetA
        echo "s'execute automatiquement det detail:";
        echo '<pre>';var_dump($this->objetA);echo'</pre>';
    }
    public function uneMethode()
    {
        return $this->objetA->direBonjour();
    }
}
//--------------------------------
$b=new B;
echo $b->uneMethode().'<hr>';
echo  $b->objetA->direBonjour();//ds mon objet B '$b' ($this),je peux appeler des methodesn sur mon objet A'$objetA'
//habituellement ns ne mettons qu'une fleche,ms là l'objetA contient un objet une autre fleche est donc possible
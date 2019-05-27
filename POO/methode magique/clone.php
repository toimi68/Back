<?php
class Ecole
{
    public $nom ="POLES";
    public $cp =94 ;
    public function__clone()
    {
$this->cp = 92;
    }
}
//------------------------------------
$ecole1 =new Ecole;
$ecole1->cp=75;
echo '<pre>';var_dump($ecole1);echo'</pre>';

$ecole2=new Ecole
echo '<pre>';var_dump($ecole2);echo'</pre>';
$ecole3 =$ecole1;
//qd je modifie ecole1 cela prend effet sur ecole3,ecole1 et ecole3 ont des reference 
//qui pointe vers le même objet #1 ils representent le même objet</objet>
echo '<pre>';var_dump($ecole3);echo'</pre>';
$ecole3->cp=91;
echo"Ecole1>".$ecole1->cp.'<hr>';
echo"Ecole3>".$ecole3->cp.'<hr>';
$ecole4 =clone $ecole2;
echo '<pre>';var_dump($ecole4);echo'</pre>';
echo '<pre>';var_dump($ecole2);echo'</pre>';

echo "Ecole2 >".$ecole2->cp.'<hr>';
echo "Ecole2 >".$ecole4->cp.'<hr>';
//clone s'execute qd on clone un objet,cela creer un nouvel objet avec nouvelle reference(#3)
//si ns avons 2 clas identiques on priviligie le clonage et apporter une modification du comportement de class

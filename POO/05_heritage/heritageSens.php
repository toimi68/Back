<?php
class A 
{
public function test 1()
{
    return "test1<hr>";
}
}
//-----------------------------------------------------
class B extends A 
{
    public function test2()
    {
        return "test2<hr>";
    }
}
//---------------------------------------
class C extends B {
    public function test3()
    {
        return "test3<hr>";
    }
}
//---------------------------------------------------------------
//EXO :creer un objet de la classe C et afficher les methodes issues de celle-ci et faire les affichages des methodes
$c = new C;
echo '<pre>';print_r(get_class_methods($c));echo'</pre>';
echo $c->test1();
echo $c->test2();
echo $c->test3();
//si la classe B herite de A et la classe C herite de B alors la classe C herite de A
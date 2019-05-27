<?php
//habituellement pour faire appel à des fichiers nous executons require_once()mais imaginons que nous avons 100 classes
//ds 100fichiers,ns ne devons pas faire 100require_once()
//require_once('A.class.php')
//require_once('B.class.php')
//require_once('C.class.php')
require_once('autoload.php');
//EXO instancier les 4 classes ,afin d'observer si l'autoload fonctionne bien
$a =new A;
$b = new B;
$c = new C;
$d = new D;
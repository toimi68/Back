<?php
Class Autoload 
{
public static function className($className)
{
require __DIR__ .'/'.str_replace('\\','/',$className.'.php');
//echo "require " .__DIR__.'/'.str_replace('\\','/', $className.'.php');
}
}
spl_autoload_register(array('Autoload','className'));
// $a = new Controller\Controller;
$b = new Model\EntityRepository;

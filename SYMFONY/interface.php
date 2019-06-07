<?php
//interface.php
interface Mouvement{

    public function start();
    public function turnRight();
    public function turnLeft();

}
//Aurelia
class Avion extends vehicule implements Mouvement
{
    public function start(){

    }
    public function turnLeft(){

    }
    public function turnRight(){

    }
    //Iuliia
    class bateau extends vehicule implements Mouvement
    {
        public function start()
    }
    public function turnLeft() 

    public function turnRight()
    
    
}
}
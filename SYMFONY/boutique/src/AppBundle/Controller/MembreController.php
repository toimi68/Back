<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MembreController extends Controller
{

    /**
     * @Route("/inscription/", name="inscription")
     */
    public function inscriptionAction(){

        return $this -> render('@App/Membre/inscription.html.twig');

    }



}
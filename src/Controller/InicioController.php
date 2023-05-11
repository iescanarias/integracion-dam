<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InicioController extends AbstractController{
    #[Route("/")]
    public function start(){
        return $this->render("inicio.html.twig");
    }
    
}

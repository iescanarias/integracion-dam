<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AcercaDeController extends AbstractController{
    #[Route("/acercade")]
    public function start(){
        // return new Response("<html><body> hola mundo </body></html>");
        return $this->render("acercade.html.twig");
    }
    
}

<?php
namespace App\Controller;

use App\Repository\TareaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TareaController extends AbstractController{
    #[Route("/tarea/{id}")]
    public function start(int $id, TareaRepository $tareaRepository){

        $tarea = $tareaRepository->find($id);

       
        return $this->render("tarea.html.twig", ["tarea"=> $tarea]);
    }
    
}
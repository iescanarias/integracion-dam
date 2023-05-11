<?php
namespace App\Controller;

use App\Repository\TareaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TareasController extends AbstractController{
    #[Route("/tareas")]
    public function start(TareaRepository $tareaRepository, Request $request){

       $filtro = $request->request->get("filtro");
        $orden = $request->request->get("orden");

        $tareas = $tareaRepository->filtrar($filtro, $orden);

        return $this->render("tareas.html.twig", ["tareas"=> $tareas]);

    }
    
}
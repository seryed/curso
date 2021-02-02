<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class PrincipalController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
            'entro' => 'principal'
        ]);
    }

    /**
     * @Route("/ingreso", name="ingreso")
     */
    public function ingreso(): Response
    {
        dump("entro");
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
            'entro' => 'Ingreso'
        ]);
    }

    /**
     * @Route("/prueba", name="prueba")
     */
    public function prueba(): Response
    {        
        return new JsonResponse(['data' => 123]);
    }
}

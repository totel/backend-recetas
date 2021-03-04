<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home(): Response
    {
        return $this->render('portada/portada.html.twig');
    }

    /**
     * @Route("/prueba", name="prueba")
     */
     public function prueba(): Response
     {
         return $this->render('portada/prueba.html.twig');
     }
}

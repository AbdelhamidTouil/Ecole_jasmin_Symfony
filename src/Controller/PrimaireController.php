<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrimaireController extends AbstractController
{
    /**
     * @Route("/Primaire", name="Primaire")
     */
    public function index(): Response
    {
        return $this->render('primaire/index.html.twig', [
            'controller_name' => 'PrimaireController',
        ]);
    }
}

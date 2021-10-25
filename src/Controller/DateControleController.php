<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DateControleController extends AbstractController
{
    /**
     * @Route("/Date-controle", name="Date-controle")
     */
    public function index(): Response
    {
        return $this->render('date_controle/index.html.twig', [
            'controller_name' => 'DateControleController',
        ]);
    }
}

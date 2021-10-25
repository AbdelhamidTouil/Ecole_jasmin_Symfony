<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VacancesScolairesController extends AbstractController
{
    /**
     * @Route("/Vacancess-scollaire", name="Vacancess-scollaire")
     */
    public function index(): Response
    {
        return $this->render('vacances_scolaires/index.html.twig', [
            'controller_name' => 'VacancesScolairesController',
        ]);
    }
}

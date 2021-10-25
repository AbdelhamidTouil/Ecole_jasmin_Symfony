<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegelementInterieureController extends AbstractController
{
    /**
     * @Route("/Reglement-Interieur", name="Reglement-Interieur")
     */
    public function index(): Response
    {
        return $this->render('regelement_interieure/index.html.twig', [
            'controller_name' => 'RegelementInterieureController',
        ]);
    }
}

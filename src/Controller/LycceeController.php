<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LycceeController extends AbstractController
{
    /**
     * @Route("/Lyccee", name="Lyccee")
     */
    public function index(): Response
    {
        return $this->render('lyccee/index.html.twig', [
            'controller_name' => 'LycceeController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CollegeController extends AbstractController
{
    /**
     * @Route("/College", name="College")
     */
    public function index(): Response
    {
        return $this->render('college/index.html.twig', [
            'controller_name' => 'CollegeController',
        ]);
    }
}

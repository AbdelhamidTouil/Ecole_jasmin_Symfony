<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DemandeDocumentRepository;
use App\Entity\DemandeDocument;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(DemandeDocumentRepository $DemandeDocumentRepository): Response
    {
        $DemandeDocument = $DemandeDocumentRepository->findAll();
        return $this->render('admin/index.html.twig', [
            "DemandeDocument" => $DemandeDocument,
        ]);
    }
}



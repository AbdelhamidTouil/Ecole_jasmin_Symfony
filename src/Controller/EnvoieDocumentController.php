<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\EnvoieDocument;

class EnvoieDocumentController extends AbstractController
{
    /**
     * @Route("/Envoie-de-document", name="Envoie-de-document")
     */
    public function index(): Response
    {
        return $this->render('envoie_document/index.html.twig', [
            'controller_name' => 'EnvoieDocumentController',
        ]);
    }
    /**
     * @Route("/Envoie-de-document/new", name="Envoie-de-document_create")
     */
    public function new(Request $request, EntityManagerInterface $em)
    {
        if($request->request->count()>0){
            $data = $request->request->all();
            $EnvoieDocument = new EnvoieDocument();
            $EnvoieDocument->setPrenom($data['prenom']);
            $EnvoieDocument->setNom($data['nom']);
            $EnvoieDocument->setClasse($data['classe']);
            $EnvoieDocument->setQuantite($data['quantite']);
            $EnvoieDocument->setDateImpression($data['date_impression']);
            $EnvoieDocument->setPieceJoider($data['piece_joider']);
            $em->persist($EnvoieDocument);
            $em->flush();
        }
        return $this->render('envoie_document/index.html.twig', [
            'controller_name' => 'EnvoieDocumentController',
        ]);
    }
}

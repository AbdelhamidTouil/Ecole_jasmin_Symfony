<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\DemandeDocument;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DemandeDocumentController extends AbstractController
{
    /**
     * @Route("/Demande-de-document", name="Demande-de-document")
     */
    public function index(DemandeDocumentRepository $DemandeDocumentRepository): Response
    {
        $DemandeDocument = $DemandeDocumentRepository->findAll();
        return $this->render('demande_document/index.html.twig', [
            'controller_name' => 'DemandeDocumentController',
        ]);
    }

   /**
     * @Route("/Demande-de-document/new", name="Demande-de-document_create")
     */
    public function new(Request $request, EntityManagerInterface $em)
    {
        if($request->request->count()>0){
            $data = $request->request->all();
            $DemandeDocument = new DemandeDocument();
            $DemandeDocument->setCodeMassar($data['code_massar']);
            $DemandeDocument->setNom($data['nom']);
            $DemandeDocument->setPrenom($data['prenom']);
            $DemandeDocument->setNiveauScolaire($data['niveau_scolaire']);
            $DemandeDocument->setMessage($data['message']);
            $em->persist($DemandeDocument);
            $em->flush();
        }
        return $this->render('demande_document/index.html.twig', [
            'controller_name' => 'DemandeDocumentController',
        ]);
    }
   

    
    
    
}

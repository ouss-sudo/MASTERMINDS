<?php

namespace App\Controller;
use App\Entity\Devis;
use App\Entity\Rapport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\DevisType;
use App\Form\RapportType;
use App\Repository\DevisRepository ; 
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DevisController extends AbstractController
{
   
    #[Route('/afficherdevis', name: 'afficherdevis')]
    public function afficherdevis(): Response
    {

        $deviss = $this->getDoctrine()->getManager()->getRepository(devis::class)->findAll() ; 
        return $this->render('devis/index.html.twig', ['b'=>$deviss]);
    }
    #[Route('/adddevis', name: 'adddevis')]
    public function addevis(Request $request): Response
    {
       $devis= new devis() ;
       $form=$this->createForm(DevisType::class,$devis)  ;
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid())
       {
        $em=$this->getDoctrine()->getManager() ; 
        $em->persist($devis) ; 
        $em->flush();
            return $this->redirectToRoute('app_devis') ; 

       }
            return $this->render('devis/createdevis.html.twig',['f'=>$form->createView()]); 
    }
    #[Route('/supprimerdevis/{id}', name: 'supprimerdevis')]
    public function deleterapport($id)
    {
        $devis = $this->getDoctrine()->getRepository(devis::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($devis);
        $em->flush();
        return $this->redirectToRoute("afficherdevis");
    }
    #[Route('/modifierdevis/{id}', name: 'modifierdevis')]
    public function modifierrapport(Request $request,$id): Response
    {
       $devis= $this->getDoctrine()->getManager()->getRepository(devis::class)->find($id);
       $form=$this->createForm(DevisType::class,$devis)  ;
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid())
       {
        $em=$this->getDoctrine()->getManager() ; 
        $em->flush();
            return $this->redirectToRoute('afficherdevis') ; 

       }
            return $this->render('devis/createdevis.html.twig',['f'=>$form->createView()]); 
    }

}

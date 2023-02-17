<?php

namespace App\Controller;
use App\Entity\Rapport;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RapportType;
use App\Repository\RapportRepository ; 
class RemboursementController extends AbstractController
{
    #[Route('/basefront', name: 'basefront')]
    public function basefront(): Response
    {

        return $this->render('basefront.html.twig');
    }
    #[Route('/afficher', name: 'app_remboursement')]
    public function index(): Response
    {

        $rapports = $this->getDoctrine()->getManager()->getRepository(Rapport::class)->findAll() ; 
        return $this->render('remboursement/index.html.twig', ['b'=>$rapports]);
    }
    #[Route('/indexfront', name: 'indexfront')]
    public function indexfront(): Response
    {

        return $this->render('front/index.html.twig');
    }
    #[Route('/addrapportfront', name: 'addrapportfront')]
    public function addrapportfront(Request $request): Response
    {
       $rapport= new rapport() ;
       $form=$this->createForm(RapportType::class,$rapport)  ;
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid())
       {
        $em=$this->getDoctrine()->getManager() ; 
        $em->persist($rapport) ; 
        $em->flush();
            return $this->redirectToRoute('app_remboursement') ; 

       }
            return $this->render('remboursement/afficherfront.html.twig',['f'=>$form->createView()]); 
    }
    #[Route('/admin', name: 'indexadmin')]
    public function indexadmin(): Response
    {

        return $this->render('admin/index.html.twig');
    }
    #[Route('/addrapport', name: 'addrapport')]
    public function addrapport(Request $request): Response
    {
       $rapport= new rapport() ;
       $form=$this->createForm(RapportType::class,$rapport)  ;
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid())
       {
        $em=$this->getDoctrine()->getManager() ; 
        $em->persist($rapport) ; 
        $em->flush();
            return $this->redirectToRoute('app_remboursement') ; 

       }
            return $this->render('remboursement/createrapport.html.twig',['f'=>$form->createView()]); 
    }
    #[Route('/supprimerrapport/{id}', name: 'supprimerrapport')]
    public function deleterapport($id)
    {
        $rapport = $this->getDoctrine()->getRepository(rapport::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($rapport);
        $em->flush();
        return $this->redirectToRoute("app_remboursement");
    }
    #[Route('/modifierrapport/{id}', name: 'modifierrapport')]
    public function modifierrapport(Request $request,$id): Response
    {
       $rapport= $this->getDoctrine()->getManager()->getRepository(rapport::class)->find($id);
       $form=$this->createForm(RapportType::class,$rapport)  ;
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid())
       {
        $em=$this->getDoctrine()->getManager() ; 
        $em->flush();
            return $this->redirectToRoute('app_remboursement') ; 

       }
            return $this->render('remboursement/updaterapport.html.twig',['f'=>$form->createView()]); 
    }
}

<?php

namespace App\Controller;
use App\Entity\Rapport;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RapportType;
use App\Form\UpdateType;
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
    #[Route('/indexback', name: 'indexback')]
    public function indexfront(): Response
    {

        return $this->render('base.html.twig');
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
         
$file = $form->get('file')->getData();
if($file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('files_directory'), $fileName);
        $rapport->setFile($fileName);
    }
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
         
$file = $form->get('file')->getData();
if($file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('files_directory'), $fileName);
        $rapport->setFile($fileName);
    }
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
    
$entityManager = $this->getDoctrine()->getManager();
$rapport = $entityManager->getRepository(Rapport::class)->find($id);
$originalFile = $rapport->getFile(); // store the original file filename
$form = $this->createForm(UpdateType::class, $rapport);
$form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid())
       {
        $file = $form->get('file')->getData(); // get the uploaded file
        
        if ($file) {
            // generate a unique filename
            $newFilename = md5(uniqid()) . '.' . $file->guessExtension();
    
            // move the file to the files directory
            $file->move(
                $this->getParameter('files_directory'),
                $newFilename
            );
    
            // update the entity with the new filename
            $rapport->setFile($newFilename);
    
            // delete the original file, if it exists
            if ($originalFile) {
                $originalFilePath = $this->getParameter('files_directory') . '/' . $originalFile;
                if (file_exists($originalFilePath)) {
                    unlink($originalFilePath);
                }
            }
        } else {
            // use the original file filename
            $rapport->setFile($originalFile);
        }
    
        $em=$this->getDoctrine()->getManager() ; 
        $em->flush();
            return $this->redirectToRoute('app_remboursement') ; 

       }
            return $this->render('remboursement/updaterapport.html.twig',['f'=>$form->createView()]); 
    }
}

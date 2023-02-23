<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReclamationType;
use App\Form\ReclamationType2;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Cassandra\Date;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
    #[Route('/indexfront', name: 'app_reclamation_indexfront', methods: ['GET'])]
    public function indexfront(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/indexfront.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);// créer un objet formulaire en utilisant la classe ReclamationType qui définit la structure et les comportements du formulaire, et de le lier à un objet $reclamation qui contient les données à afficher et à traiter dans le formulaire.
        $reclamation->setDateReclamation(new \DateTime('now'));
        $form->handleRequest($request);//permet de récupérer les données du formulaire soumises par l'utilisateur et de les lier à l'objet de formulaire correspondant, afin de permettre le traitement ultérieur des données dans le contrôleur Symfony.

        if ($form->isSubmitted() && $form->isValid()) //isSubmitted pour vérifier  si le formulaire a été soumis et isValid si les données soumises sont valides.
        {
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation,ReponseRepository $reponseRepository): Response
    {
        $reponses=$reponseRepository->findByReclamation($reclamation);
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'reponses'=>$reponses,
        ]);
    }

    #[Route('/{id}/showfront', name: 'app_reclamation_showfront', methods: ['GET'])]
    public function showfront(Reclamation $reclamation,ReponseRepository $reponseRepository): Response
    {
        $reponses=$reponseRepository->findByReclamation($reclamation);
        return $this->render('reclamation/showfront.html.twig', [
            'reclamation' => $reclamation,
            'reponses'=>$reponses,
        ]);
    }
    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request,Reclamation $reclamation, ReclamationRepository $reclamationRepository,ReponseRepository $reponseRepository): Response
    {
        $form = $this->createForm(ReclamationType2::class, $reclamation);
        $form->handleRequest($request);
        $reclamation->setDateTraitement(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {

            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reponse_new', ['id'=>$reclamation->getId()]);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }



    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, ReponseRepository $reponseRepository,ReclamationRepository $reclamationRepository): Response
    {    $reponses=$reponseRepository->findByReclamation($reclamation);
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
   foreach ($reponses as $reponse){
       $reponseRepository->remove($reponse,true);
            }
            $reclamationRepository->remove($reclamation, true);
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}

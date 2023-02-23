<?php

namespace App\Controller;

use App\Entity\Constat;
use App\Form\ConstatType;
use App\Form\ConstatType2;
use App\Repository\ConstatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/constat')]
class ConstatController extends AbstractController
{
    #[Route('/', name: 'app_constat_index', methods: ['GET'])]
    public function index(ConstatRepository $constatRepository): Response
    {
        return $this->render('constat/index.html.twig', [
            'constats' => $constatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_constat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ConstatRepository $constatRepository): Response
    {
        $constat = new Constat();
        $form = $this->createForm(ConstatType::class, $constat);// créer un objet formulaire en utilisant la classe ConstatType qui définit la structure et les comportements du formulaire, et de le lier à un objet $constat qui contient les données à afficher et à traiter dans le formulaire.
        $constat->setDateconstat(new \DateTime('now'));
        $constat->setEtat('En attente');
        $form->handleRequest($request);//permet de récupérer les données du formulaire soumises par l'utilisateur et de les lier à l'objet de formulaire correspondant, afin de permettre le traitement ultérieur des données dans le contrôleur Symfony.

        if ($form->isSubmitted() && $form->isValid()) //isSubmitted pour vérifier  si le formulaire a été soumis et isValid si les données soumises sont valides.
        {
            $constatRepository->save($constat, true);

            return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constat/new.html.twig', [
            'constat' => $constat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_constat_show', methods: ['GET'])]
    public function show(Constat $constat): Response
    {
        return $this->render('constat/show.html.twig', [
            'constat' => $constat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_constat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Constat $constat, ConstatRepository $constatRepository): Response
    {
        $form = $this->createForm(ConstatType2::class, $constat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $constatRepository->save($constat, true);

            return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constat/edit.html.twig', [
            'constat' => $constat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_constat_delete', methods: ['POST'])]
    public function delete(Request $request, Constat $constat, ConstatRepository $constatRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$constat->getId(), $request->request->get('_token'))) {
            $constatRepository->remove($constat, true);
        }

        return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
    }
}

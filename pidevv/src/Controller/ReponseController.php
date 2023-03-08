<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReclamationType;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Snipe\BanBuilder\CensorWords;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;

#[Route('/reponse')]
class ReponseController extends AbstractController
{
    #[Route('/new/{id}', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReponseRepository $reponseRepository,Reclamation $reclamation): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);// créer un objet formulaire en utilisant la classe ReclamationType qui définit la structure et les comportements du formulaire, et de le lier à un objet $reclamation qui contient les données à afficher et à traiter dans le formulaire.
        $reponse->setDatereponse(new \DateTime('now'));
        $reponse->setObjet("Retour sur réclamation");
        $reponse->setReclamation($reclamation);
        $form->handleRequest($request);//permet de récupérer les données du formulaire soumises par l'utilisateur et de les lier à l'objet de formulaire correspondant, afin de permettre le traitement ultérieur des données dans le contrôleur Symfony.
        $description="";
        if($reponse->getReclamation()->getEtat()=="Traitée"){
            $description="Cher client votre réclamation est traitée avec succées,Merci pour votre confiance!";
        }
        else   if($reponse->getReclamation()->getEtat()=="En cours de traitement"){
            $description="Cher client votre réclamation est en cours de traitement,Merci pour votre confiance!";
        }
        else  {
            $description="Cher client votre réclamation est en attente,Merci pour votre confiance!";
        }
        if ($form->isSubmitted() && $form->isValid()) //isSubmitted pour vérifier  si le formulaire a été soumis et isValid si les données soumises sont valides.
        {
            $sid = "AC6bcc0a3decff237a4fea743cf6909a88"; // Your Account SID from www.twilio.com/console
            $token = "37ac977c004c1cc9b6c18b3b2d87d4b9"; // Your Auth Token from www.twilio.com/console

            $client = new Client($sid, $token);
            $message = $client->messages->create(
                '+21626843894', // Text this number
                [
                    'from' => '+12762901120', // From a valid Twilio number
                    'body' => $description
                ]
            );
            $censor = new CensorWords;
            $langs = array('fr', 'it', 'en-us', 'en-uk', 'de', 'es', 'tn');
            $badwords = $censor->setDictionary($langs);
            $censor->setReplaceChar("*");
            $string = $censor->censorString($reponse->getDescription());
            $reponse->setDescription($string['clean']);
            $reponseRepository->save($reponse, true);
            return $this->redirectToRoute('app_reclamation_show', ['id'=>$reponse->getReclamation()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit/', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, ReponseRepository $reponseRepository): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponseRepository->save($reponse, true);

            return $this->redirectToRoute('app_reclamation_show', ['id'=>$reponse->getReclamation()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, ReponseRepository $reponseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $reponseRepository->remove($reponse, true);
        }

        return $this->redirectToRoute('app_reclamation_show', ['id'=>$reponse->getReclamation()->getId()], Response::HTTP_SEE_OTHER);
    }
}

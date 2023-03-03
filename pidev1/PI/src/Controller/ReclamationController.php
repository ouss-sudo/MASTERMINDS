<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReclamationType;
use App\Form\ReclamationType2;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository,FlashyNotifier $flashy,PaginatorInterface $paginator,Request $request,NormalizerInterface $Normalizer): Response
    {
        $reclamations=$reclamationRepository->findAll();
        $nb=0;
        foreach ($reclamations as $rec){
            $currentdate=new \DateTime('now');
            $creationdate=$rec->getDateReclamation();
            $diff=date_diff($currentdate,$creationdate);
            $days=intval($diff->format("%d"));
            if($days>3 && $rec->getDateTraitement()==null){
                $nb++;
                $donnees=$reclamationRepository->triedecroissant();
                $reclamations=$paginator->paginate(
                $donnees,// Requête contenant les données à paginer (ici les publications)
                    $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                    3   // Nombre de résultats par page
              );

                if($nb==1)
                {
                    $flashy->warning($nb.' réclamation a depassée 72h depuis sa création,veuillez la traiter le plus tôt possible!', 'http://your-awesome-link.com');
                }
                else {


                    $flashy->warning($nb . ' réclamations ont depassées 72h depuis leur création,veuillez les traiter le plus tôt possible!', 'http://your-awesome-link.com');
                }
            }
        }

        $jsoncontent =$Normalizer->normalize($reclamations,'json',['groups'=>'reclamations:read']);
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
            json_encode($jsoncontent),

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
    public function edit(Request $request,Reclamation $reclamation, ReclamationRepository $reclamationRepository,ReponseRepository $reponseRepository,MailerInterface $mailer): Response
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
    #[Route('/s/stats',name:'app_reclamation_stat')]
    public function stats(ReclamationRepository $repository,NormalizerInterface $Normalizer)
    {
        $reclamations=$repository->countByDate();
        $dates=[];
        $reclamationCount=[];
        foreach($reclamations as $reclamation){
            $dates[] = $reclamation['dateReclam'];
            $reclamationCount[] = $reclamation['count'];
        }
        dump($reclamationCount);
        return $this->render('reclamation/stats.html.twig',[
            'dates' => json_encode($dates),
            'reclamationCount' => json_encode($reclamationCount),

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
    #[Route('/s/search',name:'searchrec')]
    public function searchrecbyobject(Request $request,NormalizerInterface $Normalizer,ReclamationRepository $repository):Response
    {

        $requestString=$request->get('search');
        $reclamations = $repository->findrecByobject($requestString);
        dump($reclamations);
        $jsonContent = $Normalizer->normalize($reclamations, 'json', ['groups' => 'reclamations:read', 'MAX_DEPTH' => '1']);
        $retour = json_encode($jsonContent);
    return new Response($retour);

    }
}

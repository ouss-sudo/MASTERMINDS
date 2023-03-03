<?php

namespace App\Controller;

use App\Entity\Constat;
use App\Form\ConstatType;
use App\Form\ConstatType2;
use App\Repository\ConstatRepository;
use App\Repository\ReclamationRepository;
use App\Repository\VehiculeRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use mPDF;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Twilio\Rest\Client;

#[Route('/constat')]
class ConstatController extends AbstractController
{
    #[Route('/', name: 'app_constat_index', methods: ['GET'])]
    public function index(ConstatRepository $constatRepository,Request $request,PaginatorInterface $paginator): Response
    {    $donnees=$constatRepository->findAll();
        $constats=$paginator->paginate(
            $donnees,// Requête contenant les données à paginer (ici les publications)
            $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4   // Nombre de résultats par page
        );
        foreach ($donnees as $constat){
            if($constat->getEtat()=="En attente"){
                $donnees=$constatRepository->triedecroissant();
                $constats=$paginator->paginate(
                    $donnees,// Requête contenant les données à paginer (ici les publications)
                    $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                    4   // Nombre de résultats par page
                );
            }
        }
        return $this->render('constat/index.html.twig', [
            'constats' => $constats,
        ]);
    }


// ...
   #[Route('/c/stats',name:'app_constat_stats')]
    public function constatsParDateAction(ConstatRepository $repository)
    {
        $constats = $repository->findAll();
        $data = [];
        foreach ($constats as $constat) {
            $date = $constat->getDateconstat()->format('Y-m-d');
            if (!array_key_exists($date, $data)) {
                $data[$date] = 0;
            }
            $data[$date]++;
        }
        // Créer un nouveau LineChart
        $chart = new BarChart();

        // Ajouter les données des constats au chart
        $chart->getData()->setArrayToDataTable([
            ['Date','Nombre de constats'],
            ...array_map(function ($date, $count) {
                return [$date, $count];
            }, array_keys($data), array_values($data)),
        ]);

        // Configurer le chart avec des options
        $chart->getOptions()->setTitle('Nombre des constats par date');
        $chart->getOptions()->getHAxis()->setTitle('Date');
        $chart->getOptions()->getVAxis()->setTitle('Nombre de constats');

        // Rendre la vue contenant le chart
        return $this->render('constat/stats.html.twig', [
            'chart' => $chart
        ]);
    }

    #[Route('/indexfront', name: 'app_constat_indexfront', methods: ['GET'])]
    public function indexfront(ConstatRepository $constatRepository,Request $request,PaginatorInterface $paginator): Response

    {      $donnees=$constatRepository->findAll();
        $constats=$paginator->paginate(
            $donnees,// Requête contenant les données à paginer (ici les publications)
            $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4   // Nombre de résultats par page
        );
        $constatsByLieu = [];
        foreach ($donnees as $constat) {
            $lieu = $constat->getLieu();
            if (isset($constatsByLieu[$lieu])) {
                $constatsByLieu[$lieu] += 1;
            } else {
                $constatsByLieu[$lieu] = 1;
            }
        }
        $markers = [];
        foreach ($donnees as $constat) {

            $marker = [
                'lat' => $constat->getLatitude(),
                'lng' => $constat->getLongitude(),
                'popupContent' => $constat->getLieu(), // La description de l'accident pour afficher dans la fenêtre contextuelle du marqueur.
            ];
            $markers[] = $marker;
        }
        return $this->render('constat/indexfront.html.twig', [
            'constats' => $constats,
            'markers'=>$markers,
            'constatsByLieu'=>$constatsByLieu,
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
        {   if($constat->getLieu()=="Tunis"){
            $constat->setLatitude(36.8008);
            $constat->setLongitude(10.1800);
        }
        else  if($constat->getLieu()=="Sfax"){
            $constat->setLatitude(34.7400);
            $constat->setLongitude(10.7600);
        }
        else  if($constat->getLieu()=="Sousse"){
            $constat->setLatitude(35.8333);
            $constat->setLongitude(10.6333);
        }
        else  if($constat->getLieu()=="Kairouan"){
            $constat->setLatitude(35.6833);
            $constat->setLongitude(10.1000);
        }
        else  if($constat->getLieu()=="Métouia"){
            $constat->setLatitude(33.9600);
            $constat->setLongitude(10.0000);
        }
        else  if($constat->getLieu()=="Kebili"){
            $constat->setLatitude(33.7050);
            $constat->setLongitude(8.9650);
        }
        else  if($constat->getLieu()=="Bizerte"){
            $constat->setLatitude(37.2744);
            $constat->setLongitude(9.8739);
        }
        else  if($constat->getLieu()=="Sidi Bouzid"){
            $constat->setLatitude(35.0381);
            $constat->setLongitude(9.4858);
        }
        else  if($constat->getLieu()=="Gabès"){
            $constat->setLatitude(33.8814);
            $constat->setLongitude(10.0983);
        }
        else  if($constat->getLieu()=="Ariana"){
            $constat->setLatitude(36.8625);
            $constat->setLongitude(10.1956);
        }
        else {//Béja
            $constat->setLatitude(36.7256);
            $constat->setLongitude(9.1817);
        }

            $constatRepository->save($constat, true);
            return $this->redirectToRoute('app_constat_indexfront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constat/new.html.twig', [
            'constat' => $constat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_constat_show', methods: ['GET'])]
    public function show(Constat $constat,VehiculeRepository $vehiculeRepository): Response
    {   $vehicules=$vehiculeRepository->findByConstat($constat);
        return $this->render('constat/show.html.twig', [
            'constat' => $constat,
            'vehicules'=>$vehicules,
        ]);
    }
    #[Route('/{id}/showfront', name: 'app_constat_showfront', methods: ['GET'])]
    public function showfront(Constat $constat,VehiculeRepository $vehiculeRepository): Response
    {   $vehicules=$vehiculeRepository->findByConstat($constat);
        return $this->render('constat/showfront.html.twig', [
            'constat' => $constat,
            'vehicules'=>$vehicules,
        ]);
    }


    #[Route('/{id}/edit', name: 'app_constat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Constat $constat, ConstatRepository $constatRepository,VehiculeRepository $vehiculeRepository): Response
    {
        $form = $this->createForm(ConstatType2::class, $constat);
        $form->handleRequest($request);
        $vehicules=$vehiculeRepository->findByConstat($constat);
        if ($form->isSubmitted() && $form->isValid()) {
            $description="";
            if($constat->getEtat()=="Traitée"){
                $description="Cher client votre constat est traitée avec succées,Merci pour votre confiance!";
            }
            else   if($constat->getEtat()=="En cours de traitement"){
                $description="Cher client votre constat est en cours de traitement,Merci pour votre confiance!";
            }
            else  {
                $description="Cher client votre constat est en attente,Merci pour votre confiance!";
            }
            $sid = "AC2b7e4d6036d32179ccc213891dccaa92"; // Your Account SID from www.twilio.com/console
            $token = "fa7252617f67def03fb0d2f75b2e091f"; // Your Auth Token from www.twilio.com/console

            $client = new Client($sid, $token);
            $message = $client->messages->create(
                '+21696278418', // Text this number
                [
                    'from' => '+13155993015', // From a valid Twilio number
                    'body' => $description
                ]
            );
            $constatRepository->save($constat, true);

            return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constat/edit.html.twig', [
            'constat' => $constat,
            'form' => $form,
            'vehicules'=>$vehicules,
        ]);
    }

    #[Route('/{id}', name: 'app_constat_delete', methods: ['POST'])]
    public function delete(Request $request, Constat $constat, ConstatRepository $constatRepository,VehiculeRepository $vehiculeRepository): Response
    {   $vehicules=$vehiculeRepository->findByConstat($constat);
        if ($this->isCsrfTokenValid('delete'.$constat->getId(), $request->request->get('_token'))) {
            foreach ($vehicules as $vehicule){
                $vehiculeRepository->remove($vehicule,true);
            }
            $constatRepository->remove($constat, true);
        }

        return $this->redirectToRoute('app_constat_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/c/c/search',name:'searchconstat')]
    public function searchrbyobject(Request $request,NormalizerInterface $Normalizer,ConstatRepository $constatRepository):Response
    {

        $requestString=$request->get('search');
        $contats=$constatRepository->findrecBylieu($requestString);
        dump($contats);
        $jsonContent = $Normalizer->normalize($contats, 'json', ['groups' => 'constats:read', 'MAX_DEPTH' => '1']);
        $retour = json_encode($jsonContent);
        return new Response($retour);

    }
    #[Route('/{id}/pdf', name: 'app_constat_pdf')]
    public function pdf(Constat $constat): Response
    {   $vehicules=$constat->getVehicules();
        $html = $this->renderView('constat/pdf.html.twig', [
            'constat' => $constat,
            'vehicules'=>$vehicules,
        ]);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
        $response->setContent($dompdf->output());

        return $response;
    }

}

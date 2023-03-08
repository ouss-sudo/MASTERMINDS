<?php

namespace App\Controller;

use App\Repository\ConstatRepository;
use App\Repository\ReclamationRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StatController extends AbstractController
{
    #[Route('/stat', name: 'app_stat')]
    public function index(): Response
    {
        return $this->render('stat/index.html.twig', [
            'controller_name' => 'StatController',
        ]);
    }
    #[Route('/s/stats',name:'app_stats_stats')]
    public function stats(ConstatRepository $repository,NormalizerInterface $Normalizer,ReclamationRepository $repo)
    {
        $constats = $repository->findAll();
        $data = [];
        foreach ($constats as $constat) {
            $Lieu = $constat->getLieu();
            if (!array_key_exists($Lieu, $data)) {
                $data[$Lieu] = 0;
            }
            $data[$Lieu]++;
        }
        // Créer un nouveau LineChart
        $chart = new BarChart();

        // Ajouter les données des constats au chart
        $chart->getData()->setArrayToDataTable([
            ['Lieu','Nombre des accidents'],
            ...array_map(function ($date, $count) {
                return [$date, $count];
            }, array_keys($data), array_values($data)),
        ]);

        // Configurer le chart avec des options
        $chart->getOptions()->setTitle('Nombre des accidents par lieu');
        $chart->getOptions()->getHAxis()->setTitle('Lieu');
        $chart->getOptions()->getVAxis()->setTitle('Nombre des accidents');

        $reclamations=$repo->countByDate();
        $dates=[];
        $reclamationCount=[];
        foreach($reclamations as $reclamation){
            $dates[] = $reclamation['dateReclam'];
            $reclamationCount[] = $reclamation['count'];
        }
        dump($reclamationCount);
        // Rendre la vue contenant le chart
        return $this->render('stats.html.twig', [
            'chart' => $chart,
            'dates' => json_encode($dates),
            'reclamationCount' => json_encode($reclamationCount),
        ]);
    }
}

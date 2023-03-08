<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FhomeController extends AbstractController
{
    #[Route('/fhome', name: 'app_fhome')]
    public function index(): Response
    {
        return $this->render('fhome/index.html.twig', [
            'controller_name' => 'FhomeController',
        ]);
    }
}

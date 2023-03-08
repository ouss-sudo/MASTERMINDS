<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
#[Route('/home')]
class HomeController extends AbstractController
{


    #[Route('/user', name: 'app_user_index', methods: ['GET'])]
    public function index4(UserRepository $userRepository): Response
    {
        return $this->render('home/show.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
    #[Route('/', name: 'app_home')]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'user',
        ]);
    }
  
    }

?>


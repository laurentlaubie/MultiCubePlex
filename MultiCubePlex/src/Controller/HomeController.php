<?php

namespace App\Controller;

use App\Repository\GamesmodesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="_home")
     */
    public function index(GamesmodesRepository $gamesmodesRepository): Response
    {
        $gamesMode = $gamesmodesRepository->findAll();

        return $this->render('home/index.html.twig', [
            'homeGame' => $gamesMode,
        ]);
    }
}

<?php

namespace App\Controller;

use App\Repository\GamesmodesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GamesController extends AbstractController
{
    /**
     * @Route("/games", name="_games")
     */
    public function index(GamesmodesRepository $gamesmodesRepository): Response
    {
        $games = $gamesmodesRepository->findAll();

        return $this->render('games/index.html.twig', [
            'games' => $games,
        ]);
    }
}

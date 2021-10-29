<?php

namespace App\Controller;

use App\Entity\Gamesmodes;
use App\Repository\GamesmodesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/modedejeux", name="gamesmode_")
     */
class GamesController extends AbstractController
{
    /**
     * Page affichant la liste des modes de jeu
     * 
     * URL : /games
     * Nom de la route : gamesmode_games
     * 
     * @Route("/", name="games")
     */
    public function index(GamesmodesRepository $gamesmodesRepository): Response
    {
        $games = $gamesmodesRepository->findAll();

        return $this->render('games/index.html.twig', [
            'games' => $games,
        ]);
    }


    /**
     * Page affichant le detail d'un mode de jeu
     * 
     * URL : /modedejeu/{id}
     * Nom de la route : gamesmode_show
     * 
     * @Route("/{id}", name="show")
     */

    public function show(Gamesmodes $gamesmodes): Response
    {
        return $this->render('games/show.html.twig', [
            'game' => $gamesmodes,
        ]);

    }



}

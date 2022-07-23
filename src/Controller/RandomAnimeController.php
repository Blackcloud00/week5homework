<?php

namespace App\Controller;
use App\Service\NameGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomAnimeController extends AbstractController
{
    /**
     * @Route("/random/anime", name="app_random_anime")
     */
    public function index(NameGenerator $nameGenerator): Response
    {
        $name = $nameGenerator->nameGenerator();

        return $this->render('random_anime/index.html.twig', [
            'name' => $name,
        
        ]);
    }
}

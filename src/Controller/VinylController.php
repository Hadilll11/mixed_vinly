<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController  extends AbstractController
{
    #[Route("/", name: 'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['id' => '1', 'song' => 'أغنية عن شهر ديسمبر ', 'artist' => 'anatasiya'],
            ['id' => '2', 'song' => 'There\'s Nothing Holding Me Back', 'artist' => 'Shawn Mendes'],
            ['id' => '3', 'song' => 'Tatto', 'artist' => 'Loreen'],
            ['id' => '4', 'song' => 'Mr/Mme', 'artist' => 'Loic Nottet'],
            ['id' => '5', 'song' => 'Wiggle', 'artist' => 'Jason Derulo '],
            ['id' => '6', 'song' => 'Club Party Mix 2023', 'artist' => 'Mashups'],
            ['id' => '7', 'song' => 'voila', 'artist' => 'Barbara Pravi'],
        ];
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }
    #[Route('/browse/{slug}', name: 'app_browse')]

    public function browse($slug = null): Response
    {
        $genre  = $slug ? 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true) : null;

        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}

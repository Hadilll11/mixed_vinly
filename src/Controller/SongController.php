<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name: 'api_songs_get_one')]

    public function getSong(int $id, LoggerInterface $logger): Response
    {

        $songs = [
            1 => ['name' => 'december', 'url' => '/audio/song1.mp3'],
            2 => ['name' => 'There\'s Nothing Holding Me Back', 'url' => '/audio/song2.mp3'],
            3 => ['name' => 'Tattoo', 'url' => '/audio/song3.mp3'],
            4 => ['name' => 'Mr/Mme', 'url' => '/audio/song4.mp3'],
            5 => ['name' => 'Wiggle - Sunset Lover', 'url' => '/audio/song5.mp3'],
            6 => ['name' => 'Club Party Mix 2023', 'url' => '/audio/song6.mp3'],
            7 => ['name' => 'Voilà', 'url' => '/audio/song7.mp3'],

        ];


        return $this->json($songs[$id]);
    }
}

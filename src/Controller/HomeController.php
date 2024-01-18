<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/', name: 'app_')]
class HomeController extends AbstractController
{
    public function __construct(
        private HttpClientInterface $client,
    ) {
    }

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $response = $this->client->request(
            'GET',
            'http://188.166.208.105:5000/chart/4/rides'
        );

        $content = $response->getContent();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
        return $this->render('home/index.html.twig', ['content' => $content]);
    }
}

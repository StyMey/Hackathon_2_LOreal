<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;


#[Route('/score', name: 'app_')]
class ScoreController extends AbstractController
{
    public function __construct(
        private HttpClientInterface $client,
    ) {
    }

    #[Route('/', name: 'score')]
    public function index(): Response
    {

        $response4 = $this->client->request(
            'GET',
            'http://188.166.208.105:5000/chart/4/pigmentation_foncee'
        );

        $content4 = $response4->getContent();

        return $this->render('score/score.html.twig', ['content4' => $content4]);
    }
}

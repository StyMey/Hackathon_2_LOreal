<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/score', name: 'app_')]
class ScoreController extends AbstractController
{
    #[Route('/', name: 'score')]
    public function index(): Response
    {
        return $this->render('score/score.html.twig');
    }
}

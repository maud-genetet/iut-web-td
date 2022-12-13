<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaudController extends AbstractController
{
    #[Route('/accueil', name: 'app_maud')]
    public function index(): Response
    {
        return $this->render('maud/index.html.twig', [
            'controller_name' => 'MaudController',
        ]);
    }

    #[Route('/hello/{name}', name: 'appHello')]
    public function appHello($name): Response
    {
        return $this->render('maud/hello.html.twig', [
            'controller_name' => $name,
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Series;
use App\Form\SeriesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class SeriesController extends AbstractController
{
    #[Route('/', name: 'app_series_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $series = $entityManager
            ->getRepository(Series::class)
            ->findBy([], ['title'=>'ASC'], 15);

        return $this->render('series/index.html.twig', [
            'series' => $series,
        ]);
    }



    #[Route('/{id}', name: 'app_series_show', methods: ['GET'])]
    public function show(Series $series): Response
    {
        return $this->render('series/show.html.twig', [
            'series' => $series,
        ]);
    }

    #[Route('/series/poster/{id}', name: 'app_poster', methods: ['GET'])]
    public function poster(Series $series): Response
    {
        return new Response(stream_get_contents($series -> getPoster()) , Response::HTTP_OK, ['Content-Type' => 'image/png']);
    }



}

<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\FrequentationMuseesDeFrance2018;
use App\Entity\ListeEtLocalisationDesMuseesDeFrance;

class ApiController extends AbstractController
{
    #[Route('/api/frequentation', name: 'app_api_freq')]
    public function listFrequentation(ManagerRegistry $doctrine): JsonResponse
    {
        $frequentation = $doctrine->getRepository(FrequentationMuseesDeFrance2018::class)->findAll();

        return new JsonResponse($frequentation);
    }

    #[Route('/api/liste', name: 'app_api_liste')]
    public function listListe(ManagerRegistry $doctrine): JsonResponse
    {
        $liste = $doctrine->getRepository(ListeEtLocalisationDesMuseesDeFrance::class)->findAll();

        return new JsonResponse($liste);
    }
}

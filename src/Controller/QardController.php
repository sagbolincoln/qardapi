<?php

namespace App\Controller;

use App\Service\QardApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QardController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('qard/index.html.twig');
    }

    #[Route('/clients', name: 'app_clients')]
    public function getClients(QardApiService $qardApiService): Response
    {
        $clients = $qardApiService->getClients();

        return $this->render('qard/clients.html.twig', [
            'clients' => $clients,
        ]);
    }
}

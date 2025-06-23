<?php

namespace App\Controller;

use App\Entity\Company;
use App\Repository\CompanyRepository;
use App\Service\QardApiService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SynController extends AbstractController
{
    #[Route('/sync/{userId}', name: 'sync_user', methods: ['POST'])]
public function syncUser(QardApiService $qardApiService, string $userId): JsonResponse
{
    $syncResult = $qardApiService->syncUser($userId);

    return $this->json([
        'message' => 'Synchronisation demandée, patientez...',
        'sync_result' => $syncResult,
    ]);
}}
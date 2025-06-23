<?php

namespace App\Controller;

use App\Service\QardApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    private QardApiService $qardApiService;

    public function __construct(QardApiService $qardApiService)
    {
        $this->qardApiService = $qardApiService;
    }

    #[Route('/dashboard', name: 'dashboard')]
public function dashboard(): Response
{
    // ✅ 1) Récupère TOUS les users
    $users = $this->qardApiService->getUsers();

$companies = array_filter($users, function ($u) {
    return is_array($u) && ($u['type'] ?? null) === 'LEGAL';
});

    // ✅ 3) Total
    $totalCompanies = count($companies);

    // ✅ 4) Statut juridique & CA
    $statusCounts = [];
    $turnovers = [];

    foreach ($companies as $company) {
        $userId = $company['id'];

        // Profil pour statut
        $profile = $this->qardApiService->getCompanyProfile($userId);
        $status = $profile['legal']['form'] ?? 'Inconnu';
        $statusCounts[$status] = ($statusCounts[$status] ?? 0) + 1;

        // Bilans pour CA
        $financials = $this->qardApiService->getCompanyFinancialStatements($userId);
        $turnover = 0;
        if (count($financials) > 0) {
            $turnover = $financials[0]['turnover'] ?? 0; // Premier bilan
        }
        $turnovers[] = [
            'name' => $profile['name'] ?? 'Inconnu',
            'turnover' => $turnover
        ];
    }

    return $this->render('qard/dashboard.html.twig', [
        'totalCompanies' => $totalCompanies,
        'statusCounts' => $statusCounts,
        'turnovers' => $turnovers,
    ]);
}
}
<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\QardApiService;

class CompanyController extends AbstractController
{
    private QardApiService $qardApiService;

    public function __construct(QardApiService $qardApiService)
    {
        $this->qardApiService = $qardApiService;
    }

    #[Route('/companies', name: 'company_list')]
    public function list(CompanyRepository $companyRepository): Response
    {
        $companies = $companyRepository->findAll();

        return $this->render('qard/list.html.twig', [
            'companies' => $companies,
        ]);
    }

    #[Route('/companies/{id}', name: 'company_detail')]
public function detail(string $id): Response
{
    $details = $this->qardApiService->getCompanyDetails($id);
    #dump($details['officers']); die();

    return $this->render('qard/detail.html.twig', [
        'profile' => $details['profile'],
        'officers' => $details['officers'],
        'financials' => $details['financials'],
    ]);
}

}
#c1547414-cee8-4af7-942b-90c44e96fe0a
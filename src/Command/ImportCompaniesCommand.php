<?php

namespace App\Command;

use App\Entity\Company;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsCommand(
    name: 'app:import-companies',
    description: 'Importe les utilisateurs depuis Qard et les enregistre dans la base de données.'
)]
class ImportCompaniesCommand extends Command
{
    private EntityManagerInterface $em;
    private HttpClientInterface $httpClient;
    private string $qardApiKey;
    private string $qardApiUrl;

    public function __construct(EntityManagerInterface $em, HttpClientInterface $httpClient)
    {
        parent::__construct();
        $this->em = $em;
        $this->httpClient = $httpClient;

        // Récupère depuis l'environnement
        $this->qardApiKey = $_ENV['QARD_API_KEY'] ?? '';
        $this->qardApiUrl = $_ENV['QARD_API_URL'] ?? '';
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Utilise l'URL de config
        $url = $this->qardApiUrl . '/users';

        // Ajoute bien l'en-tête de clé API
        $response = $this->httpClient->request('GET', $url, [
            'headers' => [
                'accept' => 'application/json',
                'X-API-KEY' => $this->qardApiKey,
            ],
        ]);

        $data = $response->toArray();

        foreach ($data['result'] as $item) {
            $company = new Company();
            $company->setName($item['name'] ?? '');
            $company->setSiren($item['siren'] ?? '');
            $company->setCreationDate(new \DateTimeImmutable($item['created_at'] ?? 'now'));
            $company->setStatus($item['type'] ?? '');
            $this->em->persist($company);

            $output->writeln("✅ Import : " . $company->getName());
        }

        $this->em->flush();

        $output->writeln('🎉 Import terminé avec succès !');

        return Command::SUCCESS;
    }
}

<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use App\Service\QardApiService;

class QardControllerTest extends WebTestCase
{
    public function testHomePageIsSuccessful(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Qard Intégration');
    }

    public function testClientsPageIsSuccessfulAndRendersClients(): void
{
    $client = static::createClient();
    $container = static::getContainer();

    $mockQardApiService = $this->createMock(QardApiService::class);
    $mockQardApiService->method('getClients')->willReturn([
        ['name' => 'Client 1', 'email' => 'client1@example.com'],
        ['name' => 'Client 2', 'email' => 'client2@example.com'],
    ]);

    $container->set(QardApiService::class, $mockQardApiService);

    $crawler = $client->request('GET', '/clients');

    $this->assertResponseIsSuccessful();

    // Vérifie le titre
    $this->assertSelectorTextContains('h1', 'Liste des Clients');

    // ✅ Vérifie que la liste contient bien les deux clients, n'importe où dans <ul>
    $this->assertSelectorTextContains('ul', 'Client 1');
    $this->assertSelectorTextContains('ul', 'Client 2');
}


}

<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class QardApiService
{
    private HttpClientInterface $httpClient;
    private string $baseUrl;
    private string $apiKey;

    public function __construct(HttpClientInterface $httpClient, string $baseUrl, string $apiKey)
    {
        $this->httpClient = $httpClient;
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
    }


    public function getClients(): array
    {
        $response = $this->httpClient->request(
            'GET',
            $this->baseUrl . '/clients',
            [
                'headers' => [
                    'X-API-KEY' => $this->apiKey,
                    'Accept' => 'application/json',
                ],
            ]
        );

        $data = $response->toArray();

        if (isset($data['name'])) {
            return [$data];
        }

        return $data;
    }

    public function syncUser(string $userId): array
    {
        $response = $this->httpClient->request(
            'POST',
            $this->baseUrl . "/users/{$userId}/sync",
            [
                'headers' => [
                    'X-API-KEY' => $this->apiKey,
                    'Accept' => 'application/json',
                ],
            ]
        );

        return $response->toArray();
    }

    public function getUsers(): array
    {
        $response = $this->httpClient->request(
            'GET',
            $this->baseUrl . "/users",
            [
                'headers' => [
                    'X-API-KEY' => $this->apiKey,
                    'Accept' => 'application/json',
                ],
            ]
        );

        return $response->toArray();
    }

    public function getCompanyDetails(string $userId): array
{
    $profile = $this->httpClient->request(
        'GET',
        $this->baseUrl . "/users/{$userId}/company-profile",
        [
            'headers' => [
                'X-API-KEY' => $this->apiKey,
                'Accept' => 'application/json',
            ],
        ]
    )->toArray();

    // ✅ Dirigeants : ne garde QUE result
    $officersRaw = $this->httpClient->request(
        'GET',
        $this->baseUrl . "/users/{$userId}/company-officers/all",
        [
            'headers' => [
                'X-API-KEY' => $this->apiKey,
                'Accept' => 'application/json',
            ],
        ]
    )->toArray();
    $officers = $officersRaw['result'] ?? [];

    // ✅ Bilans financiers : même idée si structuré pareil
    $financialsRaw = $this->httpClient->request(
        'GET',
        $this->baseUrl . "/users/{$userId}/financial-statements",
        [
            'headers' => [
                'X-API-KEY' => $this->apiKey,
                'Accept' => 'application/json',
            ],
        ]
    )->toArray();
    $financials = $financialsRaw['result'] ?? [];

    return [
        'profile' => $profile,
        'officers' => $officers,
        'financials' => $financials,
    ];
}

public function getCompanyProfile(string $userId): array
{
    $response = $this->httpClient->request(
        'GET',
        $this->baseUrl . "/users/{$userId}/company-profile",
        [
            'headers' => [
                'X-API-KEY' => $this->apiKey,
                'Accept' => 'application/json',
            ],
        ]
    )->toArray();

    return $response;
}

public function getCompanyFinancialStatements(string $userId): array
{
    $response = $this->httpClient->request(
        'GET',
        $this->baseUrl . "/users/{$userId}/financial-statements",
        [
            'headers' => [
                'X-API-KEY' => $this->apiKey,
                'Accept' => 'application/json',
            ],
        ]
    )->toArray();

    return $response['result'] ?? [];
}


}

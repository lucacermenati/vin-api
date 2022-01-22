<?php
namespace App\Service\Client;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class OverheidClient
{
    private $baseUrl;
    private $apiKey;
    private $httpClient;
    
    public function __construct(HttpClientInterface $httpClient, string $baseUrl, string $apiKey)
    {
        $this->httpClient = $httpClient;
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
    }
    
    public function request($method, $endpoint)
    {
        $response = $this->httpClient->request($method, 
            sprintf("%s/%s", $this->baseUrl, $endpoint), [
                "headers" => [
                    "ovio-api-key" => $this->apiKey
                ]
            ]
        );
        
        return $response->getContent();
    }
}


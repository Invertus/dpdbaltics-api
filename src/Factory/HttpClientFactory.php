<?php

namespace Invertus\dpdBalticsApi\Factory;

use Invertus\dpdBalticsApi\Api\Configuration\ApiConfigInterface;
use GuzzleHttp\Client;

/**
 * Class HttpClientFactory
 */
class HttpClientFactory
{
    /**
     * Config Declaration.
     */
    private $config;

    /**
     * HttpClientFactory constructor.
     * @param ApiConfigInterface $config
     */
    public function __construct(ApiConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * Gets Guzzle HTTP Client.
     *
     * @return Client
     */
    public function getClient()
    {
        $config = [
            'base_url' => $this->config->getUrl(),
            'defaults' => [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'character-encoding' => 'UTF-8'
                ]
            ],
        ];

        return new Client($config);
    }
}

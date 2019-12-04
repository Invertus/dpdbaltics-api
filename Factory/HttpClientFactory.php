<?php

namespace dpdGroupBalticsApi\Factory;

use dpdGroupBalticsApi\Api\Configuration\ApiConfigInterface;
use GuzzleHttp\Client;

/**
 * Class HttpClientFactory
 *
 * @package Invertus\ViaBill\Factory
 */
class HttpClientFactory
{
    /**
     * Config Variable Declaration.
     */
    private $config;

    /**
     * HttpClientFactory constructor.
     *
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
                    'character-encoding' => 'UTF-8',
                ]
            ],
        ];

        return new Client($config);
    }
}

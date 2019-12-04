<?php

namespace dpdGroupBalticsApi\Factory;

use DPDGroupApi\Config\DPDGroupApiConfig;
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
     * @param DPDGroupApiConfig $config
     */
    public function __construct(DPDGroupApiConfig $config)
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

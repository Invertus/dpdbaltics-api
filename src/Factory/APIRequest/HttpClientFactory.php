<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\Configuration\ApiConfigurationInterface;
use GuzzleHttp\Client;
use Invertus\dpdBalticsApi\ApiConfig\ApiConfig;

/**
 * Class HttpClientFactory
 */
class HttpClientFactory
{
    /**
     * Config Declaration.
     */
    private $url;
    private $username;
    private $password;

    /**
     * HttpClientFactory constructor.
     * @param $url
     * @param $username
     * @param $password
     */
    public function __construct($url, $username, $password)
    {
        $this->url = $url;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Gets Guzzle HTTP Client.
     *
     * @return Client
     */
    public function getClient()
    {
        $config = [
            'base_url' => $this->url,
            'defaults' => [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'character-encoding' => 'UTF-8',
                ],
                'query' => [
                    'username' => $this->username,
                    'password' => $this->password
                ]
            ],
        ];

        return new Client($config);
    }
}

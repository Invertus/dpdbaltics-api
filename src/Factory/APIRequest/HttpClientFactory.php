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
    private $pluginVersion;
    private $eShopVersion;

    /**
     * HttpClientFactory constructor.
     * @param ApiConfigurationInterface $config
     * @param $username
     * @param $password
     * @param $pluginVersion
     * @param $eShopVersion
     */
    public function __construct($url, $username, $password, $pluginVersion, $eShopVersion)
    {
        $this->url = $url;
        $this->username = $username;
        $this->password = $password;
        $this->pluginVersion = $pluginVersion;
        $this->eShopVersion = $eShopVersion;
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
                    'PluginVersion' => $this->pluginVersion,
                    'PluginLibVersion' => ApiConfig::VERSION,
                    'EshopVersion' => $this->eShopVersion,
                    'username' => $this->username,
                    'password' => $this->password
                ]
            ],
        ];

        return new Client($config);
    }
}

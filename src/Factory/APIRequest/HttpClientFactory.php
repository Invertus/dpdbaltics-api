<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

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
    private $username;
    private $password;
    private $pluginVersion;
    private $eShopVersion;

    /**
     * HttpClientFactory constructor.
     * @param ApiConfigInterface $config
     * @param $username
     * @param $password
     * @param $pluginVersion
     * @param $eShopVersion
     */
    public function __construct(ApiConfigInterface $config, $username, $password, $pluginVersion, $eShopVersion)
    {
        $this->config = $config;
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
            'base_url' => $this->config->getUrl(),
            'defaults' => [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'character-encoding' => 'UTF-8',
                ],
                'query' => [
                    'PluginVersion' => $this->pluginVersion,
                    'EshopVersion' => $this->eShopVersion,
                    'username' => $this->username,
                    'password' => $this->password
                ]
            ],
        ];

        return new Client($config);
    }
}

<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\ParcelShopSearch;
use Psr\Log\LoggerInterface;

class ParcelShopSearchFactory
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $pluginVersion;

    /**
     * @var string
     */
    private $eShopVersion;

    public function __construct(LoggerInterface $logger, $username, $password, $pluginVersion, $eShopVersion)
    {
        $this->logger = $logger;
        $this->username = $username;
        $this->password = $password;
        $this->pluginVersion = $pluginVersion;
        $this->eShopVersion = $eShopVersion;
    }

    /**
     * @return ParcelShopSearch
     */
    public function makeParcelShopSearch()
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory(
            $apiConfig,
            $this->username,
            $this->password,
            $this->pluginVersion,
            $this->eShopVersion
        );
        $apiRequest = new ApiRequest($httpClientFactory, $this->logger);

        return new ParcelShopSearch($apiRequest);
    }
}

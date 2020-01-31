<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\ParcelShopSearch;
use Psr\Log\LoggerInterface;

class ParcelShopSearchFactory
{
    /**
     * @return ParcelShopSearch
     */
    public static function makeParcelShopSearch(LoggerInterface $logger)
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory($apiConfig);
        $apiRequest = new ApiRequest($httpClientFactory, $logger);

        return new ParcelShopSearch($apiRequest);
    }
}

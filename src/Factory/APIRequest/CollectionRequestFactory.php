<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\CollectionRequest;
use Psr\Log\LoggerInterface;

class CollectionRequestFactory
{
    /**
     * @return CollectionRequest
     */
    public static function makeCollectionRequest(LoggerInterface $logger)
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory($apiConfig);
        $apiRequest = new ApiRequest($httpClientFactory, $logger);

        return new CollectionRequest($apiRequest);
    }
}

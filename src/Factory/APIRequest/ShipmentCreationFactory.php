<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\ShipmentCreation;
use Psr\Log\LoggerInterface;

class ShipmentCreationFactory
{
    /**
     *
     * @return ShipmentCreation
     */
    public static function makeShipmentCreation(LoggerInterface $logger)
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory($apiConfig);
        $apiRequest = new ApiRequest($httpClientFactory, $logger);

        return new ShipmentCreation($apiRequest);
    }
}

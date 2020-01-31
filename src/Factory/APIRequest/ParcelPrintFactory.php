<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\ParcelPrint;
use Invertus\dpdBalticsApi\Api\Request\ShipmentCreation;
use Psr\Log\LoggerInterface;

class ParcelPrintFactory
{
    /**
     * @return ParcelPrint
     */
    public static function makeParcelPrint(LoggerInterface $logger)
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory($apiConfig);
        $apiRequest = new ApiRequest($httpClientFactory, $logger);

        return new ParcelPrint($apiRequest);
    }
}

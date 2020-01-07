<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\ParcelPrint;
use Invertus\dpdBalticsApi\Api\Request\ShipmentCreation;

class ParcelPrintFactory
{
    /**
     * @return ParcelPrint
     */
    public static function makeParcelPrint()
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory($apiConfig);
        $apiRequest = new ApiRequest($httpClientFactory);

        return new ParcelPrint($apiRequest);
    }
}

<?php

namespace Invertus\dpdBalticsApi\Factory;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\ParcelShopSearch;
use Invertus\dpdBalticsApi\Api\Request\ShipmentCreation;

class ShipmentCreationFactory
{
    /**
     *
     *
     * @return ShipmentCreation
     */
    public static function makeShipmentCreation()
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory($apiConfig);
        $apiRequest = new ApiRequest($httpClientFactory);

        return new ShipmentCreation($apiRequest);
    }
}

<?php
namespace Invertus\dpdBalticsApi\Factory;

use Invertus\dpdBalticsApi\Factory\HttpClientFactory;
use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\ParcelShopSearch;

class ParcelShopSearchFactory
{
    public static function createParcelShopSearch()
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory($apiConfig);
        $apiRequest = new ApiRequest($httpClientFactory);
        return new ParcelShopSearch($apiRequest);
    }
}

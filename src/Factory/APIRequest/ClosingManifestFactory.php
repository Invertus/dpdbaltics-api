<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\ClosingManifest;
use Psr\Log\LoggerInterface;

class ClosingManifestFactory
{

    /**
     * @return ClosingManifest
     */
    public static function makeClosingManifest(LoggerInterface $logger)
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory($apiConfig);
        $apiRequest = new ApiRequest($httpClientFactory, $logger);

        return new ClosingManifest($apiRequest);
    }
}

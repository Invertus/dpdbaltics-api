<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfiguration;
use Invertus\dpdBalticsApi\Api\Request\ClosingManifest;
use Invertus\dpdBalticsApi\Factory\APIParamsFactoryInterface;
use Psr\Log\LoggerInterface;

class ClosingManifestFactory
{

    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var APIParamsFactoryInterface
     */
    private $APIParamsFactory;


    public function __construct(
        LoggerInterface $logger,
        APIParamsFactoryInterface $APIParamsFactory
    )
    {
        $this->logger = $logger;
        $this->APIParamsFactory = $APIParamsFactory;
    }

    /**
     * @return ClosingManifest
     */
    public function makeClosingManifest()
    {
        $httpClientFactory = new ApiClient(
            $this->APIParamsFactory->getUrl(),
            $this->APIParamsFactory->getUsername(),
            $this->APIParamsFactory->getPassword()
        );
        $apiRequest = new ApiRequest(
            $httpClientFactory,
            $this->logger,
            $this->APIParamsFactory->getModuleVersion(),
            $this->APIParamsFactory->getPSVersion()
        );

        return new ClosingManifest($apiRequest);
    }
}

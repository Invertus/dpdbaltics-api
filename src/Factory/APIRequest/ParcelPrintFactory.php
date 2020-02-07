<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfig;
use Invertus\dpdBalticsApi\Api\Request\ParcelPrint;
use Invertus\dpdBalticsApi\Api\Request\ShipmentCreation;
use Invertus\dpdBalticsApi\Factory\APIParamsFactoryInterface;
use Psr\Log\LoggerInterface;

class ParcelPrintFactory
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var APIParamsFactoryInterface
     */
    private $APIParamsFactory;

    public function __construct(LoggerInterface $logger, APIParamsFactoryInterface $APIParamsFactory)
    {
        $this->logger = $logger;
        $this->APIParamsFactory = $APIParamsFactory;
    }

    /**
     * @return ParcelPrint
     */
    public function makeParcelPrint()
    {
        $apiConfig = new ApiConfig();
        $httpClientFactory = new HttpClientFactory(
            $apiConfig,
            $this->APIParamsFactory->getUsername(),
            $this->APIParamsFactory->getPassword(),
            $this->APIParamsFactory->getModuleVersion(),
            $this->APIParamsFactory->getPSVersion()
        );
        $apiRequest = new ApiRequest($httpClientFactory, $this->logger);

        return new ParcelPrint($apiRequest);
    }
}

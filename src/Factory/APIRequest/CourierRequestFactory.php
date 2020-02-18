<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfiguration;
use Invertus\dpdBalticsApi\Api\Request\CourierRequest;
use Invertus\dpdBalticsApi\Api\Request\ShipmentCreation;
use Invertus\dpdBalticsApi\Factory\APIParamsFactoryInterface;
use Psr\Log\LoggerInterface;

class CourierRequestFactory
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
     * @return CourierRequest
     */
    public function makeCourierRequest()
    {
        $httpClientFactory = new HttpClientFactory(
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

        return new CourierRequest($apiRequest);
    }
}

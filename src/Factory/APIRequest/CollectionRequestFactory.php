<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfiguration;
use Invertus\dpdBalticsApi\Api\Request\CollectionRequest;
use Invertus\dpdBalticsApi\Factory\APIParamsFactoryInterface;
use Psr\Log\LoggerInterface;

class CollectionRequestFactory
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
     * @return CollectionRequest
     */
    public function makeCollectionRequest()
    {
        $httpClientFactory = new HttpClientFactory(
            $this->APIParamsFactory->getUrl(),
            $this->APIParamsFactory->getUsername(),
            $this->APIParamsFactory->getPassword(),
            $this->APIParamsFactory->getModuleVersion(),
            $this->APIParamsFactory->getPSVersion()
        );
        $apiRequest = new ApiRequest($httpClientFactory, $this->logger);

        return new CollectionRequest($apiRequest);
    }
}

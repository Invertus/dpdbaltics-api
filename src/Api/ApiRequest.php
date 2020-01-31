<?php

namespace Invertus\dpdBalticsApi\Api;

use Exception;
use Invertus\dpdBalticsApi\Factory\APIRequest\HttpClientFactory;
use Psr\Log\LoggerInterface;

class ApiRequest
{
    /**
     * @var HttpClientFactory
     */
    private $clientFactory;
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * ApiRequest constructor.
     * @param HttpClientFactory $clientFactory
     */
    public function __construct(HttpClientFactory $clientFactory, LoggerInterface $logger = null)
    {
        $this->clientFactory = $clientFactory;
        $this->logger = $logger;
    }

    /**
     * API Request Post Method.
     *
     * @param string $url
     * @param array $params
     * @return array
     * @throws \Exception
     */
    public function post($url, $params = [])
    {
        $response = null;

        try {
            $response = $this->clientFactory->getClient()->post($url, $params);

            return $response ?: [];
        } catch (Exception $exception) {
            $this->logger->error('Oh no!', array('exception' => $exception));
            throw $exception;
        }
    }

    /**
     * API Request Get Method.
     *
     * @param $url
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function get($url, $params = [])
    {
        $response = null;

        try {
            $response = $this->clientFactory->getClient()->get($url, $params);

            return $response ?: [];
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}

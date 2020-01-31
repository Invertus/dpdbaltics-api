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
    public function __construct(HttpClientFactory $clientFactory, LoggerInterface $logger)
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

            $responseContent = $response->getBody()->getContents();
            $content = json_decode($responseContent);
            if (isset($content->status) && $content->status === 'err') {
                $this->logger->error($content->errLog,
                    [
                        'request' => $response->getEffectiveUrl(),
                        'status' => 'error',
                    ]
                );
            }
            return $responseContent ?: [];
        } catch (Exception $exception) {
            $this->logger->error($exception->getMessage(),
                [
                    'request' => '',
                    'status' => 'error',
                    ]
            );
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

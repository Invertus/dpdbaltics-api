<?php

namespace Invertus\dpdBalticsApi\Api;

use Exception;
use Invertus\dpdBalticsApi\ApiConfig\ApiConfig;
use Invertus\dpdBalticsApi\Exception\DPDBalticsAPIException;
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
    private $pluginVersion;
    private $eShopVersion;

    /**
     * ApiRequest constructor.
     * @param HttpClientFactory $clientFactory
     */
    public function __construct(HttpClientFactory $clientFactory, LoggerInterface $logger, $pluginVersion, $eShopVersion)
    {
        $this->clientFactory = $clientFactory;
        $this->logger = $logger;
        $this->pluginVersion = $pluginVersion;
        $this->eShopVersion = $eShopVersion;
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
            $params['query']['PluginVersion'] = $this->pluginVersion;
            $params['query']['PluginLibVersion'] = ApiConfig::VERSION;
            $params['query']['EshopVersion'] = $this->eShopVersion;

            $response = $this->clientFactory->getClient()->post($url, $params);

            $responseContent = $response->getBody()->getContents();
            $content = json_decode($responseContent);
            if (isset($content->status) && $content->status === 'err') {
                $this->logger->error(
                    $content->errlog,
                    [
                        'request' => $response->getEffectiveUrl(),
                    ]
                );
            }
            return $responseContent ?: [];
        } catch (Exception $exception) {
            $this->logger->critical(
                $exception->getMessage(),
                [
                    'request' => $url,
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

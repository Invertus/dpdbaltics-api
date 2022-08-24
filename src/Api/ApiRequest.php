<?php

namespace Invertus\dpdBalticsApi\Api;

use Exception;
use Invertus\dpdBalticsApi\Api\Helper\ApiHelper;
use Invertus\dpdBalticsApi\ApiConfig\ApiConfig;
use Invertus\dpdBalticsApi\Exception\DPDBalticsAPIException;
use Invertus\dpdBalticsApi\Factory\APIRequest\ApiClient;
use Psr\Log\LoggerInterface;
use Unirest\Request;

class ApiRequest
{
    /**
     * @var ApiClient
     */
    private $apiClient;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var string
     */
    private $pluginVersion;

    /**
     * @var string
     */
    private $eShopVersion;

    /**
     * ApiRequest constructor.
     * @param ApiClient $apiClient
     * @param LoggerInterface $logger
     * @param $pluginVersion
     * @param $eShopVersion
     */
    public function __construct(ApiClient $apiClient, LoggerInterface $logger, $pluginVersion, $eShopVersion)
    {
        $this->apiClient = $apiClient;
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

        $queryUrl = ApiHelper::cleanUrl($this->apiClient->getUrl() . $url);
        $query = array_merge(
            $params['query'], [
            'username' => $this->apiClient->getUsername(),
            'password' => $this->apiClient->getPassword(),
        ]);
        $queryUrl = $queryUrl . '?' . http_build_query($query);

        $headers = [
            'PluginVersion' => $this->pluginVersion,
            'PluginLibVersion' => ApiConfig::VERSION,
            'EshopVersion' => $this->eShopVersion,
            'Content-Type' => 'application/x-www-form-urlencoded',
            'character-encoding' => 'UTF-8',
        ];

        // Set request timeout
        Request::timeout($this->apiClient->getTimeout());

//            $httpRequest = new HttpRequest(HttpMethod::POST, $headers, $queryUrl, $encodedBody);
        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($queryUrl, $headers);
        } catch (\Unirest\Exception $exception) {
            throw new ApiException(sprintf('Api exception. Exception message: (%s). Exception code: (%s)', $exception->getMessage(), (int) $exception->getCode()));
        }
        $httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $httpContext = new HttpContext($httpRequest, $httpResponse);

        if (!$this->apiClient->isValidResponse($httpResponse)) {
//                $this->logger->critical(
//                    $exception->getMessage(),
//                    [
//                        'request' => $url,
//                    ]
//                );
            throw new Exception('todo');
        }

        //NOTE adding wrapping around response because managing multiple identical Response classes is causing errors.
        if (!isset($response->body->{self::WRAP_SINGULAR_KEY})) {
            $body = new \stdClass();
            $body->{self::WRAP_SINGULAR_KEY} = $response->body;

            $response->body = $body;
        }

        $mapper = $this->getJsonMapper();

        $deserializedResponse = $mapper->mapClass($response->body, AuthorizeCardResponse::class);

        return ApiResponse::createFromContext($deserializedResponse, $httpContext);

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
            $response = $this->apiClient->getClient()->get($url, $params);

            return $response ?: [];
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}

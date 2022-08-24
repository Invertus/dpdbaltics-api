<?php

namespace Invertus\dpdBalticsApi\Factory\APIRequest;

use Bolt\Module\Api\Environment;
use Bolt\Module\Api\Http\HttpResponse;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfigurationInterface;
use GuzzleHttp\Client;
use Invertus\dpdBalticsApi\ApiConfig\ApiConfig;

/**
 * Class HttpClientFactory
 */
class ApiClient
{
    /**
     * Config Declaration.
     */
    private $url;
    private $username;
    private $password;

    /**
     * HttpClientFactory constructor.
     * @param $url
     * @param $username
     * @param $password
     */
    public function __construct($url, $username, $password)
    {
        $this->url = $url;
        $this->username = $username;
        $this->password = $password;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getTimeout()
    {
        return 20;
    }

    public function isValidResponse(HttpResponse $response)
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}

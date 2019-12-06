<?php

namespace Invertus\dpdBalticsApi\Api\Request;

use Exception;
use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\ApiConfig\DPDGroupApiConfig;

class ParcelShopSearch
{

    /**
     * @var ApiRequest
     */
    private $apiRequest;

    public function __construct(ApiRequest $apiRequest)
    {
        $this->apiRequest = $apiRequest;
    }

    /**
     * @param $request
     * @return mixed
     * @throws Exception
     */
    public function parcelShopSearch($request)
    {
        $response = $this->apiRequest->post(
            DPDGroupApiConfig::SERVICE_QUERY,
            [
                'query' => $request,
                'verify' => false,
            ]
        );
        $responseBody = json_decode($response->getBody()->getContents(), false);

        return $responseBody;
    }
}

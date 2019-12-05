<?php

namespace Invertus\dpdBalticsApi\Api\Request;

use Exception;
use Invertus\dpdBalticsApi\Api\ApiRequest;

class ParcelShopSearch
{

    const SERVICE_QUERY = '/ws-mapper-rest/parcelShopSearch_';

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
            self::SERVICE_QUERY,
            [
                'query' => $request,
                'verify' => false,
            ]
        );
        $responseBody = json_decode($response->getBody()->getContents(), false);

        return $responseBody;
    }
}

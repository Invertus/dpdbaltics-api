<?php


use dpdGroupBalticsApi\Api\Request\ApiRequest;

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

    public function parcelShopSearch($request)
    {
        $response = $this->apiRequest->post(
            self::SERVICE_QUERY,
            [
                'body' => json_encode($request),
            ]
        );

        return $response;
    }
}

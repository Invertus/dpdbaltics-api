<?php

namespace Invertus\dpdBalticsApi\Api\Request;

use Exception;
use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\DTO\Request\ParcelShopSearchRequest;
use Invertus\dpdBalticsApi\Api\DTO\Response\ParcelShopSearchResponse;
use Invertus\dpdBalticsApi\ApiConfig\DPDGroupApiConfig;
use Invertus\dpdBalticsApi\Factory\SerializerFactory;

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
    public function parcelShopSearch(ParcelShopSearchRequest $request)
    {
        $serializer = new SerializerFactory();
        $response = $this->apiRequest->post(
            DPDGroupApiConfig::SQ_PARCEL_SHOP_SEARCH,
            [
                'query' => $request->jsonSerialize(),
                'verify' => false,
            ]
        );
        $responseBody = $serializer->deserialize($response->getBody()->getContents(), ParcelShopSearchResponse::class);

        return $responseBody;
    }
}

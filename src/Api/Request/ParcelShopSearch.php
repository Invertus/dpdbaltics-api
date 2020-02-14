<?php

namespace Invertus\dpdBalticsApi\Api\Request;

use Exception;
use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\DTO\Request\ParcelShopSearchRequest;
use Invertus\dpdBalticsApi\Api\DTO\Response\ParcelShopSearchResponse;
use Invertus\dpdBalticsApi\ApiConfig\ApiConfig;
use Invertus\dpdBalticsApi\Exception\DPDBalticsAPIException;
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

        try {
            $response = $this->apiRequest->post(
                ApiConfig::SQ_PARCEL_SHOP_SEARCH,
                [
                    'query' => $request->jsonSerialize(),
                    'verify' => false,
                ]
            );
        } catch (Exception $e) {
            throw new DPDBalticsAPIException($e->getMessage(), DPDBalticsAPIException::PARCEL_SHOP_SEARCH);
        }

        $responseBody = $serializer->deserialize($response, ParcelShopSearchResponse::class);

        return $responseBody;
    }
}

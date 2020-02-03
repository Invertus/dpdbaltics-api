<?php

namespace Invertus\dpdBalticsApi\Api\Request;

use Exception;
use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\DTO\Request\CollectionRequestRequest;
use Invertus\dpdBalticsApi\ApiConfig\DPDGroupApiConfig;

class CollectionRequest
{

    /**
     * @var ApiRequest
     */
    private $apiRequest;

    /**
     * ParcelPrint constructor.
     * @param ApiRequest $apiRequest
     */
    public function __construct(ApiRequest $apiRequest)
    {
        $this->apiRequest = $apiRequest;
    }

    /**
     * @param $request
     * @return mixed
     * @throws Exception
     */
    public function collectionRequest(CollectionRequestRequest $request)
    {
        $response = $this->apiRequest->post(
            DPDGroupApiConfig::SQ_COLLECTION_REQUEST,
            [
                'query' => $request->jsonSerialize(),
                'verify' => false,
            ]
        );

        return $response;
    }
}

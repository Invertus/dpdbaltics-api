<?php

namespace Invertus\dpdBalticsApi\Api\Request;

use Exception;
use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\DTO\Request\CollectionRequestRequest;
use Invertus\dpdBalticsApi\Api\DTO\Response\CollectionRequestResponse;
use Invertus\dpdBalticsApi\ApiConfig\ApiConfig;
use Invertus\dpdBalticsApi\Exception\DPDBalticsAPIException;
use Invertus\dpdBalticsApi\Factory\SerializerFactory;

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
        try {
            $response = $this->apiRequest->post(
                ApiConfig::SQ_COLLECTION_REQUEST,
                [
                    'query' => $request->jsonSerialize(),
                    'verify' => false,
                ]
            );
        } catch (Exception $e) {
            throw new DPDBalticsAPIException(
                'An error occurred when creating collection request',
                DPDBalticsAPIException::COLLECTION_REQUEST,
                $e
            );
        }


        return $response;
    }
}

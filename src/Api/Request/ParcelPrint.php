<?php

namespace Invertus\dpdBalticsApi\Api\Request;

use Exception;
use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\DTO\Request\ParcelPrintRequest;
use Invertus\dpdBalticsApi\Api\DTO\Response\ParcelPrintResponse;
use Invertus\dpdBalticsApi\ApiConfig\ApiConfig;
use Invertus\dpdBalticsApi\Exception\DPDBalticsAPIException;
use Invertus\dpdBalticsApi\Factory\SerializerFactory;

class ParcelPrint
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
    public function printParcel(ParcelPrintRequest $request)
    {
        $serializer = new SerializerFactory();

        try {
            $response = $this->apiRequest->post(
                ApiConfig::SQ_PARCEL_PRINT,
                [
                    'query' => $request->jsonSerialize(),
                    'verify' => false,
                ]
            );
        } catch (Exception $e) {
            throw new DPDBalticsAPIException(
                'An error occurred trying to print parcel label',
                DPDBalticsAPIException::PARCEL_PRINT,
                $e
            );
        }

        $responseBody = $serializer->deserialize($response, ParcelPrintResponse::class);

        if ($responseBody->getStatus() === null) {
            $responseBody->setStatus('ok');
            $responseBody->setErrLog('');
            $responseBody->setPdf($response);
        }

        return $responseBody;
    }
}

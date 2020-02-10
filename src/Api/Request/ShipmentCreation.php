<?php


namespace Invertus\dpdBalticsApi\Api\Request;


use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\DTO\Request\ShipmentCreationRequest;
use Invertus\dpdBalticsApi\Api\DTO\Response\ShipmentCreationResponse;
use Invertus\dpdBalticsApi\ApiConfig\ApiConfig;
use Invertus\dpdBalticsApi\Factory\SerializerFactory;

class ShipmentCreation
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
     * @param ShipmentCreationRequest $request
     * @return array|object
     * @throws \Exception
     */
    public function createShipment(ShipmentCreationRequest $request)
    {
        $serializer = new SerializerFactory();
        $response = $this->apiRequest->post(
            ApiConfig::SQ_SHIPMENT_CREATION,
            [
                'query' => $request->jsonSerialize(),
                'verify' => false,
            ]
        );
        $responseBody = $serializer->deserialize($response, ShipmentCreationResponse::class);

        return $responseBody;
    }
}
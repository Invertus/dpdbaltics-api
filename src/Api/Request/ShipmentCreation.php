<?php


namespace Invertus\dpdBalticsApi\Api\Request;


use Invertus\dpdBalticsApi\Api\ApiRequest;
use Invertus\dpdBalticsApi\Api\DTO\Request\ShipmentCreationRequest;
use Invertus\dpdBalticsApi\Api\DTO\Response\ShipmentCreationResponse;
use Invertus\dpdBalticsApi\ApiConfig\DPDGroupApiConfig;
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
     * @param $request
     * @return mixed
     * @throws Exception
     * @throws \Exception
     */
    public function createShipment(ShipmentCreationRequest $request)
    {
        $serializer = new SerializerFactory();
        $response = $this->apiRequest->post(
            DPDGroupApiConfig::SQ_SHIPMENT_CREATION,
            [
                'query' => $request->jsonSerialize(),
                'verify' => false,
            ]
        );
        $responseBody = $serializer->deserialize($response->getBody()->getContents(), ShipmentCreationResponse::class);

        return $responseBody;
    }
}
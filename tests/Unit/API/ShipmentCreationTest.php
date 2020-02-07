<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\ShipmentCreationRequest;
use Invertus\dpdBalticsApi\Factory\APIRequest\ShipmentCreationFactory;
use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

class ShipmentCreationTest extends TestCase
{

    public function testShipmentCreation()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');
        $requestBody = $this->createShipmentCreationRequest();
        $shipmentCreatorFactory = new ShipmentCreationFactory(
            new NullLogger(),
            $username,
            $password,
            '1.0.0',
            _PS_VERSION_
        );
        $shipmentCreator = $shipmentCreatorFactory->makeShipmentCreation();
        $responseBody = $shipmentCreator->createShipment($requestBody);
        $this->assertEquals($responseBody->getStatus(), 'ok');
    }

    private function createShipmentCreationRequest()
    {
        $shipmentCreationRequest = new ShipmentCreationRequest(
            'testName',
            'testStreet',
            'testCity',
            'LV',
            '3003',
            1,
            'D-B2C',
            '123456',
            1
        );

        return $shipmentCreationRequest;
    }
}

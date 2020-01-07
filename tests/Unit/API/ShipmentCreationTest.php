<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\ParcelShopSearchRequest;
use Invertus\dpdBalticsApi\Api\DTO\Request\ShipmentCreationRequest;
use Invertus\dpdBalticsApi\Factory\ParcelShopSearchFactory;
use Invertus\dpdBalticsApi\Factory\ShipmentCreationFactory;
use PHPUnit\Framework\TestCase;

class ShipmentCreationTest extends TestCase
{

    public function testShipmentCreation()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');
        $requestBody = $this->createShipmentCreationRequest($username, $password);
        $shipmentCreator = ShipmentCreationFactory::makeShipmentCreation();
        $responseBody = $shipmentCreator->createShipment($requestBody);
        $this->assertEquals($responseBody->getStatus(), 'ok');
    }

    private function createShipmentCreationRequest($username, $password)
    {
        $shipmentCreationRequest = new ShipmentCreationRequest(
            $username,
            $password,
            'testName',
            'testStreet',
            'testCity',
            'LV',
            '3003',
            1,
            'D-B2C',
            '123456',
            1,
            6
        );

        return $shipmentCreationRequest;
    }
}

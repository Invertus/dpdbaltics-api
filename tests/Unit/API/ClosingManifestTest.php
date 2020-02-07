<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\ClosingManifestRequest;
use Invertus\dpdBalticsApi\Api\DTO\Request\ShipmentCreationRequest;
use Invertus\dpdBalticsApi\Factory\APIRequest\ClosingManifestFactory;
use Invertus\dpdBalticsApi\Factory\APIRequest\ShipmentCreationFactory;
use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

class ClosingManifestTest extends TestCase
{

    public function testShipmentCreation()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');

        $requestBody = $this->createShipmentCreationRequest();
        $shipmentCreationFactory = new ShipmentCreationFactory(
            new NullLogger(),
            $username,
            $password,
            '1.0.0',
            _PS_VERSION_
        );
        $shipmentCreator = $shipmentCreationFactory->makeShipmentCreation();
        $shipmentCreator->createShipment($requestBody);

        $requestBody = $this->createClosingManifestRequest();
        $closingManifestFactory = new ClosingManifestFactory(
            new NullLogger(),
            $username,
            $password,
            '1.0.0',
            _PS_VERSION_
        );
        $closingManifest = $closingManifestFactory->makeClosingManifest();
//        $responseBody = $closingManifest->closeManifest($requestBody);
//        $this->assertEquals($responseBody->getStatus(), 'ok');
    }

    private function createClosingManifestRequest()
    {
        $parcelPrintRequest = new ClosingManifestRequest(
            date('Y-m-d')
        );

        return $parcelPrintRequest;
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

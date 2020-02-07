<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\ParcelPrintRequest;
use Invertus\dpdBalticsApi\Factory\APIRequest\ParcelPrintFactory;
use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

class ParcelPrintTest extends TestCase
{

    public function testShipmentCreation()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');
        $requestBody = $this->createParcelPrintRequest();
        $parcelPrinterFactory = new ParcelPrintFactory(
            new NullLogger(),
            $username,
            $password,
            '1.0.0',
            _PS_VERSION_
        );
        $parcelPrinter = $parcelPrinterFactory->makeParcelPrint();
        $responseBody = $parcelPrinter->printParcel($requestBody);
        $this->assertEquals($responseBody->getStatus(), 'ok');
    }

    private function createParcelPrintRequest()
    {
        $parcelPrintRequest = new ParcelPrintRequest(
            '05757922204560'
        );

        return $parcelPrintRequest;
    }
}

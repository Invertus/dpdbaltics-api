<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\ParcelPrintRequest;
use Invertus\dpdBalticsApi\Factory\APIRequest\ParcelPrintFactory;
use PHPUnit\Framework\TestCase;

class ParcelPrintTest extends TestCase
{

    public function testShipmentCreation()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');
        $requestBody = $this->createParcelPrintRequest($username, $password);
        $parcelPrinter = ParcelPrintFactory::makeParcelPrint();
        $responseBody = $parcelPrinter->printParcel($requestBody);
        $this->assertEquals($responseBody->getStatus(), 'ok');
    }

    private function createParcelPrintRequest($username, $password)
    {
        $parcelPrintRequest = new ParcelPrintRequest(
            $username,
            $password,
            '06529971354838'
        );

        return $parcelPrintRequest;
    }
}

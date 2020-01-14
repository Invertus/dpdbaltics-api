<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\ClosingManifestRequest;
use Invertus\dpdBalticsApi\Factory\APIRequest\ClosingManifestFactory;
use PHPUnit\Framework\TestCase;

class ClosingManifestTest extends TestCase
{

    public function testShipmentCreation()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');
        $requestBody = $this->createClosingManifestRequest($username, $password);
        $closingManifest = ClosingManifestFactory::makeClosingManifest();
        $responseBody = $closingManifest->closeManifest($requestBody);
        $this->assertEquals($responseBody->getStatus(), 'ok');
    }

    private function createClosingManifestRequest($username, $password)
    {
        $parcelPrintRequest = new ClosingManifestRequest(
            $username,
            $password,
            '2020-02-20'
        );

        return $parcelPrintRequest;
    }
}

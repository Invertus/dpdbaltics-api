<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\CollectionRequestRequest;
use Invertus\dpdBalticsApi\Factory\APIRequest\CollectionRequestFactory;
use PHPUnit\Framework\TestCase;

class CollectionRequestTest extends TestCase
{

    public function testShipmentCreation()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');
        $requestBody = $this->createCollectionRequestRequest($username, $password);
        $collectionRequest = CollectionRequestFactory::makeCollectionRequest();
        $responseBody = $collectionRequest->collectionRequest($requestBody);
        $this->assertGreaterThan(0, strpos($responseBody, '201 OK Process ended'));
    }

    private function createCollectionRequestRequest($username, $password)
    {
        $parcelPrintRequest = new CollectionRequestRequest(
            $username,
            $password,
            'cname',
            'cstreet',
            'LV',
            1005,
            'city',
            'info',
            'name',
            'rstreet',
            1006,
            'LV',
            'city'
        );

        return $parcelPrintRequest;
    }
}

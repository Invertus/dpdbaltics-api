<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\ParcelShopSearchRequest;
use Invertus\dpdBalticsApi\Factory\APIRequest\ParcelShopSearchFactory;
use PHPUnit\Framework\TestCase;
use Psr\Log\NullLogger;

class ParcelShopSearchTest extends TestCase
{

    public function testParcelShopSearch()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');
        $countryIso = 'LV';
        $requestBody = $this->createParcelShopSearchRequest($countryIso);
        $parcelShopSearchFactory = new ParcelShopSearchFactory(
            new NullLogger(),
            $username,
            $password,
            '1.0.0',
            _PS_VERSION_
        );
        $parcelShopSearch = $parcelShopSearchFactory->makeParcelShopSearch();
        $responseBody = $parcelShopSearch->parcelShopSearch($requestBody);
        $this->assertEquals($responseBody->getStatus(), 'ok');
    }

    private function createParcelShopSearchRequest($countryIso)
    {
        $parcelShopSearchRequest = new ParcelShopSearchRequest($countryIso);

        return $parcelShopSearchRequest;
    }
}

<?php

use Invertus\dpdBalticsApi\Api\DTO\Request\ParcelShopSearchRequest;
use Invertus\dpdBalticsApi\Factory\APIRequest\ParcelShopSearchFactory;
use PHPUnit\Framework\TestCase;

class ParcelShopSearchTest extends TestCase
{

    public function testParcelShopSearch()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');
        $countryIso = 'LV';
        $requestBody = $this->createParcelShopSearchRequest($username, $password, $countryIso);
        $parcelShopSearch = ParcelShopSearchFactory::makeParcelShopSearch();
        $responseBody = $parcelShopSearch->parcelShopSearch($requestBody);
        $this->assertEquals($responseBody->getStatus(), 'ok');
    }

    private function createParcelShopSearchRequest($username, $password, $countryIso)
    {
        $parcelShopSearchRequest = new ParcelShopSearchRequest($username, $password, $countryIso);

        return $parcelShopSearchRequest;
    }
}

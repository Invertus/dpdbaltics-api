<?php

use Invertus\dpdBalticsApi\Factory\ParcelShopSearchFactory;
use PHPUnit\Framework\TestCase;

class ParcelShopSearchTest extends TestCase
{

    public function testParcelShopSearch()
    {
        $username = getenv('DPD_USERNAME');
        $password = getenv('DPD_PASSWORD');
        $requestBody = $this->getRequest($username, $password);
        $parcelShopSearch = ParcelShopSearchFactory::createParcelShopSearch();
        $responseBody = $parcelShopSearch->parcelShopSearch($requestBody);
        $this->assertEquals($responseBody->status, 'ok');
    }

    private function getRequest($username, $password)
    {

        return [
            'username' => $username,
            'password' => $password,
            'id' => 'LV10080',
//            'company' => '',
//            'street' => '',
//            'city' => '',
            'country' => 'LV',
//            'pcode' => '',
            'fetchGsPUDOpoint' => '1',
            'retrieveOpeningHours' => '1',

        ];
    }
}

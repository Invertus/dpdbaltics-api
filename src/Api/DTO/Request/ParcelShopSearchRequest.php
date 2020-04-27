<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Request;

use JsonSerializable;

class ParcelShopSearchRequest implements JsonSerializable
{

    /**
     * @var string
     */
    private $parcelShopId;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $pCode;

    /**
     * @var string
     */
    private $fetchGsPUDOPoint;

    /**
     * @var string
     */
    private $retrieveOpeningHours;

    /**
     * ParcelShopSearchRequest constructor.
     * @param $countryIsoCode
     * @param int $fetchGsPUDOPoint
     * @param int $retrieveOpeningHours
     */
    public function __construct($countryIsoCode, $fetchGsPUDOPoint = 1, $retrieveOpeningHours = 0)
    {
        $this->country = $countryIsoCode;
        $this->fetchGsPUDOPoint = $fetchGsPUDOPoint;
        $this->retrieveOpeningHours = $retrieveOpeningHours;
    }

    /**
     * @return string
     */
    public function getParcelShopId()
    {
        return $this->parcelShopId;
    }

    /**
     * @param string $parcelShopId
     */
    public function setParcelShopId($parcelShopId)
    {
        $this->parcelShopId = $parcelShopId;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getPCode()
    {
        return $this->pCode;
    }

    /**
     * @param string $pCode
     */
    public function setPCode($pCode)
    {
        $this->pCode = $pCode;
    }

    /**
     * @return string
     */
    public function getFetchGsPUDOPoint()
    {
        return $this->fetchGsPUDOPoint;
    }

    /**
     * @param string $fetchGsPUDOPoint
     */
    public function setFetchGsPUDOPoint($fetchGsPUDOPoint)
    {
        $this->fetchGsPUDOPoint = $fetchGsPUDOPoint;
    }

    /**
     * @return string
     */
    public function getRetrieveOpeningHours()
    {
        return $this->retrieveOpeningHours;
    }

    /**
     * @param string $retrieveOpeningHours
     */
    public function setRetrieveOpeningHours($retrieveOpeningHours)
    {
        $this->retrieveOpeningHours = $retrieveOpeningHours;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $request = [
            'country' => $this->country,
            'fetchGsPUDOpoint' => $this->fetchGsPUDOPoint,
            'street' => $this->street,
            'city' => $this->city,
            'pcode' => $this->pCode,
            'retrieveOpeningHours' => $this->retrieveOpeningHours
        ];

        if ($this->company) {
            $request['company'] = $this->company;
        }
        if ( $this->parcelShopId) {
            $request['id'] =  $this->parcelShopId;
        }


        return $request;
    }
}
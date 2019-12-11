<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Object;

use Invertus\dpdBalticsApi\Api\DTP\Object\OpeningHours;
use JsonSerializable;

class ParcelShop implements JsonSerializable
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
    private $country;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $pCode;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var float
     */
    private $distance;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $coordinateX;

    /**
     * @var float
     */
    private $coordinateY;

    /**
     * @var float
     */
    private $coordinateZ;

    /**
     * @var OpeningHours
     */
    private $openingHours;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param float $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getCoordinateX()
    {
        return $this->coordinateX;
    }

    /**
     * @param float $coordinateX
     */
    public function setCoordinateX($coordinateX)
    {
        $this->coordinateX = $coordinateX;
    }

    /**
     * @return float
     */
    public function getCoordinateY()
    {
        return $this->coordinateY;
    }

    /**
     * @param float $coordinateY
     */
    public function setCoordinateY($coordinateY)
    {
        $this->coordinateY = $coordinateY;
    }

    /**
     * @return float
     */
    public function getCoordinateZ()
    {
        return $this->coordinateZ;
    }

    /**
     * @param float $coordinateZ
     */
    public function setCoordinateZ($coordinateZ)
    {
        $this->coordinateZ = $coordinateZ;
    }

    /**
     * @return OpeningHours
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * @param OpeningHours $openingHours
     */
    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'parcelshop_id' => $this->parcelShopId,
            'company' => $this->company,
            'country' => $this->country,
            'city' => $this->city,
            'pcode' => $this->pCode,
            'street' => $this->street,
            'email' => $this->email,
            'phone' => $this->phone,
            'distance' => $this->distance,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'coordinateX' => $this->coordinateX,
            'coordinateY' => $this->coordinateY,
            'coordinateZ' => $this->coordinateZ,
            'openingHours' => $this->openingHours
        ];
    }

}
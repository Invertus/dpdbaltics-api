<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Object;

use JsonSerializable;

class ParcelShop implements JsonSerializable
{
    private $parcelShopId;
    private $company;
    private $country;
    private $city;
    private $pCode;
    private $street;
    private $email;
    private $phone;
    private $distance;
    private $longitude;
    private $latitude;
    private $coordinateX;
    private $coordinateY;
    private $coordinateZ;
    /**
     * @var OpeningHours
     */
    private $openingHours;

    /**
     * @return mixed
     */
    public function getParcelShopId()
    {
        return $this->parcelShopId;
    }

    /**
     * @param mixed $parcelShopId
     */
    public function setParcelShopId($parcelShopId)
    {
        $this->parcelShopId = $parcelShopId;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPCode()
    {
        return $this->pCode;
    }

    /**
     * @param mixed $pCode
     */
    public function setPCode($pCode)
    {
        $this->pCode = $pCode;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getCoordinateX()
    {
        return $this->coordinateX;
    }

    /**
     * @param mixed $coordinateX
     */
    public function setCoordinateX($coordinateX)
    {
        $this->coordinateX = $coordinateX;
    }

    /**
     * @return mixed
     */
    public function getCoordinateY()
    {
        return $this->coordinateY;
    }

    /**
     * @param mixed $coordinateY
     */
    public function setCoordinateY($coordinateY)
    {
        $this->coordinateY = $coordinateY;
    }

    /**
     * @return mixed
     */
    public function getCoordinateZ()
    {
        return $this->coordinateZ;
    }

    /**
     * @param mixed $coordinateZ
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
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
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
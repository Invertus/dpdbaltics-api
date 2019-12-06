<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Request;

use JsonSerializable;

class ParcelShopSearchRequest implements JsonSerializable
{
    private $username;
    private $password;
    private $parcelShopId;
    private $company;
    private $street;
    private $city;
    private $country;
    private $pCode;
    private $fetchGsPUDOPoint;
    private $retrieveOpeningHours;

    public function __construct($username, $password, $countryIsoCode, $fetchGsPUDOPoint = 1, $retrieveOpeningHours = 0)
    {
        $this->username = $username;
        $this->password = $password;
        $this->country = $countryIsoCode;
        $this->fetchGsPUDOPoint = $fetchGsPUDOPoint;
        $this->retrieveOpeningHours = $retrieveOpeningHours;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

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
    public function getFetchGsPUDOPoint()
    {
        return $this->fetchGsPUDOPoint;
    }

    /**
     * @param mixed $fetchGsPUDOPoint
     */
    public function setFetchGsPUDOPoint($fetchGsPUDOPoint)
    {
        $this->fetchGsPUDOPoint = $fetchGsPUDOPoint;
    }

    /**
     * @return mixed
     */
    public function getRetrieveOpeningHours()
    {
        return $this->retrieveOpeningHours;
    }

    /**
     * @param mixed $retrieveOpeningHours
     */
    public function setRetrieveOpeningHours($retrieveOpeningHours)
    {
        $this->retrieveOpeningHours = $retrieveOpeningHours;
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
        $request = [
            'username' => $this->username,
            'password' => $this->password,
            'country' => $this->country,
            'fetchGsPUDOpoint' => $this->fetchGsPUDOPoint,
            'id' => $this->parcelShopId,
            'street' => $this->street,
            'city' => $this->city,
            'pcode' => $this->pCode,
            'retrieveOpeningHours' => $this->retrieveOpeningHours
            ];

        if ($this->company) {
            $request['company'] = $this->company;
        }

        return $request;
    }
}
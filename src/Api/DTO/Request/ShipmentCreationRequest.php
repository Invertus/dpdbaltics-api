<?php


namespace Invertus\dpdBalticsApi\Api\DTO\Request;


use JsonSerializable;

class ShipmentCreationRequest implements JsonSerializable
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $name1;

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
    private $pcode;

    /**
     * @var string
     */
    private $numOfParcel;

    /**
     * @var string
     */
    private $parcel_type;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var bool
     */
    private $fetchGsPUDOpoint;

    /**
     * @var string
     */
    private $parcelShopId;

    private $name2;

    private $weight;

    private $idmSmsNumber;

    private $email;

    private $orderNumber;

    private $orderNumber1;

    private $orderNumber2;

    private $orderNumber3;

    private $parcelNumber;

    private $remark;

    private $codAmount;

    public function __construct(
        $username,
        $password,
        $name1,
        $street,
        $city,
        $country,
        $pcode,
        $numOfParcel,
        $parcel_type,
        $phone,
        $fetchGsPUDOpoint,
        $parcelShopId
    )
    {
        $this->username = $username;
        $this->password = $password;
        $this->name1 = $name1;
        $this->street = $street;
        $this->city = $city;
        $this->country = $country;
        $this->pcode = $pcode;
        $this->numOfParcel = $numOfParcel;
        $this->parcel_type = $parcel_type;
        $this->phone = $phone;
        $this->fetchGsPUDOpoint = $fetchGsPUDOpoint;
        $this->parcelShopId = $parcelShopId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * @param string $name1
     */
    public function setName1($name1)
    {
        $this->name1 = $name1;
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
    public function getPcode()
    {
        return $this->pcode;
    }

    /**
     * @param string $pcode
     */
    public function setPcode($pcode)
    {
        $this->pcode = $pcode;
    }

    /**
     * @return string
     */
    public function getNumOfParcel()
    {
        return $this->numOfParcel;
    }

    /**
     * @param string $numOfParcel
     */
    public function setNumOfParcel($numOfParcel)
    {
        $this->numOfParcel = $numOfParcel;
    }

    /**
     * @return string
     */
    public function getparcel_type()
    {
        return $this->parcel_type;
    }

    /**
     * @param string $parcel_type
     */
    public function setparcel_type($parcel_type)
    {
        $this->parcel_type = $parcel_type;
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
     * @return bool
     */
    public function isFetchGsPUDOpoint()
    {
        return $this->fetchGsPUDOpoint;
    }

    /**
     * @param bool $fetchGsPUDOpoint
     */
    public function setFetchGsPUDOpoint($fetchGsPUDOpoint)
    {
        $this->fetchGsPUDOpoint = $fetchGsPUDOpoint;
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

    public function jsonSerialize()
    {
        return [
            'username' => $this->username,
            'password' => $this->password,
            'name1' => $this->name1,
            'street' => $this->street,
            'city' => $this->city,
            'country' => $this->country,
            'pcode' => $this->pcode,
            'numOfParcel' => $this->numOfParcel,
            'parcel_type' => $this->parcel_type,
            'phone' => $this->phone,
            'fetchGsPUDOpoint' => $this->fetchGsPUDOpoint,
            'parcelShopId' => $this->parcelShopId,
        ];
    }
}

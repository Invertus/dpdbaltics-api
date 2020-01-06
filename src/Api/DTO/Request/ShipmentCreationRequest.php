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
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getPcode()
    {
        return $this->pcode;
    }

    /**
     * @return string
     */
    public function getNumOfParcel()
    {
        return $this->numOfParcel;
    }

    /**
     * @return string
     */
    public function getparcel_type()
    {
        return $this->parcel_type;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return bool
     */
    public function isFetchGsPUDOpoint()
    {
        return $this->fetchGsPUDOpoint;
    }

    /**
     * @return string
     */
    public function getParcelShopId()
    {
        return $this->parcelShopId;
    }

    /**
     * @return mixed
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * @param mixed $name2
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getIdmSmsNumber()
    {
        return $this->idmSmsNumber;
    }

    /**
     * @param mixed $idmSmsNumber
     */
    public function setIdmSmsNumber($idmSmsNumber)
    {
        $this->idmSmsNumber = $idmSmsNumber;
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
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber1()
    {
        return $this->orderNumber1;
    }

    /**
     * @param mixed $orderNumber1
     */
    public function setOrderNumber1($orderNumber1)
    {
        $this->orderNumber1 = $orderNumber1;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber2()
    {
        return $this->orderNumber2;
    }

    /**
     * @param mixed $orderNumber2
     */
    public function setOrderNumber2($orderNumber2)
    {
        $this->orderNumber2 = $orderNumber2;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber3()
    {
        return $this->orderNumber3;
    }

    /**
     * @param mixed $orderNumber3
     */
    public function setOrderNumber3($orderNumber3)
    {
        $this->orderNumber3 = $orderNumber3;
    }

    /**
     * @return mixed
     */
    public function getParcelNumber()
    {
        return $this->parcelNumber;
    }

    /**
     * @param mixed $parcelNumber
     */
    public function setParcelNumber($parcelNumber)
    {
        $this->parcelNumber = $parcelNumber;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param mixed $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

    /**
     * @return mixed
     */
    public function getCodAmount()
    {
        return $this->codAmount;
    }

    /**
     * @param mixed $codAmount
     */
    public function setCodAmount($codAmount)
    {
        $this->codAmount = $codAmount;
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

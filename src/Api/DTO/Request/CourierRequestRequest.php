<?php


namespace Invertus\dpdBalticsApi\Api\DTO\Request;


use JsonSerializable;

class CourierRequestRequest implements JsonSerializable
{

    /**
     * @var string
     */
    private $orderNr;

    /**
     * @var string
     */
    private $senderAddress;

    /**
     * @var string
     */
    private $senderCity;

    /**
     * @var string
     */
    private $senderCountry;

    /**
     * @var string
     */
    private $senderPostalCode;

    /**
     * @var string
     */
    private $senderContact;

    /**
     * @var string
     */
    private $senderPhone;

    /**
     * @var string
     */
    private $senderWorkUntil;

    /**
     * @var string
     */
    private $pickupTime;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $parcelsCount;

    /**
     * @var string
     */
    private $nonStandard;

    /**
     * @var string
     */
    private $payerId;

    /**
     * @var string
     */
    private $senderName;

    /**
     * @var string
     */
    private $senderAddAddress;

    /**
     * @var string
     */
    private $palletsCount;


    /**
     * CourierRequestRequest constructor.
     * @param $orderNr
     * @param $senderAddress
     * @param $senderCity
     * @param $senderCountry
     * @param $senderPostalCode
     * @param $senderContact
     * @param $senderPhone
     * @param $senderWorkUntil
     * @param $pickupTime
     * @param $weight
     * @param $parcelsCount
     */
    public function __construct($orderNr, $senderAddress, $senderCity, $senderCountry, $senderPostalCode, $senderContact, $senderPhone, $senderWorkUntil, $pickupTime, $weight, $parcelsCount)
    {
        $this->orderNr = $orderNr;
        $this->senderAddress = $senderAddress;
        $this->senderCity = $senderCity;
        $this->senderCountry = $senderCountry;
        $this->senderPostalCode = $senderPostalCode;
        $this->senderContact = $senderContact;
        $this->senderPhone = $senderPhone;
        $this->senderWorkUntil = $senderWorkUntil;
        $this->pickupTime = $pickupTime;
        $this->weight = $weight;
        $this->parcelsCount = $parcelsCount;
    }

    /**
     * @return string
     */
    public function getOrderNr()
    {
        return $this->orderNr;
    }

    /**
     * @return string
     */
    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * @return string
     */
    public function getSenderCity()
    {
        return $this->senderCity;
    }

    /**
     * @return string
     */
    public function getSenderCountry()
    {
        return $this->senderCountry;
    }

    /**
     * @return string
     */
    public function getSenderPostalCode()
    {
        return $this->senderPostalCode;
    }

    /**
     * @return string
     */
    public function getSenderContact()
    {
        return $this->senderContact;
    }

    /**
     * @return string
     */
    public function getSenderPhone()
    {
        return $this->senderPhone;
    }

    /**
     * @return string
     */
    public function getSenderWorkUntil()
    {
        return $this->senderWorkUntil;
    }

    /**
     * @return string
     */
    public function getPickupTime()
    {
        return $this->pickupTime;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getParcelsCount()
    {
        return $this->parcelsCount;
    }

    /**
     * @return string
     */
    public function getNonStandard()
    {
        return $this->nonStandard;
    }

    /**
     * @param string $nonStandard
     */
    public function setNonStandard($nonStandard)
    {
        $this->nonStandard = $nonStandard;
    }

    /**
     * @return string
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * @param string $payerId
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }

    /**
     * @return string
     */
    public function getSenderAddAddress()
    {
        return $this->senderAddAddress;
    }

    /**
     * @param string $senderAddAddress
     */
    public function setSenderAddAddress($senderAddAddress)
    {
        $this->senderAddAddress = $senderAddAddress;
    }

    /**
     * @return string
     */
    public function getPalletsCount()
    {
        return $this->palletsCount;
    }

    /**
     * @param string $palletsCount
     */
    public function setPalletsCount($palletsCount)
    {
        $this->palletsCount = $palletsCount;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'orderNr' => $this->getOrderNr(),
            'payerId' => $this->getPayerId(),
            'senderName' => $this->getSenderName(),
            'senderAddress' => $this->getSenderAddress(),
            'senderCity' => $this->getSenderCity(),
            'senderCountry' => $this->getSenderCountry(),
            'senderPostalCode' => $this->getSenderPostalCode(),
            'senderAddAddress' => $this->getSenderAddAddress(),
            'senderContact' => $this->getSenderContact(),
            'senderPhone' => $this->getSenderPhone(),
            'senderWorkUntil' => $this->getSenderWorkUntil(),
            'pickupTime' => $this->getPickupTime(),
            'weight' => $this->getWeight(),
            'parcelsCount' => $this->getParcelsCount(),
            'palletsCount' => $this->getPalletsCount(),
            'nonStandard' => $this->getNonStandard(),
        ];
    }
}

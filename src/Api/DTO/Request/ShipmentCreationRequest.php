<?php


namespace Invertus\dpdBalticsApi\Api\DTO\Request;


use JsonSerializable;

class ShipmentCreationRequest implements JsonSerializable
{

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
     * @var int
     */
    private $numOfParcel;

    /**
     * @var string
     */
    private $parcelType;

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

    /**
     * @var string
     */
    private $name2;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var string
     */
    private $idmSmsNumber;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var string
     */
    private $orderNumber1;

    /**
     * @var string
     */
    private $orderNumber2;

    /**
     * @var string
     */
    private $orderNumber3;

    /**
     * @var string
     */
    private $parcelNumber;

    /**
     * @var string
     */
    private $remark;

    /**
     * @var string
     */
    private $codAmount;

    /**
     * @var string
     */
    private $codPurpose;

    /**
     * @var string
     */
    private $idCheckId;

    /**
     * @var string
     */
    private $idCheckName;

    /**
     * @var string
     */
    private $dnoteReference;

    /**
     * @var string
     */
    private $predict;

    /**
     * @var string
     */
    private $timeFrameFrom;

    /**
     * @var string
     */
    private $timeFrameTo;

    /**
     * @var string
     */
    private $shipmentId;

    /**
     * ShipmentCreationRequest constructor.
     * @param $name1
     * @param $street
     * @param $city
     * @param $country
     * @param $pcode
     * @param $numOfParcel
     * @param $parcelType
     * @param $phone
     * @param $email
     * @param $fetchGsPUDOpoint
     */
    public function __construct(
        $name1,
        $street,
        $city,
        $country,
        $pcode,
        $numOfParcel,
        $parcelType,
        $phone,
        $email,
        $fetchGsPUDOpoint
    ) {
        $this->name1 = $name1;
        $this->street = $street;
        $this->city = $city;
        $this->country = $country;
        $this->pcode = $pcode;
        $this->numOfParcel = $numOfParcel;
        $this->parcelType = $parcelType;
        $this->phone = $phone;
        $this->email = $email;
        $this->fetchGsPUDOpoint = $fetchGsPUDOpoint;
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
    public function getParcelType()
    {
        return $this->parcelType;
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
     * @param string $parcelShopId
     */
    public function setParcelShopId($parcelShopId)
    {
        $this->parcelShopId = $parcelShopId;
    }

    /**
     * @return string
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * @param string $name2
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getIdmSmsNumber()
    {
        return $this->idmSmsNumber;
    }

    /**
     * @param string $idmSmsNumber
     */
    public function setIdmSmsNumber($idmSmsNumber)
    {
        $this->idmSmsNumber = $idmSmsNumber;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getOrderNumber1()
    {
        return $this->orderNumber1;
    }

    /**
     * @param string $orderNumber1
     */
    public function setOrderNumber1($orderNumber1)
    {
        $this->orderNumber1 = $orderNumber1;
    }

    /**
     * @return string
     */
    public function getOrderNumber2()
    {
        return $this->orderNumber2;
    }

    /**
     * @param string $orderNumber2
     */
    public function setOrderNumber2($orderNumber2)
    {
        $this->orderNumber2 = $orderNumber2;
    }

    /**
     * @return string
     */
    public function getOrderNumber3()
    {
        return $this->orderNumber3;
    }

    /**
     * @param string $orderNumber3
     */
    public function setOrderNumber3($orderNumber3)
    {
        $this->orderNumber3 = $orderNumber3;
    }

    /**
     * @return string
     */
    public function getParcelNumber()
    {
        return $this->parcelNumber;
    }

    /**
     * @param string $parcelNumber
     */
    public function setParcelNumber($parcelNumber)
    {
        $this->parcelNumber = $parcelNumber;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

    /**
     * @return string
     */
    public function getCodAmount()
    {
        return $this->codAmount;
    }

    /**
     * @param string $codAmount
     */
    public function setCodAmount($codAmount)
    {
        $this->codAmount = $codAmount;
    }

    /**
     * @return string
     */
    public function getCodPurpose()
    {
        return $this->codPurpose;
    }

    /**
     * @param string $codPurpose
     */
    public function setCodPurpose($codPurpose)
    {
        $this->codPurpose = $codPurpose;
    }

    /**
     * @return string
     */
    public function getIdCheckId()
    {
        return $this->idCheckId;
    }

    /**
     * @param string $idCheckId
     */
    public function setIdCheckId($idCheckId)
    {
        $this->idCheckId = $idCheckId;
    }

    /**
     * @return string
     */
    public function getIdCheckName()
    {
        return $this->idCheckName;
    }

    /**
     * @param string $idCheckName
     */
    public function setIdCheckName($idCheckName)
    {
        $this->idCheckName = $idCheckName;
    }

    /**
     * @return string
     */
    public function getDnoteReference()
    {
        return $this->dnoteReference;
    }

    /**
     * @param string $dnoteReference
     */
    public function setDnoteReference($dnoteReference)
    {
        $this->dnoteReference = $dnoteReference;
    }

    /**
     * @return string
     */
    public function getPredict()
    {
        return $this->predict;
    }

    /**
     * @param string $predict
     */
    public function setPredict($predict)
    {
        $this->predict = $predict;
    }

    /**
     * @return string
     */
    public function getTimeFrameFrom()
    {
        return $this->timeFrameFrom;
    }

    /**
     * @param string $timeFrameFrom
     */
    public function setTimeFrameFrom($timeFrameFrom)
    {
        $this->timeFrameFrom = $timeFrameFrom;
    }

    /**
     * @return string
     */
    public function getTimeFrameTo()
    {
        return $this->timeFrameTo;
    }

    /**
     * @param string $timeFrameTo
     */
    public function setTimeFrameTo($timeFrameTo)
    {
        $this->timeFrameTo = $timeFrameTo;
    }

    /**
     * @return string
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     * @param string $shipmentId
     */
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId = $shipmentId;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'name1' => $this->name1,
            'street' => $this->street,
            'city' => $this->city,
            'country' => $this->country,
            'pcode' => $this->pcode,
            'num_of_parcel' => $this->numOfParcel,
            'parcel_type' => $this->parcelType,
            'phone' => $this->phone,
            'fetchGsPUDOpoint' => $this->fetchGsPUDOpoint,
            'parcelshop_id' => $this->parcelShopId,
            'name2' => $this->getName2(),
            'weight' => $this->getWeight(),
            'idm_sms_number' => $this->getIdmSmsNumber(),
            'email' => $this->getEmail(),
            'order_number' => $this->getOrderNumber(),
            'order_number1' => $this->getOrderNumber1(),
            'order_number2' => $this->getOrderNumber2(),
            'order_number3' => $this->getOrderNumber3(),
            'parcel_number' => $this->getParcelNumber(),
            'remark' => $this->getRemark(),
            'cod_amount' => $this->getCodAmount(),
            'cod_purpose' => $this->getCodPurpose(),
            'id_check_id' => $this->idCheckId,
            'id_check_name' => $this->idCheckName,
            'dnote_reference' => $this->getDnoteReference(),
            'predict' => $this->getPredict(),
            'timeframe_from' => $this->getTimeFrameFrom(),
            'timeframe_to' => $this->getTimeFrameTo(),
            'shipment_id' => $this->getShipmentId(),
        ];
    }
}

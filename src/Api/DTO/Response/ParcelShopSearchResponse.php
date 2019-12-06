<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Response;

use Invertus\dpdBalticsApi\Api\DTP\Object\ParcelShop;
use JsonSerializable;

class ParcelShopSearchResponse implements JsonSerializable
{

    private $status;
    private $errLog;
    /**
     * @var ParcelShop[]
     */
    private $parcelShops = [];

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getErrLog()
    {
        return $this->errLog;
    }

    /**
     * @param mixed $errLog
     */
    public function setErrLog($errLog)
    {
        $this->errLog = $errLog;
    }

    /**
     * @return ParcelShop
     */
    public function getParcelShops()
    {
        return $this->parcelShops;
    }

    /**
     * @param ParcelShopSearchResponse $parcelShops
     */
    public function setParcelShops(ParcelShop $parcelShops)
    {
        $this->parcelShops = $parcelShops;
    }

    public function addParcelShops(ParcelShop $parcelShop)
    {
        $this->parcelShops[] = $parcelShop;
    }

    public function hasParcelShops()
    {
        return count($this->parcelShops) > 0;
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
            'status' => $this->status,
            'errlog' => $this->errLog,
            'parcelshops' => $this->parcelShops,
        ];
    }
}
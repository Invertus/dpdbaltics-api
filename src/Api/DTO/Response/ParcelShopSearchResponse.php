<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Response;

use Invertus\dpdBalticsApi\Api\DTO\Object\ParcelShop;
use JsonSerializable;

class ParcelShopSearchResponse implements JsonSerializable
{

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $errLog;

    /**
     * @param ParcelShop[]
     */
    private $parcelShops = [];

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string string
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getErrLog()
    {
        return $this->errLog;
    }

    /**
     * @param string $errLog
     */
    public function setErrLog($errLog)
    {
        $this->errLog = $errLog;
    }

    /**
     * @return ParcelShop[]
     */
    public function getParcelShops()
    {
        return $this->parcelShops;
    }

    /**
     * @param ParcelShop[] $parcelShops
     */
    public function setParcelShops(array $parcelShops)
    {
        $this->parcelShops = $parcelShops;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'status' => $this->getStatus(),
            'errlog' => $this->getErrLog(),
            'parcelshops' => $this->getParcelShops(),
        ];
    }
}
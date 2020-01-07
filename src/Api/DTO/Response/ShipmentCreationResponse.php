<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Response;

use Invertus\dpdBalticsApi\Api\DTO\Object\ParcelShop;
use JsonSerializable;

class ShipmentCreationResponse implements JsonSerializable
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
     * @var string
     */
    private $pl_number;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
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
     * @return string
     */
    public function getPlNumber()
    {
        return $this->pl_number;
    }

    /**
     * @param string $pl_number
     */
    public function setPlNumber($pl_number)
    {
        $this->pl_number = $pl_number;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'status' => $this->status,
            'errlog' => $this->errLog,
            'pl_number' => $this->pl_number,
        ];
    }
}
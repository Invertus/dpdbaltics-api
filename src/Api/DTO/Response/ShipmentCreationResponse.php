<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Response;

use Invertus\dpdBalticsApi\Api\DTO\Object\ParcelShop;
use JsonSerializable;

class ShipmentCreationResponse implements JsonSerializable
{

    private $status;
    private $errLog;
    private $pl_number;

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
     * @return mixed
     */
    public function getPlNumber()
    {
        return $this->pl_number;
    }

    /**
     * @param mixed $pl_number
     */
    public function setPlNumber($pl_number)
    {
        $this->pl_number = $pl_number;
    }

    /**
     * @return array|mixed
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
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
     * @var array|null
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
     * @return array|null
     */
    public function getPlNumber()
    {
        return $this->pl_number;
    }

    public function getPlNumbersAsString()
    {
        return implode('|', $this->pl_number);
    }

    /**
     * @param array|null $pl_number
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
            'status' => $this->getStatus(),
            'errlog' => $this->getErrLog(),
            'pl_number' => $this->getPlNumber(),
        ];
    }
}
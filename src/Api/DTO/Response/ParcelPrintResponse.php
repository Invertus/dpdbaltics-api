<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Response;

use Invertus\dpdBalticsApi\Api\DTO\Object\ParcelShop;
use JsonSerializable;

class ParcelPrintResponse implements JsonSerializable
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
    private $pdf;

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
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * @param string $pdf
     */
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'status' => $this->getStatus(),
            'errlog' => $this->getErrLog(),
            'pdf' => $this->pdf,
        ];
    }
}
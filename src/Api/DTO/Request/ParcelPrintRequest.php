<?php


namespace Invertus\dpdBalticsApi\Api\DTO\Request;


use JsonSerializable;

class ParcelPrintRequest implements JsonSerializable
{

    /**
     * @var string
     */
    private $parcels;

    /**
     * @var string
     */
    private $printType;

    /**
     * @var string
     */
    private $printFormat;

    /**
     * @var string
     */
    private $printPosition;

    /**
     * ParcelPrintRequest constructor.
     * @param $parcels
     */
    public function __construct($parcels)
    {
        $this->parcels = $parcels;
    }

    /**
     * @return mixed
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * @return string
     */
    public function getPrintType()
    {
        return $this->printType;
    }

    /**
     * @param string $printType
     */
    public function setPrintType($printType)
    {
        $this->printType = $printType;
    }

    /**
     * @return string
     */
    public function getPrintFormat()
    {
        return $this->printFormat;
    }

    /**
     * @param string $printFormat
     */
    public function setPrintFormat($printFormat)
    {
        $this->printFormat = $printFormat;
    }

    /**
     * @return string
     */
    public function getPrintPosition()
    {
        return $this->printPosition;
    }

    /**
     * @param string $printPosition
     */
    public function setPrintPosition($printPosition)
    {
        $this->printPosition = $printPosition;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'parcels' => $this->getParcels(),
            'printType' => $this->getPrintType(),
            'printFormat' => $this->getPrintFormat(),
            'printPosition' => $this->getPrintPosition()
        ];
    }
}
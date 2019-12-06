<?php


namespace Invertus\dpdBalticsApi\Api\DTP\Object;


use JsonSerializable;

class OpeningHours
{

    private $weekDay;
    private $openMorning;
    private $closeMorning;
    private $closeAfternoon;
    private $openAfternoon;

    public function __construct($weekDay, $openMorning, $closeMorning, $closeAfternoon, $openAfternoon)
    {
        $this->weekDay = $weekDay;
        $this->openMorning = $openMorning;
        $this->closeMorning = $closeMorning;
        $this->closeAfternoon = $closeAfternoon;
        $this->openAfternoon = $openAfternoon;
    }

    /**
     * @return mixed
     */
    public function getWeekDay()
    {
        return $this->weekDay;
    }

    /**
     * @return mixed
     */
    public function getOpenMorning()
    {
        return $this->openMorning;
    }

    /**
     * @return mixed
     */
    public function getCloseMorning()
    {
        return $this->closeMorning;
    }

    /**
     * @return mixed
     */
    public function getCloseAfternoon()
    {
        return $this->closeAfternoon;
    }

    /**
     * @return mixed
     */
    public function getOpenAfternoon()
    {
        return $this->openAfternoon;
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
            "weekday" => $this->weekDay,
            "openMorning" => $this->openMorning,
            "closeMorning" => $this->closeMorning,
            "closeAfternoon" => $this->closeAfternoon,
            "openAfternoon" => $this->closeAfternoon
        ];
    }
}
<?php


namespace Invertus\dpdBalticsApi\Api\DTO\Object;


use JsonSerializable;

class OpeningHours implements JsonSerializable
{
    /**
     * @var string
     */
    private $weekDay;

    /**
     * @var string
     */
    private $openMorning;

    /**
     * @var string
     */
    private $closeMorning;

    /**
     * @var string
     */
    private $closeAfternoon;

    /**
     * @var string
     */
    private $openAfternoon;

    /**
     * @var string
     */
    private $workHoursFormatted;
    /**
     * OpeningHours constructor.
     * @param $weekDay
     * @param $openMorning
     * @param $closeMorning
     * @param $closeAfternoon
     * @param $openAfternoon
     */
    public function __construct($weekDay, $openMorning, $closeMorning, $closeAfternoon, $openAfternoon)
    {
        $this->weekDay = $weekDay;
        $this->openMorning = $openMorning;
        $this->closeMorning = $closeMorning;
        $this->closeAfternoon = $closeAfternoon;
        $this->openAfternoon = $openAfternoon;
    }

    /**
     * @return string
     */
    public function getWeekDay()
    {
        return $this->weekDay;
    }

    /**
     * @return string
     */
    public function getOpenMorning()
    {
        return $this->openMorning;
    }

    /**
     * @return string
     */
    public function getCloseMorning()
    {
        return $this->closeMorning;
    }

    /**
     * @return string
     */
    public function getCloseAfternoon()
    {
        return $this->closeAfternoon;
    }

    /**
     * @return string
     */
    public function getOpenAfternoon()
    {
        return $this->openAfternoon;
    }

    /**
     * @return string
     */
    public function getWorkHoursFormatted()
    {
        return $this->workHoursFormatted;
    }

    /**
     * @param string $workHoursFormatted
     */
    public function setWorkHoursFormatted($workHoursFormatted)
    {
        $this->workHoursFormatted = $workHoursFormatted;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'weekday' => $this->weekDay,
            'openMorning' => $this->openMorning,
            'closeMorning' => $this->closeMorning,
            'closeAfternoon' => $this->closeAfternoon,
            'openAfternoon' => $this->closeAfternoon
        ];
    }
}
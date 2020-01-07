<?php

namespace Invertus\dpdBalticsApi\Api\DTO\Request;

use JsonSerializable;

class ClosingManifestRequest implements JsonSerializable
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $format;

    /**
     * ClosingManifestRequest constructor.
     * @param $username
     * @param $password
     * @param $date
     */
    public function __construct($username, $password, $date)
    {
        $this->username = $username;
        $this->password = $password;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'date' => $this->getDate(),
            'type' => $this->getType(),
            'format' => $this->getFormat(),
        ];
    }
}
<?php


namespace Invertus\dpdBalticsApi\Api\DTO\Request;


use JsonSerializable;

class CollectionRequestRequest implements JsonSerializable
{

    /**
     * @var string
     */
    private $cname;

    /**
     * @var string
     */
    private $cstreet;

    /**
     * @var string
     */
    private $ccountry;

    /**
     * @var string
     */
    private $cpostal;

    /**
     * @var string
     */
    private $ccity;

    /**
     * @var string
     */
    private $info1;

    /**
     * @var string
     */
    private $rname;

    /**
     * @var string
     */
    private $rstreet;

    /**
     * @var string
     */
    private $rpostal;

    /**
     * @var string
     */
    private $rcountry;

    /**
     * @var string
     */
    private $rcity;

    /**
     * @var string
     */
    private $cname1;

    /**
     * @var string
     */
    private $cname2;

    /**
     * @var string
     */
    private $cname3;

    /**
     * @var string
     */
    private $cphone;

    /**
     * @var string
     */
    private $cemail;

    /**
     * @var string
     */
    private $info2;

    /**
     * @var string
     */
    private $rname2;

    /**
     * @var string
     */
    private $rphone;

    /**
     * @var string
     */
    private $remail;

    /**
     * CollectionRequestRequest constructor.
     * @param $cname
     * @param $cstreet
     * @param $ccountry
     * @param $cpostal
     * @param $ccity
     * @param $info1
     * @param $rname
     * @param $rstreet
     * @param $rpostal
     * @param $rcountry
     * @param $rcity
     */
    public function __construct($cname, $cstreet, $ccountry, $cpostal, $ccity, $info1, $rname, $rstreet, $rpostal, $rcountry, $rcity)
    {
        $this->cname = $cname;
        $this->cstreet = $cstreet;
        $this->ccountry = $ccountry;
        $this->cpostal = $cpostal;
        $this->ccity = $ccity;
        $this->info1 = $info1;
        $this->rname = $rname;
        $this->rstreet = $rstreet;
        $this->rpostal = $rpostal;
        $this->rcountry = $rcountry;
        $this->rcity = $rcity;
    }

    /**
     * @return string
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * @return string
     */
    public function getCstreet()
    {
        return $this->cstreet;
    }

    /**
     * @return string
     */
    public function getCcountry()
    {
        return $this->ccountry;
    }

    /**
     * @return string
     */
    public function getCpostal()
    {
        return $this->cpostal;
    }

    /**
     * @return string
     */
    public function getCcity()
    {
        return $this->ccity;
    }

    /**
     * @return string
     */
    public function getInfo1()
    {
        return $this->info1;
    }

    /**
     * @return string
     */
    public function getRname()
    {
        return $this->rname;
    }

    /**
     * @return string
     */
    public function getRstreet()
    {
        return $this->rstreet;
    }

    /**
     * @return string
     */
    public function getRpostal()
    {
        return $this->rpostal;
    }

    /**
     * @return string
     */
    public function getRcountry()
    {
        return $this->rcountry;
    }

    /**
     * @return string
     */
    public function getRcity()
    {
        return $this->rcity;
    }

    /**
     * @return string
     */
    public function getCname1()
    {
        return $this->cname1;
    }

    /**
     * @param string $cname1
     */
    public function setCname1($cname1)
    {
        $this->cname1 = $cname1;
    }

    /**
     * @return string
     */
    public function getCname2()
    {
        return $this->cname2;
    }

    /**
     * @param string $cname2
     */
    public function setCname2($cname2)
    {
        $this->cname2 = $cname2;
    }

    /**
     * @return string
     */
    public function getCname3()
    {
        return $this->cname3;
    }

    /**
     * @param string $cname3
     */
    public function setCname3($cname3)
    {
        $this->cname3 = $cname3;
    }

    /**
     * @return string
     */
    public function getCphone()
    {
        return $this->cphone;
    }

    /**
     * @param string $cphone
     */
    public function setCphone($cphone)
    {
        $this->cphone = $cphone;
    }

    /**
     * @return string
     */
    public function getCemail()
    {
        return $this->cemail;
    }

    /**
     * @param string $cemail
     */
    public function setCemail($cemail)
    {
        $this->cemail = $cemail;
    }

    /**
     * @return string
     */
    public function getInfo2()
    {
        return $this->info2;
    }

    /**
     * @param string $info2
     */
    public function setInfo2($info2)
    {
        $this->info2 = $info2;
    }

    /**
     * @return string
     */
    public function getRname2()
    {
        return $this->rname2;
    }

    /**
     * @param string $rname2
     */
    public function setRname2($rname2)
    {
        $this->rname2 = $rname2;
    }

    /**
     * @return string
     */
    public function getRphone()
    {
        return $this->rphone;
    }

    /**
     * @param string $rphone
     */
    public function setRphone($rphone)
    {
        $this->rphone = $rphone;
    }

    /**
     * @return string
     */
    public function getRemail()
    {
        return $this->remail;
    }

    /**
     * @param string $remail
     */
    public function setRemail($remail)
    {
        $this->remail = $remail;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'cname' => $this->getCname(),
            'cname1' => $this->getCname1(),
            'cname2' => $this->getCname2(),
            'cname3' => $this->getCname3(),
            'cstreet' => $this->getCstreet(),
            'ccountry' => $this->getCcountry(),
            'cpostal' => $this->getCpostal(),
            'ccity' => $this->getCcity(),
            'cphone' => $this->getCphone(),
            'cemail' => $this->getCemail(),
            'info1' => $this->getInfo1(),
            'info2' => $this->getInfo2(),
            'rname' => $this->getRname(),
            'rname2' => $this->getRname2(),
            'rstreet' => $this->getRstreet(),
            'rpostal' => $this->getRpostal(),
            'rcountry' => $this->getRcountry(),
            'rcity' => $this->getRcity(),
            'rphone' => $this->getRphone(),
            'remail' => $this->getRemail(),
        ];
    }
}

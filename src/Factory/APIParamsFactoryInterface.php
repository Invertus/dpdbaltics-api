<?php

namespace Invertus\dpdBalticsApi\Factory;

interface APIParamsFactoryInterface
{

    /**
     * Returns DPD username
     *
     * @return string
     */
    public function getUsername();

    /**
     * returns DPD password
     *
     * @return string
     */
    public function getPassword();

    /**
     * returns DPDBaltics module version
     *
     * @return string
     */
    public function getModuleVersion();

    /**
     * Returns PrestaShop version
     *
     * @return string
     */
    public function getPSVersion();

    /**
     * @return String
     */
    public function getUrl();
}
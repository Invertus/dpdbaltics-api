<?php


namespace Invertus\dpdBalticsApi\Factory;


use Invertus\dpdBalticsApi\Api\Configuration\ApiConfigurationInterface;

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
     * @return ApiConfigurationInterface
     */
    public function getApiConfiguration();
}
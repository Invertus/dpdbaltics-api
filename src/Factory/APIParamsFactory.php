<?php


namespace Invertus\dpdBalticsApi\Factory;


use Invertus\dpdBalticsApi\Api\Configuration\ApiConfiguration;
use Invertus\dpdBalticsApi\Api\Configuration\ApiConfigurationInterface;

class APIParamsFactory implements APIParamsFactoryInterface
{

    /**
     * Returns DPD username
     *
     * @return string
     */
    public function getUsername()
    {
        return getenv('DPD_USERNAME');
    }

    /**
     * returns DPD password
     *
     * @return string
     */
    public function getPassword()
    {
        return getenv('DPD_PASSWORD');
    }

    /**
     * returns DPDBaltics module version
     *
     * @return string
     */
    public function getModuleVersion()
    {
        return '1.0.0';
    }

    /**
     * Returns PrestaShop version
     *
     * @return string
     */
    public function getPSVersion()
    {
        return _PS_VERSION_;
    }

    /**
     * @return ApiConfigurationInterface
     */
    public function getApiConfiguration()
    {
        return new ApiConfiguration();
    }
}
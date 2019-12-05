<?php

namespace Invertus\dpdBalticsApi\ApiConfig;

class DPDGroupApiConfig
{

    const TEST_URL_LV = 'https://lv.integration.dpd.eo.pl';

    const USERNAME = 'DPD_USERNAME';
    const PASSWORD = 'SAFERPAY_PASSWORD';


    public function getUrl()
    {
        return self::TEST_URL_LV;
    }
}

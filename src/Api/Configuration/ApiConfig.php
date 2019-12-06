<?php

namespace Invertus\dpdBalticsApi\Api\Configuration;

use Invertus\dpdBalticsApi\ApiConfig\DPDGroupApiConfig;

class ApiConfig implements ApiConfigInterface
{

    public function getUrl()
    {
        return DPDGroupApiConfig::TEST_URL_LV;
    }
}

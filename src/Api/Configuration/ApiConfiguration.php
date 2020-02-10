<?php

namespace Invertus\dpdBalticsApi\Api\Configuration;

use Invertus\dpdBalticsApi\ApiConfig\ApiConfig;

class ApiConfiguration implements ApiConfigurationInterface
{
    public function getUrl()
    {
        return ApiConfig::TEST_URL_LV;
    }
}

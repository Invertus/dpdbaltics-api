<?php

namespace Invertus\dpdBalticsApi\Api\Configuration;

class ApiConfig implements ApiConfigInterface
{
    const SERVICE_QUERY = 'https://lv.integration.dpd.eo.pl';

    public function getUrl()
    {
        return self::SERVICE_QUERY;
        // TODO: Implement getUrl() method.
    }
}

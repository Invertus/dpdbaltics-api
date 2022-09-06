<?php

namespace Invertus\dpdBalticsApi\Exception;

use RuntimeException;

class DPDBalticsAPIException extends RuntimeException
{
    const PARCEL_SHOP_SEARCH = 0;

    const SHIPMENT_CREATION = 1;

    const PARCEL_PRINT = 2;

    const CLOSING_MANIFEST = 3;

    const COLLECTION_REQUEST = 4;

    const COURIER_REQUEST = 5;
}
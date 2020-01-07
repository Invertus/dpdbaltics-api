<?php

namespace Invertus\dpdBalticsApi\ApiConfig;

class DPDGroupApiConfig
{
    const TEST_URL_LV = 'https://lv.integration.dpd.eo.pl';

    const SQ_PARCEL_SHOP_SEARCH = '/ws-mapper-rest/parcelShopSearch_';

    const SQ_SHIPMENT_CREATION = '/ws-mapper-rest/createShipment_';

    const SQ_PARCEL_PRINT = '/ws-mapper-rest/parcelPrint_';

    const SQ_CLOSING_MANIFEST = '/ws-mapper-rest/parcelManifestPrint_';

    const SQ_COURIER_REQUEST= '/ws-mapper-rest/pickupOrderSave_';

    const SQ_COLLECTION_REQUEST = '/ws-mapper-rest/crImport_';
}

<?php


namespace Invertus\dpdBalticsApi\Factory;


Interface SerializeFactoryInterface
{
    /**
     * Create serializer and normalizer
     *
     * SerializeFactoryInterface constructor.
     */
    public function __construct();

    /**
     * Serialize object to any format
     *
     * @param $object
     * @return mixed
     */
    public function serialize($object);

    /**
     * Deserialize any format(JSON,XML,...) to object
     * To deserialize object needs to have getters and setters with comments that tells what is inserted or returned
     * @Example @param ParcelShop[] $parcelShops
     *
     * @param $responseObject
     * @param $className
     * @return mixed
     */
    public function deserialize($responseObject, $className);
}
<?php


namespace Invertus\dpdBalticsApi\Factory;


Interface ISerializeFactory
{
    /**
     * Create serializer and normalizer
     *
     * ISerializeFactory constructor.
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
     * Deserialize any format to object
     *
     * @param $responseObject
     * @param $className
     * @return mixed
     */
    public function deserialize($responseObject, $className);
}
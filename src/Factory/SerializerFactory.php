<?php

namespace Invertus\dpdBalticsApi\Factory;

use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SerializerFactory implements SerializeFactoryInterface
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var ObjectNormalizer
     */
    private $normalizer;

    public function __construct()
    {
        $normalizer = new ObjectNormalizer(null, null, null, new ReflectionExtractor());
        $this->serializer = new Serializer([new DateTimeNormalizer(), $normalizer, new ArrayDenormalizer()]);

        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $this->normalizer = new ObjectNormalizer(null, null, null, $extractor);
        $this->normalizer->setSerializer($this->serializer);
    }

    /**
     * Serialize object to json
     *
     * @param $object
     * @return bool|float|int|string
     */
    public function serialize($object)
    {
        return $this->serializer->serialize($object, 'json');
    }

    /**
     * Deserialize json to object
     *
     * @param $responseObject
     * @param $className
     * @return array|object
     */
    public function deserialize($responseObject, $className)
    {
        return $this->normalizer->denormalize(json_decode($responseObject), $className);
    }
}
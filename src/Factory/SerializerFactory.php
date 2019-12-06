<?php


namespace Invertus\dpdBalticsApi\Factory;


use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SerializerFactory
{
    public $serializer;

    public function __construct()
    {
//        $encoders = [new XmlEncoder(), new JsonEncoder()];
//        $normalizers = [new ObjectNormalizer(null, null, null, new ReflectionExtractor()), new ArrayDenormalizer()];
//
//        $this->serializer = new Serializer($normalizers, $encoders);

        $normalizer = new ObjectNormalizer(null, null, null, new ReflectionExtractor());
        $this->serializer = new Serializer([new DateTimeNormalizer(), $normalizer]);
    }

    public function serialize($object)
    {
        return $this->serializer->serialize($object, 'json');
    }

    public function deserialize($object, $className)
    {
        return $this->serializer->denormalize(json_decode($object), $className);
    }
}
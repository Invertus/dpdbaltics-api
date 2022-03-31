<?php

use Invertus\dpdBalticsApi\Utilities\ArrayUtility;
use PHPUnit\Framework\TestCase;

class ArrayUtilityTest extends TestCase
{
    /**
     * @dataProvider getTestaleArray
     */
    public function test_if_array_keys_removed_correctly($testableArray, $expectedResult)
    {
        $this->assertSame(
            $expectedResult,
            ArrayUtility::removeKeysWithEmptyValues($testableArray)
        );
    }

    /**
     * @return Generator
     */
    public function getTestaleArray()
    {
        yield 'Ofline order agent valid type' => [
            [
                'string' => 'value',
                'integer' => 10,
                'empty_string' => "",
                'null' => null,
                'false' => false,
                'true' => true,
                'zero' => 0
            ],
            [
                'string' => 'value',
                'integer' => 10,
                'true' => true,
            ]
        ];
    }
}

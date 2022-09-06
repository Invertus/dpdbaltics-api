<?php

use Invertus\dpdBalticsApi\Utilities\ArrayUtility;
use PHPUnit\Framework\TestCase;

class ArrayUtilityTest extends TestCase
{
    /**
     * @dataProvider getTestableArray
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
    public function getTestableArray()
    {
        yield 'Test if array keys removed correctly ' => [
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

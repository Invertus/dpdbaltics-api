<?php

use Invertus\dpdBalticsApi\Utilities\ArrayUtility;
use PHPUnit\Framework\TestCase;

class ArrayUtilityTest extends TestCase
{
    const TESTABLE_ARRAY = [
        'string' => 'value',
        'integer' => 10,
        'empty_string' => "",
        'null' => null,
        'false' => false,
        'true' => true,
        'zero' => 0
    ];

    const EXPECTED_RESULT = [
        'string' => 'value',
        'integer' => 10,
        'true' => true,
    ];



    public function test_if_array_keys_removed_correctly()
    {
        $this->assertSame(
            self::EXPECTED_RESULT,
            ArrayUtility::removeKeysWithEmptyValues(self::TESTABLE_ARRAY)
        );
    }
}
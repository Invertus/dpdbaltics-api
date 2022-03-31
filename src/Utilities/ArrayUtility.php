<?php

namespace Invertus\dpdBalticsApi\Utilities;

class ArrayUtility
{
    /**
     * @param $array
     *
     * @return array
     *
     * @internal Function removes all keys with empty values
     */
    public static function removeKeysWithEmptyValues($array)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = self::removeKeysWithEmptyValues($value);
            }

            if (empty($array[$key])) {
                unset($array[$key]);
            }
        }

        return $array;
    }
}

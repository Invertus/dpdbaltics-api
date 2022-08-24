<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace Bolt\Module\Api\Helper;

class AssertMessage
{
    public static function string($field)
    {
        return 'The ' . $field . ' field must be string. Got: %s';
    }

    public static function integer($field)
    {
        return 'The ' . $field . ' field must be integer. Got: %s';
    }

    public static function nullOrInteger($field)
    {
        return 'The ' . $field . ' field must be null or integer. Got: %s';
    }

    public static function nullOrString($field)
    {
        return 'The ' . $field . ' field must be null or string. Got: %s';
    }

    public static function isInstanceOf($field)
    {
        return 'The ' . $field . ' field must be instance of %2$s. Got: %s';
    }

    public static function nullOrIsInstanceOf($field)
    {
        return 'The ' . $field . ' field must be null or instance of %2$s. Got: %s';
    }

    public static function oneOf($field)
    {
        return 'The ' . $field . ' field must be one of %2$s. Got: %s';
    }

    public static function boolean($field)
    {
        return 'The ' . $field . ' field must boolean. Got: %s';
    }

    public static function nullOrBoolean($field)
    {
        return 'The ' . $field . ' field must null or boolean. Got: %s';
    }

    public static function length($field)
    {
        return 'The ' . $field . ' field must be %2$s characters length. Got: %s';
    }

    public static function nullOrIsArray($field)
    {
        return 'The ' . $field . ' field must be null or array. Got: %s';
    }
}

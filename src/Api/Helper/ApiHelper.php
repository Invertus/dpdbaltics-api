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

namespace Invertus\dpdBalticsApi\Api\Helper;

use Bolt\Module\Api\Exception\CouldNotHandleApiRequest;
use InvalidArgumentException;

class ApiHelper
{
    /**
     * Replaces template parameters in the given url
     *
     * @param string $url The query string builder to replace the template parameters
     * @param array $parameters The parameters to replace in the url
     * @param bool $encode Should parameters be URL-encoded?
     *
     * @return string The processed url
     */
    public static function appendUrlWithTemplateParameters($url, array $parameters, $encode = true)
    {
        foreach ($parameters as $key => $value) {
            $replaceValue = '';

            if (is_null($value)) {
                $replaceValue = '';
            } elseif (is_array($value)) {
                $val = array_map('strval', $value);
                $val = $encode ? array_map('urlencode', $val) : $val;
                $replaceValue = implode('/', $val);
            } else {
                $val = strval($value);
                $replaceValue = $encode ? urlencode($val) : $val;
            }

            $url = str_replace('{' . strval($key) . '}', $replaceValue, $url);
        }

        return $url;
    }

    /**
     * Appends the given set of parameters to the given query string
     *
     * @param string $queryBuilder The query url string to append the parameters
     * @param array $parameters The parameters to append
     */
    public static function appendUrlWithQueryParameters(&$queryBuilder, $parameters)
    {
        //perform parameter validation
        if (is_null($queryBuilder) || !is_string($queryBuilder)) {
            throw new InvalidArgumentException('Given value for parameter "queryBuilder" is invalid.');
        }
        if (is_null($parameters)) {
            return;
        }
        //does the query string already has parameters
        $hasParams = (strrpos($queryBuilder, '?') > 0);

        //if already has parameters, use the &amp; to append new parameters
        $queryBuilder = $queryBuilder . (($hasParams) ? '&' : '?');

        //append parameters
        $queryBuilder = $queryBuilder . http_build_query($parameters);
    }

    /**
     * Validates and processes the given Url
     *
     * @param string $url The given Url to process
     *
     * @return string Pre-processed Url as string
     */
    public static function cleanUrl($url)
    {
        //perform parameter validation
        if (is_null($url) || !is_string($url)) {
            throw new InvalidArgumentException('Invalid Url.');
        }
        //ensure that the urls are absolute
        $matchCount = preg_match('#^(https?://[^/]+)#', $url, $matches);
        if ($matchCount == 0) {
            throw new InvalidArgumentException('Invalid Url format.');
        }
        //get the http protocol match
        $protocol = $matches[1];

        //remove redundant forward slashes
        $query = substr($url, strlen($protocol));
        $query = preg_replace('#//+#', '/', $query);

        //return process url
        return $protocol . $query;
    }

    /**
     * Merge headers
     *
     * Header names are compared using case-insensitive comparison. This method
     * preserves the original header name. If the $newHeaders overrides an existing
     * header, then the new header name (with its casing) is used.
     */
    public static function mergeHeaders(array $headers, array $newHeaders)
    {
        $headerKeys = [];

        // Create a map of lower-cased-header-name to original-header-names
        foreach ($headers as $headerName => $val) {
            $headerKeys[\strtolower($headerName)] = $headerName;
        }

        // Override headers with new values
        foreach ($newHeaders as $headerName => $headerValue) {
            $lowerCasedName = \strtolower($headerName);
            if (isset($headerKeys[$lowerCasedName])) {
                unset($headers[$headerKeys[$lowerCasedName]]);
            }
            $headerKeys[$lowerCasedName] = $headerName;
            $headers[$headerName] = $headerValue;
        }

        return $headers;
    }

    /**
     * @throws CouldNotHandleApiRequest
     */
    public static function jsonEncode($data, $flag = 0)
    {
        if (!function_exists('json_encode')) {
            throw CouldNotHandleApiRequest::jsonExtensionNotAvailable();
        }

        return json_encode($data, $flag);
    }

    /**
     * @throws CouldNotHandleApiRequest
     */
    public static function jsonDecode($data, $associative = false, $flag = 0)
    {
        if (!function_exists('json_decode')) {
            throw CouldNotHandleApiRequest::jsonExtensionNotAvailable();
        }

        return json_decode($data, $associative, 512, $flag);
    }
}

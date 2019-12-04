<?php
/**
* 2007-2019 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/OSL-3.0
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    INVERTUS UAB www.invertus.eu <support@invertus.eu>
* @copyright SIX Payment Services Limited
* @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace dpdGroupBalticsApi\Api\Request;


use dpdGroupBalticsApi\Factory\HttpClientFactory;

class ApiRequest
{
    /**
     * @var HttpClientFactory
     */
    private $clientFactory;

    /**
     * ApiRequest constructor.
     * @param HttpClientFactory $clientFactory
     */
    public function __construct(HttpClientFactory $clientFactory)
    {
        $this->clientFactory = $clientFactory;
    }

    /**
     * API Request Post Method.
     *
     * @param string $url
     * @param array $params
     * @return array
     * @throws \Exception
     */
    public function post($url, $params = [])
    {
        $response = null;

        try {
            $response = $this->clientFactory->getClient()->post($url, $params);

            return $response ?: [];
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    public function get($url, $params = [])
    {
        $response = null;

        try {
            $response = $this->clientFactory->getClient()->get($url, $params);

            return $response ?: [];
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}

<?php

/**
 * @category   Amconnector
 * @package    Kensium_Amconnector
 * @copyright  Copyright (c) 2016 Kensium Solution Pvt.Ltd. (http://www.kensiumsolutions.com/)
 */
namespace Acumatica\Common\Config;

class Common
{

    static  $endpointUrlWsdl = 'entity/KemsConfig/6.00.001?wsdl';
    static $basicDefaultUrl = 'entity/Default/6.00.001?wsdl';
    static $endpointUrl = 'entity/KemsConfig/6.00.001.asmx';

    /**
     * @param $serverUrl
     * @return string
     */
    public function getBasicConfigUrl($serverUrl)
    {
        return $serverUrl . self::$endpointUrlWsdl;
    }

    /**
     * @param $serverUrl
     * @return string
     */
    public function getBasicDefaultConfigUrl($serverUrl)
    {
        return $serverUrl . self::$basicDefaultUrl;
    }

    /**
     * @param $serverUrl
     * @return string
     */
    public function getBasicConfigNormalUrl($serverUrl)
    {
        return $serverUrl . self::$endpointUrl;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 22-05-2017
 * Time: 11:06
 */
namespace Acumatica\Connector\Connection;
use Acumatica\Connector\Connection\ConnectionDefinitionAbstract;

class WSDLClientDefinition extends ConnectionDefinitionAbstract
{
    public function __construct()
    {
        $this->url = ""; //This will be passed from Magento.
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 22-05-2017
 * Time: 09:51
 */
namespace Kmage\Services\Connector\Connection;
use Kmage\Services\Connector\Connection\ConnectionDefinitionAbstract;

class NoWSDLClientDefinition extends ConnectionDefinitionAbstract
{
    public function __construct()
    {
        $this->url = "http://acmdev.baccahq.com/ACM61/entity/KemsConfig/6.00.001"; //Read this from Configurations based on the Calls....
    }
}
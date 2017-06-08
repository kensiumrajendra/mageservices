<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 22-05-2017
 * Time: 15:00
 */

namespace Kmage\Services\Connector\Service;

use Kmage\Services\Connector\Connection\SOAPClient;
use Kmage\Services\Connector\Connection\WSDLClientDefinition;

class AcumaticaSession implements AcumaticaSessionInterface
{
    public $client;
    //Store Cookie variables here..
    public function __construct()
    {
        //$WSDLClient = new WSDLClientDefinition($baseConfig->url);
        //$this->client = new SOAPClient($WSDLClient);
    }
    public function login(LoginDefinitionAbstract $clientObj)
    {
       // $cookies = $this->client->callRequest($clientObj);
        //return $cookies;
    }
    public function logout()
    {

    }

}
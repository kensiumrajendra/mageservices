<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 22-05-2017
 * Time: 15:00
 */

namespace Acumatica\Connector\Service;

use Acumatica\Connector\Connection\SOAPClient;
use Acumatica\Connector\Connection\WSDLClientDefinition;

class AcumaticaSessionWsdlSoap implements AcumaticaSessionInterface
{
    public $client;
    //Store Cookie variables here..
    public function __construct()
    {
        //$WSDLClient = new WSDLClientDefinition($baseConfig->url);
        //$this->client = new SOAPClient($WSDLClient);
    }
    public function login()
    {
       // $cookies = $this->client->callRequest($clientObj);
        //return $cookies;
    }
    public function logout()
    {

    }

}
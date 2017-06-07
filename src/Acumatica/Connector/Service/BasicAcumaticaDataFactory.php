<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 03-06-2017
 * Time: 15:41
 */
namespace Acumatica\Connector\Service;

use Acumatica\Connector\Service\AcumaticaSessionInterface;

class BasicAcumaticaDataFactory
{
    static function setBasicAcumaticaDataService($method, $session)
    {
        switch($method)
        {
            case "NoWSDL":
                return new \Acumatica\Connector\Service\BasicAcumaticaDataNoWsdlSoapClient($session);
            case "SOAP":
                // return new CustomerSOAPClient();

        }
    }
}
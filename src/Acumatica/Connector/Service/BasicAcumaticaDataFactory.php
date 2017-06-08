<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 03-06-2017
 * Time: 15:41
 */
namespace Kmage\Services\Connector\Service;

use Kmage\Services\Connector\Service\AcumaticaSessionInterface;

class BasicAcumaticaDataFactory
{
    static function setBasicAcumaticaDataService($method, $session)
    {
        switch($method)
        {
            case "NoWSDL":
                return new \Kmage\Services\Connector\Service\BasicAcumaticaDataNoWsdlSoapClient($session);
            case "SOAP":
                // return new CustomerSOAPClient();

        }
    }
}
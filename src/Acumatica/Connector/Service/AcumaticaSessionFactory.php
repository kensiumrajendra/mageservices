<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 20-05-2017
 * Time: 21:51
 */
namespace Acumatica\Connector\Service;

use Acumatica\Connector\Service\AcumaticaSessionInterface;

class AcumaticaSessionFactory
{
    static function setAcumaticaSessionFactoryService($method)
    {
        echo "SSSSSSSSSSSS";
        switch($method)
        {
            case "WSDL":
                if(class_exists(\Acumatica\Connector\Service\AcumaticaSessionWsdlSoap())) {
                    return new \Acumatica\Connector\Service\AcumaticaSessionWsdlSoap();
                }
            case "SOAP":
                // return new CustomerSOAPClient();

        }
    }
}
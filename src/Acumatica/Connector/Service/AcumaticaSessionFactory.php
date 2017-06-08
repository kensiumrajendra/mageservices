<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 20-05-2017
 * Time: 21:51
 */
namespace Kmage\Services\Connector\Service;

use Kmage\Services\Connector\Service\AcumaticaSessionInterface;

class AcumaticaSessionFactory
{
    static function setAcumaticaSessionFactoryService($method)
    {
        // echo "SSSSSSSSSSSS";
        switch($method)
        {
            case "WSDL":
                    return new \Kmage\Services\Connector\Service\AcumaticaSessionWsdlSoap();
              case "SOAP":
                // return new CustomerSOAPClient();

        }
    }
}
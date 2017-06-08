<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 20-05-2017
 * Time: 21:51
 */
namespace Kmage\Services\Connector\Service;

class CustomerFactory
{
    static function setCustomerService($method)
    {
        switch($method)
        {
            case "NoWSDL":
                return new \Kmage\Services\Connector\Service\CustomerNoWSDLSOAPClient();
            case "SOAP":
                // return new CustomerSOAPClient();

        }
    }
}
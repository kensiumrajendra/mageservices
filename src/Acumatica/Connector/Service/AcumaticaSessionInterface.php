<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 22-05-2017
 * Time: 14:02
 */
namespace Acumatica\Connector\Service;

interface AcumaticaSessionInterface
{
    /**
     * This function will make sure One Login session per Connection
     * @param ClientDefinitionAbstract $clientObj// ClientDefinition is like Data Layer Abstract.
     * @return clientObj/ConnectionObj
     */
    public function login();

    /**
     * This function is going to prepare a request in callable format
     * @return mixed
     */
    public function logout();


}
<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 17-05-2017
 * Time: 20:27
 */
namespace Kmage\Services\Connector\Connection;

/**
 * This interface is implemented in Regular SOAP, SOAP with No WSDL, REST, Database and etc implementations
 * Interface ClientInterface
 * @package Kensium\acumaticaconnector\Connection
 */
interface ConnectionInterface {
    /**
     * This is for Setting the Client. In case of SOAP we may create a SOAP Client based on WSDL. For REST just define the URL
     * @param ClientDefinitionAbstract $clientObj// ClientDefinition is like Data Layer Abstract.
     * @return clientObj/ConnectionObj
     */
    public function setConnection(ClientDefinitionAbstract $clientObj);

    /**
     * This function is going to prepare a request in callable format
     * @param RequestAbstract $requestObj // Data Layer Object.
     * @return mixed
     */
    public function prepareRequest(RequestAbstract $requestObj);

    /**
     * This function is going to call the Server with a prepared request Object
     * @param $request // Usually this is String, but in case of SQL, it may be a ResultSet.
     * @return array
     */
    public function callRequest($request);

    /**
     * This function consumes request in respective format and returns the Data Layer Object.
     * @param $response // Usually this is String, but in case of SQL, it may be a ResultSet.
     * @return ResponseAbstract // Data Layer Object.
     */
    public function parseResponse($response);

}
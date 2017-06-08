<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 17-05-2017
 * Time: 21:33
 */
namespace Kmage\Services\Connector\Connection;

/**
 * This class implements ClientService for SOAP with WSDLs.
 * Class SOAPClient
 * @package Kensium\acumaticaconnector\Connection
 */

class SOAPClient implements ConnectionInterface{

    private $_connection;
    /**
     * This is for Setting the Client. Setup the Client with core PHP SOAP
     * @param ClientDefinitionAbstract $clientObj// ClientDefinition is like Data Layer Abstract.
     * @return $returnArray //with Exceptions OR SOAP Client Object
     */
    public function setConnection(ClientDefinitionAbstract $clientObj)
    {
        $returnArray = array();
        //Log("AMCApp: ".ClientDefinitionAbstract);
        try {

            $this->_soapClient = new \SoapClient($url);
            // $this->_connection = PHP SOAP Client.

            // LOG("AMCApp: WSDL After set to Client ".$this->_connection->getWSDL());
            $returnArray['client'] = $this->_connection;
        }
        catch(\Exception $e){
            //LOG("AMCApp: Can not set Client with Exceptions ->".$e->getCode(). ":".$e->getMessage());
            $returnArray['exceptions']['message'] = $e->getMessage();
            $returnArray['exceptions']['code'] = $e->getCode();
        }
        return $returnArray;
    }

    /**
     * This function is going to prepare a request in callable format
     * @param RequestAbstract $requestObj // Data Layer Object.
     * @return $returnArray //with Exceptions OR Request Array
     */
    public function prepareRequest(RequestAbstract $requestObj)
    {
        $returnArray = array();
        //LOG("AMCApp: ". RequestAbstract);
        try {
            //Convert Object to Array or XML String.
            $requestArray = array();
            $returnArray['soapRequest'] = $requestArray;
        }
        catch(\Exception $e){
           // LOG("AMCApp: Can not prepare request with Exceptions ->".$e->getCode(). ":".$e->getMessage());
            $returnArray['exceptions']['message'] = $e->getMessage();
            $returnArray['exceptions']['code'] = $e->getCode();
        }
        return $returnArray;
    }

    /**
     * This function is going to call the Server with a prepared request Object
     * @param $request // This is a String.
     * @return $returnArray //with Exceptions OR Request Array
     */
    public function callRequest($request)
    {
        $returnArray = array();
        //LOG("AMC: ". json_encode($request));
        try {
            $this->_client->__call($request['method'], $request['parameters']);
            //Make a SOAP CALL
            // LOG("AMCApp: LastRequestHeaders::".$this->_client->getLastRequestHeaders());
            // LOG("AMCApp: LastRequest::".$this->_client->getLastRequest());
            // LOG("AMCApp: ".print_r($this->_client, true));
        }
        catch(\Exception $e){
            //LOG("AMCApp: Can not make a call with Exceptions ->".$e->getCode(). ":".$e->getMessage());
            $returnArray['exceptions']['message'] = $e->getMessage();
            $returnArray['exceptions']['code'] = $e->getCode();
        }
        return $returnArray;


    }

    /**
     * This function consumes request in respective format and returns the Data Layer Object.
     * @param $response // Usually this is String, but in case of SQL, it may be a ResultSet.
     * @return ResponseAbstract // Data Layer Object.
     */
    public function parseResponse($response)
    {
        $returnArray = array();
        //LOG("AMCApp: Response String::".$response);

        try {
            //This will parse Array/XML Response to PHP Array.
        }
        catch(\Exception $e){
            //LOG("AMCApp: Can not make a call with Exceptions ->".$e->getCode(). ":".$e->getMessage());
            $returnArray['exceptions']['message'] = $e->getMessage();
            $returnArray['exceptions']['code'] = $e->getCode();
        }
        return $returnArray;
    }
}
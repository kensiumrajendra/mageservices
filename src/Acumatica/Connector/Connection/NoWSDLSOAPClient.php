<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 18-05-2017
 * Time: 15:17
 */

namespace Acumatica\Connector\Connection;

/**
 * This class implements ClientService for SOAP with WSDLs.
 * Class SOAPClient
 * @package Kensium\acumaticaconnector\Connection
 */

class NoWSDLSOAPClient implements ConnectionInterface{

    private $_connection;
    /**
     * This is for Setting the Client. Setup the Client with core PHP SOAP
     * @param ClientDefinitionAbstract $clientObj// ClientDefinition is like Data Layer Abstract.
     * @return $returnArray //with Exceptions OR SOAP Client Object
     */
    public function setConnection(ClientDefinitionAbstract $clientObj)
    {
        $returnArray = array();
        //LOG::("AMC: ".$clientObj->url);
        try {

            $this->_connection = new \SoapClient($clientObj->url);
            //LOG::("acumaticaconnector: WSDL After set to Client ".$this->_client->getWSDL());

            $returnArray['client'] = $this->_connection;
        }
        catch(\Exception $e){
            //LOG("acumaticaconnector: Can not set Client with Exceptions ->".$e->getCode(). ":".$e->getMessage());
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
        //LOG("acumaticaconnector: ". RequestAbstract);
        try {
            //Convert Object to Array or XML String.
            $request = ""; //XML Envelop
            $returnArray['soapRequest'] = $request;
        }
        catch(\Exception $e){
            // LOG("acumaticaconnector: Can not prepare request with Exceptions ->".$e->getCode(). ":".$e->getMessage());
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
        //LOG("acumaticaconnector: ". json_encode($request));
        try {
            $this->_client->call($request['method'], $request['parameters']);
            //Make a SOAP CALL
            //LOG("acumaticaconnector: LastRequestHeaders::".$this->_client->getLastRequestHeaders());
            //LOG("acumaticaconnector: LastRequest::".$this->_client->getLastRequest());
            //LOG("acumaticaconnector: ".print_r($this->_client, true));
        }
        catch(\Exception $e){
            //LOG("acumaticaconnector: Can not make a call with Exceptions ->".$e->getCode(). ":".$e->getMessage());
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
        //LOG("acumaticaconnector: Response String::".$response);

        try {
            //This will parse Array/XML Response to Data Layer Object.
        }
        catch(\Exception $e){
            //LOG("acumaticaconnector: Can not make a call with Exceptions ->".$e->getCode(). ":".$e->getMessage());
            $returnArray['exceptions']['message'] = $e->getMessage();
            $returnArray['exceptions']['code'] = $e->getCode();
        }
        return $returnArray;
    }
}
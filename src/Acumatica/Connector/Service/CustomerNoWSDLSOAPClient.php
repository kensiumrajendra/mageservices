<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 18-05-2017
 * Time: 14:57
 */
namespace Acumatica\Connector\Service;

use Kensium\Acumatica\Dto\CustomerData;
use Acumatica\Connector\Connection\NoWSDLSOAPClient;

/**
 * Class CustomerNoWSDLSOAPClient
 * Implements CustomerInterface
 * @package Kensium\acumaticaconnector\Service
 */
class CustomerNoWSDLSOAPClient implements CustomerInterface
{
    private $_client;
    private $_session;
    public function __construct(AcumaticaSessionInterface $session, NoWSDLSOAPClient $client)
    {
        $this->_session = $session;
        $this->_client = $client;
    }

    /**
     * @param $id
     * @return \Kensium\Magento\Data\CustomerData Object
     */
    public function getCustomerById($id)
    {
        try{
            //Call $this->_client prepareRequest
            //Call $this->_client callRequest
            //Call $this->_client parseResponse

            //Catch All Exceptions
            //If no exceptions it will create object for CustomerData
        }catch(Exception $e)
        {

        }
    }

    /**
     * @param $email
     * @return \Kensium\Magento\Data\CustomerData Object
     */
    public function getCustomerByEmail($email)
    {
        try{
            //Call $this->_client prepareRequest
            //Call $this->_client callRequest
            //Call $this->_client parseResponse

            //Catch All Exceptions
            //If no exceptions it will create object for CustomerData
        }catch(Exception $e)
        {

        }
    }

    /**
     * @param $fromDate
     * @param null $toDate
     * @return \Kensium\Magento\Data\CustomerData Object
     */
    public function getCustomers ($fromDate, $toDate = null)
    {
        try{
            //Call $this->_client prepareRequest
            //Call $this->_client callRequest
            //Call $this->_client parseResponse

            //Catch All Exceptions
            //If no exceptions it will create object for CustomerData
        }catch(Exception $e)
        {

        }
    }

    /**
     * @param CustomerData $customerObj
     * @return \Kensium\Magento\Data\CustomerData Object
     */
    public function createCustomer(CustomerData $customerObj)
    {
        try{
            //Call $this->_client prepareRequest
            //Call $this->_client callRequest
            //Call $this->_client parseResponse

            //Catch All Exceptions
            //If no exceptions it will create object for CustomerData
        }catch(Exception $e)
        {

        }
    }

    /**
     * @return array // Array of fields.
     */
    public function getCustomerSchema()
    {
        try{
            //Call $this->_client prepareRequest
            //Call $this->_client callRequest
            //Call $this->_client parseResponse

            //Catch All Exceptions
            //If no exceptions it will return the Array of Attributes
        }catch(Exception $e)
        {

        }

    }
}
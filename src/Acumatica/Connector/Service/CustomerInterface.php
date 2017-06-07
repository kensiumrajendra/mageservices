<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 18-05-2017
 * Time: 14:18
 */
namespace Acumatica\Connector\Service;
use Acumatica\Connector\Service\CustomerData;

/**
 * This interface is implemented in CustomerSOAPClient, CustomerNoWSDLSOAPClient and etc..
 * Interface CustomerInterface
 * @package Kensium\acumaticaconnector\Service
 */
interface CustomerInterface
{
    /**
     * @param $id
     * @return \Kensium\Magento\Data\CustomerData Object
     */
    public function getCustomerById($id);

    /**
     * @param $email
     * @return \Kensium\Magento\Data\CustomerData Object
     */
    public function getCustomerByEmail($email);

    /**
     * @param $fromDate
     * @param null $toDate
     * @return \Kensium\Magento\Data\CustomerData Object
     */
    public function getCustomers ($fromDate, $toDate = null);

    /**
     * @param CustomerData $customerObj
     * @return \Kensium\Magento\Data\CustomerData Object
     */
    public function createCustomer (CustomerData $customerObj);

    /**
     * @return array // Array of fields.
     */
    public function getCustomerSchema();
}
<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 05-06-2017
 * Time: 09:45
 */
namespace Acumatica\Connector\Service;
use Acumatica\Connector\Service\BasicAcumaticaDataInterface;

class BasicAcumaticaDataNoWsdlSoapClient implements BasicAcumaticaDataInterface
{
   public function __construct($session)
   {

   }

    public function getWarehouseList()
    {

    }

    /**
     * @return mixed
     */
    public function getDefaultCustomerClass()
    {

    }

    /**
     * @return mixed
     */
    public function getDefaultCustomerTerms()
    {

    }

    /**
     * @return mixed
     */
    public function getDefaultCustomerStatementCycle()
    {

    }

    /**
     * @return mixed
     */
    public function getDefaultSalesAccount()
    {

    }

    /**
     * @return mixed
     */
    public function getDefaultPaymentMethod()
    {

    }
}
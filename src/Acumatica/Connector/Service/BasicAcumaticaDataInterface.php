<?php
/**
 * Created by PhpStorm.
 * User: Shyamm
 * Date: 05-06-2017
 * Time: 08:54
 */
namespace Acumatica\Connector\Service;


interface BasicAcumaticaDataInterface
{
    /**
     * @return mixed
     */
    public function getWarehouseList();

    /**
     * @return mixed
     */
    public function getDefaultCustomerClass();

    /**
     * @return mixed
     */
    public function getDefaultCustomerTerms();

    /**
     * @return mixed
     */
    public function getDefaultCustomerStatementCycle();

    /**
     * @return mixed
     */
    public function getDefaultSalesAccount();

    /**
     * @return mixed
     */
    public function getDefaultPaymentMethod();
}
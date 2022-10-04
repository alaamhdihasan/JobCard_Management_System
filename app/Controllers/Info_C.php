<?php

namespace App\Controllers;

class Info_C extends BaseController
{
    public function __construct()
    {
        $this->db = db_connect();
       
    }
    public function getState()
    {

        $data = $this->db->query("Jc_Sp_GetState")->getResult();
        return $data;
    }
    public function getKind()
    {
        
        $data = $this->db->query("Jc_Sp_GetKind")->getResult();
        return $data;
    }
    public function getBrand()
    {

        $data = $this->db->query("Jc_Sp_GetBrand")->getResult();
        return $data;
    }

    public function getCarType()
    {

        $data = $this->db->query("Jc_Sp_GetCarType")->getResult();
        return $data;
    }

    public function getDriverName()
    {
        $data = $this->db->query("Jc_Sp_GetDriverName")->getResult();
        return $data;
    }

    public function getColor()
    {

        $data = $this->db->query("Jc_Sp_GetColor")->getResult();
        return $data;
    }
    public function getCompany()
    {
        
        $data = $this->db->query("Jc_Sp_GetCompany")->getResult();
        return $data;
    }
    public function getCurrency()
    {

        $data = $this->db->query("Jc_Sp_GetCurrency")->getResult();
        return $data;
    }
    public function getModel()
    {

        $data = $this->db->query("Jc_Sp_GetModel")->getResult();
        return $data;
    }
    public function getSide()
    {

        $data = $this->db->query("Jc_Sp_GetSide")->getResult();
        return $data;
    }
    public function getUnit()
    {

        $data = $this->db->query("Jc_Sp_GetUnit")->getResult();
        return $data;
    }
    public function getWorkshop()
    {

        $data = $this->db->query("Jc_Sp_GetWorkshop")->getResult();
        return $data;
    }
    public function getPermission()
    {

        $data = $this->db->query("Jc_Sp_GetPermission")->getResult();
        return $data;
    }
    public function getWorkingPlace()
    {

        $data = $this->db->query("Jc_Sp_GetWorkingPlace")->getResult();
        return $data;
    }
    public function getSpecialization()
    {

        $data = $this->db->query("Jc_Sp_GetSpecialization")->getResult();
        return $data;
    }
    public function getGroupSales()
    {

        $data = $this->db->query("Jc_Sp_GetGroupSales")->getResult();
        return $data;
    }
    public function getCity()
    {

        $data = $this->db->query("Jc_Sp_GetCity")->getResult();
        return $data;
    }
    public function getAccount()
    {

        $data = $this->db->query("Jc_Sp_GetAccount")->getResult();
        return $data;
    }
    public function getCustomers()
    {

        $data = $this->db->query("Jc_Sp_GetCustomers")->getResult();
        return $data;
    }
    public function getMaxJobCard()
    {
        $data = $this->db->query("Jc_Sp_GetMaxJobCard")->getResult();
        return $data;
    }
    public function getJobCardInactive()
    {

        $data = $this->db->query("Jc_Sp_GetJobCardInactive")->getResult();
        return $data;
    }
    public function getCustomersByName($name)
    { 
        $data = $this->db->query("Jc_Sp_GetCustomersByName @name ='". $name ."' ")->getResult();
        return $data;
    }
    public function getTotalJobCard($jcnumber)
    {
        $data = $this->db->query("Jc_Sp_GetTotalJobcard @jcnumber =". $jcnumber ." ")->getResult();
        return $data;
    }


    // Stored Procedures for Reports...
    public function getCustomersSummary($month,$year,$workshopplace)
    {
        $data = $this->db->query("Jc_Sp_GetCustomersSummary @month='". $month ."', @year='". $year ."', @workshopplace='". $workshopplace ."'")->getResult();
        return $data;
    }
    public function getMonthName($monthnumber)
    {

        $data = $this->db->query("Jc_Sp_GetMonthName @monthnumber =". $monthnumber ." ")->getResult();
        return $data;
    }
    public function getTotal($month,$year,$workshopplace)
    {

        $data = $this->db->query("Jc_Sp_GetTotal @month='". $month ."', @year='". $year ."', @workshopplace='". $workshopplace ."'")->getResult();
        return $data;
    }
    
    public function getCarsSummary($month,$year,$workshopplace)
    {

        $data = $this->db->query("Jc_Sp_GetCarsSummary @month='". $month ."', @year='". $year ."', @workshopplace='". $workshopplace ."'")->getResult();
        return $data;
    }
    public function getItemsSummary($month,$year,$workshopplace)
    {

        $data = $this->db->query("Jc_Sp_GetItemsSummary @month='". $month ."', @year='". $year ."', @workshopplace='". $workshopplace ."'")->getResult();
        return $data;
    }

    public function getWorkShopsSummary($month,$year,$workshopplace)
    {

        $data = $this->db->query("Jc_Sp_GetWorkShopsSummary @month='". $month ."', @year='". $year ."', @workshopplace='". $workshopplace ."'")->getResult();
        return $data;
    }
    public function getCustomersWorkShopsSummary($month,$year,$workshopplace)
    {

        $data = $this->db->query("Jc_Sp_GetCustomersWorkShopsSummary @month='". $month ."', @year='". $year ."', @workshopplace='". $workshopplace ."'")->getResult();
        return $data;
    }
    public function getCustomerReport($customer,$month,$year,$workshopplace)
    {

        $data = $this->db->query("Sp_GetCustomerReport @customer='". $customer ."', @month='". $month ."', @year='". $year ."', @workshopplace='". $workshopplace ."'")->getResult();
        return $data;
    }

    public function getCustomerReportTotal($customer,$month,$year,$workshopplace)
    {
        $data = $this->db->query("Sp_GetCustomerReportTotal @customer='". $customer ."', @month='". $month ."', @year='". $year ."', @workshopplace='". $workshopplace ."'")->getResult();
        return $data;
    }

    public function getTotal2($month,$year,$workshopplace)
    {

        $data = $this->db->query("Jc_Sp_GetTotal2 @month='". $month ."', @year='". $year ."', @workshopplace='". $workshopplace ."'")->getResult();
        return $data;
    }

    public function getItemsName($month,$year)
    {

        $data = $this->db->query("Jc_Sp_GetItemsName @month='". $month ."', @year='". $year ."'")->getResult();
        return $data;
    }
    // Here is the connection With Another Database ....

    // stored procedurs of inventory database
    public function getCarNo()
    {
        $db2=db_connect('inventorydb');
        $data = $db2->query("In_Sp_GetCarNo")->getResult();
        return $data;
    }
    // get Car Type ....
    public function getCarTypeIn()
    {
        $db2=db_connect('inventorydb');
        $data = $db2->query("Sp_GetCarType")->getResult();
        return $data;
    }
     // get Model Name ....
     public function getCarName()
     {
         $db2=db_connect('inventorydb');
         $data = $db2->query("In_Sp_GetCarName")->getResult();
         return $data;
     }
    //get Item Name.....
    public function getItemName()
    {
        $db2=db_connect('inventorydb');
        $data = $db2->query("In_Sp_GetItemName")->getResult();
        return $data;
    }
    // get PartNumber of Items....
    public function getItemPartNumber()
    {
        $db2=db_connect('inventorydb');
        $data = $db2->query("In_Sp_GetItemPartNumber")->getResult();
        return $data;
    }
    //get Car Information...
    public function getCarInformations($carno)
    {
        $db2=db_connect('inventorydb');
        $data = $db2->query("In_Sp_GetCarInformations @carno='". $carno ."'")->getResult();
        return $data;
    }
    // get PartNumber of Items by item name....
    public function GetPartNumberByItemName($ItemName)
    {
        $db2=db_connect('inventorydb');
        $data = $db2->query("In_Sp_GetPartNumberByItemName @Item='". $ItemName ."'")->getResult();
        return $data;
    }
}

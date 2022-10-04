<?php

namespace App\Models;

use CodeIgniter\Model;


class JobCardMainly_M extends Model
{
    public $table = 'tb_JobCardMainly';
    protected $primaryKey = 'Jcm_ID';
    protected $allowedFields = [
        'Jcm_JcNumber',
        'Jcm_CarNo',
        'Jcm_CarType',
        'Jcm_Company',
        'Jcm_CarColor',
        'Jcm_CarEngine',
        'Jcm_VinNo',
        'Jcm_ModelName',
        'Jcm_CarModel',
        'Jcm_Customer',
        'Jcm_DriverName',
        'Jcm_CarKM',
        'Jcm_CarWH',
        'Jcm_DateIn',
        'Jcm_TimeIn',
        'Jcm_DateOut',
        'Jcm_TimeOut',
        'Jcm_WhTotal',
        'Jcm_ItemPriceTotal',
        'Jcm_ChTotal',
        'Jcm_JcTotal',
        'Jcm_State',
        'Jcm_WorkPlace',
        'Jcm_CarOut',
        'Jcm_UserID',


    ];
    protected $useTimestamps = true;
    protected $createdField = 'Jcm_Created_at';
    protected $updatedField = 'Jcm_Updated_at';


    var $column_order = array(null, 'Jcm_JcNumber', 'Jcm_Customer', 'Jcm_CarNo', 'Jcm_CarType', 'Jcm_ModelName', 'Jcm_DateIn', 'Jcm_ItemPriceTotal', 'Jcm_ChTotal', 'Jcm_JcTotal'); //set column field database for datatable orderable
    var $order = array('Jcm_JcNumber' => 'asc'); // default order 

    function searchAndDisplay_Inactive_Today($usersdata = null, $start = 0, $length = 0, $order = null)
    {

        $builder = $this->table('tb_JobCardManily');
        $where = array('Jcm_State' => 'Inactive', 'MONTH(Jcm_Created_at)' => (date('m')), 'DAY(Jcm_Created_at)' => (date('d')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm_JcNumber', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_Customer', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarNo', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarType', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_ModelName', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_DateIn', $arr_usersdata[$x])->where($where);
            }
        } else {
            $builder = $builder->where($where);
        }

        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        if ($order) { // here order processing
            return  $builder->orderBy($this->column_order[$order['0']['column']], $order['0']['dir'])->get()->getResult();
        } else if (isset($this->order)) {
            $order = $this->order;
            return  $builder->orderBy(key($order), $order[key($order)])->get()->getResult();
        }
    }
    function searchAndDisplay_Inactive_Yesterday($usersdata = null, $start = 0, $length = 0, $order = null)
    {

        $builder = $this->table('tb_JobCardManily');
        $where = array('Jcm_State' => 'Inactive', 'MONTH(Jcm_Created_at)' => (date('m')), 'DAY(Jcm_Created_at)' => (date('d') - 1));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm_JcNumber', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_Customer', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarNo', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarType', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_ModelName', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_DateIn', $arr_usersdata[$x])->where($where);
            }
        } else {
            $builder = $builder->where($where);
        }

        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        if ($order) { // here order processing
            return  $builder->orderBy($this->column_order[$order['0']['column']], $order['0']['dir'])->get()->getResult();
        } else if (isset($this->order)) {
            $order = $this->order;
            return  $builder->orderBy(key($order), $order[key($order)])->get()->getResult();
        }
    }

    function searchAndDisplay_Active_Today($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table('tb_JobCardManily');
        $where = array('Jcm_State' => 'Active', 'MONTH(Jcm_Created_at)' => (date('m')), 'DAY(Jcm_Created_at)' => (date('d')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm_JcNumber', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_Customer', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarNo', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarType', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_ModelName', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_DateIn', $arr_usersdata[$x])->where($where);
            }
        } else {
            $builder = $builder->where($where);
        }

        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        if ($order) { // here order processing
            return  $builder->orderBy($this->column_order[$order['0']['column']], $order['0']['dir'])->get()->getResult();
        } else if (isset($this->order)) {
            $order = $this->order;
            return  $builder->orderBy(key($order), $order[key($order)])->get()->getResult();
        }
    }
    function searchAndDisplay_Active_Yesterday($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table('tb_JobCardManily');
        $where = array('Jcm_State' => 'Active', 'MONTH(Jcm_Created_at)' => (date('m')), 'DAY(Jcm_Created_at)' => (date('d') - 1));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm_JcNumber', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_Customer', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarNo', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarType', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_ModelName', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_DateIn', $arr_usersdata[$x])->where($where);
            }
        } else {
            $builder = $builder->where($where);
        }

        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        if ($order) { // here order processing
            return  $builder->orderBy($this->column_order[$order['0']['column']], $order['0']['dir'])->get()->getResult();
        } else if (isset($this->order)) {
            $order = $this->order;
            return  $builder->orderBy(key($order), $order[key($order)])->get()->getResult();
        }
    }
    //Filter This Month
    function searchAndDisplay_Active_ThisMonth($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table('tb_JobCardManily');
        $where = array('Jcm_State' => 'Active', 'MONTH(Jcm_Created_at)' => (date('m')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm_JcNumber', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_Customer', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarNo', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarType', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_ModelName', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_DateIn', $arr_usersdata[$x])->where($where);
            }
        } else {
            $builder = $builder->where($where);
        }

        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        if ($order) { // here order processing
            return  $builder->orderBy($this->column_order[$order['0']['column']], $order['0']['dir'])->get()->getResult();
        } else if (isset($this->order)) {
            $order = $this->order;
            return  $builder->orderBy(key($order), $order[key($order)])->get()->getResult();
        }
    }
    function searchAndDisplay_Inactive_ThisMonth($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table('tb_JobCardManily');
        $where = array('Jcm_State' => 'Inactive', 'MONTH(Jcm_Created_at)' => (date('m')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm_JcNumber', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_Customer', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarNo', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarType', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_ModelName', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_DateIn', $arr_usersdata[$x])->where($where);
            }
        } else {
            $builder = $builder->where($where);
        }

        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        if ($order) { // here order processing
            return  $builder->orderBy($this->column_order[$order['0']['column']], $order['0']['dir'])->get()->getResult();
        } else if (isset($this->order)) {
            $order = $this->order;
            return  $builder->orderBy(key($order), $order[key($order)])->get()->getResult();
        }
    }

    //Filter Last Month

    function searchAndDisplay_Active_LastMonth($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table('tb_JobCardManily');
        $where = array('Jcm_State' => 'Active', 'MONTH(Jcm_Created_at)' => (date('m') - 1));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm_JcNumber', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_Customer', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarNo', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarType', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_ModelName', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_DateIn', $arr_usersdata[$x])->where($where);
            }
        } else {
            $builder = $builder->where($where);
        }

        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        if ($order) { // here order processing
            return  $builder->orderBy($this->column_order[$order['0']['column']], $order['0']['dir'])->get()->getResult();
        } else if (isset($this->order)) {
            $order = $this->order;
            return  $builder->orderBy(key($order), $order[key($order)])->get()->getResult();
        }
    }
    function searchAndDisplay_Inactive_LastMonth($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table('tb_JobCardManily');
        $where = array('Jcm_State' => 'Inactive', 'MONTH(Jcm_Created_at)' => (date('m') - 1));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm_JcNumber', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_Customer', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarNo', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_CarType', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_ModelName', $arr_usersdata[$x])->where($where);
                $builder = $builder->orLike('Jcm_DateIn', $arr_usersdata[$x])->where($where);
            }
        } else {
            $builder = $builder->where($where);
        }

        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        if ($order) { // here order processing
            return  $builder->orderBy($this->column_order[$order['0']['column']], $order['0']['dir'])->get()->getResult();
        } else if (isset($this->order)) {
            $order = $this->order;
            return  $builder->orderBy(key($order), $order[key($order)])->get()->getResult();
        }
    }

    function searchAndDisplay_AllJobCard($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table('tb_JobCardManily');
        // $where = array('MONTH(Jcm_Created_at)' => (date('Y')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm_JcNumber', $arr_usersdata[$x]);
                $builder = $builder->orLike('Jcm_Customer', $arr_usersdata[$x]);
                $builder = $builder->orLike('Jcm_CarNo', $arr_usersdata[$x]);
                $builder = $builder->orLike('Jcm_CarType', $arr_usersdata[$x]);
                $builder = $builder->orLike('Jcm_ModelName', $arr_usersdata[$x]);
                $builder = $builder->orLike('Jcm_DateIn', $arr_usersdata[$x]);
            }
        } else {
            $builder = $builder;
        }

        if ($start != 0 or $length != 0) {
            $builder = $builder->limit($length, $start);
        }
        if ($order) { // here order processing
            return  $builder->orderBy($this->column_order[$order['0']['column']], $order['0']['dir'])->get()->getResult();
        } else if (isset($this->order)) {
            $order = $this->order;
            return  $builder->orderBy(key($order), $order[key($order)])->get()->getResult();
        }
    }

    // Print JobCard...
    function jobCard_Print($jobcardnumber)
    {
        $builder = $this->table('tb_JobCardSecondary')
            ->join('tb_JobCardMainly','tb_JobCardMainly.Jcm_ID = tb_JobCardSecondary.Jcm2_FK')
            ->where(['tb_JobCardMainly.Jcm_JcNumber=' => $jobcardnumber]);
        return $builder->get()->getResult();
    }

    // Artificial Intelligence....

    function ai_Test_Customers_LastMonth()
    {
        $builder = $this->table('tb_JobCardManily')
            ->select('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_Customer')
            ->groupby('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_Customer')
            ->orderby('Jcm_CarNo', 'asc')
            ->where(['MONTH(Jcm_DateIn)' => date('m') - 1]);
        return $builder->get()->getResult();
    }

    function ai_Test_Customers_ThisMonth()
    {
        $builder = $this->table('tb_JobCardManily')
            ->select('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_Customer')
            ->groupby('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_Customer')
            ->orderby('Jcm_CarNo', 'asc')
            ->where(['MONTH(Jcm_DateIn)' => date('m')]);
        return $builder->get()->getResult();
    }
    function ai_Test_Customers_Year()
    {
        $builder = $this->table('tb_JobCardManily')
            ->select('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_Customer')
            ->groupby('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_Customer')
            ->orderby('Jcm_CarNo', 'asc')
            ->where(['YEAR(Jcm_DateIn)' => date('Y')]);
        return $builder->get()->getResult();
    }
    function ai_GetJobcard($jobcardnumber)
    {

        $builder = $this->table('tb_JobCardManily')
            ->select('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_Customer')
            ->where(['Jcm_ID=' => $jobcardnumber]);

        return $builder->get()->getResult();
    }

    function ai_Test_CarType_LastMonth()
    {
        $builder = $this->table('tb_JobCardManily')
            ->select('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_CarType,Jcm_ModelName')
            ->groupby('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_CarType,Jcm_ModelName')
            ->orderby('Jcm_CarNo', 'asc')
            ->where(['MONTH(Jcm_DateIn)' => date('m') - 1]);
        return $builder->get()->getResult();
    }
    function ai_Test_CarType_ThisMonth()
    {
        $builder = $this->table('tb_JobCardManily')
            ->select('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_CarType,Jcm_ModelName')
            ->groupby('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_CarType,Jcm_ModelName')
            ->orderby('Jcm_CarNo', 'asc')
            ->where(['MONTH(Jcm_DateIn)' => date('m')]);
        return $builder->get()->getResult();
    }
    function ai_Test_CarType_Year()
    {
        $builder = $this->table('tb_JobCardManily')
            ->select('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_CarType,Jcm_ModelName')
            ->groupby('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_CarType,Jcm_ModelName')
            ->orderby('Jcm_CarNo', 'asc')
            ->where(['YEAR(Jcm_DateIn)' => date('Y')]);
        return $builder->get()->getResult();
    }
    function ai_CarType_GetJobcard($jobcardnumber)
    {
        $builder = $this->table('tb_JobCardManily')
            ->select('Jcm_ID,Jcm_JcNumber,Jcm_CarNo,Jcm_CarType,Jcm_ModelName')
            ->where(['Jcm_ID=' => $jobcardnumber]);

        return $builder->get()->getResult();
    }

    //test item unit price in jobcard
    function tst_ItemPrice_ThisMonth(){
        $builder = $this->table('tb_JobCardMainly')
            ->select('Jcm2_ID, Jcm_JcNumber, Jcm_CarNo, Jcm_CarType, Jcm_ModelName, Jcm2_WorkShop, Jcm2_ItemName, Jcm2_PartNumber, Jcm2_UnitPrice')
            ->join('tb_JobCardSecondary', 'tb_JobCardMainly.Jcm_ID = tb_JobCardSecondary.Jcm2_FK')
            ->groupby('Jcm2_ID, Jcm_JcNumber, Jcm_CarNo, Jcm_CarType, Jcm_ModelName, Jcm2_WorkShop, Jcm2_ItemName, Jcm2_PartNumber, Jcm2_UnitPrice')
            ->orderby('Jcm2_ItemName', 'asc')
            ->where(['MONTH(Jcm_DateIn)' => date('m')])
            ->where('Jcm2_ItemName <>',  '');
        return $builder->get()->getResult();
    }

    function tst_ItemPrice_LastMonth(){
        $builder = $this->table('tb_JobCardMainly')
            ->select('Jcm2_ID, Jcm_JcNumber, Jcm_CarNo, Jcm_CarType, Jcm_ModelName, Jcm2_WorkShop, Jcm2_ItemName, Jcm2_PartNumber, Jcm2_UnitPrice')
            ->join('tb_JobCardSecondary', 'tb_JobCardMainly.Jcm_ID = tb_JobCardSecondary.Jcm2_FK')
            ->groupby('Jcm2_ID, Jcm_JcNumber, Jcm_CarNo, Jcm_CarType, Jcm_ModelName, Jcm2_WorkShop, Jcm2_ItemName, Jcm2_PartNumber, Jcm2_UnitPrice')
            ->orderby('Jcm2_ItemName', 'asc')
            ->where(['MONTH(Jcm_DateIn)' => date('m')-1])
            ->where('Jcm2_ItemName <>',  '');
        return $builder->get()->getResult();
    }

    function tst_ItemPrice_ThisYear(){
        $builder = $this->table('tb_JobCardMainly')
            ->select('Jcm2_ID, Jcm_JcNumber, Jcm_CarNo, Jcm_CarType, Jcm_ModelName, Jcm2_WorkShop, Jcm2_ItemName, Jcm2_PartNumber, Jcm2_UnitPrice')
            ->join('tb_JobCardSecondary', 'tb_JobCardMainly.Jcm_ID = tb_JobCardSecondary.Jcm2_FK')
            ->groupby('Jcm2_ID, Jcm_JcNumber, Jcm_CarNo, Jcm_CarType, Jcm_ModelName, Jcm2_WorkShop, Jcm2_ItemName, Jcm2_PartNumber, Jcm2_UnitPrice')
            ->orderby('Jcm2_ItemName', 'asc')
            ->where(['YEAR(Jcm_DateIn)' => date('Y')])
            ->where('Jcm2_ItemName <>',  '');
        return $builder->get()->getResult();
    }

   




   


}

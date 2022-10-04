<?php

namespace App\Models;

use CodeIgniter\Model;


class OrderOne_M extends Model
{
    public $table = 'tb_OrderOne';
    protected $primaryKey = 'Or_ID';
    protected $allowedFields = [
        'Or_JcNumber',
        'Or_CarNo',
        'Or_CarType',
        'Or_Customer',
        'Or_DateOut',
        'Or_PackingDate',
        'Or_Engineer_S',
        'Or_StockKeeper_S',
        'Or_Supervisor_S',
        'Or_State',
        'Or_WorkPlace',
        'Or_Total',
        'Or_Finish',
        'Or_AddToJc',
        'Or_Notes',
        'Or_UserID',
        'Or_UserID2',


    ];
    protected $useTimestamps = true;
    protected $createdField = 'Or_Created_at';
    protected $updatedField = 'Or_Updated_at';


    var $column_order = array(null, 'Or_JcNumber', 'Or_CarNo', 'Or_CarType', 'Or_Customer'); //set column field database for datatable orderable
    var $order = array('Or_ID' => 'asc'); // default order 

    function searchAndDisplay_Inactive_Today($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_State' => 'Inactive','Or_WorkPlace'=>$workplace,'Or_Finish'=>'False','MONTH(Or_Created_at)' => (date('m')),'DAY(Or_Created_at)'=>(date('d')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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

    function searchAndDisplay_Active_Today($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_State' => 'Active','Or_WorkPlace'=>$workplace,'Or_Finish'=>'False','MONTH(Or_Created_at)' => (date('m')),'DAY(Or_Created_at)'=>(date('d')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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

    function searchAndDisplay_Inactive_Yesterday($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_State' => 'Inactive','Or_WorkPlace'=>$workplace,'Or_Finish'=>'False','MONTH(Or_Created_at)' => (date('m')),'DAY(Or_Created_at)'=>(date('d')-1));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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

    function searchAndDisplay_Active_Yesterday($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_State' => 'Active','Or_WorkPlace'=>$workplace,'Or_Finish'=>'False','MONTH(Or_Created_at)' => (date('m')),'DAY(Or_Created_at)'=>(date('d')-1));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where(['Or_State' => 'Active'])->where($array);
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

    function searchAndDisplay_Inactive_Month($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_State' => 'Inactive','Or_WorkPlace'=>$workplace,'Or_Finish'=>'False','MONTH(Or_Created_at)' => (date('m')));
       
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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

    function searchAndDisplay_Active_Month($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_State' => 'Active','Or_WorkPlace'=>$workplace,'Or_Finish'=>'False','MONTH(Or_Created_at)' => (date('m')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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

    function searchAndDisplay_Inactive_LastMonth($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_State' => 'Inactive','Or_WorkPlace'=>$workplace,'Or_Finish'=>'False','MONTH(Or_Created_at)' => (date('m')-1));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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

    function searchAndDisplay_Active_LastMonth($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_State' => 'Active','Or_WorkPlace'=>$workplace,'Or_Finish'=>'False','MONTH(Or_Created_at)' => (date('m')-1));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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



    function searchAndDisplay_Order_JcNumber($usersdata = null, $start = 0, $length = 0, $order = null, $jcnumber = null)
    {

        $builder = $this->table('tb_OrderOne');
        $builder = $builder->where(['Or_JcNumber' => $jcnumber]);

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

    function searchAndDisplay_Finish_Today($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_WorkPlace'=>$workplace,'Or_Finish'=>'True','MONTH(Or_Created_at)' => (date('m')),'DAY(Or_Created_at)'=>(date('d')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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
    function searchAndDisplay_Finish_Yesterday($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_WorkPlace'=>$workplace,'Or_Finish'=>'True','MONTH(Or_Created_at)' => (date('m')),'DAY(Or_Created_at)'=>(date('d')-1));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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
    function searchAndDisplay_Finish_Month($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_Finish'=>'True','Or_WorkPlace'=>$workplace,'MONTH(Or_Created_at)' => (date('m')));
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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
    function searchAndDisplay_Finish_LastMonth($usersdata = null, $start = 0, $length = 0, $order = null,$workplace=null)
    {

        $builder = $this->table('tb_OrderOne');
        $array = array('Or_WorkPlace'=>$workplace,'Or_Finish'=>'True','MONTH(Or_Created_at)' => (date('m')-1),);
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or_JcNumber', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_Customer', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarNo', $arr_usersdata[$x])->where($array);
                $builder = $builder->orLike('Or_CarType', $arr_usersdata[$x])->where($array);
            }
        } else {
            $builder = $builder->where($array);
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


    // get Order and Items
    function getOrder($orderid)
    {
        $builder = $this->table('tb_OrderOne');
        $builder = $builder->where(['Or_ID' => $orderid]);
        $builder = $builder->join('tb_OrderTwo', 'tb_OrderTwo.Or2_FK=tb_OrderOne.Or_ID');
        return $builder->get()->getResult();
    }
}

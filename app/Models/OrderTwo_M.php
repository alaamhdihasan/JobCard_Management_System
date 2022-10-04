<?php

namespace App\Models;

use CodeIgniter\Model;


class OrderTwo_M extends Model
{
    public $table = 'tb_OrderTwo';
    protected $primaryKey = 'Or2_ID';
    protected $allowedFields = [
        'Or2_FK',
        'Or2_ItemName',
        'Or2_PartNumber',
        'Or2_Company',
        'Or2_Brand',
        'Or2_ItemState',
        'Or2_Unit',
        'Or2_Quantity',
        'Or2_UnitPrice',
        'Or2_MoneyTotal',
        'Or2_Notes',
        'Or2_UserID',
        'Or2_UserID2',


    ];
    protected $useTimestamps = true;
    protected $createdField = 'Or2_Created_at';
    protected $updatedField = 'Or2_Updated_at';


    var $column_order = array(null, 'Or2_ItemName', 'Or2_PartNumber', 'Or2_Company', 'Or2_Brand'); //set column field database for datatable orderable
    var $order = array('Or2_ID' => 'asc'); // default order 

    function searchAndDisplay($usersdata = null, $start = 0, $length = 0, $order = null, $getidorder = null)
    {

        $builder = $this->table('tb_OrderTwo');
        // $builder = $builder;

        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);

            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Or2_ItemName', $arr_usersdata[$x])->where(['Or2_FK' => $getidorder]);
                $builder = $builder->orLike('Or2_PartNumber', $arr_usersdata[$x])->where(['Or2_FK' => $getidorder]);
                $builder = $builder->orLike('Or2_Company', $arr_usersdata[$x])->where(['Or2_FK' => $getidorder]);
                $builder = $builder->orLike('Or2_Brand', $arr_usersdata[$x])->where(['Or2_FK' => $getidorder]);
            }
        }
        else{
            $builder=$builder->where(['Or2_FK'=>$getidorder]);
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
}

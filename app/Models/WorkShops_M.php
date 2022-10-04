<?php

namespace App\Models;

use CodeIgniter\Model;


class WorkShops_M extends Model
{
    protected $table = 'tb_WorkShop';
    protected $primaryKey = 'Ws_ID';
    protected $allowedFields = [
        'Ws_Name',
        'Ws_State',
        'Ws_UserID',


    ];
    protected $useTimestamps = true;
    protected $createdField = 'Ws_Created_at';
    protected $updatedField = 'Ws_Updated_at';


    var $column_order = array(null, 'Ws_Name','Ws_State'); //set column field database for datatable orderable
    var $order = array('Ws_ID' => 'asc'); // default order 

    function searchAndDisplay($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table("tb_WorkShop");
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);
            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Ws_Name', $arr_usersdata[$x]);
                $builder = $builder->orLike('Ws_State', $arr_usersdata[$x]);
            }
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

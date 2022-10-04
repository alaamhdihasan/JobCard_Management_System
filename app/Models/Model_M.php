<?php

namespace App\Models;

use CodeIgniter\Model;


class Model_M extends Model
{
    protected $table = 'tb_Model';
    protected $primaryKey = 'Mo_ID';
    protected $allowedFields = [
        'Mo_Name',
        'Mo_UserID',


    ];
    protected $useTimestamps = true;
    protected $createdField = 'Mo_Created_at';
    protected $updatedField = 'Mo_Updated_at';


    var $column_order = array(null, 'Mo_Name'); //set column field database for datatable orderable
    var $order = array('Mo_ID' => 'asc'); // default order 

    function searchAndDisplay($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table("tb_Model");
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);
            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Mo_Name', $arr_usersdata[$x]);
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

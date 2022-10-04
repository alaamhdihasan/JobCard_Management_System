<?php

namespace App\Models;

use CodeIgniter\Model;


class Customers_M extends Model
{
    protected $table = 'tb_Customers';
    protected $primaryKey = 'Cu_ID';
    protected $allowedFields = [
        'Cu_Name',
        'Cu_Account',
        'Cu_State',
        'Cu_GroupSales',
        'Cu_Company',
        'Cu_Address',
        'Cu_City',
        'Cu_Country',
        'Cu_Email',
        'Cu_Mobile',
        'Cu_Phone',
        'Cu_UserID',


    ];
    protected $useTimestamps = true;
    protected $createdField = 'Cu_Created_at';
    protected $updatedField = 'Cu_Updated_at';


    var $column_order = array(null, 'Cu_Name', 'Cu_Account', 'Cu_State', 'Cu_GroupSales', 'Cu_Company', 'City'); //set column field database for datatable orderable
    var $order = array('Cu_ID' => 'asc'); // default order 

    function searchAndDisplay($usersdata = null, $start = 0, $length = 0, $order = null)
    {
        $builder = $this->table("tb_Customers");
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);
            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Cu_Name', $arr_usersdata[$x]);
                $builder = $builder->orLike('Cu_State', $arr_usersdata[$x]);
                $builder = $builder->orLike('Cu_Account', $arr_usersdata[$x]);
                $builder = $builder->orLike('Cu_GroupSales', $arr_usersdata[$x]);
                $builder = $builder->orLike('Cu_Company', $arr_usersdata[$x]);
                $builder = $builder->orLike('Cu_City', $arr_usersdata[$x]);
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

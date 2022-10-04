<?php

namespace App\Models;

use CodeIgniter\Model;


class Jcs_M extends Model
{
    protected $table = 'tb_JobCardSecondary';
    protected $primaryKey = 'Jcm2_ID';
    protected $allowedFields = [
        'Jcm2_FK',
        'Jcm2_WorkShop',
        'Jcm2_Date',
        'Jcm2_ItemName',
        'Jcm2_PartNumber',
        'Jcm2_Unit',
        'Jcm2_Quantity',
        'Jcm2_UnitPrice',
        'Jcm2_MoneyTotal',
        'Jcm2_WH',
        'Jcm2_CH',
        'Jcm2_Jc2Total',
        'Jcm2_Side',
        'Jcm2_Number',
        'Jcm2_Brand',
        'Jcm2_Company',
        'Jcm2_Condition',
        'Jcm2_Description',
        'Jcm2_Worker',
        'Jcm2_Notes',
        'Jcm2_UserID',


    ];
    protected $useTimestamps = true;
    protected $createdField = 'Jcm2_Created_at';
    protected $updatedField = 'Jcm2_Updated_at';


    var $column_order = array(null, 'Jcm2_WorkShop', 'Jcm2_ItemName','Jcm2_PartNumber','Jcm2_Unit','Jcm2_Quantity','Jcm2_UnitPrice','Jcm2_MoneyTotal','Jcm2_CH','Jcm2_Jc2Total'); //set column field database for datatable orderable
    var $order = array('Jcm2_ID' => 'asc'); // default order 

    function searchAndDisplay($usersdata = null, $start = 0, $length = 0, $order = null,$jobcardnumber=null)
    {
        $builder = $this->table("tb_JobCardSecondary");
       
        if ($usersdata) {
            $arr_usersdata = explode(" ", $usersdata);
            for ($x = 0; $x < count($arr_usersdata); $x++) {
                $builder = $builder->orLike('Jcm2_WorkShop', $arr_usersdata[$x])->where(['Jcm2_FK'=>$jobcardnumber]);
                $builder = $builder->orLike('Jcm2_ItemName', $arr_usersdata[$x])->where(['Jcm2_FK'=>$jobcardnumber]);
                $builder = $builder->orLike('Jcm2_PartNumber', $arr_usersdata[$x])->where(['Jcm2_FK'=>$jobcardnumber]);

            }
        }
        else{
            $builder = $builder->where(['Jcm2_FK'=>$jobcardnumber]);
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

    //test item unit price in jobcard
    //get data from item in jobcard to edit it price 
    function ai_ItemPrice_GetItemData($Jcs2_Id)
    {
        $builder = $this->table('tb_JobCardSecondary')
            ->select('Jcm2_ID, Jcm2_ItemName, Jcm2_PartNumber, Jcm2_UnitPrice')
            ->where(['Jcm2_ID' => $Jcs2_Id]);

        return $builder->get()->getResult();
    }
  
}

<?php namespace App\Models;

use CodeIgniter\Model;



class UserProfile_M extends Model
{
    protected $table='tb_Permissions';
    protected $primaryKey ='P_ID';
    protected $allowedFields=[
        'P_FK',
        'P_Create',
        'P_Update',
        'P_Delete',
        'P_Dashboard',
        'P_Users',
        'P_JobCard',
        'P_Orders',
        'P_Reports',
        'P_State',
        'P_Brand',
        'P_Color',
        'P_Permission',
        'P_CarType',
        'P_Company',
        'P_Kind',
        'P_Model',
        'P_Side',
        'P_Unit',
        'P_Specialization',
        'P_City',
        'P_WorkShops',
        'P_WorkShopPlace',
        'P_Workers',
        'P_Currency',
        'P_SalingGroup',
        'P_Accounts',
        'P_Customers',
        'P_UserID',


    ];
    protected $useTimestamps = true;
    protected $createdField = 'P_Created_at';
    protected $updatedField = 'P_Updated_at';

    

}

?>